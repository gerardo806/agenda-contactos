<?php
require_once(__DIR__ . "/../core/controller.php");
class PagesController extends Controller{
    public function index(){
        $this->render_spa();
    }

    public function home(){
        $this->render('home');
    }

    public function listar(){
        $this->render('listar');
    }

    public function editar(){
        echo "Editar!";
    }

    public function eliminar(){
        echo "Eliminar!";
    }

    public function crear(){
        echo "Crear!";
    }

    public function saludo(){
        echo "Hola Mundo";
    }
}

?>