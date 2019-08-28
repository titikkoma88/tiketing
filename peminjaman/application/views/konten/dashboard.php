
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
        $('#example3').DataTable()
        $('#example4').DataTable()
        $('#example5').DataTable()
      })
    </script>

    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <section class="content">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $user;?></h3>
              <p>User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url('user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $jenis;?></h3>
              <p>Jenis</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo site_url('jenis') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $barang;?></h3>
              <p>Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('barang') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $supplier;?></h3>
              <p>Supplier</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url('supplier') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->        
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Barang yang masih dipinjam</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Barang</th>
                    <th>Peminjam</th>
                    <th>Tanggal</th>
                    <!-- <th>Opsi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                      foreach ($datanoavailable->result() as $rows) { ?>
                  <tr>
                    <td><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></td>
                    <td><?= $rows->nama ?></td>
                    <td><?= $rows->tgl_pinjam ?></td>
                    <!-- <td><a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Detail</a></td> -->
                  </tr>
                    <?php }
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo base_url();?>peminjaman/peminjaman_terkini" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Riwayat Peminjaman Bulan <?php echo date('F');?> <?php echo date('Y');?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Peminjam</th>
                    <th>Nama Barang</th>
                    <th>Tanggal</th>
                    <!-- <th>Opsi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                      foreach ($datapinjam->result() as $rows) { ?>
                  <tr>
                    <td><?= $rows->nama ?></td>
                    <td><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></td>
                    <td><?= $rows->tgl_pinjam ?></td>
                    <!-- <td><a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Detail</a></td> -->
                  </tr>
                    <?php }
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo base_url();?>peminjaman/peminjaman_terkini" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Barang Tersedia</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example5" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Spesifikasi Barang</th>
                    <th>Kondisi</th>
                    <!-- <th>Opsi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                      foreach ($dataavailable->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $rows->nm_jenis ?></td>
                    <td><?= $rows->spek_barang ?></td>
                    <td><?= $rows->kondisi ?></td>
                    <!-- <td><a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Detail</a></td> -->
                  </tr>
                    <?php }
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo site_url('ganti') ?>" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Rusak</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Peminjam</th>
                    <th>Nama Barang</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                      foreach ($datarusak->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $rows->nama ?></td>
                    <td><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></td>
                    <td><?= $rows->tgl ?></td>
                    <td>
                      <?php 
                        if($rows->status_gt === '0'){
                          echo "<i style='color:red;'>Belum diganti</i>";
                        }elseif($rows->status_gt === '1'){
                          echo "<i>Sudah diganti</i>";
                        } 
                      ?>
                    </td>
                    <!-- <td><a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Detail</a></td> -->
                  </tr>
                    <?php }
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo site_url('ganti') ?>" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Hilang</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example4" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Peminjam</th>
                    <th>Nama Barang</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                      foreach ($datahilang->result() as $rows) { ?>
                  <tr>
                    <td><?= $rows->nama ?></td>
                    <td><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></td>
                    <td><?= $rows->tgl ?></td>
                    <td>
                      <?php 
                          if($rows->status_gt === '0'){
                            echo "<i style='color:red;'>Belum diganti</i>";
                          }elseif($rows->status_gt === '1'){
                            echo "<i>Sudah diganti</i>";
                          } 
                        ?>
                    </td>
                    <!-- <td><a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Detail</a></td> -->
                  </tr>
                    <?php }
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo site_url('ganti') ?>" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>