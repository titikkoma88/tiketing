<?php
	
	include "androiddb.php";

	$isireply = $_POST["reply"];
	$isithread= $_POST["id_thread"];
	$isiemail = $_POST["email"];
	$tanggal = date("Y-m-d H:i:s");

	if(empty($isiemail))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Email is required";
		echo json_encode($hasil);
		exit;
	}

	$data = mysqli_query ($koneksi, 
						"SELECT * FROM user
						WHERE email ='$isiemail'");

	$user = mysqli_fetch_array($data);
	$id   = $user["id"];

	if(empty($isireply))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Comment Thread is required";
		echo json_encode($hasil);
		exit;
	}

	if(empty($isithread))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Thread is required";
		echo json_encode($hasil);
		exit;
	}


	mysqli_query($koneksi, "INSERT INTO `reply` ( `balasan`, `tanggal`, `id`, `id_thread`) 
		VALUES ( '$isireply', '$tanggal', '$id', '$isithread');");

	$hasil = array();
	$hasil ["status"] = true;
	echo json_encode($hasil);
?>