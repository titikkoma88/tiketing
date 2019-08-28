			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Report Kategori Ticket</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
						<a href="#" style="text-decoration:none">Report Kategori Ticket  
							<a href="<?php echo base_url();?>report_ticket/pdfreport/<?php echo $nama_sub_kategori;?>/<?php echo $awal;?>/<?php echo $akhir;?>" class="btn btn-danger" target="_blank">Pdf</a></a></div>
					<div class="panel-body">
						
						<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
							<h3>
								<b> 
									<center>
							  			<?php echo $tglAwal;?> s/d <?php echo $tglAkhir;?>	
								</center> 
								</b> 
							</h3>
							 
						    <thead>
						    <tr>
						        <th data-field="no" data-sortable="true" width="10px"> No</th>
						        <th data-field="idd3" data-sortable="true">Id Ticket</th>
						        <th data-field="iddds" data-sortable="true">Reported</th>
						        <th data-field="iddd" data-sortable="true">Tanggal</th>
						        <th data-field="idddd" data-sortable="true">Nama Kategori</th>
						        <th data-field="iddddd" data-sortable="true">Nama Sub Kategori</th>
						        <th data-field="idxddddd" data-sortable="true">Problem Summary</th>
						        <th data-field="idddddd" data-sortable="true">Status</th>
						        <th data-field="iddfdddd" data-sortable="true">Feedback</th>
						    </tr>
                            </thead>
                            <tbody>
                           <?php $no = 0; foreach($datareport_kategori as $row) : $no++;?>
						     <tr>
						        <td data-field="no" width="10px"><?php echo $no;?></td>
						        <td data-field="id">

						        <?php if($row->status==2)
						        {?>
						        <?php echo $row->id_ticket;?>
						        <?php } else {?>
						        <?php echo $row->id_ticket;?>
						        <?php }?>
						        
						        </td>
						        <td data-field="iddsd"><?php echo $row->nama;?></td>
						        <td data-field="id"><?php echo $row->tanggal;?></td>
						        <td data-field="id"><?php echo $row->nama_kategori;?></td>
						        <td data-field="id"><?php echo $row->nama_sub_kategori;?></td>
						        <td data-field="id">
						        <a href="<?php echo base_url();?>list_ticket_user/ticket_view/<?php echo $row->id_ticket;?>">
						        <?php echo $row->problem_summary;?>
						        </a>
						        </td>

						        <td data-field="id">
						        <?php 
						        if($row->status==1) { echo "TICKET CREATED";}
   						        else if($row->status==2) { echo "APPROVAL INTERNAL";}
						        else if($row->status==3) { echo "MENUNGGU APPROVAL VENDOR";}
						        else if($row->status==4) { echo "PROSES VENDOR";}
						        else if($row->status==5) { echo "PENDING VENDOR";}
						        else if($row->status==6) { echo "SOLVED";}

						        ?>
						        </td>
						        <td data-field="id">
						        	<?php 
						        		if($row->status==6) { echo "TICKETING COMPLETED";}
										else if($row->status==4 AND $row->progress==100 ) { echo "MENUNGGU PROGRESS DARI VENDOR";}
										else if($row->status==4 AND $row->progress==0 ) { echo "MENUNGGU PROGRESS DARI VENDOR";}
										else if($row->status==5) { echo "MENUNGGU STATUS SOLVED DARI USER";}
										else
										 {
										  	echo "MENUNGGU STATUS SOLVED DARI VENDOR";
										 }
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
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
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







					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
