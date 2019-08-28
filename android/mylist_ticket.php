<?php
    include "androiddb.php";

    $iduser 		= $_GET["a"];
    $isiapp 		= $_GET["b"];

    $data = mysqli_query($koneksi, 
    	"SELECT * FROM ticket
         WHERE reported = '$iduser' AND app = '$isiapp'");

    $hasil = array();

    while($baris = mysqli_fetch_object($data))
    {
        $hasil[] = $baris;
    }

    echo json_encode($hasil);

?>