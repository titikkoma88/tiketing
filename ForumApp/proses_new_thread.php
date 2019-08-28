<?php
	
	include "androiddb.php";

	$isiemail = $_POST["email"];
	$isijudul = $_POST["judul"];
	$isithread = $_POST["isi"];
	$tanggal = date("Y-m-d H:i:s");

	$data = mysqli_query ($koneksi, 
						"SELECT * FROM user
						WHERE email ='$isiemail'");

	$user = mysqli_fetch_array($data);
	$id   = $user["id"];

	if(empty($isiemail))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Email is required";
		echo json_encode($hasil);
		exit;
	}

	if(empty($isijudul))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Judul Thread is required";
		echo json_encode($hasil);
		exit;
	}

	if(empty($isithread))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Isi Thread is required";
		echo json_encode($hasil);
		exit;
	}


	mysqli_query($koneksi, "INSERT INTO `thread` ( `judul`, `isi`, `id`, `email`, `tanggal`) 
		VALUES ( '$isijudul', '$isithread', '$id', '$isiemail', '$tanggal');");

	$hasil = array();
	$hasil ["status"] = true;
	echo json_encode($hasil);
?>