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

      function select_data($id_supplier,$nm_supplier,$telp_supplier,$alamat) {
        $("#id").val($id_supplier);
        $("#nama").val($nm_supplier);
        $("#notelp").val($telp_supplier);
        $("#alamat").val($alamat);
      }

      function refresh() {
        $("#id").val("");
        $("#nama").val("");
        $("#notelp").val("");
        $("#alamat").val("");
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
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
            <?php $no=1;
            foreach ($datasupplier->result() as $rows) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $rows->nm_supplier ?></td>
                <td><?= $rows->telp_supplier ?></td>
                <td><?= $rows->alamat ?></td>
                <td>
                  <a style="cursor: pointer;" onclick="select_data(
                    '<?= $rows->id_supplier ?>',
                    '<?= $rows->nm_supplier ?>',
                                '<?= $rows->telp_supplier ?>',
                    '<?= $rows->alamat ?>'
                  )" data-toggle="modal" href="#modal-tambah"><i class="glyphicon glyphicon-edit"></i></a>
                  <a href="<?php echo site_url()?>supplier/hapus/<?php echo $rows->id_supplier; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
        <form action="<?php echo site_url('supplier/simpan')?>" method="post" accept-charset="utf-8">
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

    