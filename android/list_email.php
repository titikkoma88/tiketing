<?php
    include "androiddb.php";

    $data = mysqli_query($koneksi, "SELECT * FROM reminder");

    $hasil = array();

    while($baris = mysqli_fetch_object($data))
    {
        $hasil[] = $baris;
    }

    echo json_encode($hasil);

?>