<?php
  $cart = session()->get('cart') ?? [];
  $cartCount = 0;

  foreach ($cart as $item) {
      $cartCount += $item['qty'];
  }
?>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

      <a class="navbar-brand" href="<?= base_url('/') ?>">
        Coffee<small>JOSS</small>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
        <span class="oi oi-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a href="<?= base_url('/') ?>" class="nav-link">Home</a>
          </li>

          <li class="nav-item">
            <a href="#ourstory" class="nav-link">About</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown">
              Menu
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= base_url('menu') ?>">Menu Utama</a>
              <a class="dropdown-item" href="<?= base_url('menuraciksendiri') ?>">Menu Racikan</a>
            </div>
          </li>

          <li class="nav-item">
            <a href="#BestSeller" class="nav-link">Best Seller</a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('#footer') ?>" class="nav-link">Contact</a>
          </li>

          <!-- CART ICON -->
          <li class="nav-item cart position-relative">
            <a href="<?= base_url('cart') ?>" class="nav-link">
              <span class="icon icon-shopping_cart"></span>

              <?php if ($cartCount > 0): ?>
                <span class="badge badge-danger position-absolute"
                      style="top: 0; right: 0; font-size: 12px;">
                  <?= $cartCount ?>
                </span>
              <?php endif; ?>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>
