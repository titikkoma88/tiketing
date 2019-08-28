<?php
	include "androiddb.php";

	$isiemail = $_POST ["email"];
	$isitoken = $_POST ["token"];

	// pengecekan data duplicate
	$data = mysqli_query ($koneksi, 
						"SELECT * FROM reminder
						WHERE email ='$isiemail'");

	$baris = mysqli_fetch_object($data);
	if($baris != NULL)
	{
		mysqli_query($koneksi,"UPDATE `reminder` 
			SET  `token` =  '$isitoken' 
			WHERE email = '$isiemail';");

		$hasil = array();
		$hasil["status"] = true;
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

	if(empty($isitoken))
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "Token ga ada";
		echo json_encode($hasil);
		exit;
	}

	//echo $isitoken; exit();

	//echo "Email anda adalah $isiemail";
	//echo "<br/>";

	mysqli_query($koneksi,"INSERT INTO `reminder` (`email`,`token`) 
		VALUES ('$isiemail','$isitoken');");

	$hasil = array();
	$hasil["status"] = true;
	echo json_encode($hasil);

?>