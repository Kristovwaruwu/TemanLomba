<div style="padding-top: 50px;padding-bottom: 50px">
<div style="max-width: 960px" class="container">

<div class="row">

<div class="col-md-12">
  <div style="margin-bottom: 30px!important" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <h4>Partner Lomba Anda Sudah Menunggu!</h4>

  <div class="btn-toolbar mb-2 mb-md-0">
              <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
            </div>
  </div>
</div>
  

    <?php foreach ($lomba as $data) {?>

      <div style="margin-bottom: 30px" class="col-md-4">
        <a class="card-lomba" href="<?= base_url() ?>list/detail/<?= $data->Id_Lomba ?>">      
            <div style="color:#333" class="card-group">
              <div class="card">
    <img class="card-img-top" src="<?= base_url() ?>assets/img/book.png" alt="Card image cap">
    <div style="min-height: 180px!important" class="card-body">
      <?php $kategori = $this->M_Lomba->getByIdKategori($data->Id_Kategori); ?>
      <h5 class="card-title"><?= $data->Judul ?></h5>
      <p style="min-height: 0" class="card-text"><?= $data->Deskripsi ?></p>
      </div>
      <p style="
    margin-bottom: 0px;
    background: #f1f1f1;
    padding: 15px;"><small class="text-muted">kategori : <span class="badge badge-primary"> <?= !empty($kategori->Judul_Kategori) ? $kategori->Judul_Kategori :"-" ?></span></small></p>
  
          </div>

          </div>
         </a>
    
          </div>

          <?php } ?>
 

</div>
</div>
</div>