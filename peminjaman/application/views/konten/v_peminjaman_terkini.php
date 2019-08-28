<script>
	function select_data($id_pinjam,$id_barang) {
		$("#id_pinjam").val($id_pinjam);
		$("#id_barang").val($id_barang);
	}

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#example3').DataTable()
    $('#example4').DataTable()
  })
</script>

<section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Proses</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
</section>

	<?php
    	$data = $this->session->flashdata('sukses');
    	if ($data!="") { ?>
    		<div class="alert alert-success" role="alert"><strong>Sukses !!</strong>
    			<?php echo $data; ?>
    			<button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
    			<span aria-hidden="true"></span>
    		</div>
    	<?php }
    ?>

<div><br></div>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading" style="border-top: 3px solid #4ABDAC;"><h4>Di Pesan</h4></div>
				<div class="panel-body">

					<table id="example1" class="table table-bordered table-striped">

		                <thead>
		                  <tr>
		                    <th>No</th>
		                    <th>Nama Peminjam</th>
		                    <th>Nama Barang</th>
		                    <th>Opsi</th>
		                  </tr>
		                </thead>

		                <tbody>
		                  <?php $no=1;
		                    foreach ($datapesan->result() as $rows) { ?>
		                      <tr>
		                        <td><?= $no++ ?></td>
		                        <td><?= $rows->nama ?></td>
		                        <td><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></td>
		                        <?php if($rows->status=='0'){ ?>
		                        <td>
									<a class="btn btn-info white-blue" href="<?php echo site_url()?>peminjaman/pinjamkan/<?php echo $rows->id_pinjam; ?>">Pinjamkan Barang
									</a>
								</td>
		                        <?php }elseif($rows->status=='1'){ ?>
		                        <td>
		                            Barang Sedang Dipinjam            
		                        </td>
		                        <?php }elseif($rows->status=='2'){ ?>
		                        <td>
		                            Barang Sudah Kembali
		                        </td>
		                        <?php } ?>
		                      </tr>
		                    <?php }
		                  ?>
		                </tbody>

		             </table>

				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading" style="border-top: 3px solid #4ABDAC;"><h4>Di Pinjam</h4></div>
				<div class="panel-body">
						
					<table id="example3" class="table table-bordered table-striped">

		                <thead>
		                  <tr>
		                    <th>No</th>
		                    <th>Nama Peminjam</th>
		                    <th>Nama Barang</th>
		                    <th>Tanggal Pinjam</th>
		                    <th>Opsi</th>
		                  </tr>
		                </thead>

		                <tbody>
		                  <?php $no=1;
		                    foreach ($datapinjam->result() as $rows) { ?>
		                      <tr>
		                        <td><?= $no++ ?></td>
		                        <td><?= $rows->nama ?></td>
		                        <td><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></td>
		                        <td><?= $rows->tgl_pinjam ?></td>
		                        <?php if($rows->status=='0'){ ?>
		                        <td>
									Pinjam Barang
								</td>
		                        <?php }elseif($rows->status=='1'){ ?>
		                        <td>
		                            <!-- Trigger the modal with a button -->
		                            <a class="btn btn-warning white-orange" style="cursor: pointer;" onclick="select_data(
		                            '<?= $rows->id_pinjam ?>',
		                            '<?= $rows->id_barang ?>'
		                            )" data-toggle="modal" data-target="#myModal" href="">
		    					  		Selesai Pinjam
		    					  	</a>
										<!-- Modal -->
										<div class="modal fade" id="myModal" role="dialog">
											<div class="modal-dialog">

												<form action="<?php echo site_url('peminjaman/kondisi')?>" method="post" accept-charset="utf-8">
											    
													<!-- Modal content-->
													<div class="modal-content">
											    		<div class="modal-header">
											        		<button type="button" class="close" data-dismiss="modal">&times;</button>
											        		<h4 class="modal-title"><b>Barang Kembali Dengan Kondisi</b></h4>
											    		</div>
											    		<div class="modal-body">
											    			<div>
			                                        			<label for="">Kondisi Barang</label>
			                                        		</div>
			                                        		<div>
			                                            	<select class="form-control" name="kondisi" id="kondisi" required="">
				                                            	<option value="baik">Baik</option>
				                                            	<option value="baik">Hampir Rusak</option>
				                                            	<option value="rusak">Rusak</option>
				                                            	<option value="hilang">Hilang</option>
			                                          		</select>
			                                        		</div>
			                                        		<h4><input type="hidden" name="id_pinjam" id="id_pinjam"></h4>
			                                 
			                                        		<div>
			                                            	<select class="form-control" name="kembali" id="kembali" required="">
				                                            	<option value="1">Di kembalikan sendiri</option>
				                                            	<option value="2">Di titipkan</option>
			                                          		</select>
			                                        		</div>
			                                        		<h4><input type="hidden" name="id_barang" id="id_barang"></h4>

			                                        		<div>
			                                        			<label for="">Keterangan</label>
			                                        		</div>
			                                        		<div>
			                                        			<textarea class="form-control" name="ket" id="ket" rows="3" placeholder="Isi Keterangan ..." style="width: 75%; margin-bottom: 10px;" required=""></textarea>
			                                        		</div>						
											    		</div>
											    		<div class="modal-footer">
											        		<button type="button" class="btn btn-default" data-dismiss="modal">Tutup
											        		</button>
											        		<button type="submit" class="btn btn-primary">
											        		<i class="icon-checkmark-circle2">Simpan</i>
											        		</button>
											    		</div>
													</div>

												</form>

											</div>
										</div>
										<!-- batas modal -->             
		                        </td>
		                        <?php }elseif($rows->status=='2'){ ?>
		                        <td>
		                            Barang Sudah Kembali
		                        </td>
		                        <?php } ?>
		                      </tr>
		                    <?php }
		                  ?>
		                </tbody>

		             </table>

				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading" style="border-top: 3px solid #4ABDAC;"><h4>Di Kembalikan</h4></div>
				<div class="panel-body">
						
					<table id="example4" class="table table-bordered table-striped">

		                <thead>
		                  <tr>
		                    <th>No</th>
		                    <th>Nama Peminjam</th>
		                    <th>Nama Barang</th>
		                    <th>Tanggal Kembali</th>
		                    <th>Opsi</th>
		                  </tr>
		                </thead>

		                <tbody>
		                  <?php $no=1;
		                    foreach ($datakembali->result() as $rows) { ?>
		                      <tr>
		                        <td><?= $no++ ?></td>
		                        <td><?= $rows->nama ?></td>
		                        <td><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></td>
		                        <td>
		                        	 <?php 
				                        if($rows->tgl_kembali == $hariini){
				                          echo "<b style='color:DodgerBlue;'>$rows->tgl_kembali</b>";
				                        }else{
				                          echo $rows->tgl_kembali;
				                        } 
				                      ?>
		                        </td>
		                        <?php if($rows->status=='2'){ ?>
		                        <td>
									Barang Sudah Kembali
								</td>
		                        <?php }else{ ?>
		                        <td>
		                        	<p class="text-red">Barang Belum Kembali
									</p>
		                            
		                        </td>
		                        <?php } ?>
		                      </tr>
		                    <?php }
		                  ?>
		                </tbody>

		             </table>	

				</div>
			</div>
		</div>
	</div>
</div>