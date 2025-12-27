<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <h2 class="mb-4">Menu Kopi</h2>
      </div>
    </div>

    <div class="row">
      <?php foreach ($products as $p): ?>
        <div class="col-md-3 mb-4">
          <div class="card text-center">
            <img src="<?= base_url($p['image']) ?>" class="card-img-top" style="height:200px;object-fit:cover">

            <div class="card-body">
              <h5><?= esc($p['name']) ?></h5>
              <p>Rp <?= number_format($p['price']) ?></p>

              <form action="<?= base_url('cart/add') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="<?= $p['id'] ?>">
                <input type="hidden" name="name" value="<?= $p['name'] ?>">
                <input type="hidden" name="price" value="<?= $p['price'] ?>">
                <input type="hidden" name="image" value="<?= $p['image'] ?>">

                <button class="btn btn-primary btn-sm">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
