<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="ftco-section">
  <div class="container">
    
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Kopi Pilihan Kami</span>
        <h2 class="mb-4">Pilih Kopi Favoritmu</h2>
      </div>
    </div>

    <div class="row">

    <?php foreach ($products as $p): ?>
      <div class="col-md-3 text-center ftco-animate">
        <div class="menu-entry">

          <a class="img"
            style="background-image:url(<?= base_url($p['image']) ?>);"></a>

          <div class="text pt-4">
            <h3><?= esc($p['name']) ?></h3>
            <p><?= esc($p['description']) ?></p>
            <p class="price">
              <span>Rp <?= number_format($p['price']) ?></span>
            </p>

            <form action="<?= base_url('cart/add') ?>" method="post">
              <input type="hidden" name="id" value="<?= $p['id'] ?>">
              <input type="hidden" name="name" value="<?= esc($p['name']) ?>">
              <input type="hidden" name="price" value="<?= $p['price'] ?>">
              <input type="hidden" name="image" value="<?= $p['image'] ?>">

              <button type="submit"
                      class="btn btn-primary btn-outline-primary">
                Tambah
              </button>
            </form>

          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</section>


<?= $this->endSection() ?>