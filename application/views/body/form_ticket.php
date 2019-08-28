<script language="javascript" type="text/javascript">
	$(document).ready(function() {
		$("#id_kategori").change(function(){
	 		// Put an animated GIF image insight of content
			var data = {id_kategori:$("#id_kategori").val()};
			$.ajax({
					type: "POST",
					url : "<?php echo base_url().'select/select_sub_kategori'?>",				
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
		<li class="active">New Ticket</li>
	</ol>
</div><!--/.row-->
	
<br>		
		
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
				<a href="#" style="text-decoration:none; font-color:white">Ticket</a></div>
			<div class="panel-body">	
			<form method="post" action="<?php echo base_url();?><?php echo $url;?>" enctype="multipart/form-data" accept-charset="utf-8">
				<div class="col-md-12">
					<input type="hidden" class="form-control" name="id_ticket" value="<?php echo $id_ticket;?>">
					<input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user;?>">
					<div class="panel panel-danger">
						<div class="panel-heading">
							Pelapor Masalah 
						</div>
						<div class="panel-body">
							<div class="col-md-6">
								<!-- <div class="form-group">
								<label>NIK</label>
								<input class="form-control" name="nama" placeholder="Nama" value="<?php echo $nik;?>" disabled>
							    </div> -->
						    	<div class="form-group">
									<label>Nama</label>
									<input class="form-control" name="nama" placeholder="Nama" value="<?php echo $nama;?>" disabled>
						    	</div>
						    </div>
						    <div class="col-md-6">
							    <!--
							    <div class="form-group">
								<label>Vendor</label>
								<?php echo $vendor;?>
							    </div>

							    <div class="form-group">
								<label>Nama Vendor</label>
								<input class="form-control" name="namavendor" placeholder="Departemen" value="<?php echo $namavendor;?>" disabled>
							    </div>
							    
							    <div class="form-group">
								<label>Bagian Departemen</label>
								<input class="form-control" name="departemen" placeholder="Departemen" value="<?php echo $bagian_departemen;?>" disabled>
							    </div>
							    -->
						    </div>		
						</div>
					</div>
					<div class="panel panel-danger">
						<div class="panel-heading">
							Deskripsi Masalah 
						</div>
						<div class="panel-body">
							<div class="col-md-6">
								<div class="form-group">
									<label>Kategori Masalah</label>
									<?php echo form_dropdown('id_kategori',$dd_kategori, $id_kategori, ' id="id_kategori" required class="form-control"');?>
								</div>
								<div id="div-order">
									<?php 
									if($flag=="edit")
									{
				                    	echo form_dropdown('id_sub_kategori',$dd_sub_kategori, $id_sub_kategori, 'required class="form-control"');
									}else{}
								    ?>
								</div>
								<!--
								<div class="form-group">
									<label>Ugently / Kondisi</label>
									<?php echo form_dropdown('id_kondisi',$dd_kondisi, $id_kondisi, ' id="id_kondisi" required class="form-control"');?>
								</div>
								 -->
								<div class="form-group">
									<label>Subject Masalah</label>
									<input class="form-control" name="problem_summary" placeholder="problem_summary" value="<?php echo $problem_summary;?>" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Deskripsi Masalah</label>
									<textarea name="problem_detail" class="form-control" rows="10"><?php echo $problem_detail;?></textarea>
								</div>
							</div>			
						</div>
					</div>
					<div class="alert alert-danger">
						- Mohon dihindarkan Nama File menggunakan symbol-symbol seperti <b> .,+*/\#$%^&() </b> Untuk menghindari Error.<br>
						- File yang di upload adalah file dengan format JPEG atau PNG.<br>
						- Maksimal 10 File
					</div>
					<table id="table" class="table table-bordered">
						<tr>
							<th><input type="button" name="ke" value="+ Dokumen" class="cloneTableRows btn btn-sm  btn-success"/></th>
							<th>File Dokumen</th>
						</tr>
						<tr>
							<td valign="top"><a href="#" alt="" class="delRow btn btn-danger" style="visibility: hidden;">Hapus</a></td>
							<td valign="top"><input type="file" class='soft' name="userfile[]" class="form-control span6" ></td> 
						</tr>
					</table>
					<br><br>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				  <a href="<?php echo base_url();?>home"  class="btn btn-default">Batal</a>
				</div>
			</form>
			</div>
		</div>
	</div>
</div><!--/.row-->	
		
		
