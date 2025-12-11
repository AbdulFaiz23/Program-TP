<?= $this->extend('layout') ?>
<?= $this->section('content') ?>



<section class="home-slider owl-carousel">
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
        <div class="wrap d-md-flex align-items-xl-end">

            <div class="info">
                <div class="row no-gutters">

                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>0812-3456-7890</h3>
                            <p>Hubungi kami untuk pemesanan Kopi Joss racik sendiri, tersedia setiap hari.</p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Kedai Kopi Joss</h3>
                            <p>Jl. Angkringan No. 21, Kota Yogyakarta – Pusat Kopi Joss Asli.</p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Buka Setiap Hari</h3>
                            <p>08:00 - 22:00 • Racik Kopi Sesuai Seleramu.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="book p-4">
                <h3>Booking Meja</h3>
                <form action="#" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Depan">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Nama Belakang">
                        </div>
                    </div>

                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Tanggal">
                            </div>
                        </div>

                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="text" class="form-control appointment_time" placeholder="Waktu">
                            </div>
                        </div>

                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Nomor Telepon">
                        </div>
                    </div>

                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea cols="30" rows="2" class="form-control" placeholder="Pesan / Permintaan Khusus"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Pesan Sekarang" class="btn btn-white py-3 px-4">
                        </div>
                    </div>
                </form>
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



<section class="ftco-section">
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

<section class="ftco-section">
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
