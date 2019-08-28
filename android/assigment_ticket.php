<?php
    include "androiddb.php";

    $iduser         = $_GET["a"];
    $isiapp         = $_GET["b"];

    $data = mysqli_query($koneksi, 
        "SELECT A.id_ticket, A.reported, A.problem_summary, B.nama, C.id_user
        FROM ticket A 
        LEFT JOIN user B ON B.id_user = A.reported 
        LEFT JOIN user C ON C.id_user = A.id_support
        WHERE A.id_support = '$iduser' AND A.status IN (3,4,5)
        ORDER BY A.id_ticket DESC");
    
    	//"SELECT * FROM ticket
        // WHERE id_support = '$iduser' AND status IN (3,4,5)");

    $hasil = array();

    while($baris = mysqli_fetch_object($data))
    {
        $hasil[] = $baris;
    }

    echo json_encode($hasil);

?>