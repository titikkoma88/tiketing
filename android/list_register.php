<?php
    include "androiddb.php";

    $data = mysqli_query($koneksi, "select * from registerdb");

    $hasil = array();

    while($baris = mysqli_fetch_object($data))
    {
        $hasil[] = $baris;
    }

    echo json_encode($hasil);

?>