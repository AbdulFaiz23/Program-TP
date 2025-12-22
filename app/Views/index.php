<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="home-slider owl-carousel" >
      <div class="slider-item" style="background-image: url(<?= base_url('coffee1-gh-pages/images/bg_1.jpg') ?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Kopi Joss</span>
              <h1 class="mb-4">Nikmati Sensasi Kopi dengan Racikan Sesukamu</h1>
              <p class="mb-4 mb-md-5">Pilih biji kopi, tentukan tingkat roasting, dan racik sesuai gaya kamu. Kopi Joss memberikan pengalaman meracik kopi sendiri yang unik dan autentik.</p>
              <p>
                <a href="<?= base_url('menuraciksendiri') ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Racik Sekarang</a> 
                <a href="<?= base_url('menu') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
              </p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(<?= base_url('coffee1-gh-pages/images/bg_2.jpg') ?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Kopi Joss</span>
              <h1 class="mb-4">Rasa Otentik Jawa dengan Sentuhan Modern</h1>
              <p class="mb-4 mb-md-5">Dibuat dari biji kopi pilihan khas Nusantara. Setiap tegukan menghadirkan cita rasa khas yang kuat, wangi, dan mantap.</p>
              <p>
                <a href="<?= base_url('menuraciksendiri') ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Coba Sekarang</a> 
                <a href="<?= base_url('menu') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
              </p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(<?= base_url('coffee1-gh-pages/images/bg_3.jpg') ?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Kopi Joss</span>
              <h1 class="mb-4">Hangat, Nikmat, dan Siap Diracik Sesuai Selera</h1>
              <p class="mb-4 mb-md-5">Tambahkan gula, susu, arang panas, atau topping favoritmu. Buat kopi dengan karakter sesuai jiwamu.</p>
              <p>
                <a href="<?= base_url('menuraciksendiri') ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Buat Versimu</a> 
                <a href="<?= base_url('menu') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
              </p>
            </div>

          </div>
        </div>
      </div>
</section>


<section class="ftco-intro" id="booking">
    <div class="container-wrap">
        <div class="container-wrap w-100 d-flex align-items-xl-end">

            <div class="info w-100 pt-5">
                <div class="w-100">
                    <form action="#" class="w-100 bg-black d-flex flex-column">
                    <h1 class="text-center">BOOKING MEJA</h1>
                    <div class="d-flex flex-row w-100 justify-content-around">
                        <div class="d-flex flex-column w-25">
                            <label for="nama depan" class="fw-bolder fs-1 text-white">nama depan
                                </label>
                                <input type="text" class="" id="nama depan" placeholder="Nama Depan">
                            <label for="nama belakang" class="fw-bolder fs-1 text-white">nama belakang
                                </label>
                                <input type="text" class="" id="nama belakang" placeholder="Nama Belakang">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="appointment_date" class="fw-bolder fs-1 text-white"">tanggal             
                        </label>
                        <input type="text" class=" appointment_date" id="appointment_date" placeholder="Tanggal">
                            <label for="appointment_time"class="fw-bolder fs-1 text-white">waktu
                                </label>
                                <input type="text" class=" appointment_time" id="appointment_time" placeholder="Waktu">           
                        </div>
                        <div class="d-flex flex-column g-5 w-25">
                            <label for="notel" class="fw-bolder fs-1 text-white">nomor telepon</label>
                            <input type="text" class="" id="notel" placeholder="Nomor Telepon">
                            <label for="pesan" class="fw-bolder fs-1 text-white">Pesan</label>
                            <textarea cols="30" rows="1" class=""id="pesan" placeholder="Pesan / Permintaan Khusus"></textarea>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <input type="submit" value="Pesan Sekarang" class="btn btn-warning py-3 px-4 border-2 border-light border ">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="ourstory" class="ftco-about d-md-flex"> 
  <div class="one-half img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/about.jpg') ?>);"></div>

  <div class="one-half ftco-animate">
    <div class="overlap">

      <div class="heading-section ftco-animate">
        <span class="subheading">Discover</span>
        <h2 class="mb-4">Our Story</h2>
      </div>

      <div>
        <p>
          Kopi Joss lahir dari tradisi angkringan Yogyakarta yang unik dan penuh cerita.  
          Dengan cita rasa khas yang menghadirkan sensasi hangat, wangi, dan otentik,  
          Kopi Joss menjadi simbol kehangatan dan kreativitas dalam menikmati kopi.
        </p>

        <p>
          Kami membawa pengalaman tersebut ke konsep modern — memungkinkan setiap pelanggan  
          meracik kopi sesuai selera, memilih biji terbaik, menentukan tingkat roasting,  
          hingga menambah topping khas seperti arang panas, gula Jawa, susu, atau rempah pilihan.
        </p>

        <p>
          Setiap gelas Kopi Joss bukan hanya minuman, tetapi pengalaman penuh aroma dan cerita.
        </p>
      </div>

    </div>
  </div>
</section>




<section class="ftco-section" id="menu">
    <div class="container">
        <div class="row align-items-center">

            <!-- TEXT BAGIAN KIRI -->
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Menu</h2>
                    <p class="mb-4">
                        Nikmati berbagai pilihan menu kopi mulai dari resep klasik hingga racikan spesial buatan Anda sendiri.
                        Semua dibuat dari biji kopi pilihan dengan aroma dan cita rasa terbaik.
                    </p>

                    <!-- DROPDOWN VIEW FULL MENU -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-outline-primary px-4 py-3 dropdown-toggle" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            View Full Menu
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('menu') ?>">Menu Biasa</a>
                            <a class="dropdown-item" href="<?= base_url('menuraciksendiri') ?>">Menu Racik Sendiri</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FOTO-FOTO BAGIAN KANAN -->
            <div class="col-md-6">
                <div class="row">

                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="<?= base_url('menu') ?>" 
                               class="img" 
                               style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-1.jpg') ?>);">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="<?= base_url('menu') ?>" 
                               class="img" 
                               style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-2.jpg') ?>);">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="<?= base_url('menu') ?>" 
                               class="img" 
                               style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-3.jpg') ?>);">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="<?= base_url('menu') ?>" 
                               class="img" 
                               style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-4.jpg') ?>);">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section" id="BestSeller">
    <div class="container">
        
        <!-- JUDUL SECTION -->
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Best Coffee Sellers</h2>
                <p>Kopi pilihan paling diminati pelanggan kami, racikan khas dengan rasa otentik Nusantara.</p>
            </div>
        </div>

        <div class="row">

            <!-- ITEM 1 -->
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="<?= base_url('menu') ?>" class="img"
                       style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-1.jpg') ?>);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="<?= base_url('menu') ?>">Kopi Joss Original</a></h3>
                        <p>Kopi hitam panas dengan arang membara yang memberikan sensasi khas Yogyakarta.</p>
                        <p class="price"><span>Rp 10.000</span></p>
                        <p><a href="<?= base_url('cart/add/1') ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="<?= base_url('menu') ?>" class="img"
                       style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-2.jpg') ?>);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="<?= base_url('menu') ?>">Kopi Susu Gula Jawa</a></h3>
                        <p>Perpaduan kopi hitam, susu creamy, dan gula Jawa yang wangi dan lembut.</p>
                        <p class="price"><span>Rp 14.000</span></p>
                        <p><a href="<?= base_url('cart/add/2') ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="<?= base_url('menu') ?>" class="img"
                       style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-3.jpg') ?>);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="<?= base_url('menu') ?>">Es Kopi Krim</a></h3>
                        <p>Kopi dingin dengan balutan krim lembut, cocok dinikmati saat cuaca panas.</p>
                        <p class="price"><span>Rp 16.000</span></p>
                        <p><a href="<?= base_url('cart/add/3') ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>

            <!-- ITEM 4 -->
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="<?= base_url('menu') ?>" class="img"
                       style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-4.jpg') ?>);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="<?= base_url('menu') ?>">Kopi Coklat Spesial</a></h3>
                        <p>Kopi dengan sentuhan coklat pekat yang manis dan menyegarkan.</p>
                        <p class="price"><span>Rp 18.000</span></p>
                        <p><a href="<?= base_url('cart/add/4') ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>




<?= $this->endSection() ?>
