<!DOCTYPE html>
<html lang="pt-BR" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> <?= APP_NAME?> </title>
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->
    <link href="<?= base_url('/assets/css/style.css')?>" rel="stylesheet">

</head>

<body class="h-100">
 
<?= $this->renderSection("content")?>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?=  base_url('/assets/vendor/global/global.min.js') ?>"></script>
    <script src=" <?= base_url('/assets/js/quixnav-init.js')?>"></script>
    <script src="<?= base_url('/assets/js/custom.min.js')?>"></script>

</body>

</html>