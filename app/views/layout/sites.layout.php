<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contacto</title>
    <link rel="shortcut icon" href="<?=URL_PATH?>/assets/img/contacto.png">
    <link rel="stylesheet" href="<?=URL_PATH?>/assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL_PATH?>/assets/lib/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?=URL_PATH?>/assets/css/styles.css">
</head>

<body>
    <?php require_once(__DIR__ . "/../includes/navbar.view.php");?>

    <!--Alert-->
    <?php require_once(__DIR__ . "/../includes/alert.view.php");?>

    <!-- Content -->
    <main class="container my-5 py-3" id="app"></main>

    <script src="<?=URL_PATH?>/assets/lib/js/axios.min.js"></script>
    <script src="<?=URL_PATH?>/assets/lib/js/bootstrap.bundle.min.js"></script>
    <script src="<?=URL_PATH?>/assets/js/helpers.js"></script>
    <script src="<?=URL_PATH?>/assets/js/navbar/navbar.js"></script>
    <script src="<?=URL_PATH?>/assets/js/app.js"></script>
    <div id="script"></div>
</body>

</html>