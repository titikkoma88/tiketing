<div class="row">
<ol class="breadcrumb">
<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
<li class="active">My Profile</li>
</ol>
</div><!--/.row-->

<br>


<div class="row">

<div class="col-lg-12">
<div class="panel panel-default">

<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">Profile</a></div>

	<div class="panel-body">

		<div class="list-group">
		<a href="#" class="list-group-item active">
  		GENERAL INFORMASI
		</a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-asterisk"></span> &nbsp;<?php echo $id_user;?></a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-user"></span> &nbsp;<?php echo $nama;?></a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-map-marker"></span> &nbsp;<?php echo $alamat;?></a>
<!--	<a href="#" class="list-group-item"><span class="glyphicon glyphicon-tint"></span> &nbsp;<?php echo $jk;?></a>	-->
		</div>

	</div>


	<div class="panel-body">

		<div class="list-group">
		<a href="#" class="list-group-item active">
  		BUSSINES INFORMASI
		</a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-leaf"></span> &nbsp;<?php echo $level;?></a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-th-large"></span> &nbsp;<?php echo $user;?></a>
		</div>

	</div>
	

	<div class="panel-body">
	<form action="<?php echo base_url();?><?php echo $url;?>" method="post">
	<input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user;?>">

		<div class="list-group">
		<a href="#" class="list-group-item active">
  		CHANGE PASSWORD
		</a><br>

			<div class="form-group">
			<label>Username</label>
			<input type="username" class="form-control" name="username" readonly="readonly" placeholder="Isi username" value="<?php echo $username;?>">
			</div>

			<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="" value="12345">
			</div>
		
		<button type="submit" class="btn btn-primary">
		<i class="fa fa-key"></i>
		<span> Login </span>
		</button>
		</div>

	</form>
	</div>

</div>
</div>

</div><!--/.row-->	


