<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Peminjaman | PT Modernland Realty Tbk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <img src="<?php echo base_url()?>assets/dist/img/modernland.png" alt="User Image">
  </div>
  <!-- User name -->
  <div class="lockscreen-name">
    selamat datang di Aplikasi Peminjaman <br> <b> PT Modernland Realty Tbk</b>
  </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <a href="<?php echo base_url();?>login/index">
    <div class="lockscreen-image">
      <img src="<?php echo base_url()?>assets/dist/img/avatar5.png" alt="User Image">
    </div>
    </a>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
        
        <input type="text" class="form-control" placeholder="Mulai Pinjam" readonly>
        
        <div class="input-group-btn">
          <button type="button" class="btn">
            <a href="<?php echo base_url();?>login/index"><i class="fa fa-arrow-right text-muted"></i></a>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    <a href="#" data-toggle="modal" data-target="#modal-snk"> <span>Syarat dan ketentuan yang berlaku</span></a>
  </div>
  <!-- 
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2016 <b><a href="https://adminlte.io" class="text-black">Almsaeed Studio</a></b><br>
    All rights reserved
  </div>
  -->
</div>
<!-- /.center -->

      <!-- MODAL SNK -->

      <!-- Modal -->
      <div id="modal-snk" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 style="color: orange;" class="text-center">SYARAT & KETENTUAN PEMINJAMAN</h1>
            </div>
            <div class="modal-body">
              <div class="col-sm-12 snk-con" style="background-color: orange; border: 1px white solid;">
          <h4>Selamat datang di Peminjaman atau aplikasi peminjaman sarana dan prasarana IT, silahkan membaca Syarat Penggunaan Peminjaman secara seksama, Syarat dan Ketentuan ini mengatur Penggunaan dan Akses Peminjaman, dengan mengakses Peminjaman dan menggunakan layanan Peminjaman maka anda telah setuju untuk terikat dengan Syarat dan Ketentuan ini.</h4>
          <h4>
            Akses atas password dan penggunaan password dilindungi dan Penggunaan Layanan dibatasi hanya untuk beberapa orang saja yang dapat menggunakan aplikasi Peminjaman
          </h4>
          <h4>
            A.  Pedoman penggunaan Peminjaman: Anda setuju untuk mematuhi setiap dan semua pedoman, pemberitahuan, aturan operasi dan kebijakan dan instruksi yang berkaitan dengan penggunaan Layanan dan/atau akses ke Platform, serta setiap perubahan-nya, yang dikeluarkan oleh kami, dari waktu ke waktu. Kami berhak untuk merevisi pedoman, pemberitahuan, aturan operasi, kebijakan dan instruksi sewaktu-waktu dan Anda dianggap mengetahui dan tunduk oleh setiap perubahan tersebut di atas. <br>
          </h4>
          <h4>
            <p>1. Tidak berpura-pura sebagai orang lain, atau memberikan keterangan palsu, atau mengaku sebagai orang lain atau kelompok tertentu </p>
            <p>2. Tidak berusaha untuk mendapatkan akses tidak sah atau mengganggu atau mengacaukan sistem komputer atau jaringan yang terhubung dengan Peminjaman</p>
            <p>3. Tidak menggunakan atau unggah atau meng-upload perangkat lunak atau material yang mengandung / dicurigai mengandung virus, komponen merusak, kode berbahaya atau komponen berbahaya dengan cara apapun yang dapat merusak data atau mengakibatkan kerusakan Peminjaman atau mengganggu pengoperasian komputer Peminjam</p>
            <p>4. Maksimal barang yang dipinjam hanya di perbolehkan sebanyak 4 barang dalam 1 hari</p>
            <p>5. Jika barang hilang, yang bertanggung jawab atas barang tersebut adalah Peminjam yang terakhir kali meminjam barang tersebut jika dinyatakan hilang selama 7 hari maka Peminjam yang terakhir kali meminjam barang tersebut harus mengganti dengan uang tunai 70%(tujuh puluh persen) dari harga barang tersebut.</p>
            <p>6. Jika barang rusak, yang bertanggung jawab atas barang tersebut adalag peminjam yang terakhir kali meminjma barang tersebut, dan harus mengganti dengan uang tunai sebanyan 50%(lima puluh persen) dari harga barang tersebut</p>
          </h4>
        </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <!-- TUTUP MODAL SNK -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
