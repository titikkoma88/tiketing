<?php
	
	include "androiddb.php";

	$isiuser 		= $_POST["user"];
	$isikategori 	= $_POST["kategori"];
	$isisubkategori = $_POST["sub_kategori"];
	$isiprosummary 	= strtoupper(trim($_POST["problem_summary"]));
	$isiprodetail 	= strtoupper(trim($_POST["problem_detail"]));
	$isifoto 		= $_POST["foto"];
	$isiapp 		= $_POST["app"];
	

	// Create id ticket automatic
	$data_idticket = mysqli_query($koneksi,"SELECT max(id_ticket) as max_code FROM ticket");

	$row_idticket = mysqli_fetch_array($data_idticket);

        $max_id = $row_idticket['max_code'];

        $max_fix = (int) substr($max_id, 9, 4);

        $max_nik = $max_fix + 1;

        $tanggal = $time = date("d");
        $bulan = $time = date("m");
        $tahun = $time = date("Y");

        $nik = "T".$tahun.$bulan.$tanggal.sprintf("%04s", $max_nik);

    $ticket = $nik;


    //echo json_encode($isiapp);
	//	exit;

	//echo $ticket; exit;

	$tanggal 		= date("Y-m-d H:i:s");
	$status 		= "Created Ticket";
	$deskripsi 		= "TIKET DI BUAT";
	$type 			= "image/jpeg";
    

	if(empty($isiuser))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "User is required";
		echo json_encode($hasil);
		exit;
	}

	// Get user
    $data_user = mysqli_query ($koneksi, 
						"SELECT * FROM user
						WHERE username ='$isiuser'");

	$row_user = mysqli_fetch_array($data_user);
	$id_user  = $row_user["id_user"];

	if(empty($isikategori))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Kategori is required";
		echo json_encode($hasil);
		exit;
	}

	// Get id Kategori
    $data_kategori = mysqli_query ($koneksi, 
						"SELECT * FROM kategori
						WHERE nama_kategori ='$isikategori'");

	$row_kategori = mysqli_fetch_array($data_kategori);
	$id_kategori  = $row_kategori["id_kategori"];

	if(empty($isisubkategori))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Sub kategori is required";
		echo json_encode($hasil);
		exit;
	}

	// Get id subKategori
    $data_subkategori = mysqli_query ($koneksi, 
						"SELECT * FROM sub_kategori
						WHERE nama_sub_kategori ='$isisubkategori'");

	$row_subkategori = mysqli_fetch_array($data_subkategori);
	$id_subkategori  = $row_subkategori["id_sub_kategori"];

	if(empty($isiprosummary))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Subjek Masalah is required";
		echo json_encode($hasil);
		exit;
	}

	if(empty($isiprodetail))
	{
		$hasil = array();
		$hasil ["status"] = false;
		$hasil ["pesan"] = "Deskripsi Masalah is required";
		echo json_encode($hasil);
		exit;
	}


	$namafile = date("dMYHis") . ".jpg";


	// Insert tracking

    $input_tracking = mysqli_query ($koneksi, 
						"INSERT INTO tracking (`id_ticket`, `tanggal`, `status`, `deskripsi`, `id_user`)
						VALUES ('$ticket', '$tanggal', '$status', '$deskripsi', '$id_user');");

    $input_foto = mysqli_query ($koneksi, 
						"INSERT INTO file (`nama`, `type`, `reported`, `id_ticket`)
						VALUES ('$namafile', '$type', '$id_user', '$ticket');");

	//echo $isiprodetail; exit();

	mysqli_query($koneksi, "INSERT INTO `ticket` ( `id_ticket`, `tanggal`, `reported`, `id_sub_kategori`, `problem_summary`, `problem_detail`, `status`, `progress`, `app`) 
		VALUES ( '$ticket', '$tanggal', '$id_user', '$id_subkategori', '$isiprosummary', '$isiprodetail', '1', '0', '$isiapp');");

	$hasil = array();
	$hasil ["status"] = true;
	echo json_encode($hasil);
?>