<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>PT Modernland Realty </b>Tbk</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li<?php echo uri_string() == 'jenis/pinjam' ? ' class="active"' : ''; ?>>
              <a href="<?php echo site_url()?>jenis/pinjam">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li<?php echo uri_string() == 'peminjaman' ? ' class="active"' : ''; ?>>
              <a href="<?php echo site_url('peminjaman') ?>">Peminjamanku</a>
            </li>

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-danger"><?php echo $notif;?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have <?php echo $notif;?> notifications </li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <?php $no=1;
                      foreach ($datanotif->result() as $rows) { ?>
                    <li><!-- start notification -->
                      <a href="<?php echo site_url('peminjaman') ?>">
                      <?php 
                          if($rows->status == '0'){
                        ?>
                          <div>
                            <?= $rows->nama ?><br>
                            Ingin meminjam <?= $rows->nm_jenis ?> <?= $rows->spek_barang ?><br>
                          </div>
                        <?php
                          }elseif($rows->status == '1'){
                        ?>
                          <?= $rows->nama ?><br>
                          Telah meminjam <?= $rows->nm_jenis ?> <?= $rows->spek_barang ?><br>
                        <?php
                          }elseif($rows->status == '2'){
                        ?>
                          <?= $rows->nama ?><br>
                          Telah mengembalikan <?= $rows->nm_jenis ?> <?= $rows->spek_barang ?><br>
                        <?php } ?>
                    </a>
                    </li>
                      <?php } ?>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="<?php echo site_url('peminjaman') ?>">View all</a></li>
              </ul>
            </li>
        
            <!--
            <li><a href="#">Jenis</a></li> 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
              </div>
            </form>
            -->

          </ul>
        </div>
        <!-- /.navbar-collapse -->

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url()?>assets/dist/img/<?php echo $this->session->userdata('foto');?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url()?>assets/dist/img/<?php echo $this->session->userdata('foto');?>" class="img-circle" alt="User Image">

                  <p>
                    User Modernland
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href=""></a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Ubah Password</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url();?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>