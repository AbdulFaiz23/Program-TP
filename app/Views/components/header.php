<header>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('/') ?>">Coffee<small>JOSS</small></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a href="<?= base_url('/') ?>" class="nav-link">Home</a>
          </li>

          <!-- DROPDOWN MENU -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown">
              Menu
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= base_url('menu') ?>">Menu yang sudah ada</a>
              <a class="dropdown-item" href="<?= base_url('menuraciksendiri') ?>">Menu racik sendiri</a>
            </div>
          </li>

          <li class="nav-item">
    <a href="#ourstory" class="nav-link">About</a>
</li>

          <li class="nav-item">
           <a href="<?= base_url('/') ?>#booking" class="nav-link">Contact</a>
          </li>

          <li class="nav-item cart">
            <a href="<?= base_url('cart') ?>" class="nav-link">
              <span class="icon icon-shopping_cart"></span>
              <span class="bag d-flex justify-content-center align-items-center"><small>1</small></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


