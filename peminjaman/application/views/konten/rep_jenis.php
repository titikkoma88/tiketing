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

    <div class="box">
      <div class="box-header">
          <h3 class="box-title">
            <a class="btn btn-danger" href="<?php echo site_url('jenis/print_jenis') ?>"><i class="fa fa-print"></i> Print</a>
            <div class="dropdown inline">
              <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-download"></i> Export
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?php echo site_url('jenis/pdf_jenis') ?>">PDF</a></li>
                <li><a href="<?php echo site_url('jenis/excel_jenis') ?>">EXCEL</a></li>
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
                <th>Jumlah</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
            <?php $no=1;
            foreach ($datajenis->result() as $rows) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $rows->nm_jenis ?></td>
                <td>
                  <?php

                    $jml_brg = "SELECT COUNT(*) jml FROM barang WHERE id_jenis = {$rows->id_jenis}";
                    $row_barang = $this->db->query($jml_brg)->row(); {
                  ?>
                  
                  <?= $row_barang->jml; ?>

                  <?php } ?>
                </td>
                <td>
                  <a class="edit-record btn btn-primary white-blue btn-xs" href="<?php echo site_url()?>barang/rep_barang_jenis/<?= $rows->id_jenis ?>">
                    Lihat Barang
                  </a>
                </td>
              </tr>
            <?php }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2">TOTAL</th>
              <td>
                <?php

                    $jml_brg = "SELECT COUNT(*) jml FROM barang";
                    $row_barang = $this->db->query($jml_brg)->row(); {
                  ?>
                  
                  <?= $row_barang->jml; ?>

                  <?php } ?>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->