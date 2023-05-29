<?php

class UsuarioController extends Controller 
{
    public function nuevo_usuario(){
        return $this->render("nuevo", "usuarios");
    }
}

?>