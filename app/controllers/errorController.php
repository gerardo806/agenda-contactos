<?php
require_once(__DIR__ . "/../core/controller.php");
class ErrorController extends Controller
{
    public function error(){
        $this->render_spa("error");
    }
    public function error404(){
        $this->render('404', "error");
    }
}

?>