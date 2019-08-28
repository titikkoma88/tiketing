<?php

	include "androiddb.php";

	$isiemail = $_POST ["email"];

	// pengecekan data duplicate
	$data = mysqli_query ($koneksi, 
							"SELECT * FROM registerdb
							WHERE email ='$isiemail'");

	$baris = mysqli_fetch_object($data);
	if($baris != NULL)
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "Email already exits";
		echo json_encode($hasil);
		exit;
	}

	if(empty($isiemail))
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "Email is required";
		echo json_encode($hasil);
		exit;
	}

	$isinama = $_POST ["nama"];
	if(empty($isinama))
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "Nama is required";
		echo json_encode($hasil);
		exit;
	}

	$isipassword = $_POST ["password"];
	if(empty($isipassword))
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "Password is required";
		echo json_encode($hasil);
		exit;
	}

	$isitelp = $_POST ["telp"];
	if(empty($isitelp))
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "Telp is required";
		echo json_encode($hasil);
		exit;
	}

	$isifoto = $_POST ["foto"];
	$gambar = base64_decode($isifoto);
	$filegambar = imagecreatefromstring($gambar);
	$namafile = date("dMYHis") . ".jpg";

	imagejpeg($filegambar, "images/$namafile");
	imagedestroy($filegambar);

	//echo "Terima kasih sudah mendaftar";
	//echo "<br/>";
	//echo "Email anda adalah $isiemail";
	//echo "<br/>";
	//echo "Nama anda adalah $isinama";
	//echo "<br/>";
	//echo "Password anda $isipassword";
	//echo "<br/>";
	//echo "Nomor Telp anda adalah $isitelp";

	//$koneksi = mysqli_connect("localhost",
	//						"root",
	//						"",
	//						"androiddb");


	mysqli_query($koneksi,"INSERT INTO `user` (`nama`, `email`, `password`, `telp`, foto) 
		VALUES ('$isinama', '$isiemail', MD5('$isipassword'), '$isitelp', '$namafile');");

	$hasil = array();
	$hasil["status"] = true;
	echo json_encode($hasil);

?>