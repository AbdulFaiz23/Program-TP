<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
  <h2 class="mb-4">Keranjang Belanja</h2>

  <?php if (empty($cart)): ?>
    <div class="alert alert-warning">Keranjang masih kosong</div>
  <?php else: ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Gambar</th>
          <th>Produk</th>
          <th>Harga</th>
          <th>Qty</th>
          <th>Subtotal</th>
          <th>Aksi</th>
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
            <td>
              <img src="<?= base_url($item['image'] ?? 'default.png') ?>" width="60">
            </td>
            <td><?= esc($item['name']) ?></td>
            <td>Rp <?= number_format($item['price']) ?></td>
            <td><?= $item['qty'] ?></td>
            <td>Rp <?= number_format($subtotal) ?></td>
            <td>
              <a href="<?= base_url('cart/remove/'.$item['id']) ?>" 
                 class="btn btn-danger btn-sm">
                Hapus
              </a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <h4>Total: Rp <?= number_format($total) ?></h4>

    <a href="<?= base_url('checkout') ?>" class="btn btn-success mt-3">
      Checkout
    </a>
  <?php endif; ?>
</div>

<?= $this->endSection() ?>
