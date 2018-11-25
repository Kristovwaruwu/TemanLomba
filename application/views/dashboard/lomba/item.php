

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?php echo $nama; ?></h1>
	</div>
	<div class="row">
		<?php if(!empty($lomba)){ 
			foreach ($lomba as $data) {?>
		<div class="col-md-3 card-container">
			<div class="card-group">
				<div class="card">
					<!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
					<div class="card-body">
						<h5 class="card-title"><?= $data["Name"] ?></h5>
						<button class="btn btn-primary">Terima</button>
					</div>
				</div>
			</div>
		</div>
		<?php } } ?>
	</div>
	</div>
</main>

