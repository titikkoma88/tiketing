<div class="row">
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li><a href="javascript: window.history.go(-1)">List Ticket</a></li>
    <li><a href="javascript: window.history.go(-1)">Progres Ticketing</a></li>
    <li class="active">Detail Tracking</li>
  </ol>
</div><!--/.row-->

<br>

<div class="row">

  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
        <a href="#" style="text-decoration:none">Detail Tracking</a></div>
        <div class="panel-body">

          <div class="list-group">
            <a href="#" class="list-group-item active">
            <?php echo $id_ticket;?>
            </a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> &nbsp; Tanggal Create : &nbsp;<?php echo $tanggal;?></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> &nbsp; Kategori : &nbsp;<?php echo $nama_kategori;?></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> &nbsp; Sub Kategori : &nbsp;<?php echo $nama_sub_kategori;?></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-folder-close"></span> &nbsp; Problem Summary : &nbsp;<?php echo $problem_summary;?></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-folder-close"></span> &nbsp; Problem Detail : &nbsp;<?php echo $problem_detail;?></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-folder-open"></span> &nbsp; Status : &nbsp;<?php echo $status;?></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-folder-open"></span> &nbsp; Deskripsi : &nbsp;<?php echo $deskripsi;?></a>
          </div>

              <br>
            <table id="table2" class="table table-bordered">
                <tr>
                  <th></th>
                  <th>Nama Dokumen</th>
                  <th>Dokumen</th>
                  <th>View Dokumen</th>
                </tr>

                <?php foreach ($file_tracking as $key_tracking) { ?>
                <tr id="<?=$key_tracking->id_file_tracking?>">
                  <td valign="top"><a data-toggle="modal"  title="Hapus File" class="btn btn-sm btn-danger" href="<?php echo base_url();?>myticket/hapusfilelamp/<?php echo $id_ticket;?>/<?php echo $key_tracking->id_file_tracking;?>">Hapus</a>
                  </td>
                    <?php if ($key_tracking->type=="image/jpeg"){?>
                  <td valign="top"><img src="<?php echo base_url('assets/file/'.$key_tracking->nama);?>" width='50px' height="50px"></td> 
                    <?php } else if ($key_tracking->type=="application/pdf" || $key_tracking->type=="application/x-download") { ?>
                  <td valign="top">
                    <?=$key_tracking->nama?></td> 
                  <td>
                    <?php $nm_file = str_replace(" ", "_", $key_tracking->nama); ?>
                    <a href="<?php echo base_url('dokumen/viewer/'.$nm_file);?>" target="_BLANK"> View </a></td> 
                  <td><?php $nm_file = str_replace(" ", "_", $key_tracking->nama); ?>
                    <a href="<?php echo base_url('dokumen/download/'.$nm_file);?>"> Downlaod </a></td>
                    <?php } else { ?> 
                  <td valign="top">
                    <?=$key_tracking->nama?></td> 
                  <td>
                    <a><center><img src="<?php echo base_url('assets/file/'.$key_tracking->nama);?>" width='150px' height="150px">
                    </center></a><br><br>
                  <td><?php $nm_file = str_replace(" ", "_", $key_tracking->nama); ?>
                    <a href="<?php echo base_url('assets/file/'.$key_tracking->nama);?>" target="_BLANK"> View </a></td>
                     <?php } ?>                
                </tr>
                    <?php } ?>                  
            </table>
              <br>
          <form method="post" action="<?php echo base_url();?><?php echo $url;?>" enctype="multipart/form-data" accept-charset="utf-8">
          <div class="alert alert-danger">mohon dihindarkan Nama File menggunakan symbol-symbol seperti <b> .,+*/\#$%^&() </b> Untuk menghindari Error</div>
            <table id="table" class="table table-bordered">
              <tr>
                <th><input type="button" name="ke" value="+ Dokumen" class="cloneTableRows btn btn-sm  btn-success"/></th>
                <th>File Dokumen</th>
              </tr>
              <tr>
                <td valign="top"><a href="#" alt="" class="delRow btn btn-danger" style="visibility: hidden;">Hapus</a></td>
                <td valign="top"><input type="file" class='soft' name="userfile[]" class="form-control span6" >
                                 <input type="hidden" class="form-control" name="id_tracking" id="id_tracking" value="<?php echo $id_tracking;?>">
                                 <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?php echo $id_user;?>">
                </td> 
              </tr>
            </table>
            <br><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="javascript: window.history.go(-1)"  class="btn btn-default">Batal</a>
          </div>

             </form>
<!--/<div class="list-group">
<a href="#" class="list-group-item active"></span> &nbsp;ATTACHMENT FILE</a>
 <a href="<?php echo base_url();?>myticket/upload_img/<?php echo $id_ticket;?>" class="list-group-item"><span class="glyphicon glyphicon-log-in"></span> &nbsp;UPLOAD</a>
<a href="#" class="list-group-item"><span class="glyphicon glyphicon-picture"></span> &nbsp;DISPLAY</a>

-->
        </div>

      </div>
    </div>
  </div>

</div><!--/.row-->	


