<?php

class errorController extends Controller
{
    public function error404(){
        $this->render('404', "error");
    }
}

?>