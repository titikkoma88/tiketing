<?php
    include "androiddb.php";

    $id = $_GET['b'];

    $data = mysqli_query($koneksi, "SELECT * from reply WHERE id_thread=$id");

    $hasil = array();

    while($baris = mysqli_fetch_object($data))
    {
        $hasil[] = $baris;
    }

    echo json_encode($hasil);

?>