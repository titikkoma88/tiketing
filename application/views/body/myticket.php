
<div class="row">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active">My Ticket</li>
	</ol>
</div><!--/.row-->	

<br>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
				<a href="#" style="text-decoration:none">My Ticket</a> <a href="<?php echo base_url();?>myticket/pdfmyticket" class="btn btn-danger" target="_blank">Pdf</a>
			</div>
			<div class="panel-body">
			</div>
			<div class="panel-body">
				<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
					<thead>
						<tr>
						    <th data-field="no" data-sortable="true" width="10px"> No</th>
						    <th data-field="idd" data-sortable="true">Id Ticket</th>
						    <th data-field="iddd" data-sortable="true">Tanggal Ticket</th>
						    <th data-field="idddd" data-sortable="true">Nama Kategori</th>
						    <th data-field="iddddd" data-sortable="true">Nama Sub Kategori</th>
						    <th data-field="idxdddddd" data-sortable="true">Problem Summary</th>
						    <th data-field="idxddddd" data-sortable="true">Progress (%)</th>
						    <th data-field="idddddd" data-sortable="true">Status</th>
						    <th data-field="iddfdddd" data-sortable="true">Feedback</th>
						</tr>
                    </thead>
                    <tbody>
                      <?php $no = 0; foreach($datamyticket as $row) : $no++;?>
						<tr>
						    <td data-field="no" width="10px"><?php echo $no;?></td>
						    <td data-field="id">
						        <?php if($row->status==4) {?>
						        <a href="<?php echo base_url();?>myticket/myticket_detail/<?php echo $row->id_ticket;?>"><?php echo $row->id_ticket;?></a>
						        <?php } else if($row->status==5) {?>
						        <a href="<?php echo base_url();?>list_ticket_user/ticket_view/<?php echo $row->id_ticket;?>"><?php echo $row->id_ticket;?></a>
						        <?php } else if($row->status==6) {?>
						        <a href="<?php echo base_url();?>list_ticket_user/ticket_view/<?php echo $row->id_ticket;?>"><?php echo $row->id_ticket;?></a>
						        <?php } else if($row->status==1) {?>
						        <a href="<?php echo base_url();?>myticket/myticket_detail/<?php echo $row->id_ticket;?>"><?php echo $row->id_ticket;?></a>		<?php } else {?>
						        <?php echo $row->id_ticket;?>
						        <?php }?>
						    </td>
						    <td data-field="id"><?php echo $row->tanggal;?></td>
						    <td data-field="id"><?php echo $row->nama_kategori;?></td>
						    <td data-field="id"><?php echo $row->nama_sub_kategori;?></td>
						    <td data-field="id"><?php echo $row->problem_summary;?></td>
						    <td data-field="id"><?php echo $row->progress;?></td>
						    <td data-field="id">
						       	<?php 
						        if($row->status==1) { echo "MENUNGGU DISETUJUI";}
							    else if($row->status==2) { echo "DISETUJUI";}
							    else if($row->status==3) { echo "MENUNGGU APPROVAL VENDOR";}
							    else if($row->status==4) { echo "PROSES VENDOR";}
							    else if($row->status==5) { echo "MENUNGGU ACCEPT USER";}
							    else if($row->status==6) { echo "SOLVED";}
							    else if($row->status==7) { echo "TICKET DITOLAK";}
						       	?></td>
						    <td>
						       	<?php if($row->status==5 AND $row->progress=='100') {?>
					        		<a class="ubah btn btn-success btn-xs" title="Solved (Finish)" href="<?php echo base_url();?>myticket/feedback_yes/<?php echo $row->id_ticket;?>/<?php echo $row->id_support;?>">
					        			<span class="glyphicon glyphicon-thumbs-up" ></span>
					        		</a>
									<a class="hapus btn btn-danger btn-xs" title="Reproses (Complain)" data-toggle="modal" onclick="tampilModal('<?=$row->id_ticket?>')">
										<span class="glyphicon glyphicon-thumbs-down" ></span>
									</a>
										<!--
										<a class="hapus btn btn-danger btn-xs" title="Unsolved (Complain)" href="<?php echo base_url();?>myticket/feedback_no/<?php echo $row->id_ticket;?>/<?php echo $row->id_support;?>"><span class="glyphicon glyphicon-thumbs-down"></span></a>
										-->
	 							<?php } else if($row->status==1){?>
	 								<a href="javascript:SelesaiTiket('<?php echo $row->id_ticket; ?>');" class="hapus btn btn-danger btn-xs" data-toggle="tooltip" title="Konfimasi Ulang Pengajuan Tiket">
	 									<span class="glyphicon glyphicon-envelope" ></span>
	 								</a>			
	 							<?php } else if($row->status==5 AND $row->progress==0 AND $row->feedback_user=='Y'){?>
	 								<a href="javascript:FeedbackUser('<?php echo $row->id_ticket; ?>');" class="ubah btn btn-success btn-xs" data-toggle="tooltip" title="Berikan Komentar">
	 									<span class="glyphicon glyphicon-comment" ></span>
	 								</a><br>
	 									MENUNGGU PROGRESS DARI VENDOR 
	 							<?php } 
	 								else if($row->status==5 AND $row->progress==0 AND $row->feedback_user=='') 
	 									{ echo "MENUNGGU PROGRESS DARI VENDOR";}
									else if($row->status==6 AND  $row->feedback_history == 1) 
										{ echo "TICKETING COMPLETED";}
									else if($row->status==6 AND $row->feedback_history == 0) 
										{ echo "TICKETING REPROCESS (COMPLAIN)";}
										//else if( ) { echo "MENUNGGU FEEDBACK DARI USER";}
									else { echo "MENUNGGU STATUS SOLVED DARI VENDOR"; }
								?>
						    </td>
						</tr>
					  <?php endforeach;?>
					</tbody>	    
				</table>
			</div>
		</div>
	</div>
</div><!--/.row-->

<div class="alert bg-warning" role="alert">
	<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg> 
		Berikanlah Feeedback Sesuai Kondisi 
		<a href="#" class="pull-right">
			<span class="glyphicon glyphicon-remove"></span>
		</a>
</div>	

<?php echo $this->session->flashdata("msg");?>
	<script>
		$(function () {
			$('#hover, #striped, #condensed').click(function () {
				var classes = 'table';
					if ($('#hover').prop('checked')) {
						classes += ' table-hover';
					}
					if ($('#condensed').prop('checked')) {
						classes += ' table-condensed';
					}
						$('#table-style').bootstrapTable('destroy').bootstrapTable({
						    classes: classes,
						        striped: $('#striped').prop('checked')
						});
			});
		});
						
		function rowStyle(row, index) {
			var classes = ['active', 'success', 'info', 'warning', 'danger'];
				if (index % 2 === 0 && index / 2 < classes.length) {
					return {
						classes: classes[index / 2]
					};
				}
					return {};
		}
	</script>

<?php $this->load->view('konfirmasi');?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".hapus").click(function(){
				var id = $(this).data('id');
					$(".modal-body #mod").text(id);
			});
		});
	</script>

<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Ticket Unsolved</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="masukkanPesan">Pesan</label>
                        <!--<textarea class="form-control" id="masukkanPesan" placeholder="Masukkan pesan Anda"></textarea>-->
                        <input class="form-control" id="masukkanPesan" placeholder="Masukkan pesan Anda " required>
						<input type="hidden" class="form-control" name="id_ticket" id="id_ticket">
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="kirimPesanForm()">KIRIM</button>
            </div>
        </div>
    </div>
</div>

<script>

	function kirimPesanForm(){
	    var pesan = $('#masukkanPesan').val();
	    var id_ticket = $('#id_ticket').val();
			if(pesan.trim() == '' ){
				alert('Masukkan pesan Anda.');
		        $('#masukkanPesan').focus();
				return false;
			}else{
			//alert(test);
        		$.ajax({
		            type:'POST',
		            url:'ticket_unsolved',
		            data:'contactFrmSubmit=1&id_ticket='+id_ticket+'&pesan='+pesan,
	            	beforeSend: function () {
		                $('.submitBtn').attr("disabled","disabled");
		                $('.modal-body').css('opacity', '.5');
	           		},
	            	success:function(msg){
	                	if(msg == 'ok'){
	                    	$('#masukkanPesan').val('');
	                    	$('.statusMsg').html('<span style="color:green;">Terima kasih, akan segera kami proses.</p>');
	                    	setTimeout(function(){
	                    		location.reload();
	                    	}, 1000);
	                	}else{
	                    	$('.statusMsg').html('<span style="color:red;">Ada sedikit masalah, silakan coba lagi.</span>');
	                	}
		                	$('.submitBtn').removeAttr("disabled");
		                	$('.modal-body').css('opacity', '');
	            	}
        		});
    		}
	}
</script>

			</div>
		</div>
	</div>
</div><!--/.row-->	
		
		
