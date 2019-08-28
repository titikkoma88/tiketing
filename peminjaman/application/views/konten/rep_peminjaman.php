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

<div><br></div>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading" style="border-top: 3px solid #4ABDAC;">
					<h4>Di Pesan  
		            </h4>
				</div>
				<div class="panel-body">

					<table id="example1" class="table table-bordered table-striped">

		                <thead>
		                  <tr>
		                    <th>No</th>
		                    <th>Nama Peminjam</th>
		                    <th>Nama Barang</th>
		                    <th>Status</th>
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
									<a class="btn btn-info white-blue" disabled>Mengajukan Peminjaman
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
		                    <th>Status</th>
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
		                            <a class="btn btn-success white-green" disabled>
		    					  		Sedang Meminjam
		    					  	</a>        
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
				<div class="panel-heading" style="border-top: 3px solid #4ABDAC;">
					<h4>Di Kembalikan 

		                <a class="btn btn-danger" href="<?php echo site_url('') ?>"><i class="fa fa-print"></i> Print</a>
		                <div class="dropdown inline">
		                  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		                    <i class="fa fa-download"></i> Export
		                    <span class="caret"></span>
		                  </button>
		                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		                      <li style='color:green;'><a href="<?php echo site_url('') ?>"> PDF</a></li>
		                      <li style='color:green;'><a href="<?php echo site_url('') ?>"> EXCEL</a></li>
		                    </ul>
		                </div>
					</h4>
				</div>
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
		                        <td><?= $rows->tgl_kembali ?></td>
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