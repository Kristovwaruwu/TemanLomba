<div class="modal" tabindex="-1" role="login" id="loginModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="<?php echo base_url()?>user/login" method="post">
			<div class="form-group" >
			  <input name="Username" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
			  <input name="Password" type="password" class="form-control" id="inputPassword1" placeholder="Password">
			</div>
			<div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Remember password</label>
      </div>
			<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
		  </form>
      </div>
    </div>
  </div>
</div>