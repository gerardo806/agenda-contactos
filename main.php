<?php
    require_once __DIR__ . "/config/uri.php";
    require_once __DIR__ . "/config/router.php";

    $router = new Router();
    $router->run();
?>