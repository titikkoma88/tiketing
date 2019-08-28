			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">User Aplikasi</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
					<a href="<?php echo base_url();?>user_app/add" style="text-decoration:none">Tambah Data Aplikasi User</a></div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">

						    <thead>
						    <tr>
						        <th data-field="no" data-sortable="true" width="10px">No</th>
						        <th data-field="nama" data-sortable="true">Nama</th>
						        <th data-field="akses" data-sortable="true">Akses</th>
						        <th data-field="app" data-sortable="true">Aplikasi</th>
						        <th>Aksi</th>
						    </tr>
                            </thead>
                            <tbody>
                           <?php $no = 0; foreach($datauser_app as $row) : $no++;?>
						     <tr>
						        <td data-field="no" width="10px"><?php echo $no;?></td>
						        <td data-field="nama"><?php echo $row->nama;?></td>
						        <td data-field="akses"><?php echo $row->akses;?></td>
						        <td data-field="app"><?php echo ucwords(str_replace("_", " ", $row->app));?></td>
						        <td>
									<a class="ubah btn btn-primary btn-xs" href="<?php echo base_url();?>user_app/edit/<?php echo $row->id;?>">
									<span class="glyphicon glyphicon-edit" ></span>
									</a>
									<a class="hapus btn btn-danger btn-xs" href="javascript:hapus('<?=$row->id?>')">
									<span class="glyphicon glyphicon-trash"></span>
									</a>
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
						function hapus(kode){
							$(".modal").modal();
							//alert(kode);
							$(".modal-body #mod").text(kode);
						}
						</script>



					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
