

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Proses User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url()?>jenis/pinjam"><i class="fa fa-dashboard"></i> Jenis</a></li>
        <li class="active">Barang</li>
      </ol>
</section>

    <!-- Main content -->
<section class="content">
  <div><h3 class="box-title"></h3>
    <button type="button" class="btn btn-primary" onclick="javascript: window.history.go(-1)">
        <i class="fa fa-plus-circle"></i> Kembali
    </button>
  </div><br>
    <!-- <h2 class="page-header">Social Widgets</h2> -->
  <div class="row">
  
    <?php $no=1;
    foreach ($databarang->result() as $rows) { ?>

      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <a data-toggle="modal" data-target="#myModal<?=$no?>">
            <img src="<?php echo base_url()?>assets/dist/img/<?= $rows->gambar_barang ?>" style="width: 120px; height: 95px;">
            </a>
                <!-- Modal -->
                <div class="modal fade" id="myModal<?=$no?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Gambar Barang</h4>
                      </div>
                      <div class="modal-body">
                        <center>
                          <img src="<?php echo base_url('assets/dist/img/'.$rows->gambar_barang);?>" alt="" style = 
                            "max-height: 300px;
                            display: block;
                            margin-left: auto;
                            margin-right: auto;">
                        </center>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Akhir Modal -->
              <div class="caption">
                <b><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></b>
                <p>Kondisi : <?= $rows->kondisi ?></p>
              </div>

                <?php
                  if($rows->status_barang == 0){ 
                  ?>
                    <i>Barang Tersedia</i>
                <?php 
                  }else{ 
                  ?>
                    <i>Barang Sedang Dipinjam</i>

                  <?php 
                    }if($rows->status_barang == 0){ 
                    ?>    
              
                    <div class="panel-footer">
                      <?php 
                        if($rows->kondisi === 'rusak'){
                        ?>
                        <i style="color: orange">Barang rusak tidak bisa dipinjam</i>

                      <?php 
                        }elseif($rows->kondisi === 'hilang'){
                        ?>
                        <i style="color: red">Barang hilang tidak bisa dipinjam</i>

                      <?php
                        }else{
                        ?>
                        <a id="btn-user" class="btn btn-info white-blue" href="<?php echo site_url()?>barang/pinjam/<?= $rows->id_barang ?>">Pinjam
                        </a>
                      <?php } ?>  
                    </div>

                  <?php 
                    }else{ ?>
                    <div class="panel-footer" align="center"> - </div>
                  <?php } ?>
        </div>
      </div>
    
    <?php }
    ?>

  </div>
  <!-- /.row -->

</section>
<!-- /.content -->

