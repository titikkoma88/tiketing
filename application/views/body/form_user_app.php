<script language="javascript" type="text/javascript">
    
	$(document).ready(function() {

		$("#id_ket_kategori").change(function(){
	 		// Put an animated GIF image insight of content
		
			var data = {id_ket_kategori:$("#id_ket_kategori").val()};
			$.ajax({
					type: "POST",
					url : "<?php echo base_url().'select/select_akses'?>",				
					data: data,
					success: function(msg){
						$('#div-order').html(msg);
					}
			});
		});   

	});

</script>						
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li><a href="javascript: window.history.go(-1)">List Aplikasi User</a></li>
				<li class="active">Aplikasi User</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
					<a href="#" style="text-decoration:none">
					Form Tambah Data Aplikasi User</a></div>
					<div class="panel-body">
						
					<div class="col-md-5">
						<form method="post" action="<?php echo base_url();?><?php echo $url;?>" accept-charset="utf-8">

						<input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">

							<div class="form-group">
								<label>User</label>
								<?php echo form_dropdown('id_nmuser',$dd_nmuser, $id_nmuser, ' id="id_nmuser" required class="form-control"');?>
							</div>

							<div class="form-group">
								<label>Akses</label>
								<?php echo form_dropdown('id_ket_kategori',$dd_ket_kategori, $id_ket_kategori, ' id="id_ket_kategori" required class="form-control"');?>
							</div>

							<div id="div-order">
								<?php if($flag=="edit")

								{

								 //echo "<label>User Akses</label>";
			                     //echo form_dropdown('id_akses',$dd_akses, $id_akses, ' id="id_akses" required class="form-control"');

								}else{

								}
							    ?>
						    </div>

							<div class="form-group">
								<label>Aplikasi</label>
								<?php echo form_dropdown('id_app',$dd_app, $id_app, ' id="id_app" required class="form-control"');?>
							</div>

							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="<?php echo base_url();?>user_app/user_list"  class="btn btn-default">Batal</a>

				     	</form>
				    </div>

					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
