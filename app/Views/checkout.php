<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
  <h2 class="mb-4">Checkout</h2>

  <?php if (empty($cart)): ?>
    <div class="alert alert-warning">
      Keranjang masih kosong.
    </div>
  <?php else: ?>

  <form action="<?= base_url('checkout/process') ?>" method="post">


    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" required>
      </div>

      <div class="col-md-6 mb-3">
        <label>No. WhatsApp</label>
        <input type="text" name="wa" class="form-control" placeholder="628xxxx" required>
      </div>

      <div class="col-md-12 mb-3">
        <label>Alamat Lengkap</label>
        <textarea name="alamat" class="form-control" rows="3" required></textarea>
      </div>
    </div>

    <hr>

    <h4>Detail Pesanan</h4>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Produk</th>
          <th>Harga</th>
          <th>Qty</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php $total = 0; ?>
        <?php foreach ($cart as $item): ?>
          <?php 
            $subtotal = $item['price'] * $item['qty'];
            $total += $subtotal;
          ?>
          <tr>
            <td><?= esc($item['name']) ?></td>
            <td>Rp <?= number_format($item['price']) ?></td>
            <td><?= $item['qty'] ?></td>
            <td>Rp <?= number_format($subtotal) ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <h4 class="mt-3">Total Bayar: <strong>Rp <?= number_format($total) ?></strong></h4>

    <input type="hidden" name="total" value="<?= $total ?>">

    <button type="submit" class="btn btn-success btn-lg mt-3">
      Pesan via WhatsApp
    </button>

  </form>
  <?php endif; ?>
</div>

<?= $this->endSection() ?>
