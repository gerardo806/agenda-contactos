<?php
    session_start();
    var_dump($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="shortcut icon" href="<?=URL_PATH?>/assets/img/contacto.png">
    <link rel="stylesheet" href="<?=URL_PATH?>/assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL_PATH?>/assets/lib/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?=URL_PATH?>/assets/css/styles.css">
</head>

<body>
    <!-- Content -->
    <main class="container my-5 py-3" id="app">
        <div class="mt-4" id="nuevo-usuario">
            <h1 class="text-center">Credenciales de Usuario</h1>
            <div class="col-lg-4 col-md-4 col-sm-12 offset-md-4 offset-lg-4 mt-3">
                <article class="card">
                    <header class="card-header bg-dark text-white">
                        Completar Campos
                    </header>
                    <section class="card-body">
                        <h4 class="card-title">Formulario de inicio de sesión</h4>
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label w-100">
                                            Nombre de Usuario
                                            <input name="nombreUsuario" id="nombreUsuario" type="text"
                                                class="form-control mt-2">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label w-100">
                                            Clave de Usuario
                                            <input name="clave" id="clave" type="password" class="form-control mt-2">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button id="btn_login" type="button" class="btn btn-primary w-100">
                                Iniciar sesión
                            </button>
                        </form>
                    </section>
                    <footer class="card-footer bg-dark text-light">
                        Si no recuerda las credenciales contacte al administrador
                    </footer>
                </article>
            </div>
        </div>
    </main>

    <script src="<?=URL_PATH?>/assets/lib/js/axios.min.js"></script>
    <script src="<?=URL_PATH?>/assets/lib/js/bootstrap.bundle.min.js"></script>
    <script src="<?=URL_PATH?>/assets/js/helpers.js"></script>
    <div id="script"></div>
</body>

</html>