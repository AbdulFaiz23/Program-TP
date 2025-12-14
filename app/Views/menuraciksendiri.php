<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5 pt-5">

    <!-- Judul -->
    <h1 class="mb-3 text-light">Racik Sendiri</h1>

    <form>

        <!-- Nama Racikan -->
        <div class="mb-3">
            <label class="form-label text-light">Nama Racikan</label>
            <input type="text" class="form-control">
        </div>

        <!-- Bahan & Jumlah -->
        <div class="mb-3">
    <label class="form-label text-light">Bahan & Jumlah</label>

    <div class="card p-3 bg-dark text-light border-secondary">

        <!-- Espresso -->
        <div class="row align-items-center mb-2">
            <div class="col-6">
                Espresso <small class="text-muted">(Rp 10.000)</small>
            </div>
            <div class="col-6">
                <div class="input-group input-group-sm">
                    <button type="button" class="btn btn-outline-light btn-minus">-</button>
                    <input type="number" name="espresso"
                           class="form-control text-center bg-dark text-light border-secondary qty"
                           value="0" min="0" readonly>
                    <button type="button" class="btn btn-outline-light btn-plus">+</button>
                </div>
            </div>
        </div>

        <!-- Susu -->
        <div class="row align-items-center mb-2">
            <div class="col-6">
                Susu <small class="text-muted">(Rp 4.000)</small>
            </div>
            <div class="col-6">
                <div class="input-group input-group-sm">
                    <button type="button" class="btn btn-outline-light btn-minus">-</button>
                    <input type="number" name="susu"
                           class="form-control text-center bg-dark text-light border-secondary qty"
                           value="0" min="0" readonly>
                    <button type="button" class="btn btn-outline-light btn-plus">+</button>
                </div>
            </div>
        </div>

        <!-- Gula -->
        <div class="row align-items-center mb-2">
            <div class="col-6">
                Gula <small class="text-muted">(Rp 1.000)</small>
            </div>
            <div class="col-6">
                <div class="input-group input-group-sm">
                    <button type="button" class="btn btn-outline-light btn-minus">-</button>
                    <input type="number" name="gula"
                           class="form-control text-center bg-dark text-light border-secondary qty"
                           value="0" min="0" readonly>
                    <button type="button" class="btn btn-outline-light btn-plus">+</button>
                </div>
            </div>
        </div>

        <!-- Es -->
        <div class="row align-items-center">
            <div class="col-6">
                Es <small class="text-muted">(Rp 2.000)</small>
            </div>
            <div class="col-6">
                <div class="input-group input-group-sm">
                    <button type="button" class="btn btn-outline-light btn-minus">-</button>
                    <input type="number" name="es"
                           class="form-control text-center bg-dark text-light border-secondary qty"
                           value="0" min="0" readonly>
                    <button type="button" class="btn btn-outline-light btn-plus">+</button>
                </div>
            </div>
        </div>

    </div>
</div>




        <!-- Catatan -->
        <div class="mb-3">
            <label class="form-label text-light">Catatan</label>
            <textarea class="form-control"></textarea>
        </div>

        <!-- Total -->
        <div class="mb-3 text-light">
            <strong>Total:</strong> Rp 0
        </div>

        <!-- Tombol -->
        <div class="mb-4">
            <button class="btn btn-primary">Simpan Racikan</button>
            <button type="reset" class="btn btn-outline-secondary ms-2">Reset</button>
        </div>

    </form>
</div>


<script>
document.querySelectorAll('.btn-plus').forEach(btn => {
    btn.addEventListener('click', function () {
        const input = this.parentElement.querySelector('.qty');
        input.value = parseInt(input.value) + 1;
    });
});

document.querySelectorAll('.btn-minus').forEach(btn => {
    btn.addEventListener('click', function () {
        const input = this.parentElement.querySelector('.qty');
        if (parseInt(input.value) > 0) {
            input.value = parseInt(input.value) - 1;
        }
    });
});
</script>

<?= $this->endSection() ?>

