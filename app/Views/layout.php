<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>

    <?php 
        
        $asset = base_url('coffee1-gh-pages/');
    ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $asset ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= $asset ?>css/animate.css">
    <link rel="stylesheet" href="<?= $asset ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $asset ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $asset ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $asset ?>css/aos.css">
    <link rel="stylesheet" href="<?= $asset ?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?= $asset ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= $asset ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= $asset ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= $asset ?>css/icomoon.css">
    <link rel="stylesheet" href="<?= $asset ?>css/style.css">

    <?= $this->renderSection('styles') ?>
</head>

<body>

    <?= $this->include('components/header') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('components/footer') ?>

    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

    <!-- JS -->
    <script src="<?= $asset ?>js/jquery.min.js"></script>
    <script src="<?= $asset ?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= $asset ?>js/popper.min.js"></script>
    <script src="<?= $asset ?>js/bootstrap.min.js"></script>
    <script src="<?= $asset ?>js/jquery.easing.1.3.js"></script>
    <script src="<?= $asset ?>js/jquery.waypoints.min.js"></script>
    <script src="<?= $asset ?>js/jquery.stellar.min.js"></script>
    <script src="<?= $asset ?>js/owl.carousel.min.js"></script>
    <script src="<?= $asset ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= $asset ?>js/aos.js"></script>
    <script src="<?= $asset ?>js/jquery.animateNumber.min.js"></script>
    <script src="<?= $asset ?>js/bootstrap-datepicker.js"></script>
    <script src="<?= $asset ?>js/jquery.timepicker.min.js"></script>
    <script src="<?= $asset ?>js/scrollax.min.js"></script>

    <script src="<?= $asset ?>js/google-map.js"></script>
    <script src="<?= $asset ?>js/main.js"></script>

    <?= $this->renderSection('scripts') ?>

</body>
</html>
