<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Report List Ticket</title>
  <link rel="stylesheet" href="<?php echo base_url(). "assets/";?>css/bootstrap.min.css">
</head>

<body>

<style type="text/css">
	
	table{
		font-size: 9.5px;
	}

	h1 {
	text-align: center;
	}

	h3, h4 {
	text-align: left;
	}

</style>

<div class="row">
	<h1>REPORT LIST TICKETING</h1>
	<b>PT Modernland Realty Tbk</b><br><br>
	<b>Kategori Masalah : <?php echo $nama_sub_kategori;?></b><br>
	<b>Status : <?php echo $progress;?></b><br>
	<b>Per Tanggal : <?php echo $tglAwal;?> s/d <?php echo $tglAkhir;?></b><br><br><br>
	<table class="table" border="1px" cellpadding="10" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th width="10px"> No</th>
				<th >Id Ticket</th>
				<th >Reported</th>
				<th >Tanggal</th>
				<th >Nama Kategori</th>
				<th >Nama Sub Kategori</th>
				<th width="50px" >Problem Summary</th>
				<th >Status</th>
			</tr>
        </thead>
        <tbody>
         <?php $no = 0; foreach($datareport as $row) : $no++;?>
			<tr>
				<td width="10px"><?php echo $no;?></td>
				<td >
							        <?php if($row->status==2)
							        {?>
							        <?php echo $row->id_ticket;?>
							        <?php } else {?>
							        <?php echo $row->id_ticket;?>
							        <?php }?>
						        
						        	</td>
				<td ><?php echo $row->nama;?></td>
				<td ><?php echo $row->tanggal;?></td>
				<td ><?php echo $row->nama_kategori;?></td>
				<td ><?php echo $row->nama_sub_kategori;?></td>
				<td width="50px" ><?php echo $row->problem_summary;?></td>
				<td >
							        <?php 
							        if($row->status==1) { echo "TICKET CREATED";}
   							        else if($row->status==2) { echo "APPROVAL INTERNAL";}
						    	    else if($row->status==3) { echo "MENUNGGU APPROVAL TEKNISI";}
						    	    else if($row->status==4) { echo "PROSES TEKNISI";}
						    	    else if($row->status==5) { echo "PENDING TEKNISI";}
						    	    else if($row->status==6) { echo "SOLVED";}
						    	    else if($row->status==7) { echo "TIDAK DISETUJUI";}
						        	?>
						        	</td>
			</tr>
		 <?php endforeach;?>
		</tbody>
						    
	</table>
</div>
</body>
</html>