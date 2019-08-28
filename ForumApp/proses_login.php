<?php
	$isiemail = $_POST ['email'];
	$isipassword = $_POST ['password'];

	if (empty($isiemail))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil["pesan"] = "Email is required";
		echo json_encode($hasil);
		exit;
	}

	if (empty($isipassword))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil["pesan"] = "Password is required";
		echo json_encode($hasil);
		exit;
	}

	include "androiddb.php";

	$data = mysqli_query($koneksi,
		"SELECT * FROM user
		WHERE email = '$isiemail'
		AND password =md5('$isipassword')") or die(mysqli_error($koneksi));

	$baris = mysqli_fetch_object($data);
	

	if ($baris == NULL)
	{
		$hasil = array ();
		$hasil ["status"] = false;
		$hasil["pesan"] = "Email or Password invalid";
		echo json_encode($hasil);
		exit;
	}
	
	$hasil = array();
	$hasil["nama"] = $baris->nama;
	$hasil["status"] = true;
	echo json_encode($hasil);

?>