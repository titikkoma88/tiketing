<?php
include "androiddb.php";

// http://localhost/android/get_register.php?a=5

$nama = $_GET['a'];

$data = mysqli_query($koneksi,
        "SELECT * FROM user
         WHERE username = '$nama'");

$hasil = mysqli_fetch_object($data);
         echo json_encode($hasil);
?>