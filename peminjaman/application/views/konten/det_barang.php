	<script>
	  $(function () {
	    $('#example1').DataTable()
	    $('#example2').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : false,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : false
	    })
	    $('#example3').DataTable()
	    $('#example4').DataTable()
	  })
	</script>
	

	<section class="content">

		<button type="button" class="btn btn-primary" onclick="javascript: window.history.go(-1)">
        	<i class="fa  fa-chevron-circle-left"></i> Kembali
    	</button>

		<h4><strong>DETAIL DATA BARANG</strong></h4>
		
		<table class="table table-bordered table-striped">
			<?php $no=1;
            foreach ($databarang->result() as $rows) { ?>
            	<tr>
					<td>
						<a data-toggle="modal" data-target="#myModal<?=$no?>" href="">
						<img src="<?php echo base_url('assets/dist/img/'.$rows->gambar_barang);?>" width="90" height="110">
						</a>
					</td>
					<td></td>
				</tr>
				<tr>
					<th>Spesifikasi Barang</th>
					<td><?= $rows->nm_jenis ?> <?= $rows->spek_barang ?></td>
				</tr>
				<tr>
					<th>Harga Barang</th>
					<td><?= "Rp." . number_format($rows->harga,2,',','.') ?></td>
				</tr>
				<tr>
					<th>Kondisi</th>
					<td><?= $rows->kondisi ?></td>
				</tr>
				<tr>
					<th>Supplier</th>
					<td><?= $rows->nm_supplier ?></td>
				</tr>
				<tr>
					<th>Tanggal Beli</th>
					<td><?= $rows->tanggal_beli ?></td>
				</tr>

				<!-- Modal -->
                      <div class="modal fade" id="myModal<?=$no?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Gambar Barang</h4>
                            </div>
                            <div class="modal-body">
                              <center>
                                <img src="<?php echo base_url('assets/dist/img/'.$rows->gambar_barang);?>" alt="" style = 
                                  "max-height: 300px;
                                  display: block;
                                  margin-left: auto;
                                  margin-right: auto;">
                              </center>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                            </div>
                          </div>
                        </div>
                      </div>

			<?php }
            ?>
		</table>

	</section>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading" style="border-top: 3px solid #4ABDAC;"><h4>TRACKING DATA BARANG</h4></div>
					<div class="panel-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
				              <tr>
				  	            <th>NO</th>
				  	            <th>TANGGAL PINJAM</th>
				                <th>PEMINJAM</th>
				                <th>STATUS</th>
				                <th>TANGGAL KEMBALI</th>
				                <th>CATATAN</th>
				                <th>KETERANGAN</th>
				              </tr>
			              	</thead>
			              	<tbody>
			              	<?php $no = 0; foreach($trackingbarang->result() as $row) : $no++;?>
				              <tr>
				   	            <td><?php echo $no;?></td>
				  	            <td><?php echo $row->tgl_pinjam;?></td>
				  	            <td><?php echo $row->nama;?></td>
				  	            <td>
				  	            	<?php 
										if($row->status==0) { echo "";}
										else if($row->status==1) { echo "<i style='color:red;'>Barang Sedang Dipinjam</i>";}
										else if($row->status==2) { echo "Barang Sudah Dikembalikan";}
									?>
				  	            </td>
				  	            <td><?php echo $row->tgl_kembali;?></td>
				  	            <td>
				  	            	<?php 
										if($row->kembali==0) { echo "";}
										else if($row->kembali==1) { echo "Dikembalikan Sendiri";}
										else if($row->kembali==2) { echo "Dititipkan";}
									?>
				  	            </td>
				  	            <td><?php echo $row->ket;?></td>
				              </tr>
			              	<?php endforeach;?>
			              	</tbody>
            			</table>
            		</div>
				</div>
			</div>
     	</div>
	</div>

	
