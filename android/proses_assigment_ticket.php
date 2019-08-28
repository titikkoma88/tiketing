<?php 
	
	include "androiddb.php";

	$tanggal = date("Y-m-d H:i:s");

	$hari = Null;
    $bulan= Null;
    $tahun = Null;
	
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

	$pilihanprog = $_POST["progress"];
	if ($pilihanprog == "On Process")
	{
        $progress = 0;

	}
	else
	{
		$progress = 100;
	}

	$deskripsi_progress = $_POST["deskripsi_progress"];
	if(empty($deskripsi_progress))
	{
		$hasil = array();
		$hasil["status"] = false;
		$hasil["pesan"] = "Deskripsi is required";
		echo json_encode($hasil);
		exit;	
	}

	 $tanggal_selesai = date('Y-m-d', strtotime($_POST["selesai"]));

        list($ys, $ms, $ds) = explode ( '-', $tanggal_selesai);
        list($ym, $mm, $dm) = explode ( '-', $tanggal);
        $dt = $ds - $dm;
        $mt = $ms - $mm;
        $yt = $ys - $ym;

        $harit = $dt;
    	$bulant = $mt;
    	$tahunt = $yt;

    if($progress==100)
    {
        $status = 5;
        $tanggal_solved = $tanggal; 
    }
    else
    {
    	$status = 5;
    	$tanggal_solved = "0000-00-00 00:00:00";
    }


	$update_ticket = mysqli_query ($koneksi, 
						"UPDATE ticket SET tanggal_solved = '$tanggal_solved', status = '$status', progress = '$progress' 
						 WHERE id_ticket = '$idticket'");

	$update_tracking = mysqli_query ($koneksi, 
						"UPDATE tracking SET hari = '$hari', bulan = '$bulan', tahun = '$tahun' 
						 WHERE id_ticket = '$idticket'");

	$delete_feedback = mysqli_query ($koneksi, 
						"DELETE FROM history_feedback WHERE id_ticket = '$idticket'");

	mysqli_query($koneksi, "INSERT INTO `tracking` (`id_ticket`, `tanggal`, `status`, `id_user`, `deskripsi`, `tanggal_selesai`, `hari`, `bulan`, `tahun`) 
		VALUES ('$idticket', '$tanggal', 'Up Progress', '$iduser', '$deskripsi_progress', '$tanggal_selesai', '$harit', '$bulant', '$tahunt');");

	$hasil = array();
	$hasil ["status"] = true;
	echo json_encode($hasil);


?>