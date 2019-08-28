<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
<div class="divider">
		<form role="search">
			<div class="form-group">
				
				<div style="position:absolute;left:15px;">
					<i class="glyphicon glyphicon-user" style="font-size:50px"></i>
				</div>
				<div align="center">
					<?php echo $this->session->userdata('level');?>
				</div>
				<div align="center">		
					<?php 
					$app = trim($this->session->userdata('app'));

					if($app=='ast_desktop'){
      
            			$namaapp = 'AST DESKTOP';
            			
            			echo $namaapp;
        				}
        			else if($app=='ast_web'){

            			$namaapp = 'AST WEB';
        				
        				echo $namaapp;
        				}
        			else {
            			$app = ' ';
        				}
					?>
				</div>
				<div align="center"><font face="verdana" color="#8ef200">Online</font></div>
				<div align="center">
					<a href="<?php echo base_url();?>profile/view">
					<h4><?php echo $this->session->userdata('nama');?></h4>
					</a>
				</div>

			</div>
		</form>
</div>


<ul class="nav menu">

<?php if($this->session->userdata('level')=="ADMIN")
{?>

	<li<?php echo uri_string() == 'home' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>home">
	<svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>

	<li<?php echo uri_string() == 'user/user_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>user/user_list">
	<svg class="glyph stroked monitor"><use xlink:href="#stroked-monitor"/></svg> User</a></li>

	<li<?php echo uri_string() == 'aplikasi/aplikasi_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>aplikasi/aplikasi_list">
	<svg class="glyph stroked folder"><use xlink:href="#stroked-folder"/></svg> Aplikasi</a></li>

	<li<?php echo uri_string() == 'user_app/user_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>user_app/user_list">
	<svg class="glyph stroked monitor"><use xlink:href="#stroked-monitor"/></svg> User Aplikasi</a></li>
	<!--
	<li<?php echo uri_string() == 'user_akses/user_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>user_akses/user_list">
	<svg class="glyph stroked monitor"><use xlink:href="#stroked-monitor"/></svg> User Akses</a></li>
	-->
	<li<?php echo uri_string() == 'kategori/kategori_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>kategori/kategori_list">
	<svg class="glyph stroked folder"><use xlink:href="#stroked-folder"/></svg> Kategori</a></li>

	<li<?php echo uri_string() == 'sub_kategori/sub_kategori_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>sub_kategori/sub_kategori_list">
	<svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg> Sub Kategori</a></li>

	<!--
	<li<?php echo uri_string() == 'list_ticket/ticket_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>list_ticket/ticket_list">
	<svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> List Ticket </a></li>

	<li class="parent">
		<a data-toggle="collapse" href="#sub-item-1">
			<svg class="glyph stroked calendar"><use xlink:href="#stroked-hourglass"></use></svg>
			<em class="fa fa-navicon">&nbsp;</em> Pencarian <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
		</a>
		<ul class="children collapse" id="sub-item-1">
			<li>
				<a class="" href="<?php echo base_url();?>report/ticket_list">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Laporan Ticket
				</a>
			</li>
			<li>
				<a class="" href="<?php echo base_url();?>report/user">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan User
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/ticket">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Ticket
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/email_status">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Kategori Ticket
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/email_status">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Email Terkirim
				</a>
			</li>
			
		</ul>
	</li>
	-->

	<li<?php echo uri_string() == 'informasi/informasi_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>informasi/informasi_list">
	<svg class="glyph stroked empty message"><use xlink:href="#stroked-empty-message"/></svg> Informasi</a></li>

	<li<?php echo uri_string() == 'informasi_view' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>informasi_view">
	<svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> News</a></li>


<?php } else if($this->session->userdata('level')=="VENDOR"){?>

	<li<?php echo uri_string() == 'home' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>home">
	<svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>

	<li<?php echo uri_string() == 'approval/approval_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>approval/approval_list">
	<svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"/></svg> Approval Ticket (<?php if(empty($notif_approval)) { echo "0"; }else{ echo $notif_approval;} ?>)</a></li>

	<li<?php echo uri_string() == 'myassignment/myassignment_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>myassignment/myassignment_list">
	<svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> Assigment Ticket (<?php if(empty($notif_assignment)) { echo "0"; }else{ echo $notif_assignment;} ?>)</a></li>

	<li<?php echo uri_string() == 'list_ticket/ticket_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>list_ticket/ticket_list">
	<svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> List Ticket </a></li>

	<li<?php echo uri_string() == 'informasi_view' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>informasi_view">
	<svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> News</a></li>
	

<?php } else if($this->session->userdata('level')=="USER"){?>

	<li<?php echo uri_string() == 'home' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>home">
	<svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>

	<li<?php echo uri_string() == 'ticket/add' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>ticket/add">
	<svg class="glyph stroked calendar blank"><use xlink:href="#stroked-calendar-blank"/></svg> New Ticket</a></li>

	<li<?php echo uri_string() == 'myticket/myticket_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>myticket/myticket_list">
	<svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> My Ticket (<?php if(empty($notif_myticket)) { echo "0"; }else{ echo $notif_myticket;} ?>)</a></li>

	<li<?php echo uri_string() == 'list_ticket_user/ticket_list_user' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>list_ticket_user/ticket_list_user">
	<svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> List Ticket</a></li>

	<li class="parent">
		<a data-toggle="collapse" href="#sub-item-1">
			<svg class="glyph stroked calendar"><use xlink:href="#stroked-hourglass"></use></svg>
			<em class="fa fa-navicon">&nbsp;</em> Laporan <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
		</a>
		<ul class="children collapse" id="sub-item-1">
			<li>
				<a class="" href="<?php echo base_url();?>report/ticket_list">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Laporan Ticket
				</a>
			</li>
			<!--
			<li>
				<a class="" href="<?php echo base_url();?>report/user">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan User
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/ticket">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Ticket
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/kategori">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Kategori Ticket
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/email_status">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Email Terkirim
				</a>
			</li>
			-->
		</ul>
	</li>

	<li<?php echo uri_string() == 'informasi_view' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>informasi_view">
	<svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> News</a></li>


<?php } else if($this->session->userdata('level')=="SUPERVISOR"){?>


	<li<?php echo uri_string() == 'home' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>home">
	<svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
	
	<!--
	<li<?php echo uri_string() == 'ticket/add' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>ticket/add">
	<svg class="glyph stroked calendar blank"><use xlink:href="#stroked-calendar-blank"/></svg> New Ticket</a></li>
	-->

	<li<?php echo uri_string() == 'myticket/myticket_list_spv' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>myticket/myticket_list_spv">
	<svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Progress Ticket </a></li>

	<li<?php echo uri_string() == 'list_ticket/ticket_list' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>list_ticket/ticket_list">
	<svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> List Ticket</a></li>

	<li class="parent">
		<a data-toggle="collapse" href="#sub-item-1">
			<svg class="glyph stroked calendar"><use xlink:href="#stroked-hourglass"></use></svg>
			<em class="fa fa-navicon">&nbsp;</em> Laporan <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
		</a>
		<ul class="children collapse" id="sub-item-1">
			<li>
				<a class="" href="<?php echo base_url();?>report/ticket_list">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Laporan Ticket
				</a>
			</li>
			<!--
			<li>
				<a class="" href="<?php echo base_url();?>report/user">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan User
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/ticket">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Ticket
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/kategori">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Kategori Ticket
				</a>
			</li>
			<li>
				<a class=""  href="<?php echo base_url();?>report/email_status">
					<span class="glyphicon glyphicon-folder-open">&nbsp;</span> Berdasarkan Email Terkirim
				</a>
			</li>
			-->
		</ul>
	</li>

	<li<?php echo uri_string() == 'informasi_view' ? ' class="active"' : ''; ?>><a href="<?php echo base_url();?>informasi_view">
	<svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> News</a></li>

<?php }?>
</ul>

	</div><!--/.sidebar-->



