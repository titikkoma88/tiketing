<?php
	
	include "androiddb.php";

	$isivote = $_POST["vote"];
	$isithread= $_POST["id_thread"];
	$isiemail = $_POST["email"];
	$tanggal = date("Y-m-d H:i:s");

	$data = mysqli_query ($koneksi, 
						"SELECT * FROM rating a LEFT JOIN `user` b ON a.id_user = b.id 
						WHERE b.email ='$isiemail' AND a.id_thread='$isithread'");

	$baris = mysqli_fetch_object($data);
	if($baris != NULL)
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "User has given a rate";
		echo json_encode($hasil);
		exit;	
	}

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

	if(empty($isivote))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Rate is required";
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


	mysqli_query($koneksi, "INSERT INTO `rating` (`vote`, `tanggal`, `id_user`, `id_thread`) 
		VALUES ('$isivote', '$tanggal', '$id', '$isithread');");

	$hasil = array();
	$hasil ["status"] = true;
	echo json_encode($hasil);
?>