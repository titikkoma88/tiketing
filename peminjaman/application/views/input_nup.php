<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>NUP</title>
	<link rel="stylesheet" href="syle.css" />
	<script type="text/javascript" src="jquery-1.7.2.js"></script>
	<script type="text/javascript" >
		$(document).ready(function(){
			 $("#play").click(function(){
			  document.getElementById('suarabel').play();  
			 });
		});
	</script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}


	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<audio id="suarabel" src="<?php echo base_url('assets/dist/audio/Airport_Bell.mp3');?>"></audio>
<audio id="suarabelnomorurut" src="<?php echo base_url('assets/dist/audio/nomor-urut.wav');?>"  ></audio>
<audio id="suarabelsuarabelloket" src="<?php echo base_url('assets/dist/audio/loket.wav');?>"  ></audio>
      
<audio id="belas" src="<?php echo base_url('assets/dist/audio/belas.wav');?>"  ></audio>
<audio id="sebelas" src="<?php echo base_url('assets/dist/audio/sebelas.wav');?>"  ></audio>
<audio id="puluh" src="<?php echo base_url('assets/dist/audio/puluh.wav');?>"  ></audio>
<audio id="sepuluh" src="<?php echo base_url('assets/dist/audio/sepuluh.wav');?>"  ></audio>
<audio id="ratus" src="<?php echo base_url('assets/dist/audio/ratus.wav');?>"  ></audio>
<audio id="seratus" src="<?php echo base_url('assets/dist/audio/seratus.wav');?>"  ></audio>
<audio id="suarabelloket1" src="<?php echo site_url()?>assets/dist/audio/<?php echo $loket; ?>.wav"  ></audio>

<div id="container">
	<h1 align="center">Input NUP!</h1>
	<form method="POST" action="simpan" ">
		<div class="row">
			<div align="center">
				<label>No NUP</label>
				<input class="form-control" name="nup" placeholder="NUP" value="">
			</div>
		</div><br>
		<div align="center"><button type="submit" name="submit" class="btn btn-primary">Simpan</button></div>
	</form>
	<p class="footer"></p>
</div>

</body>
</html>