 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/<?php echo $this->session->userdata('foto');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo strtoupper($this->session->userdata('nama'));?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <?php if($this->session->userdata('level')=="admin"){?>

        <li class="header">MAIN NAVIGATION</li>
        <li<?php echo uri_string() == 'homeadmin' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('homeadmin') ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <!-- 
        <li>
          <a href="<?php echo site_url('kategori') ?>">
            <i class="fa fa-dashboard"></i>
            <span>Kategori</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Notifikasi</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
        </li>
        -->
        <li<?php echo uri_string() == 'jenis' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('jenis') ?>">
            <i class="fa fa-th"></i>
            <span>Jenis</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li<?php echo uri_string() == 'barang' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('barang') ?>">
            <i class="fa fa-laptop"></i>
            <span>Barang</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li<?php echo uri_string() == 'user' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('user') ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Pengguna</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li<?php echo uri_string() == 'supplier' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('supplier') ?>">
            <i class="fa fa-edit"></i>
            <span>Supplier</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-table"></i> <span>Peminjaman</span>
            <span class="pull-right-container">
              <span class="label pull-right bg-red"><?php echo $notif;?></span>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li<?php echo uri_string() == 'peminjaman/peminjaman_terkini' ? ' class="active"' : ''; ?>>
              <a href="<?php echo base_url();?>peminjaman/peminjaman_terkini"><i class="fa fa-circle-o"></i> Peminjaman Terkini</a>
            </li>
            <li<?php echo uri_string() == 'jenis/pinjam_admin' ? ' class="active"' : ''; ?>>
              <a href="<?php echo base_url();?>jenis/pinjam_admin"><i class="fa fa-circle-o"></i> Peminjaman Admin</a>
            </li>
          </ul>
        </li>
        <li<?php echo uri_string() == 'ganti' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('ganti') ?>">
            <i class="fa fa-folder"></i>
            <span>Ganti Rugi</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <!--
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Pesan Pengguna</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        -->
        <li>
          <a href="<?php echo base_url();?>login/logout">
            <i class="fa fa-share"></i> <span>Keluar</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

      <?php } else if($this->session->userdata('level')=="manager"){?>

        <li class="header">MAIN NAVIGATION</li>
        <li<?php echo uri_string() == 'homemanager' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('homemanager') ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li<?php echo uri_string() == 'jenis/rep_jenis' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('jenis/rep_jenis') ?>">
            <i class="fa fa-th"></i>
            <span>Jenis</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li<?php echo uri_string() == 'barang/rep_barang' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('barang/rep_barang') ?>">
            <i class="fa fa-laptop"></i>
            <span>Barang</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li<?php echo uri_string() == 'user/rep_user' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('user/rep_user') ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Pengguna</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li<?php echo uri_string() == 'supplier/rep_supplier' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('supplier/rep_supplier') ?>">
            <i class="fa fa-edit"></i>
            <span>Supplier</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li<?php echo uri_string() == 'peminjaman/rep_peminjaman' ? ' class="active"' : ''; ?>>
          <a href="<?php echo base_url();?>peminjaman/rep_peminjaman">
            <i class="fa fa-table"></i> 
            <span>Peminjaman</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li<?php echo uri_string() == 'ganti/rep_ganti' ? ' class="active"' : ''; ?>>
          <a href="<?php echo site_url('ganti/rep_ganti') ?>">
            <i class="fa fa-folder"></i>
            <span>Ganti Rugi</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>login/logout">
            <i class="fa fa-share"></i> <span>Keluar</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

      <?php }?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>