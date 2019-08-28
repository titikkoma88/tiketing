
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.form.js"></script>

 <script type="text/javascript"> 
        jQuery(document).ready(function() { 
            jQuery('#form-upload').on('submit', function(e) {
                e.preventDefault();
                jQuery('#submit-button').attr('disabled', ''); 
                jQuery("#output").html('<div style="padding:10px"><img src="<?php echo base_url();?>assets/images/loading.gif" alt="Please Wait"/> <span>Mengunggah...</span></div>');
                jQuery(this).ajaxSubmit({
                    target: '#output',
                    success:  sukses 
                });
            });
        }); 
 
        function sukses()  { 
            jQuery('#form-upload').resetForm();
            jQuery('#submit-button').removeAttr('disabled');
 
        } 
    </script> 


<div class="row">
<ol class="breadcrumb">
<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
<li><a href="javascript:history.back()">Progress Teknisi</a> </li>
<li class="active">Image Upload</li>
</ol>
</div>
<br>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">Upload Image</a> </div>
<div class="panel-body"></div>

<div class="container">
     <div id="body">
        <div align="center" class="wrapper">
            <form action="<?php echo site_url('upload_img/upload'); ?>" method="post" enctype="multipart/form-data" id="form-upload">
                <input name="image" type="file" /><br>
                <input type="submit" id="submit-button" value="Upload" />
            </form>
            <div id="output"></div>
        </div>
    </div>
 
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
<br> <br>