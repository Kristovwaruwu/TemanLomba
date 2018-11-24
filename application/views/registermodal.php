<div class="modal" tabindex="-1" role="register" id="registermodal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="<?php echo base_url()?>user/create" method="post">
			<div class="form-group" >
			  <input name="Username" class="form-control" id="inputusername1" placeholder="Enter Username" required>
            </div>
            <div class="form-group" >
			  <input name="Email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
			<div class="form-group">
			  <input name="Password" type="password" class="form-control" id="inputPassword1" placeholder="Enter Password" required>
      </div>
			<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
	    </form>
      </div>
    </div>
  </div>
</div>