<?php 
	
	include "androiddb.php";

	$tanggal = date("Y-m-d H:i:s");
	$status = 4;

	$idticket = $_POST["id_ticket"];
	if(empty($idticket))
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "id ticket is required";
		echo json_encode($hasil);
		exit;
	}

	$iduser = $_POST["id_user"];
	if(empty($iduser))
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "id user is required";
		echo json_encode($hasil);
		exit;	
	}

	$update_ticket = mysqli_query ($koneksi, 
						"UPDATE ticket SET tanggal_proses = '$tanggal', id_support = '$iduser', status = '$status' 
						 WHERE id_ticket = '$idticket'");

	mysqli_query($koneksi, "INSERT INTO `tracking` (`id_ticket`, `tanggal`, `status`, `id_user`, `deskripsi`) 
		VALUES ('$idticket', '$tanggal', 'Ticket disetujui', '$iduser', 'TICKET DITERIMA VENDOR SUPPORT');");

	$hasil = array();
	$hasil ["status"] = true;
	echo json_encode($hasil);


?>