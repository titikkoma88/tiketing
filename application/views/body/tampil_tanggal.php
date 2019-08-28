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
					<a href="" style="text-decoration:none">Tampilkan Laporan Berdasarkan Tanggal</a>
				</div>
				<div class="panel-body">

					<div class="col-md-6">
						<form method="get" action="">
	
							<div class="form-group">
								<label>Dari Tanggal :</label>
								<input type="date" class="form_control" name="awal" required>
								<label>Sampai Tanggal :</label>
								<input type="date" class="form_control" name="akhir" required><br>
							</div>
							<div>
								<input type="radio" name="jns" value="create" checked>Tanggal Create<br/>
								<input type="radio" name="jns" value="proses">Tanggal Proses<br/>
								<input type="radio" name="jns" value="solved">Tanggal Solved<br/><br/><br/>  
							</div>
							<button type="submit" class="btn btn-primary">Tampilkan data</button><br/><br/><br/>
				     	</form>
				    </div>

				    <?php 
				    if ($jenis = $this->input->get('jns')) {
					   $awal = $this->input->get('awal');
					   $akhir = $this->input->get('akhir');
					   if ($awal && $akhir) {
					   	echo '<table style="margin-top:20px" data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
							    <tr>
							        <th data-field="no" data-sortable="true" width="10px"> No</th>
							        <th data-field="idd3" data-sortable="true">Nama User</th>
							        <th data-field="iddds" data-sortable="true">Jumlah Tiket</th>
							    </tr>
	                            </thead><tbody>';
	                    $no = 1;
	                    foreach ($this->model_app->getjumlahtiketuser($jenis, $awal, $akhir) as $row) {
	                    	echo '<tr>';
	                    	echo '<td>'.$no.'</td>';
	                    	echo '<td>'.$row->nama.'</td>';
	                    	echo '<td>'.$row->jumlah.'</td>';
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

