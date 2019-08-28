		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard </li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">

			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-gold panel-widget ">
					<div class="row no-padding">
					<a href="<?php echo base_url();?>list_ticket_user/ticket_list_user/6/<?php echo $app;?>">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $ticket_solved;?></div>
							<div class="text-muted">Solved</div>
						</div>
					</a>
					</div>
				</div>
			</div>			
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
					<a href="<?php echo base_url();?>list_ticket_user/ticket_list_user/4/<?php echo $app;?>">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked clock"><use xlink:href="#stroked-clock"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $ticket_process;?></div>
							<div class="text-muted">Process</div>
						</div>
					</a>
					</div>
				</div>
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
					<a href="<?php echo base_url();?>list_ticket_user/ticket_list_user/3/<?php echo $app;?>">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked clock"><use xlink:href="#stroked-clock"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $ticket_reprocess;?></div>
							<div class="text-muted">Reprocess</div>
						</div>
					</a>
					</div>
				</div>
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-darkviolet panel-widget">
					<div class="row no-padding">
					<a href="<?php echo base_url();?>list_ticket_user/ticket_list_user/1/<?php echo $app;?>">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $ticket_wait_approve;?></div>
							<div class="text-muted">Waiting Vendor Approval</div>
						</div>
					</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget">
					<div class="row no-padding">
					<a href="<?php echo base_url();?>list_ticket_user/ticket_list_user/5/<?php echo $app;?>">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $ticket_wait_solve;?></div>
							<div class="text-muted">Waiting User Accept</div>
						</div>
					</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
					<a href="<?php echo base_url();?>list_ticket_user/ticket_list_user/7/<?php echo $app;?>">
						<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $ticket_cancel;?></div>
							<div class="text-muted">Cancel</div>
						</div>
					</a>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Tickets<br>Solved</h4>
						<div class="easypiechart" id="easypiechart-gold" data-percent="<?php echo $jml_ticket_solved;?>" ><span class="percent"><?php echo round($jml_ticket_solved,2);?> %</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Tickets On<br>Process</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo $jml_ticket_process;?>" ><span class="percent"><?php echo round($jml_ticket_process,2);?> %</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Tickets On<br>Reprocess</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo $jml_ticket_reprocess;?>" ><span class="percent"><?php echo round($jml_ticket_reprocess,2);?> %</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Tickets Waiting<br>For Vendor Approval</h4>
						<div class="easypiechart" id="easypiechart-violet" data-percent="<?php echo $jml_ticket_wait_approve;?>" ><span class="percent"><?php echo round($jml_ticket_wait_approve,2);?> %</span>
						</div>
					</div>
				</div>
			</div>
			

		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Tickets Waiting<br>For User Accept</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $jml_ticket_wait_solve;?>" ><span class="percent"><?php echo round($jml_ticket_wait_solve,2);?> %</span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Tickets Cancel</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $jml_ticket_cancel;?>" ><span class="percent"><?php echo round($jml_ticket_cancel,2);?> %</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">


			<div class="col-xs-6 col-md-6">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
					<a href="<?php echo base_url();?>list_ticket_user/ticket_list_user/9/<?php echo $app;?>">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jml_ticket;?></div>
							<div class="text-muted">Total Tickets <?php echo $namaapp;?></div>
						</div>
					</a>
					</div>
				</div>

			</div>

			<div class="col-xs-6 col-md-6">
				

				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
					<a href="<?php echo base_url();?>list_ticket_user/ticket_list_user">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked desktop computer and mobile"><use xlink:href="#stroked-desktop-computer-and-mobile"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jml_ticket_all;?></div>
							<div class="text-muted">Total Tickets</div>
						</div>
					</a>
					</div>
				</div>

			</div>

			<!--/
			<div class="col-xs-6 col-md-6">
				

				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked desktop computer and mobile"><use xlink:href="#stroked-desktop-computer-and-mobile"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jml_user;?></div>
							<div class="text-muted">Total Users</div>
						</div>
					</div>
				</div>

			</div>
			-->


		</div><!--/.row-->
								
		
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->