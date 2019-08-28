

    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Proses User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jenis</li>
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

    <!-- Main content -->
<section class="content">

    <!-- <h2 class="page-header">Social Widgets</h2> -->

  <div class="page-header">
    <?php echo form_open('jenis/search') ?>
    <input type="text" name="keyword" class="form-control" placeholder="Search">
    <button type="submit" class="btn btn-success">Cari</button>
    <?php echo form_close() ?>
  </div>

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
                $row_barang = $this->db->query($jml_brg)->row(); {
                ?>
                <p>Jumlah Barang : <?= $row_barang->jml; ?></p>
              <?php } ?>    
          </div>

          <div class="panel-footer">
              <?php 
                if($level === 'peminjam'){
              ?>
                <a id="btn-user" class="btn btn-info white-blue" href="<?php echo site_url()?>barang/pinjam_barang/<?= $rows->id_jenis ?>">Detail
                </a>
              <?php
                }else{
              ?>
                <a id="btn-user" class="btn btn-info white-blue" href="<?php echo site_url()?>barang/pinjam_admin/<?= $rows->id_jenis ?>">Detail
                </a>
              <?php
                }
              ?>   
          </div>

      </div>
    </div>
    
    <?php }
  ?>

  </div>
      <!-- /.row -->

</section>
    <!-- /.content -->

