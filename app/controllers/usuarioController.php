<?php

class UsuarioController extends Controller 
{
    public function nuevo_usuario(){
        return $this->render("nuevo_usuario", "usuarios");
    }

    public function guardar_usuario(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            header('Content-Type: application/json');
            $data = json_decode(file_get_contents("php://input"), true);

            $user = [
                "nombreUsuario" => $data['nombreUsuario'],
                "nombreCompleto" => $data['nombreCompleto'],
                "correo" => $data['correo'],
                "clave" => $data['clave']
            ];
            
            echo json_encode($user); 
            //echo json_encode($data);
        }
    }
}

?>