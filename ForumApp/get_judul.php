<?php
include "androiddb.php";

$id = $_GET['a'];

$data = mysqli_query($koneksi,
        "SELECT * FROM thread
         WHERE id_thread=$id");

$hasil = mysqli_fetch_object($data);
         echo json_encode($hasil);
?>