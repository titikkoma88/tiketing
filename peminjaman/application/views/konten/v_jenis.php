<script>
  function select_data($id_jenis,nm_jenis) {
    $("#id").val($id_jenis);
    $("#jenis").val($nm_jenis);
  }

  function refresh() {
    $("#id").val("");
    $("#jenis").val("");
  }
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jenis</li>
      </ol>
</section>

    <!-- Main content -->
<section class="content">

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah" onclick="refresh()"><i class="fa fa-plus-circle"></i> Tambah Jenis </button> 

  <div><br></div>
    <!-- <h2 class="page-header">Social Widgets</h2> -->

  <div class="row">
  
  <?php $no=1;
    foreach ($datajenis->result() as $rows) { ?>

    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
          <img src="<?php echo base_url()?>assets/dist/img/<?= $rows->gambar ?>" style="width: 120px; height: 95px;">

            <div class="caption">
              <h3> <?= $rows->nm_jenis ?> </h3>    
              <?php

                $jml_brg = "SELECT COUNT(*) jml FROM barang WHERE id_jenis = {$rows->id_jenis}";
                $row_barang = $this->db->query($jml_brg)->row();

                $baik_brg = "SELECT COUNT(*) jml FROM barang WHERE id_jenis = {$rows->id_jenis} AND kondisi = 'baik' ";
                $row_baik = $this->db->query($baik_brg)->row();

                //$rusak_brg = "SELECT COUNT(*) jml FROM barang WHERE id_jenis = {$rows->id_jenis} AND kondisi = 'rusak' ";
                //$row_rusak = $this->db->query($rusak_brg)->row();

                //$hilang_brg = "SELECT COUNT(*) jml FROM barang WHERE id_jenis = {$rows->id_jenis} AND kondisi = 'hilang' ";
                //$row_hilang = $this->db->query($hilang_brg)->row(); 
                {
              ?>

                  <p>Jumlah Barang : <?= $row_barang->jml; ?></p>
                  <p>Kondisi Baik : <?= $row_baik->jml; ?></p>
                  <!--<p>Kondisi Rusak : <?= $row_rusak->jml; ?></p>
                  <p>Kondisi Hilang : <?= $row_hilang->jml; ?></p>-->

              <?php } ?>    
            </div>

            <div class="panel-footer">
              <a id="btn-admin" class="btn btn-info white-blue" href="<?php echo site_url()?>barang/jenis/<?= $rows->id_jenis ?>">
                <span class="glyphicon glyphicon-info-sign"></span>
              </a>  
              <a id="btn-admin" class="btn btn-danger white-red" href="<?php echo site_url()?>jenis/hapus/<?= $rows->id_jenis ?>" onclick="return confirm('Apakah anda ingin hapus ini? <?= $rows->nm_jenis ?>')">
                <span class=" glyphicon glyphicon-trash"></span>
              </a>
              <a style="cursor: pointer;" onclick="select_data(
                    '<?= $rows->id_jenis ?>',
                    '<?= $rows->nm_jenis ?>'
                  )" data-toggle="modal" href="#modal-tambah" id="btn-admin" class="btn btn-warning white-orange" >
                  <span class="glyphicon glyphicon-edit"></span>
              </a>  
            </div>

      </div>
    </div>
    
    <?php }
  ?>

  </div>
      <!-- /.row -->

</section>
    <!-- /.content -->

    <!-- Membuat Modal Bootstrap -->
    <div class="modal fade" id="modal-tambah" role="dialog">
      <div class="modal-dialog">
        <!-- <form action="<?php echo site_url('jenis/simpan')?>" method="post" enctype="multipart/form-data" accept-charset="utf-8"> -->
        <?php echo form_open_multipart('jenis/simpan'); ?>
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
                      <label for="" class="col-sm-3 control-label">Jenis</label>
                      <div class="col-sm-9">
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="jenis" id="jenis" class="form-control" value="" placeholder="Masukan Nama Jenis Barang" required="">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Gambar Barang</label>
                      <div class="col-sm-9">
                      <input type="file" name="gambar" id="gambar">
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
        <?php echo form_close(); ?>
        <!-- </form> -->
      </div>
    </div>
