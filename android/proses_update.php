<?php
    include "androiddb.php";
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];

    mysqli_query($koneksi,
                "UPDATE registerdb 
                SET nama = '$nama',
                    email = '$email',
                    telp = '$telp'
                WHERE id = '$id'");
    
    $hasil = array();
    $hasil["status"] = true;
    echo json_encode ($hasil);

?>