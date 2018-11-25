<div class="modal fade" tabindex="-1" role="register" id="registermodal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Daftar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="<?php echo base_url()?>user/create" method="post">
			<div class="form-group" >
			  <input name="Username" class="form-control" placeholder="Masukkan username anda" required>
      </div>
      <div class="form-group" >
        <input name="Name" class="form-control" placeholder="Masukkan nama anda" required>
      </div> 
      <div class="form-group" >
        <input name="Email" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan email anda" required>
      </div>
      <div class="form-group" >
        <input name="Institution" class="form-control" placeholder="Masukkan intitusi anda" required>
      </div>
			<div class="form-group">
			  <input name="Password" type="password" class="form-control" id="inputPassword1" placeholder="Masukkan password anda" required>
      </div>
			<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Daftar</button>
	    </form>
      </div>
    </div>
  </div>
</div>