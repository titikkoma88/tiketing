<?php
	$isiemail = $_POST["email"];
	$isinewpassword = $_POST["password"];

	if(empty($isiemail))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Email is required";
		echo json_encode($hasil);
		exit;
	}

	if(empty($isinewpassword))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Password is required";
		echo json_encode($hasil);
		exit;
	}

	include "androiddb.php";

	mysqli_query($koneksi, "update registerdb set password = md5('$isinewpassword') where email = '$isiemail'");

	$hasil = array();
	$hasil ["status"] = true;
	echo json_encode($hasil);
?>