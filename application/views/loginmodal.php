<div class="modal" tabindex="-1" role="login" id="loginModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="<?php echo base_url()?>user/login" method="post">
			<div class="form-group" >
			  <label for="inputEmail">Email address</label>
			  <input name="Username" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
			  <label for="inputPassword">Password</label>
			  <input name="Password" type="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group form-check">
			  <input type="checkbox" class="form-check-input">
			  <label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>