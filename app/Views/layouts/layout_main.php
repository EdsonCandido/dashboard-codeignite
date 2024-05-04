<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= APP_NAME ?> </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/owl-carousel/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/owl-carousel/css/owl.theme.default.min.css') ?>">
    <link href="<?= base_url('assets/vendor/jqvmap/css/jqvmap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--* Preloader end *-->

    <div id="main-wrapper">
        <!--* Nav header start *-->
        <?= $this->include('layouts/partials/navbar_main') ?>
        <!--* Nav header end *-->




        <!--*  Sidebar start *-->
        <?= $this->include('layouts/partials/sidebar_main') ?>
        <!--* Sidebar end *-->


        <div class="content-body">
        <?= $this->renderSection("content")?>
        </div>

        <footer class="footer" >
            <div class="copyright">
                <p>Copyright © <?= APP_NAME?> &amp; Desenvolvido <a href="#" target="_blank">CorpsTek</a> <?= date('Y')?></p>
            </div>
        </footer>

    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url('assets/vendor/global/global.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/quixnav-init.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.min.js') ?>"></script>


    <!-- Vectormap -->
    <script src="<?= base_url('assets/vendor/raphael/raphael.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/morris/morris.min.js') ?>"></script>


    <script src="<?= base_url('assets/vendor/circle-progress/circle-progress.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/chart.js/Chart.bundle.min.js') ?>"></script>

    <script src="<?= base_url('assets/vendor/gaugeJS/dist/gauge.min.js') ?>"></script>

    <!--  flot-chart js -->
    <script src="<?= base_url('assets/vendor/flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/flot/jquery.flot.resize.js') ?>"></script>

    <!-- Owl Carousel -->
    <script src="<?= base_url('assets/vendor/owl-carousel/js/owl.carousel.min.js') ?>"></script>

    <!-- Counter Up -->
    <script src="<?= base_url('assets/vendor/jqvmap/js/jquery.vmap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jqvmap/js/jquery.vmap.usa.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery.counterup/jquery.counterup.min.js') ?>"></script>


    <script src="<?= base_url('assets/js/dashboard/dashboard-1.js') ?>"></script>

</body>

</html>