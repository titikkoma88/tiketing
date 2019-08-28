<?php
    include "androiddb.php";

    $isiapp 		= $_GET["b"];
    
    $data = mysqli_query($koneksi, "SELECT A.id_ticket, A.reported, A.problem_summary, B.nama 
    								FROM ticket A 
    								LEFT JOIN user B ON B.id_user = A.reported 
    								WHERE A.app = '$isiapp'
    								ORDER BY A.id_ticket DESC");

    $hasil = array();

    while($baris = mysqli_fetch_object($data))
    {
        $hasil[] = $baris;
    }

    echo json_encode($hasil);

?>