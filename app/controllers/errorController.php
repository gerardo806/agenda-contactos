<?php

class errorController extends Controller
{
    public function error(){
        $this->render_spa("error");
    }
    public function error404(){
        $this->render('404', "error");
    }
}

?>