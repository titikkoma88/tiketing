<?php
    include "androiddb.php";

    $x = $_POST['id'];

    mysqli_query($koneksi,
                "DELETE FROM registerdb 
                WHERE id = $x");

    
    $hasil = array();
    $hasil["status"] = true;
    echo json_encode ($hasil);

?>