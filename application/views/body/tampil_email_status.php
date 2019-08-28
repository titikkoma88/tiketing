<div class="row">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active">Laporan</li>
	</ol>
</div><!--/.row-->
		
<br>
						
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
				<a href="" style="text-decoration:none">Tampilkan Laporan Ticket</a>
			</div>
			<div class="panel-body">

				<div class="col-md-6">
					<form method="get" action="">
						<div class="form-group">
							<label>Dari Tanggal :</label>
							<input type="date" class="form_control" name="awal" value="<?=date('Y-m-d',  strtotime('-1 month'))?>" required>
							<label>Sampai Tanggal :</label>
							<input type="date" class="form_control" name="akhir" value="<?=date('Y-m-d')?>" required><br>
						</div>
						<div class="form-group">
							<label>Level</label>
							<?php echo form_dropdown('id_status_tkt',$dd_status_tkt, $id_status_tkt, ' id="id_status_tkt" required class="form-control"');?>
						</div>
							<button type="submit" class="btn btn-primary">Tampilkan data</button><br/><br/><br/>
				    </form>
				</div>
				    <?php 
				    if ($status = $this->input->get('id_status_tkt')) 
				    {
					   $awal = $this->input->get('awal');
					   $akhir = $this->input->get('akhir');
					   $app = trim($this->session->userdata('app'));
					   if ($awal && $akhir) 
					   {
					   		echo '<table style="margin-top:20px" data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
							    <tr>
							        <th data-field="no" data-sortable="true" width="10px"> No</th>
							        <th data-field="idd3" data-sortable="true">Kode Ticket</th>
							        <th data-field="iddds" data-sortable="true">Tanggal</th>
							        <th data-field="idd3s" data-sortable="true">Subject</th>
   							        <th data-field="idddds" data-sortable="true">Pengirim</th>
   							        <th data-field="iddddds" data-sortable="true">Tujuan Pengiriman Email</th>
							    </tr>
	                            </thead><tbody>';
	                    	$no = 1;
	                    	foreach ($this->model_app->getjumlahemail($status, $awal, $akhir, $app) as $row) 
	                    	{
	                    		echo '<tr>';
	                    		echo '<td>'.$no.'</td>';
	                    		echo '<td><a href="../list_ticket_user/ticket_view/'.$row->id_ticket.'">'.$row->id_ticket.'</a></td>';
	                    		echo '<td>'.$row->tanggal.'</td>';
	                    		echo '<td>'.$row->subject.'</td>';
	                    		echo '<td>'.$row->nama.'</td>';
	                    		echo '<td>'.$row->tujuan.'</td>';
	                    		echo '</tr>';
	                    		$no++;
	                    	}
	                    		echo '</tbody></table>';
						}
				    }
				   ?>
			</div>
		</div>
	</div>
</div><!--/.row-->	

