<script language="javascript" type="text/javascript"> 
	$(document).ready(function() {
		$("#id_kategori").change(function(){
	 		// Put an animated GIF image insight of content
			var data = {id_kategori:$("#id_kategori").val()};
			$.ajax({
					type: "POST",
					url : "<?php echo base_url().'select/select_sub_kategori'?>",				
					data: data,
					success: function(msg){
						$('#div-order').html(msg);
					}
			});
		});   

	});

	$(function() {
	  $('input[name="daterange"]').daterangepicker({
	    opens: 'left'
	  }, function(start, end, label) {
	    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	  });
	});

</script>			

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
				<a href="" style="text-decoration:none">Tampilkan Laporan Ticket </a>
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
						<div>
								<label>Kategori Masalah</label>
								<?php echo form_dropdown('id_kategori',$dd_kategori, $id_kategori, ' id="id_kategori" required class="form-control"');?>
					    </div>

					    <!--
					    <div class="form-group">
			                <label>Date range:</label>

			                <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
			             </div>
			             -->

					    <div id="div-order"></div>

					    <div class="form-group">
							<label>Progress</label>
							<?php echo form_dropdown('id_status_tkt',$dd_status_tkt, $id_status_tkt, ' id="id_status_tkt" required class="form-control"');?>
						</div>
							<button type="submit" class="btn btn-primary">Tampilkan data</button><br/><br/><br/>
				    </form>
				</div>
				    <div style="clear: both;"></div>
				    <div>
				    	<?php 
				 		if ($status = $this->input->get('id_status_tkt')) 
				 		{
					   		$awal = $this->input->get('awal');
					   		$akhir = $this->input->get('akhir');
					   		$sub_kategori = $this->input->get('id_sub_kategori');
					   		$app = trim($this->session->userdata('app'));
					   		$tglAwal = date("j F Y", strtotime($awal));
        			   		$tglAkhir = date("j F Y", strtotime($akhir)); 

					   		if ($awal && $akhir) 
					   		{
					   			echo "<h3> <b> <center>
							  			$tglAwal  s/d  $tglAkhir	
										</center> </b> </h3>";
								echo '<a href="../report_ticket/pdfticket/'.$status.'/'.$sub_kategori.'/'.$awal.'/'.$akhir.'" class="btn btn-danger" target="_blank">Cetak Pdf</a>';
					   			echo '<table style="margin-top:20px" data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">	    
							 	<thead> 
							  	<tr>
									<th data-field="no" data-sortable="true" width="10px"> No</th>
							        <th data-field="idd3" data-sortable="true">Id Ticket</th>
							        <th data-field="iddds" data-sortable="true">Reported</th>
							        <th data-field="iddd" data-sortable="true">Tanggal</th>
							        <th data-field="iddddd" data-sortable="true">Nama Sub Kategori</th>
							        <th data-field="idxddddd" data-sortable="true">Problem Summary</th>
							        <th data-field="idddddd" data-sortable="true">Status</th>
							        <th data-field="iddfdddd" data-sortable="true">Feedback</th>
							    </tr>
	                            </thead><tbody>';
	                     
	                    		$no = 1;
	                    		foreach ($this->model_app->getjumlahtiketprogress($status, $sub_kategori, $awal, $akhir, $app) as $row) 
	                    		{
	                    	
	                    			echo '<tr>';
	                    			echo '<td>'.$no.'</td>';
	                    			echo '<td><a href="../list_ticket_user/ticket_view/'.$row->id_ticket.'">'.$row->id_ticket.'</a></td>';
	                    			echo '<td>'.$row->nama.'</td>';
	                    			echo '<td>'.$row->tanggal.'</td>';
	                    			echo '<td>'.$row->nama_sub_kategori.'</td>';
	                    			echo '<td>'.$row->problem_summary.'</td>';
	                    	 		
	                    	 		if($row->status==1) { echo "<td> TICKET CREATED </td>";}
	                    	 		else if($row->status==2) { echo "<td> APPROVAL INTERNAL </td>";}
						     		else if($row->status==3) { echo "<td> MENUNGGU APPROVAL VENDOR </td>";}
						     		else if($row->status==4) { echo "<td> PROSES VENDOR </td>";}
						     		else if($row->status==5) { echo "<td> PENDING VENDOR </td>";}
						     		else if($row->status==6) { echo "<td> SOLVED </td>";}

						    		if($row->status==6) { echo "<td> TICKETING COMPLETED </td>";}
						    		else if($row->status==4 AND $row->progress==100 ) { echo "<td> MENUNGGU PROGRESS DARI VENDOR </td>";}
									else if($row->status==4 AND $row->progress==0 ) { echo "<td> MENUNGGU PROGRESS DARI VENDOR </td>";}
									else if($row->status==5) { echo "<td> MENUNGGU STATUS SOLVED DARI USER </td>";}
									else {	echo "<td> MENUNGGU STATUS SOLVED DARI VENDOR </td>";}

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
	</div>
</div><!--/.row-->	

