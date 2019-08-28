<script>
	function select_data($id,$nama,$username,$email,$telp,$alamat,$level) {
		$("#id").val($id);
		$("#nama").val($nama);
		$("#username").val($username);
        $("#email").val($email);
        $("#notelp").val($telp);
        $("#alamat").val($alamat);
        $("#level").val($level);
	}

	function refresh() {
		$("#id").val("");
        $("#nama").val("");
        $("#username").val("");
        $("#email").val("");
        $("#notelp").val("");
        $("#alamat").val("");
        $("#level").val("");
	}
</script>

<section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('welcome') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
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

    <div class="box">
    	<div class="box-header">
    		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah" onclick="refresh()"><i class="fa fa-plus-circle"></i> Tambah</button>
    	</div>
    	<div class="box-body">
    		<table class="table table-striped table-bordered">
    			<thread>
    				<tr>
    					<th>ID User</th>
    					<th>Nama</th>
    					<th>Username</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Level</th>
    					<th>Aksi</th>
    				</tr>
    			</thread>
    			<tbody>
    				<?php $no=1;
    					foreach ($datauser->result() as $rows) { ?>
    					<tr>
    					  <td><?= $no++ ?></td>
    					  <td><?= $rows->nama ?></td>
                          <td><?= $rows->username ?></td>
                          <td><?= $rows->email ?></td>
                          <td><?= $rows->telp ?></td>
                          <td><?= $rows->alamat ?></td>
                          <td><?= $rows->level ?></td>
    					  <td>
    					  	<a style="cursor: pointer;" onclick="select_data(
    					  		'<?= $rows->id_user ?>',
    					  		'<?= $rows->nama ?>',
                                '<?= $rows->username ?>',
                                '<?= $rows->email ?>',
                                '<?= $rows->telp ?>',
                                '<?= $rows->alamat ?>',
    					  		'<?= $rows->level ?>'
    					  	)" data-toggle="modal" href="#modal-tambah"><i class="glyphicon glyphicon-edit"></i></a>
    					  	<a href="<?php echo site_url()?>user/hapus/<?php echo $rows->id_user; ?>"><i class="glyphicon glyphicon-trash"></i></a>
    					  </td>
    					 </tr>
    					<?php }
    				?>
    			</tbody>
    		</table>
    	</div>
    </div>

    <!-- Membuat Modal Bootstrap -->
    <div class="modal fade" id="modal-tambah" role="dialog">
    	<div class="modal-dialog">
    		<form action="<?php echo site_url('user/simpan')?>" method="post" accept-charset="utf-8">
    			<div class="modal-content">
    				<div class="modal-header bg-primary">
    					<button type="button" class="close" data-dismiss="modal"></button>
    					<h4 class="modal-title">Tambah Data</h4>
    				</div>

    				<div class="modal-body">
    					<div class="col-md-12">
    						<div class="form-horizontal">
    							<div class="box-body">
    								<div class="form-group">
    									<label for="" class="col-sm-2 control-label">Nama</label>
    									<div class="col-sm-10">
    										<input type="hidden" name="id" id="id">
    										<input type="text" name="nama" id="nama" class="form-control" value="" placeholder="Masukan Nama" required="">
    									</div>
    								</div>
    								<div class="form-group">
    									<label for="" class="col-sm-2 control-label">Username</label>
    									<div class="col-sm-10">
    										<input type="text" name="username" id="username" class="form-control" value="" placeholder="Masukan Username" required="">
    									</div>
    								</div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" id="email" class="form-control" value="" placeholder="Masukan Email" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">No Telp</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="notelp" id="notelp" class="form-control" value="" placeholder="Masukan Nomor Telp" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukan Alamat ..." required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Level</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="level" id="level" required="">
                                            <option value="">Pilih Level</option>
                                            <option value="peminjam">Peminjam</option>
                                            <option value="manager">Manager</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Foto</label>
                                        <div class="col-sm-10">
                                        <input type="file" id="exampleInputFile">

                                        <p class="help-block">File Support JPG, JPEG & PNG</p>
                                        </div>
                                    </div>
    							</div>
    						</div>		
    					</div>
    				</div>

    				<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    					<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2">Simpan</i></button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>