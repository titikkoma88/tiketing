
	<section class="content">
		<h4><strong>DETAIL DATA BARANG</strong></h4>
		
		<table class="table table-bordered table-striped">
			<?php $no=1;
            foreach ($datauser->result() as $rows) { ?>
				<tr>
					<th>Nama</th>
					<td><?= $rows->nama ?></td>
				</tr>
				<tr>
					<th>Username</th>
					<td><?= $rows->username ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?= $rows->email ?></td>
				</tr>
				<tr>
					<th>No Telp</th>
					<td><?= $rows->telp ?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td><?= $rows->alamat ?></td>
				</tr>
				<tr>
					<th>Level</th>
					<td><?= $rows->level ?></td>
				</tr>
				<tr>
					<td>
						<img src="<?php echo base_url('assets/dist/img/'.$rows->foto);?>" width="90" height="110">
					</td>
					<td></td>
				</tr>
			<?php }
            ?>
		</table>

		<button type="button" class="btn btn-primary" onclick="javascript: window.history.go(-1)">
            <i class="fa fa-plus-circle"></i> Kembali
         </button>
	</section>
