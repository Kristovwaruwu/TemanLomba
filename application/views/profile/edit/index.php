

<div class="container emp-profile">

	<div class="row">
		<div class="col-md-4">
			<div class="profile-img">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
				<div class="file btn btn-lg btn-primary">
                    Change Photo
                    <form method="post">
                    <input type="file" name="file"/>
                    </form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="profile-head">
				<h5>
					<?php echo $data['Name'] ?>
				</h5>
				<h6>
					<?php echo $data['Main_interest'] ?>
				</h6>
				<p><?php echo $data['Bio']; ?></p>
				<p class="proile-rating">RANKINGS : <span>8/10</span></p>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-2">
        <a type="submit" class="btn btn-danger" name="btnAddMore" href="<?php echo base_url();?>profile/">Submit</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="profile-work">
				<p>WORK LINK</p>
				<a href="">Github</a><br/>
				<a href="">Instagram</a><br/>
				<a href="">LinkedIn</a>
				<p>Interesting</p>
				<a href="">Web Designer</a><br/>
				<a href="">Web Developer</a><br/>
				<a href="">WordPress</a><br/>
				<a href="">WooCommerce</a><br/>
				<a href="">PHP, .Net</a><br/>
			</div>
		</div>
		<div class="col-md-8">
			<div class="tab-content profile-tab" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form method="post" action="<?php echo base_url();?>profile/edit">
					    <div class="row">
					    	<div class="col-md-3">
					    		<label>User Id</label>
					    	</div>
					    	<div class="col-md-6">
					    		<input type="text" class="form-control" id="Id_User" placeholder="UserID">
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-md-3">
					    		<label>Name</label>
					    	</div>
					    	<div class="col-md-6">
					    		<input type="text" class="form-control" id="Name" placeholder="Name">
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-md-3">
					    		<label>Email</label>
					    	</div>
					    	<div class="col-md-6">
					    		<input type="text" class="form-control" id="Email" placeholder="Email">
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-md-3">
					    		<label>Institution</label>
					    	</div>
					    	<div class="col-md-6">
					    		<input type="text" class="form-control" id="intitution" placeholder="Institution">
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-md-3">
					    		<label>Phone</label>
					    	</div>
					    	<div class="col-md-6">
					    		<input type="text" class="form-control" id="ihone" placeholder="Phone">
					    	</div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
</div>

