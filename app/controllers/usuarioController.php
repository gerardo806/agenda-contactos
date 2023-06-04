<?php
require_once(__DIR__ . "/../core/controller.php");
require_once(__DIR__ . "/../models/user.model.php");

class UsuarioController extends Controller 
{
    public function nuevo_usuario(){
        return $this->render("nuevo_usuario", "usuarios");
    }

    public function guardar_usuario(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            header('Content-Type: application/json');
            $data = json_decode(file_get_contents("php://input"), true);

            /* $user = [
                "nombreUsuario" => $data['nombreUsuario'],
                "nombreCompleto" => $data['nombreCompleto'],
                "correo" => $data['correo'],
                "clave" => $data['clave'],
                "claveEncriptada" => password_hash($data['clave'], PASSWORD_BCRYPT)
            ];
            
            echo json_encode($user); */
            $new_user = new UserModel(
                $data['nombreUsuario'], 
                $data['nombreCompleto'], 
                $data['correo'], $data['clave']
            );
            try {
                $new_user->save();
                echo json_encode(array("msg" => "usuario guardado"));
            } catch(PDOException $ex) {
                echo 'Error conectando a la BBDD. '.$ex->getMessage(); 
            } catch (\Throwable $th) {
                echo json_encode(array("msg" => "ocurrio un error: " . $th->getMessage()));
            }
        }
    }
}

?>