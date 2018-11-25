<main style="padding-top: 80px!important" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Postingan saya</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="<?= base_url() ?>dashboard/lomba/tambah" class="btn btn-sm btn-primary">Tambah</a>
              </div>
            </div>
          </div>
          <div id="api"></div>
          <div class="row">
          <?php if(!empty($lomba)){ 
            foreach ($lomba as $data) {?>

          <div class="col-md-3 card-container animated fadeInUp" id="card-lomba-<?php echo $data->Id_Lomba;?>">
            <div class="card-group">
              <div class="card">
    <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
    <div class="card-body">
      <?php $kategori = $this->M_Lomba->getByIdKategori($data->Id_Kategori); ?>
      <a class="card-title h5" href="<?php echo base_url()?>dashboard/lomba/item/<?php echo $data->Id_Lomba;?>"><?= $data->Judul ?></a>
      <p class="card-text"><?= $data->Deskripsi ?></p>
      <p><small class="text-muted">kategori : <span class="badge badge-costom"> <?= !empty($kategori->Judul_Kategori) ? $kategori->Judul_Kategori :"-" ?></span></small></p>
      <a class="btn" id="delete-btn" href="<?php echo base_url()?>dashboard/lomba/delete/<?php echo $data->Id_Lomba;?>"><p style="text-align:right;"><i class="fas fa-trash" style="color:#a108fe"></i></p></a>
  </div>
          </div>

          </div>
         
    
          </div>

          <?php } } ?>

          </div>
          </div>

      
</main>
