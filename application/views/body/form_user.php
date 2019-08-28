<script language="javascript" type="text/javascript">
    
</script>				
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li><a href="javascript: window.history.go(-1)">List User</a></li>
				<li class="active">User</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
					<a href="#" style="text-decoration:none">Tambah Data User</a></div>
					<div class="panel-body">
						
					<div class="col-md-6">
						<form method="post" action="<?php echo base_url();?><?php echo $url;?>" enctype="multipart/form-data" accept-charset="utf-8">

						<input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user;?>">

							<div class="form-group">
								<label>Nama</label>
								<input class="form-control" name="nama" placeholder="Isi Nama" value="<?php echo $nama;?>" required>
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<input class="form-control" name="alamat" placeholder="Isi Alamat " value="<?php echo $alamat;?>" required>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email" placeholder="Isi Alamat Email " value="<?php echo $email;?>" required>
							</div>

							<div class="form-group">
								<label>Username</label>
								<input type="username" class="form-control" name="username" placeholder="Isi username" value="<?php echo $username;?>">	
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password" placeholder="*****" value="<?php echo $password;?>">
							</div>

							<div class="form-group">
								<label>Level</label>
								<?php echo form_dropdown('id_level',$dd_level, $id_level, ' id="id_level" required class="form-control"');?>
							</div>
							
							<!--
							<div class="form-group">
								<label>User Status</label>
								<?php echo form_dropdown('id_vendor',$dd_vendor, $id_vendor, ' id="id_vendor" required class="form-control"');?>
							</div>
							-->

							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="<?php echo base_url();?>user/user_list"  class="btn btn-default">Batal</a>

				     	</form>
				    </div>

					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
