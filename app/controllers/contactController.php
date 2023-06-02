<?php
require_once(__DIR__ . "/../core/controller.php");
class ContactController extends Controller 
{
    public function nuevo_contacto(){
        return $this->render('nuevo', 'contact');
    }
}

?>