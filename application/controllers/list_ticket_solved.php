			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">List Ticket</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">List Ticket  <a href="" class="btn btn-danger" target="_blank">Pdf</a></a></div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
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
                           <?php $no = 0; foreach($datasolved_ticket as $row) : $no++;?>
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
						        <td data-field="id"><?php echo $row->problem_summary;?></td>

						        <td data-field="id">
						        <?php 
						        if($row->status==2) { echo "APPROVAL INTERNAL";}
						        else if($row->status==3) { echo "MENUNGGU APPROVAL TEKNISI";}
						        else if($row->status==4) { echo "PROSES TEKNISI";}
						        else if($row->status==5) { echo "PENDING TEKNISI";}
						        else if($row->status==6) { echo "SOLVED";}

						        ?>
						        </td>
						        <td data-field="id">
						        	<?php 
						        		if($row->status==6 AND  $row->feedback == 1) { echo "TICKETING COMPLETED";}
										else if($row->status==6 AND $row->feedback == 0) { echo "TICKETING UNSOLVED (COMPLAIN)";}
										else
										 {
										  	echo "MENUNGGU STATUS SOLVED DARI TEKNISI";
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


					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
