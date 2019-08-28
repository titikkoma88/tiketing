			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li><a href="javascript: window.history.go(-1)">List User Akses</a></li>
				<li class="active">Tambah Data Akses</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">Tambah Data Akses</a></div>
					<div class="panel-body">
						
					<div class="col-md-6">
					<form method="post" action="<?php echo base_url();?><?php echo $url;?>">

					<input type="hidden" class="form-control" name="id_akses" value="<?php echo $id_akses;?>">

					<div class="form-group">
						<label>Nama User</label>
						<input class="form-control" name="user" value="<?php echo $user;?>" placeholder="Isikan User" required>
					</div>

					<div class="form-group">
						<label>Akses</label>
						<?php echo form_dropdown('id_ket_kategori',$dd_ket_kategori, $id_ket_kategori, ' id="id_ket_kategori" required class="form-control"');?>
					</div>

					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?php echo base_url();?>user_akses/user_list"  class="btn btn-default">Batal</a>
				    </div>

				     </form>


					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
