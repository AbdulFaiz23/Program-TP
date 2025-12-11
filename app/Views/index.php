<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">Coffee<small>JOSS</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="<?= base_url('menu') ?>" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="<?= base_url('about') ?>" class="nav-link">About</a></li>
          <li class="nav-item dropdown">
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?= base_url('shop') ?>">Shop</a>
                <a class="dropdown-item" href="<?= base_url('product-single') ?>">Single Product</a>
                <a class="dropdown-item" href="<?= base_url('room') ?>">Cart</a>
                <a class="dropdown-item" href="<?= base_url('checkout') ?>">Checkout</a>
              </div>
            </li>
          <li class="nav-item"><a href="<?= base_url('contact') ?>" class="nav-link">Contact</a></li>
          <li class="nav-item cart"><a href="<?= base_url('cart') ?>" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
        </ul>
      </div>
    </div>
</nav>

<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(<?= base_url('coffee1-gh-pages/images/bg_1.jpg') ?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
              <h1 class="mb-4">The Best Coffee Testing Experience</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(<?= base_url('coffee1-gh-pages/images/bg_2.jpg') ?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
              <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(<?= base_url('coffee1-gh-pages/images/bg_3.jpg') ?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
              <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
</section>

<section class="ftco-intro">
      <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
          <div class="info">
            <div class="row no-gutters">

              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>000 (123) 456 7890</h3>
                  <p>A small river named Duden flows by their place and supplies.</p>
                </div>
              </div>

              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-my_location"></span></div>
                <div class="text">
                  <h3>198 West 21th Street</h3>
                  <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
              </div>

              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-clock-o"></span></div>
                <div class="text">
                  <h3>Open Monday-Friday</h3>
                  <p>8:00am - 9:00pm</p>
                </div>
              </div>

            </div>
          </div>

          <div class="book p-4">
            <h3>Book a Table</h3>
            <form action="#" class="appointment-form">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="text" class="form-control appointment_date" placeholder="Date">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-ios-clock"></span></div>
                    <input type="text" class="form-control appointment_time" placeholder="Time">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
</section>

<section class="ftco-about d-md-flex">
      <div class="one-half img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/about.jpg') ?>);"></div>
      <div class="one-half ftco-animate">
        <div class="overlap">
          <div class="heading-section ftco-animate ">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Our Story</h2>
          </div>
          <div>
            <p>On her way she met a copy...</p>
          </div>
        </div>
      </div>
</section>

<section class="ftco-section">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-md-6 pr-md-5">
            <div class="heading-section text-md-right ftco-animate">
                <span class="subheading">Discover</span>
              <h2 class="mb-4">Our Menu</h2>
              <p class="mb-4">Far far away...</p>
              <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <div class="menu-entry">
                  <a href="#" class="img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-1.jpg') ?>);"></a>
                </div>
              </div>

              <div class="col-md-6">
                <div class="menu-entry mt-lg-4">
                  <a href="#" class="img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-2.jpg') ?>);"></a>
                </div>
              </div>

              <div class="col-md-6">
                <div class="menu-entry">
                  <a href="#" class="img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-3.jpg') ?>);"></a>
                </div>
              </div>

              <div class="col-md-6">
                <div class="menu-entry mt-lg-4">
                  <a href="#" class="img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-4.jpg') ?>);"></a>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
</section>

<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Best Coffee Sellers</h2>
            <p>Far far away...</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-1.jpg') ?>);"></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Coffee Capuccino</a></h3>
                <p>A small river named Duden flows...</p>
                <p class="price"><span>$5.90</span></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-2.jpg') ?>);"></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Coffee Capuccino</a></h3>
                <p>A small river named Duden flows...</p>
                <p class="price"><span>$5.90</span></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-3.jpg') ?>);"></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Coffee Capuccino</a></h3>
                <p>A small river named Duden flows...</p>
                <p class="price"><span>$5.90</span></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(<?= base_url('coffee1-gh-pages/images/menu-4.jpg') ?>);"></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Coffee Capuccino</a></h3>
                <p>A small river named Duden flows...</p>
                <p class="price"><span>$5.90</span></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
</section>

<?= $this->endSection() ?>
