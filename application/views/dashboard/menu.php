<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <div class="quick-profile">
              <div class="dashboard-img">
                <img class="rounded-circle img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog">
              </div>
              <h2 id="name-user" style="text-align:center"><?php echo $_SESSION['username'];?></h2>
            </div>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  
                  <br>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link" href="<?= base_url() ?>dashboard/lomba">
                  <span data-feather="home"></span>
                  Lomba<span class="sr-only"></span>
                </a>
              </li>
            </ul>
          </div>
        </nav>