<?php
require_once(__DIR__ . "/../core/controller.php");
require_once(__DIR__ . "/../models/tipoContacto.model.php");
class ContactController extends Controller 
{
    public function nuevo_contacto(){
        return $this->render('nuevo', 'contact');
    }

    public function lista_contactos(){
        return $this->render('lista_contactos', 'contact');
    }

    public function guardar_contact(){
        
    }

    public function obtener_tipos_contactos(){
        header('Content-Type: application/json');
        try {
            TipoContactoModels::connect_db();
            echo json_encode(TipoContactoModels::getAll());
        } catch (\Throwable $th) {
            echo json_encode(array("error" => $th->getMessage()));
        }
    }
}

?>