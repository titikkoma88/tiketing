<?php
    include "androiddb.php";

    $data = mysqli_query($koneksi, "SELECT a.id_thread, a.judul, a.isi, a.id, a.email, IFNULL(ROUND(AVG(b.vote),1),0) AS vote 
    	FROM thread a LEFT JOIN rating b on a.id_thread = b.id_thread GROUP BY a.id_thread");

    $hasil = array();

    while($baris = mysqli_fetch_object($data))
    {
        $hasil[] = $baris;
    }

    echo json_encode($hasil);

?>