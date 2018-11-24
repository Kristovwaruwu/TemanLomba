
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Lomba</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<button class="btn btn-sm btn-outline-secondary">Share</button>
				<button class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
			<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
			<span data-feather="calendar"></span>
			This week
			</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<form action="<?php echo base_url()?>user/login" method="post">
				First name:<br>
				<input type="text" name="Username" value="Mickey">
				<br>Last name:<br>
				<input type="text" name="Password" value="Mouse">
				<br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="col-md-3">
			<div class="card-group">
				<div class="card">
					<img class="card-img-top" src=".../100px180/" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>