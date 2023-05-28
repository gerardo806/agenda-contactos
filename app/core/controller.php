<?php
    class Controller{
        protected function render(
            string $path,
            string $view = "pages",
            array $parameters = [],
            string $layout = ''
        ){
            require_once(__DIR__ . "/../views/$view/$path.view.php");
        }

        protected function render_spa(){
            require_once(__DIR__. "/../views/layout/sites.layout.php");
        }

        
    }

?>