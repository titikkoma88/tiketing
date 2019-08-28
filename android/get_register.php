<?php
include "androiddb.php";

// http://localhost/android/get_register.php?a=5

$id = $_GET['a'];

$data = mysqli_query($koneksi,
        "SELECT * FROM registerdb
         WHERE id=$id");

$hasil = mysqli_fetch_object($data);
         echo json_encode($hasil);
?>