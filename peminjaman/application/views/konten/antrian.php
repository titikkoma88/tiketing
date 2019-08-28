<?php
 //Initialisasi nilai untuk nomor loket
 //Pada kasus nyata nomor loket dimabil pada saat login 
 //sesuai dengan data pada tabel admin
 $loket="10";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Suara Antrian</title>
<link rel="stylesheet" href="syle.css" />
<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script type="text/javascript" >
$(document).ready(function(){
 $("#play").click(function(){
  document.getElementById('suarabel').play();  
 });
 
 
});
</script>
<style type="text/css">
<!--
.style1 {
 font-size: 36px;
 font-weight: bold;
}
-->
</style>
</head>
<body background="14242085571143527965.jpg">
  <audio id="suarabel" src="<?php echo base_url('assets/dist/audio/Airport_Bell.mp3');?>"></audio>
  <audio id="suarabelnomorurut" src="<?php echo base_url('assets/dist/audio/nomor-urut.wav');?>"  ></audio>
  <audio id="suarabelsuarabelloket" src="<?php echo base_url('assets/dist/audio/loket.wav');?>"  ></audio>
      
  <audio id="belas" src="<?php echo base_url('assets/dist/audio/belas.wav');?>"  ></audio>
  <audio id="sebelas" src="<?php echo base_url('assets/dist/audio/sebelas.wav');?>"  ></audio>
  <audio id="puluh" src="<?php echo base_url('assets/dist/audio/puluh.wav');?>"  ></audio>
  <audio id="sepuluh" src="<?php echo base_url('assets/dist/audio/sepuluh.wav');?>"  ></audio>
  <audio id="ratus" src="<?php echo base_url('assets/dist/audio/ratus.wav');?>"  ></audio>
  <audio id="seratus" src="<?php echo base_url('assets/dist/audio/seratus.wav');?>"  ></audio>
  <audio id="suarabelloket1" src="<?php echo site_url()?>assets/dist/audio/<?php echo $loket; ?>.wav"  ></audio>
  <audio id="suarabelloket10" src="<?php echo site_url()?>assets/dist/audio/<?php echo $loket; ?>.wav"  ></audio>
  <?php
    $location_counter = "data.txt";
    $location_date = "date.txt";
    $itis = date ("d");
   
    // Hari baru?   
   $aday = join('', file($location_date));
   trim($aday);
  
   if("$aday"=="$itis"){
    //Cari hari ini
    $tcounter = join('', file($location_counter));
    trim($tcounter);
    $tcounter++;
    
    $fp = fopen($location_counter,"w");
    fputs($fp, $tcounter);
    fclose($fp);
   }else{
    //hari baru
    $fp = fopen($location_counter,"w");
    fputs($fp, 0);
    fclose($fp);
    $tcounter = join('', file($location_counter));
    trim($tcounter);
    $tcounter++;
    //tulis hari baru
    $fp = fopen($location_counter,"w");
    fputs($fp, $tcounter);
    fclose($fp);
    //tulis di date.txt
    $fp = fopen($location_date,"w");
    fputs($fp, $itis);
    fclose($fp); 
   }

   $panjang=strlen($tcounter);
   $antrian=$tcounter;
   
   for($i=0;$i<$panjang;$i++){
  ?>
          <audio id="suarabel<?php echo $i; ?>" src="<?php echo site_url()?>assets/dist/audio/<?php echo substr($tcounter,$i,10); ?>.wav" ></audio>            
        <?php
   }
  ?>
        <div class="kontainer">
          <div align="center"><a href="<?php echo site_url('nup/antrian')?>" class="style1" id="konter" ><?php echo $antrian; ?></a></div>
</div>
        <div class="kontainer2">
          <center><input name="play" type="button" id="tombol" onclick="mulai();" value="Panggil" /><br />
        
            <form id="form1" name="form1" method="post" action="">
              <input type="button" id="tombol" onClick="document.location.reload(true)" value="Selanjutnya">
            </form>
          </center>
        </div>
</body>
</html>
<script type="text/javascript">
function mulai(){
 //MAINKAN SUARA BEL PADA SAAT AWAL
 document.getElementById('suarabel').pause();
 document.getElementById('suarabel').currentTime=0;
 document.getElementById('suarabel').play();
   
 //SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT  
 totalwaktu=document.getElementById('suarabel').duration*1000; 

 //MAINKAN SUARA NOMOR URUT  
 setTimeout(function() {
   document.getElementById('suarabelnomorurut').pause();
   document.getElementById('suarabelnomorurut').currentTime=0;
   document.getElementById('suarabelnomorurut').play();
 }, totalwaktu);
 totalwaktu=totalwaktu+1000;
 
 <?php
  //JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
  if($antrian<10){
 ?>
   
   setTimeout(function() {
     document.getElementById('suarabel0').pause();
     document.getElementById('suarabel0').currentTime=0;
     document.getElementById('suarabel0').play();
    }, totalwaktu);
   
   totalwaktu=totalwaktu+1000;
 <?php  
  }elseif($antrian ==10){
   //JIKA 10 MAKA MAIKAN SUARA SEPULUH
 ?> 
    setTimeout(function() {
      document.getElementById('sepuluh').pause();
      document.getElementById('sepuluh').currentTime=0;
      document.getElementById('sepuluh').play();
     }, totalwaktu);
    totalwaktu=totalwaktu+1000;
  <?php  
   }elseif($antrian ==11){
    //JIKA 11 MAKA MAIKAN SUARA SEBELAS
  ?> 
    setTimeout(function() {
      document.getElementById('sebelas').pause();
      document.getElementById('sebelas').currentTime=0;
      document.getElementById('sebelas').play();
     }, totalwaktu);
    totalwaktu=totalwaktu+1000;
  <?php  
   }elseif($antrian < 20){
    //JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
  ?>      
    setTimeout(function() {
      document.getElementById('suarabel1').pause();
      document.getElementById('suarabel1').currentTime=0;
      document.getElementById('suarabel1').play();
     }, totalwaktu);
    totalwaktu=totalwaktu+1000;
    setTimeout(function() {
      document.getElementById('belas').pause();
      document.getElementById('belas').currentTime=0;
      document.getElementById('belas').play();
     }, totalwaktu);
    totalwaktu=totalwaktu+1000;
  <?php  
   }elseif($antrian < 100){    
    //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
  ?> 
    setTimeout(function() {
      document.getElementById('suarabel0').pause();
      document.getElementById('suarabel0').currentTime=0;
      document.getElementById('suarabel0').play();
     }, totalwaktu);
    totalwaktu=totalwaktu+1000;
    setTimeout(function() {
      document.getElementById('puluh').pause();
      document.getElementById('puluh').currentTime=0;
      document.getElementById('puluh').play();
     }, totalwaktu);
    totalwaktu=totalwaktu+1000;
    setTimeout(function() {
      document.getElementById('suarabel1').pause();
      document.getElementById('suarabel1').currentTime=0;
      document.getElementById('suarabel1').play();
     }, totalwaktu);
    totalwaktu=totalwaktu+1000;
    
  <?php
   }else{
    //JIKA LEBIH DARI 100
    //Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
    //Selebihnya akan langsung disebutkan angkanya saja
    //tanpa kata "RATUS", "PULUH", maupun "BELAS"
  ?>
  
  <?php
   for($i=0;$i<$panjang;$i++){
  ?>
  
  totalwaktu=totalwaktu+1000;
  setTimeout(function() {
      document.getElementById('suarabel<?php echo $i; ?>').pause();
      document.getElementById('suarabel<?php echo $i; ?>').currentTime=0;
      document.getElementById('suarabel<?php echo $i; ?>').play();
     }, totalwaktu);
  <?php
   }
   }
  ?>
  
  
  totalwaktu=totalwaktu+1000;
  setTimeout(function() {
      document.getElementById('suarabelsuarabelloket').pause();
      document.getElementById('suarabelsuarabelloket').currentTime=0;
      document.getElementById('suarabelsuarabelloket').play();
     }, totalwaktu);
  
  totalwaktu=totalwaktu+1000;
  setTimeout(function() {
      document.getElementById('suarabelloket<?php echo $loket; ?>').pause();
      document.getElementById('suarabelloket<?php echo $loket; ?>').currentTime=0;
      document.getElementById('suarabelloket<?php echo $loket; ?>').play();
     }, totalwaktu); 
}
</script>