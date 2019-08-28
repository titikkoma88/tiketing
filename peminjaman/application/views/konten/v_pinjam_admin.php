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

      function select_data($id_barang) {
        $("#id").val($id_barang);
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
              <th>Gambar</th>
              <th>Kondisi</th>
              <th>Keterangan</th>
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
                <td>
                  <a class="edit-record btn btn-primary white-blue btn-xs" style="cursor: pointer;" href="#">
                        Lihat Gambar
                  </a>                                                                          
                </td>
                <td><?= $rows->kondisi ?></td>
                <td>
                  <?php
                    $con  = mysqli_connect('localhost','root','','buatanku');
                    $stat = mysqli_query($con,"SELECT * FROM peminjaman 
                                            WHERE id_barang = '$rows->id_barang' AND status !=2");
                    $cek = mysqli_num_rows($stat);
                  
                    if($cek > 0){ 
                  ?>
                      <i style="color: red">Barang Sedang Dipinjam</i>
                  <?php 
                    }else{ 
                  ?>
                      <i style="color: green">Barang Tersedia</i>
                  <?php 
                    }if($cek !=1){ 
                  ?>      
                </td>
                <td>
                    <?php 
                      if($rows->kondisi === 'rusak'){
                    ?>
                        <i style="color: blue">Barang rusak tidak bisa dipinjam</i>
                    <?php 
                      }elseif($rows->kondisi === 'hilang'){
                    ?>
                        <i style="color: red">Barang hilang tidak bisa dipinjam</i>
                    <?php
                      }else{
                    ?>
                        <a  class="edit-record btn btn-primary white-blue btn-xs" style="cursor: pointer;" 
                            onclick="select_data(
                                    '<?= $rows->id_barang ?>'
                            )" data-toggle="modal" href="#modal-tambah">
                        Pijamkan
                        </a>
                    <?php
                      }
                    ?> 
                </td> 
                  <?php }else{ ?>
                <td>
                  -
                </td>  
                  <?php } ?>
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
        <form action="<?php echo site_url('barang/pinjamkan')?>" method="post" accept-charset="utf-8">
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
                      <label for="" class="col-sm-3 control-label">Peminjam</label>
                        <div class="col-sm-9">
                          <input type="hidden" name="id" id="id">
                            <select name="user" id="user" class="form-control" required="">
                              <option value="" disabled diselected>-- Pilih User --</option>
                                <?php                                
                                foreach ($dd_user as $duser) {  
                                echo 
                              "<option value='".$duser->id_user."'>".$duser->nama."</option>";
                                }
                                echo
                            "</select>"
                                ?>
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

