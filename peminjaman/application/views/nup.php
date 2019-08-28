<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="10">
	<title>NUP</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	*{
		padding: 0;
		margin: 0;
	}
	body {
		background-color: #fff;
		margin: 0;
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

	.div-bg { 
	background-image:url(<?php echo base_url()?>assets/dist/img/modern-cilejit.jpg);
	background-color: #cccccc;
	  height: 500px;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	  position: relative;
	overflow-x: hidden;
	margin: 0 0 0 0;
	
 	}

 	.hero-image {
	  background-image: url(<?php echo base_url()?>assets/dist/img/modern-cilejit.jpg);
	  background-color: #cccccc;
	  height: 900px;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	  position: relative;
	}

	.hero-text {
	  text-align: center;	
	  position: absolute;
	  top: 70%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  color: white;
	}

	#container {
		margin: 0;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	#input{
		 background: rgba(23, 20, 20, 0.52);
		 text-align: center;
		 font-size:30pt;
		 font-family:impact;
		 color:#eee;
		 width:100%;
		 height:40px;
		 padding:5px 5px 5px 10px;
		 margin:3px;
		 border-radius:3px;
		 border:none;
	}
	#input[type="submit"]{
	 background:rgba(31, 15, 2, 0.78);
	 color:#fff;
	 cursor:pointer;
	 
	}
	#input:hover, #input:focus{
	 background:rgba(97, 52, 13, 0.55);
	 outline-style:none;
	}
	#input[type="submit"]:hover, #input[type="submit"]:focus{
	 background:rgba(31, 15, 2, 0.78);
	}
	</style>
</head>
<body>

<div id="container">
	                      
	<div class="row" >
	<div class="col-lg-12 hero-image" >
		<div class="hero-text">
			<input class="form-control" id="input" name="nama" placeholder="Nama" value="NUP :  <?= $nup ?>"   disabled>
		</div>
	</div>
	</div>

</div>


</body>
</html>