<?php
    class Router{
        public function __construct(){
            $this->matchRoute();
        }

        public function matchRoute(){
            //var_dump(URL);
            $url = explode('/', URL);
            //var_dump($url);

            $this->controller = !empty($url[1])?$url[1]: 'pages';
            $this->method = !empty($url[2])?$url[2]: 'index';

            $this->controller = $this->controller ."Controller";

            $path_file_controller = __DIR__ . "/../controllers/" . $this->controller . ".php";
            if (is_readable($path_file_controller)) {
                require_once($path_file_controller);
            }else {
                $this->controller = "error";
                $this->controller = $this->controller ."Controller";
                $this->method = "error";
                $path_file_controller = __DIR__ . "/../controllers/" . $this->controller . ".php";
                require_once($path_file_controller);
            }
        }

        public function run(){
            try {
                $controller = new $this->controller();
                $method = $this->method;
                $controller->$method();
            } catch (\Throwable $th) {
                $this->controller = "error";
                $this->controller = $this->controller ."Controller";
                $this->method = "error";
                $path_file_controller = __DIR__ . "/../controllers/" . $this->controller . ".php";
                require_once($path_file_controller);
                $controller = new $this->controller();
                $method = $this->method;
                $controller->$method();
            }
        }

        private $controller;
        private $method;
    }

?>