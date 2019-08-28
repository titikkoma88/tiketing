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
				<!--	<div>
							<input type="radio" name="jns" value="create" checked>Tanggal Create<br/>
							<input type="radio" name="jns" value="proses">Tanggal Proses<br/>
							<input type="radio" name="jns" value="solved">Tanggal Solved<br/><br/><br/>  
						</div>
				-->
							<button type="submit" class="btn btn-primary">Tampilkan data</button><br/><br/><br/>
				    </form>
				</div>
				<div style="clear: both;"></div>
				<div>
				    <?php 
				  //if ($jenis = $this->input->get('jns')) {
					   $awal = $this->input->get('awal');
					   $akhir = $this->input->get('akhir');
					   $app = trim($this->session->userdata('app'));
					   $tglAwal = date("d F Y", strtotime($awal));
        			   $tglAkhir = date("d F Y", strtotime($akhir)); 

					   if ($awal && $akhir) 
					   {

					   		echo "<h3> <b> <center>
							  	  $tglAwal  s/d  $tglAkhir	
								  </center> </b> </h3>";
					   		echo '<table style="margin-top:20px" data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">	    
							  	<thead> 
							  	<tr>
							        <th data-field="no" data-sortable="true" width="10px"> No</th>
							        <th data-field="idd3" data-sortable="true">Problem</th>
							        <th data-field="iddds" data-sortable="true">Jumlah Tiket</th>
							    </tr>
	                            </thead><tbody>';
	                    	$no = 1;
	                    	foreach ($this->model_app->getjumlahtiketkategori($awal, $akhir, $app) as $row) 
	                    	{
	                    		echo '<tr>';
	                    		echo '<td>'.$no.'</td>';
	                    		echo '<td>'.$row->nama_sub_kategori.'</td>';
	                    		echo '<td>
	                    				<a href="../report_ticket/report_kategori/'.$row->id_sub_kategori.'/'.$awal.'/'.$akhir.'">'.$row->jumlah.'</a>
	                    			  </td>';
	                    		echo '</tr>';
	                    	$no++;
	                    	}
	                    	echo '</tbody></table>';
						}
				  //} 
					?>
				</div>
			</div>
		</div>
	</div>
</div><!--/.row-->	

