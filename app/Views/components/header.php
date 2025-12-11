<header>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">Coffee<small>JOSS</small></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item <?= (service('uri')->getSegment(1) == '' ? 'active' : '') ?>">
            <a href="<?= base_url() ?>" class="nav-link">Home</a>
          </li>

          <!-- DROPDOWN MENU -->
          <li class="nav-item dropdown <?= (service('uri')->getSegment(1) == 'menu' ? 'active' : '') ?>">
            <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="menuDropdown">
              <a class="dropdown-item" href="<?= base_url('menu') ?>">Menu yang sudah ada</a>
              <a class="dropdown-item" href="<?= base_url('menu/racik-sendiri') ?>">Menu racik sendiri</a>
            </div>
          </li>

          <li class="nav-item <?= (service('uri')->getSegment(1) == 'about' ? 'active' : '') ?>">
            <a href="<?= base_url('about') ?>" class="nav-link">About</a>
          </li>

          <li class="nav-item <?= (service('uri')->getSegment(1) == 'contact' ? 'active' : '') ?>">
            <a href="<?= base_url('contact') ?>" class="nav-link">Contact</a>
          </li>

          <li class="nav-item cart <?= (service('uri')->getSegment(1) == 'cart' ? 'active' : '') ?>">
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
