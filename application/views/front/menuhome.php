  <header class="p-3 masthead">
        <div class="inner">
          <img class="masthead-brand" src="<?php echo base_url() ?>assets/img/logo_tl_trans_(2).png" width="80">
          <nav class="nav nav-masthead nav-custom">
            <a class="nav-link active" href="<?= base_url() ?>">Home</a>
          
          <?php if(!isset($_SESSION["username"])){ ?>
            <button class="nav-link" role="register" data-toggle="modal" data-target="#registermodal">Signup</button>
            <button class="btn  btn-light" role="login" data-toggle="modal" data-target="#loginModal" id="button">Login</button>

            <?php }else { ?>

          <div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?= $_SESSION["username"] ?>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?= base_url() ?>dashboard">Dashboard</a>
    <a class="dropdown-item" href="<?= base_url() ?>user/logout">Sign Out</a>
  </div>
</div>
            <?php } ?>
          </nav>
        </div>
      </header>