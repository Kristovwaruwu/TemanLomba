<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Post Lomba</h1>
          </div>

<form id="post-lomba" method="POST" action="">
  
  <div class="form-group">
    <label>Judul Lomba</label>
    <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul Lomba">
  </div>
  <div class="form-group">
    <label>Kategori Lomba</label>
    <select name="kategori" class="form-control">
      <option selected disabled >Pilih Kategori</option>
      <?php foreach ($kategori as $data) { ?>
        <option value="<?= $data->Id_Kategori ?>"><?= $data->Judul_Kategori ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
  <label>Deskripsi Lomba</label>
  <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Lomba"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Post Lomba</button>
</form>

</main>