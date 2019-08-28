<div class="row">
  <ol class="breadcrumb">
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li><a href="javascript: window.history.go(-1)">View Assignment Ticket</a></li>
    <li class="active">Update Progress</li>
  </ol>
</div><!--/.row-->

<br>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <svg class="glyph stroked male user ">
            <use xlink:href="#stroked-male-user"/>
        </svg>
        <a href="#" style="text-decoration:none">UPDATE PROGRESS</a>
      </div>
      <div class="panel-body">
		    <div class="list-group">
			      <a href="#" class="list-group-item active"><?php echo $id_ticket;?></a>
			      <a href="#" class="list-group-item">
              <span class="glyphicon glyphicon-calendar"></span> &nbsp;<?php echo $tanggal;?>
            </a>
			      <a href="#" class="list-group-item">
              <span class="glyphicon glyphicon-briefcase"></span> &nbsp;<?php echo $nama_kategori;?>
            </a>
			      <a href="#" class="list-group-item">
              <span class="glyphicon glyphicon-briefcase"></span> &nbsp;<?php echo $nama_sub_kategori;?>
            </a>
			      <a href="#" class="list-group-item">
              <span class="glyphicon glyphicon-user"></span> &nbsp;<?php echo $reported;?>
            </a>
		    </div>
        <div class="list-group">
          <a href="#" class="list-group-item active">Progress Ticketing</a>
          <a href="#" class="list-group-item">
            <b>TANGGAL TICKET : <?php echo $tanggal;?></b>
          </a>
          <?php if($tanggal_solved == "0000-00-00 00:00:00") {  } else {?>
          <a href="#" class="list-group-item">
            <b>TANGGAL SOLVED : <span class="label label-primary"><?php echo $tanggal;?></span></b>
          </a>
          <?php }?>
          <a href="#" class="list-group-item">
            <b>
              <?php 
              if($tanggal_proses == "0000-00-00 00:00:00") 
                { echo "BELUM DI PROSES"; }
              else {
              ?>
                TANGGAL PROSES : <?php echo $tanggal_proses;?>
              <?php
                }
              ?>
            </b>
          </a>
        </div>
        <div class="panel panel-danger">

          <div class="panel-heading">SYSTEM TRACKING TICKET</div>
          <div class="panel-body">
            <table class="table table-condensed">
              <tr>
        	       <th>NO</th>
        	       <th>TANGGAL</th>
                 <th>LAMA PROSES</th>
      	         <th>STATUS</th>
      	         <th>DESKRIPISI</th>
      	         <th>BY</th>
              </tr>
              <?php $no = 0; foreach($data_trackingticket as $row) : $no++;?>
              <tr>
   	              <td><?php echo $no;?></td>
  	              <td><?php echo $row->tanggal;?></td>
                  <td>
                    <?php
                      $harip = abs($row->hari);
                      $bulanp = abs($row->bulan);
                      $tahunp = abs($row->tahun);

                      $hari = $row->hari;
                      $bulan = $row->bulan;
                      $tahun = $row->tahun;

                      if (empty($tahun)){
                        echo " ";

                        if (empty($bulan)){
                          echo " ";

                            if (empty($hari)){
                              echo " ";
                            }

                            elseif ($hari < 0) {
                              echo "Sudah Lewat ".$harip." Hari ";
                            }

                            else { 
                              echo "".$hari." Hari";
                            }
                        }

                        elseif ($bulan < 0) {
                          echo "Sudah Lewat ".$bulanp." Bulan ";
                            if (empty($hari)){
                              echo " ";
                            }
                            else { 
                              echo ", ".$harip." Hari";
                            }
                        }

                        else { 
                          echo "".$bulan." Bulan ";
                            if (empty($hari)){
                              echo " ";
                            }
                            elseif ($hari < 0) {
                              echo "dan Sudah Lewat ".$harip." Hari ";
                            }
                            else { 
                              echo ", ".$hari." Hari";
                            }
                        }      
                      }

                      elseif ($tahun < 0) {
                        echo "Sudah Lewat ".$tahunp." Tahun ";

                          if (empty($bulan)){
                            echo " ";

                              if (empty($hari)){
                                echo " ";
                              }
                              else { 
                                echo ", ".abs($hari)." Hari";
                              }
                          }
                          else { 
                            echo ", ".$bulanp." Bulan ";

                              if (empty($hari)){
                                echo " ";
                              }
                              else { 
                                echo ", ".abs($hari)." Hari";
                              }
                          }      
                      }

                      else { 
                        echo "".$tahun." Tahun ";

                          if (empty($bulan)){
                            echo " ";

                              if (empty($hari)){
                                echo " ";
                              }
                              elseif ($hari < 0) {
                                echo "dan Sudah Lewat ".$harip." Hari ";
                              }
                              else { 
                                echo ", ".abs($hari)." Hari";
                              }
                          }
                          elseif ($bulan < 0) {
                            echo "dan Sudah Lewat ".$bulanp." Bulan ";

                              if (empty($hari)){
                                echo " ";
                              }
                              else { 
                                echo ", ".abs($hari)." Hari";
                              }
                          }
                          else { 
                            echo ", ".$bulan." Bulan ";

                              if (empty($hari)){
                                echo " ";
                              }
                              elseif ($hari < 0) {
                                echo "dan Sudah Lewat ".$harip." Hari ";
                              }
                              else { 
                                echo ", ".abs($hari)." Hari";
                              }
                          }
                      }
                 
                  ?></td>
        	        <td><?php echo $row->status;?></td>
                  <td><?php echo $row->deskripsi;?></td>
        	        <td><?php echo $row->nama;?></td>
                  <!-- <td><a href="<?php echo base_url();?>myticket/file_lampiran/<?php echo $row->id_tracking;?>"><?php echo $row->deskripsi;?></a></td> row-->
              </tr>
              <?php endforeach;?>
            </table>
          </div>
        </div>

        <br>

        <table id="table2" class="table table-bordered">
          <tr>
            <th></th>
            <th>Nama Dokumen</th>
            <th>Dokumen</th>
            <th></th>
          </tr>

          <?php foreach ($file as $key) { ?>
          <tr id="<?=$key->id_file?>">
            <td valign="top">
              <?php if ($key->reported==$id_user) { ?>
                <a data-toggle="modal"  title="Hapus File" class="btn btn-sm btn-danger" href="<?php echo base_url();?>myassignment/hapusfile/<?php echo $id_ticket;?>/<?php echo $key->id_file;?>">Hapus</a>
              <?php } else { ?>
              <?php } ?>
            </td>
              <?php if ($key->type=="image/jpeg" || $key->type=="image/png" || $key->type=="image/x-png"){?>
            <td valign="top">
              <?=$key->nama?>
            </td>
            <td valign="top">
              <a>
                <center>
                  <img src="<?php echo base_url('assets/file/'.$key->nama);?>" width='150px' height="150px">
                </center>
              </a><br>
            </td> 
            <td>
              <?php $nm_file = str_replace(" ", "_", $key->nama); ?>
                <a href="<?php echo base_url('assets/file/'.$key->nama);?>" target="_BLANK"> View </a>
            </td>
              <?php } else if ($key->type=="application/pdf" || $key->type=="application/x-download") { ?>
            <td valign="top"><?=$key->nama?></td>
            <td>
              <?php $nm_file = str_replace(" ", "_", $key->nama); ?>
                <a href="<?php echo base_url('assets/file/'.$key->nama);?>" target="_BLANK"> View Dokumen </a>
            </td>
            <td>
              <?php } else if ($key->type=="application/x-zip-compressed") { ?>
            <td valign="top"><?=$key->nama?></td> 
            <td>
              <?php $nm_file = str_replace(" ", "_", $key->nama); ?>
                <a href="<?php echo base_url('assets/file/'.$key->nama);?>"> Download File </a></td>
            <td></td>
              <?php } else { ?> 
                <td valign="top">
                  <?=$key->nama?></td>
                <td><?php $nm_file = str_replace(" ", "_", $key->nama); ?> 
                  <a href="<?php echo base_url('assets/file/'.$key->nama);?>" target="_BLANK"> Download File </a>
                <td></td>
              <?php } ?>
          </tr>
          <?php } ?>                  
        </table>

        <br><br><br>

<div class="row">
	<div class="col-lg-6">
		<form method="post" action="<?php echo base_url();?><?php echo $url;?>" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="hidden" class="form-control" name="id_ticket" value="<?php echo $id_ticket;?>">
				<div class="form-group">
				  <label><strong>Form Update Progress</strong></label>
				    <select name="progress" class="form-control">
					   <!--   
					   <?php for ($i=$progress; $i<=100; $i+=10){?>
					   <option value="<?php echo $i;?>">PROGRESS <?php echo $i;?> %</option>
					   <?php }?> 
					   -->
					   <option value="0">On Process</option>
					   <option value="100">Completed</option>
				    </select>
				</div>
        <!--
				<div class="progress">
  					<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $progress;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress;?>%">
    					<span class="sr-only"><?php echo $progress;?> % Complete (Progress)</span>
  					</div>
				</div>
        -->
        <div class="form-group">
          <label>Sampai Tanggal :</label>
            <input type="date" class="form_control" name="selesai" value="<?=date('Y-m-d')?>" required><br>
        </div>
				<div class="form-group">
				  <label>Deskripsi Progress</label>
				    <textarea name="deskripsi_progress" class="form-control" rows="10"></textarea>
				</div>
				<label>Upload Lampiran</label>
				<div class="alert alert-danger">
          - mohon dihindarkan Nama File menggunakan symbol-symbol seperti <b> .,+*/\#$%^&() </b> Untuk menghindari Error <br>
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
				<br>
        <div>
          <input type="checkbox" name="feedback" value="Y"> Feedback 
        </div>
        <br><br><br>
					<button type="submit" class="btn btn-primary">Simpan</button>
			  </div>
				<div class="col-lg-9">
					<div id="div-order">
					</div>
				</div>
				</div>
		</form>
		  </div>
    </div>
  </div>
</div><!--/.row-->	


