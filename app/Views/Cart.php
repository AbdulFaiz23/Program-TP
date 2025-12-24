<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- HEADER / BREADCRUMB -->
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?= base_url('coffee1-gh-pages/images/bg_3.jpg') ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
              <p class="breadcrumbs">
                <span class="mr-2"><a href="<?= base_url('/') ?>">Home</a></span>
                <span>Cart</span>
              </p>
            </div>

          </div>
        </div>
      </div>
    </section>

<!-- CART CONTENT -->
<section class="ftco-section ftco-cart">
  <div class="container">

  <?php if (empty($cart)): ?>
    <div class="text-center">
      <h4>Keranjang masih kosong</h4>
      <a href="<?= base_url('/') ?>" class="btn btn-primary mt-3">Kembali ke Menu</a>
    </div>
  <?php else: ?>

  <div class="row">
    <div class="col-md-12 ftco-animate">
      <div class="cart-list">
        <table class="table">
          <thead class="thead-primary">
            <tr class="text-center">
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>

          <?php $grandTotal = 0; ?>
          <?php foreach ($cart as $id => $item): ?>
            <?php
              $total = $item['price'] * $item['qty'];
              $grandTotal += $total;
            ?>
            <tr class="text-center">

              <!-- remove -->
              <td class="product-remove">
                <a href="<?= base_url('cart/remove/'.$id) ?>">
                  <span class="icon-close"></span>
                </a>
              </td>

              <!-- image -->
              <td class="image-prod">
                <div class="img"
                  style="background-image:url(<?= base_url($item['image']) ?>);">
                </div>
              </td>

              <!-- product -->
              <td class="product-name">
                <h3><?= esc($item['name']) ?></h3>
              </td>

              <!-- price -->
              <td class="price">
                Rp <?= number_format($item['price']) ?>
              </td>

              <!-- quantity -->
              <td class="quantity">
                <div class="input-group mb-3">
                  <input type="text"
                         class="quantity form-control input-number"
                         value="<?= $item['qty'] ?>"
                         readonly>
                </div>
              </td>

              <!-- total -->
              <td class="total">
                Rp <?= number_format($total) ?>
              </td>

            </tr>
          <?php endforeach ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- CART TOTAL -->
  <div class="row justify-content-end">
    <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
      <div class="cart-total mb-3">
        <h3>Cart Totals</h3>

        <p class="d-flex">
          <span>Subtotal</span>
          <span>Rp <?= number_format($grandTotal) ?></span>
        </p>

        <p class="d-flex">
          <span>Delivery</span>
          <span>Rp 0</span>
        </p>

        <hr>

        <p class="d-flex total-price">
          <span>Total</span>
          <span>Rp <?= number_format($grandTotal) ?></span>
        </p>
      </div>

      <p class="text-center">
        <a href="#" class="btn btn-primary py-3 px-4">"
           class="btn btn-primary py-3 px-4">
           Proceed to Checkout
        </a>
      </p>
    </div>
  </div>

  <?php endif ?>

  </div>
</section>


<?= $this->endSection() ?>
