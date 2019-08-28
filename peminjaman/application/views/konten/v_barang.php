    <script>
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
      })

      function select_data($id,$id_jenis,$spek_barang,$harga,$kondisi,$id_supplier,$tanggal_beli,$qr_asset,$gambar_barang) {
        $("#id").val($id);
        $("#jenis").val($id_jenis);
        $("#spek_barang").val($spek_barang);
        $("#harga").val($harga);
        $("#kondisi").val($kondisi);
        $("#suplier").val($id_supplier);
        $("#tanggal_beli").val($tanggal_beli);
        $("#qr_asset").val($qr_asset);
        $("#gambar").val($gambar_barang);
      }

      function refresh() {
        $("#id").val("");
        $("#jenis").val("");
        $("#spek_barang").val("");
        $("#harga").val("");
        $("#kondisi").val("");
        $("#suplier").val("");
        $("#tanggal_beli").val("");
        $("#qr_asset").val("");
        $("#gambar").val("");
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
          <h3 class="box-title"></h3>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah" onclick="refresh()">
            <i class="fa fa-plus-circle"></i> Tambah
          </button>
          <button type="button" class="btn btn-primary" onclick="javascript: window.history.go(-1)">
            <i class="fa fa-plus-circle"></i> Kembali
          </button>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Jenis</th>
              <th>Spesifikasi Barang</th>
              <th>Harga Barang</th>
              <th>Gambar</th>
              <th>Kondisi</th>
              <th>Supplier</th>
              <th>Tanggal Beli</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1;
            foreach ($databarang->result() as $rows) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $rows->nm_jenis ?></td>
                <td><?= $rows->spek_barang ?></td>
                <td><?= "Rp." . number_format($rows->harga,2,',','.') ?></td>
                <td>
                  <?php if ($rows->gambar_barang == null || $rows->gambar_barang =="") { ?> 
                    <center> Gambar Tidak Tersedia
                      <!-- <a><img src="<?php echo base_url('assets/dist/img/no image.png');?>" width='150px' height="150px">
                      </a> -->
                    </center>
                  <?php } else { ?>
                    
                    <center><a data-toggle="modal" data-target="#myModal<?=$no?>" class="edit-record btn btn-primary white-blue btn-xs">
                      Lihat Gambar
                    </a>
                    </center>
                    <!-- <center>
                    <a href="<?php echo base_url('assets/dist/img/'.$rows->gambar_barang);?>" target="_BLANK"> Lihat Gambar </a>
                    </center> -->

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
                    
                  <?php } ?>
                </td>
                <td><?= $rows->kondisi ?></td>
                <td><?= $rows->nm_supplier ?></td>
                <td><?= $rows->tanggal_beli ?></td>
                <td>
                  <a style="cursor: pointer;" onclick="select_data(
                            '<?= $rows->id_barang ?>',
                            '<?= $rows->id_jenis ?>',
                            '<?= $rows->spek_barang ?>',
                            '<?= $rows->harga ?>',
                            '<?= $rows->gambar_barang ?>',
                            '<?= $rows->kondisi ?>',
                            '<?= $rows->id_supplier ?>',
                            '<?= $rows->qr_asset ?>',
                            '<?= $rows->tanggal_beli ?>'
                          )" data-toggle="modal" href="#modal-tambah"><i class="glyphicon glyphicon-edit"></i></a>
                  <a href="<?php echo site_url()?>barang/hapus/<?php echo $rows->id_barang; ?>">
                    <i class="glyphicon glyphicon-trash"></i>
                  </a>
                </td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- Membuat Modal Bootstrap -->
    <div class="modal fade" id="modal-tambah" role="dialog">
      <div class="modal-dialog">
        <!-- <form action="<?php echo site_url('barang/simpan')?>" method="post" enctype="multipart/form-data" accept-charset="utf-8"> -->
        <?php echo form_open_multipart('barang/simpan'); ?>
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
                            <select name="jenis" id="jenis" class="form-control" required="">
                              <option value="" disabled diselected>-- Pilih Jenis --</option>
                                <?php                                
                                foreach ($dd_jenis as $djenis) {  
                                echo 
                              "<option value='".$djenis->id_jenis."'>".$djenis->nm_jenis."</option>";
                                }
                                echo
                            "</select>"
                                ?>
                        </div>
                    </div>
                    <!--
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Date range</label>
                        <div class="col-sm-9">
                          <i class="fa fa-calendar"></i> 
                          <input type="text" class="form-control" name="reservation" id="reservation">
                        </div>
                    </div>
                    -->
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Spesifikasi Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="spek_barang" id="spek_barang" class="form-control" value="" placeholder="Masukan Spesifikasi Barang" required="">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Harga Barang</label>
                        <div class="col-sm-9">
                          <input type="number" name="harga" id="harga" class="form-control" value="" placeholder="Masukan Harga Barang" required="">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Kondisi</label>
                        <div class="col-sm-9">
                          <select name="kondisi" id="kondisi" class="form-control" required="">
                            <option value="">Pilih Kondisi</option>
                            <option value="baik">Baik</option>
                            <option value="hampir_rusak">Hampir Rusak</option>
                            <option value="rusak">Rusak</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Suplier</label>
                        <div class="col-sm-9">
                          <select name="suplier" id="suplier" class="form-control" required="">
                            <option value="" disabled diselected>-- Pilih Supplier --</option>
                              <?php                                
                              foreach ($dd_supplier as $dsupp) {  
                              echo 
                            "<option value='".$dsupp->id_supplier."'>".$dsupp->nm_supplier."</option>";
                              }
                              echo"
                          </select>"
                              ?>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Tanggal Beli</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="date" name="tanggal_beli" id="tanggal_beli">
                        </div>
                    </div><div class="form-group">
                      <label for="" class="col-sm-3 control-label">Kode Asset</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="text" name="qr_asset" id="qr_asset" placeholder="Masukan Kode Asset">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Gambar Barang</label>
                        <div class="col-sm-9">
                          <input type="file" name="gambar" id="gambar" class="form-control">
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
