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
          <h3 class="box-title">
            <a class="btn btn-danger" href="<?php echo site_url('barang/print_barang') ?>"><i class="fa fa-print"></i> Print</a>
            <div class="dropdown inline">
              <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-download"></i> Export
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li style='color:green;'><a href="<?php echo site_url('barang/pdf_barang') ?>"> PDF</a></li>
                <li style='color:green;'><a href="<?php echo site_url('barang/excel_barang') ?>"> EXCEL</a></li>
              </ul>
            </div>
          </h3>
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
                <td><?= $rows->kondisi ?></td>
                <td><?= $rows->nm_supplier ?></td>
                <td><?= $rows->tanggal_beli ?></td>
                <td>
                  <a class="edit-record btn btn-primary white-blue btn-xs" href="<?php echo site_url()?>barang/det_barang/<?= $rows->id_barang ?>">
                    Detail Barang
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
