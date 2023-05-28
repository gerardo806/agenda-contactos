<?php
    class Controller{
        protected function render(
            string $path,
            array $parameters = [],
            string $layout = ''
        ){
            require_once(__DIR__ . "/../views/pages/$path.view.php");
        }

        protected function render_spa(){
            require_once(__DIR__. "/../views/layout/sites.layout.php");
        }
    }

?>