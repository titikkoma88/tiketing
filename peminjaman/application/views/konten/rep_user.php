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
        <li><a href="<?php echo site_url('welcome') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>

    <div class="box">
      <div class="box-header">
          <h3 class="box-title">
            <a class="btn btn-danger" href="<?php echo site_url('user/print_user') ?>"><i class="fa fa-print"></i> Print</a>
            <div class="dropdown inline">
              <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-download"></i> Export
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li style='color:green;'><a href="<?php echo site_url('user/pdf_user') ?>"> PDF</a></li>
                <li style='color:green;'><a href="<?php echo site_url('user/excel_user') ?>"> EXCEL</a></li>
              </ul>
            </div>
          </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
              <tr>
                <th>ID User</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
            <?php $no=1;
            foreach ($datauser->result() as $rows) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $rows->nama ?></td>
                <td><?= $rows->username ?></td>
                <td><?= $rows->email ?></td>
                <td><?= $rows->telp ?></td>
                <td><?= $rows->alamat ?></td>
                <td><?= $rows->level ?></td>
                <td>
                  <a class="edit-record btn btn-primary white-blue btn-xs" href="<?php echo site_url()?>user/det_user/<?= $rows->id_user ?>">
                    Detail Pengguna
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