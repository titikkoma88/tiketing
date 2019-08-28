<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ticketing - PT Modernland Reality Tbk</title>
<link rel="icon" href="<?php echo base_url('assets/favicon.png') ?>"  type="image/x-icon">

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/twd-base.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>

<!--Icons-->
<script src="<?php echo base_url();?>assets/js/lumino.glyphs.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/chart.min.js"></script>
<script src="<?php echo base_url();?>assets/js/chart-data.js"></script>
<script src="<?php echo base_url();?>assets/js/easypiechart.js"></script>
<script src="<?php echo base_url();?>assets/js/easypiechart-data.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-table.js"></script>

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=7gtqmtb0j0o413jko3ea9sh3wi5z3oqiy1xj2tefp59wz6c4"></script>
  <script>tinymce.init({selector:'textarea'});</script>

	<script>


		$('.calendar').datepicker({
			 format: 'dd/mm/yyyy'
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () 
			{
				if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
			})
				$(window).on('resize', function () 
			{
			 	if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
			})


		$(function() {
		  	$(".cloneTableRows").click(function(){
		  			//alert('test');
                // id tabel
                var thisTableId = $(this).parents("table").attr("id");

                // baris terakhir terakhir
                var lastRow = $('#'+thisTableId + " tr:last");

                // kloning baris terakhir
                var newRow = lastRow.clone(true);
                $('#'+thisTableId).append(newRow);

                $('#'+thisTableId + " tr:last td:first .delRow").css("visibility", "visible");

                // clear
                $('#'+thisTableId + " tr:last td :input").val('');

                return false;
           	});
		  	$(".delRow").click(function(){
		  		$(this).parents("tr").remove();
		  		return false;
		  	});
		})

function SelesaiTiket(id_ticket){
	//alert(id_ticket);
				var  baseurl = "<?=base_url() ?>";
				window.location.href=baseurl+'myticket/email_ticket/'+id_ticket;
			}

function FeedbackUser(id_ticket){
	//alert(id_ticket);
				var  baseurl = "<?=base_url() ?>";
				window.location.href=baseurl+'myticket/feedback_user/'+id_ticket;
			}

function tampilModal(id_ticket) {
				//alert(id_ticket);
                $("#modalForm").modal();
                $("#id_ticket").val(id_ticket);
			}

function hapusGambar(kode_gambar){
		  		//alert(kode_detail);

		  		$.post("../hapusDetailGambar", {kode_gambar: ""+kode_gambar+""}, function(data){
						$("#P"+kode_gambar).remove();
				});
		  	}
	</script>


 