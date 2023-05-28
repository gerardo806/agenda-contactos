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

        protected function render_spa($layout ="sites"){
            require_once(__DIR__. "/../views/layout/$layout.layout.php");
        }

        
    }

?>