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
        <small>Proses</small>
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
                <a class="btn btn-danger" href="<?php echo site_url('ganti/print_ganti') ?>"><i class="fa fa-print"></i> Print</a>
                <div class="dropdown inline">
                  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-download"></i> Export
                    <span class="caret"></span>
                  </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li style='color:green;'><a href="<?php echo site_url('ganti/pdf_ganti') ?>"> PDF</a></li>
                      <li style='color:green;'><a href="<?php echo site_url('ganti/excel_ganti') ?>"> EXCEL</a></li>
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
                    <th>Nama Peminjam</th>
                    <th>Nama Barang</th>
                    <th>Kondisi</th>
                    <th>Tanggal Kejadian</th>
                    <th>Tanggal Diganti</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $no=1;
                    foreach ($datagt->result() as $rows) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $rows->nama ?></td>
                        <td><?= $rows->spek_barang ?></td>
                        <td><?= $rows->kondisi ?></td>
                        <td><?= $rows->tgl ?></td>
                        <td><?= $rows->tgl_bayar_gt ?></td>
                        <td>
                            <?php 
                              if($rows->status_gt === '0'){
                                echo "<i style='color:red;'>Belum diganti</i>";
                              }elseif($rows->status_gt === '1'){
                                echo "<i>Sudah diganti</i>";
                              } 
                            ?>
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
