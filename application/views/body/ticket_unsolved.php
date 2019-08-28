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
                        <textarea class="form-control" id="masukkanPesan" placeholder="Masukkan pesan Anda"></textarea>
                        <input type="hidden" class="form-control" name="id_ticket" value="<?php echo $id_tracking;?>">
						<input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user;?>">
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="kirimContactForm()">KIRIM</button>
            </div>
        </div>
    </div>
</div>

<script>
function kirimContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var pesan = $('#masukkanPesan').val();
	if(pesan.trim() == '' ){
		alert('Masukkan pesan Anda.');
        $('#masukkanPesan').focus();
		return false;
	}else{
        $.ajax({
            type:'POST',
            url:'kirim_form.php',
            data:'contactFrmSubmit=1&pesan='+pesan,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#masukkanPesan').val('');
                    $('.statusMsg').html('<span style="color:green;">Terima kasih, akan segera kami proses.</p>');
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
