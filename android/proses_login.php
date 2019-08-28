<?php
	include "androiddb.php";

	$isiusername = $_POST ['username'];
	$isipassword = $_POST ['password'];
	$pilihapp = $_POST ['app'];

	if (empty($isiusername))
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
		$hasil["pesan"] = "Password is kosong";
		echo json_encode($hasil);
		exit;
	}

	if ($pilihapp == "AST Desktop")
	{
        $apps = 'ast_desktop';

	}

	elseif ($pilihapp == "AST WEB") 
	{
		$apps = 'ast_web';

	}

	else {

		$hasil = array();
		$hasil ["status"] = false;
		$hasil["pesan"] = "Unknown Apps";
		echo json_encode($hasil);
		exit;
	}

	$data = mysqli_query($koneksi,
		"SELECT * FROM user a 
		LEFT JOIN `user_app` b ON a.id_user = b.id_user
		WHERE a.username = '$isiusername' AND a.password = md5('$isipassword') AND b.app ='$apps'") or die(mysqli_error($koneksi));
		 
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
	$hasil["id_user"] = $baris->id_user;
	$hasil["level"] = $baris->level;
	$hasil["status"] = true;
	echo json_encode($hasil);

?>