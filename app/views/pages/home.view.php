<?php

session_start();
//var_dump($_SESSION['user']);

?>
<div class="mt-5">
    <span class="display-1">Bienvenid@ <?=$_SESSION['nombre']?> :D</span>
    <p>
        Nos alegra que nos visite, la comunicación es escencial 
        en cualquier parte del mundo sin importar la distancia 
        o el tipo de contacto nuestra agenda permite almacenar 
        todo tipo de contacto y acceder a los mismos facilmente.
    </p>
</div>