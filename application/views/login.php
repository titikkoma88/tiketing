<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Ticketing</title>
<link rel="icon" href="<?php echo base_url('assets/favicon.png') ?>"  type="image/x-icon">

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>

<style type="text/css">
body {
	background-image:url(<?php echo base_url();?>assets/images/background4.jpg);
	background-attachment: fixed;
	background-size: cover;
	overflow-x: hidden;
}
.form-control-feedback { top:0px; }
.panel-default { 
	margin-top: 160px;
	margin-right: 100px;
	margin-left: 30px;
	background: #A9A9A9;
 }

</style>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Login Aplikasi Ticketing</div>
				<div class="panel-body">
					<form action="<?php echo base_url();?>login/login_akses" method="post">
						
							<div class="form-group has-feedback">
								
								<input class="form-control" placeholder="Username" name="username" type="text" required>
								<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
								
							</div>
							<div class="form-group has-feedback">
								
								<span><input class="form-control" placeholder="Password" name="password" type="password" required></span>
								<span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
							<!--<i class="ace-icon fa fa-lock"></i>-->
							</div>

							<div class="form-group">
								<label>Aplikasi</label>
								<?php echo form_dropdown('id_app',$dd_app, $id_app, ' id="id_app" required class="form-control"');?>
							</div>
							
							<button type="submit" class="btn btn-primary">
							<i class="fa fa-key"></i>
							<span> Login </span>
							</button>
						
					</form>
				</div>
			</div>

			<?php echo $this->session->flashdata("msg");?>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
