<div class="modal fade" tabindex="-1" role="gabung" id="gabungModal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deskripsi Tentang Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="<?php echo base_url()?>gabung" method="post">
			 <div class="form-group" >
            <input name="id_lomba" type="hidden" value="<?= !empty($lomba->Id_Lomba) ? $lomba->Id_Lomba :null?>" name="">
            <input name="username" type="hidden" value="<?= !empty($_SESSION['username']) ? $_SESSION['username'] :null?>" >
           <textarea  class="form-control" name="deskripsi"  placeholder="Jelaskan tentang diri anda, keahlian anda yang dapat membantu dalam mengikuti lomba"></textarea>
        </div>
			<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Minta gabung</button>
	    </form>
      </div>
    </div>
  </div>
</div>