<script>
	function select_data($id,$kategori,$keterangan) {
		$("#id").val($id);
		$("#kategori").val($kategori);
		$("#keterangan").val($keterangan);
	}
	function refresh() {
		$("#id").val("");
		$("#kategori").val("");
		$("#keterangan").val("");
	}
</script>

<section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Control panel</small>
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

    <div class="box">
    	<div class="box-header">
    		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah" onclick="refresh()"><i class="fa fa-plus-circle"></i> Tambah</button>
    	</div>
    	<div class="box-body">
    		<table class="table table-striped table-bordered">
    			<thread>
    				<tr>
    					<th>No</th>
    					<th>Kategori</th>
    					<th>Keterangan</th>
    					<th>Aksi</th>
    				</tr>
    			</thread>
    			<tbody>
    				<?php $no=1;
    					foreach ($datakategori->result() as $rows) { ?>
    					<tr>
    					  <td><?= $no++ ?></td>
    					  <td><?= $rows->kategori ?></td>
    					  <td><?= $rows->keterangan ?></td>
    					  <td>
    					  	<a style="cursor: pointer;" onclick="select_data(
    					  		'<?= $rows->id ?>',
    					  		'<?= $rows->kategori ?>',
    					  		'<?= $rows->keterangan ?>'
    					  	)" data-toggle="modal" href="#modal-tambah"><i class="glyphicon glyphicon-edit"></i></a>
    					  	<a href="<?php echo site_url()?>kategori/hapus/<?php echo $rows->id; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
    		<form action="<?php echo site_url('kategori/simpan')?>" method="post" accept-charset="utf-8">
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
    									<label for="" class="col-sm-2 control-label">Kategori</label>
    									<div class="col-sm-10">
    										<input type="hidden" name="id" id="id">
    										<input type="text" name="kategori" id="kategori" class="form-control" value="" placeholder="Masukan Kategori" required="">
    									</div>
    								</div>
    								<div class="form-group">
    									<label for="" class="col-sm-2 control-label">Keterangan</label>
    									<div class="col-sm-10">
    										<input type="text" name="keterangan" id="keterangan" class="form-control" value="" placeholder="Masukan Keterangan" required="">
    									</div>
    								</div>
    							</div>
    						</div>		
    					</div>
    				</div>

    				<div class="modal-footer">
    					<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2">Simpan</i></button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>