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

    <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Opsi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $no=1;
                    foreach ($datapeminjaman->result() as $rows) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $rows->nama ?></td>
                        <td><?= $rows->spek_barang ?></td>
                        <td><?= $rows->tgl_pinjam ?></td>
                        <td><?= $rows->tgl_kembali ?></td>
                        <?php if($rows->status=='0'){ ?>
                        <td>
                            Sedang di ajukan              
                        </td>
                        <?php }elseif($rows->status=='1'){ ?>
                        <td>
                          <b>Barang sedang di pinjam </b>      
                        </td>
                        <?php }elseif($rows->status=='2'){ ?>
                        <td>
                            Barang Sudah Kembali
                        </td>
                        <?php } ?>
                      </tr>
                    <?php }
                  ?>
                </tbody>
                <!--
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Peminjam</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
                -->
              </table>
            </div>
            <!-- /.box-body -->
    </div>
    <!-- /.box -->
