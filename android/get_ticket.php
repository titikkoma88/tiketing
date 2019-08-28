<?php
    include "androiddb.php";

    $idticket 		= $_GET["a"];
    
    $data = mysqli_query($koneksi, "SELECT A.id_ticket, A.tanggal, A.reported, D.nama_kategori, C.nama_sub_kategori, 
                                    A.problem_summary, A.problem_detail, B.nama 
    								FROM ticket A 
    								LEFT JOIN user B ON B.id_user = A.reported
                                    LEFT JOIN sub_kategori C ON C.id_sub_kategori = A.id_sub_kategori
                                    LEFT JOIN kategori D ON D.id_kategori = C.id_kategori
    								WHERE A.id_ticket = '$idticket'");

    $hasil = mysqli_fetch_object($data);
             echo json_encode($hasil);

?>