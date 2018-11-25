<div style="padding-top: 50px;padding-bottom: 50px">
<div style="max-width: 960px" class="container">

<div class="row">
<div class="col-md-8">
	<div style="color:#333" class="card-group">
              <div class="card">

              <div class="card-body">
              	<h2 class="card-title"><?= $lomba->Judul ?></h2>
              	<hr>
              	<h6>Deskripsi</h6>
              	<div class="card-text"><?= $lomba->Deskripsi ?></div>
              </div>

              </div>
     </div>
</div>
<div class="col-md-4">

<div style="color:#333" class="card-group">
              <div class="card">

              	<div class="card-body">
              	
              	<a class="btn btn-primary  btn-lg btn-block"  data-toggle="modal" <?= !isset($_SESSION["username"]) ? 'data-target="#loginModal"':'data-target="#gabungModal"'?> href="">Ikut Bergabung</a>
              	<hr>
              	<?php 
              	if(!empty($user)){
              	$total = count($user);
 				?> 

 				<div style="margin-bottom: 20px" clas="text-muted"><small><b> <?= $total ?></b> Orang Yang Ingin bergabung</small> </div>     	
              	<?php foreach ($user as $data) { 
              		
              		?>
              		<div class="clearfix" style="position: relative;">
              			<img width="60" src="<?= base_url() ?>assets/img/user.jpg" class="float-left rounded-circle"> 
              			<div style="padding-left: 80px;">
              				<h6 style="margin-bottom: 0px"><a href="<?= base_url() ?>profile/<?= $data->Username?>"><?= $data->Username ?></a></h6>
              				<span class="text-muted"><small><?= $data->Institution ?></small></span>	
              			</div>
              		</div>
              		
              		<hr>
              	<?php } } else{ ?>
              		<div clas="text-muted">Jadilah orang pertama yang bergabung !</div>
              	<?php } ?>

              </div>

              </div>
     </div>
</div>
</div>

</div>

</div>