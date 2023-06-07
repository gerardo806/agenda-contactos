<?php
    session_start();
require_once(__DIR__ . "/../core/controller.php");
require_once(__DIR__ . "/../models/user.model.php");

class UsuarioController extends Controller
{
    public function login()
    {
        return $this->render("login", "usuarios");
    }
    public function nuevo_usuario()
    {
        return $this->render("nuevo_usuario", "usuarios");
    }

    public function editar_usuario()
    {
        return $this->render("editar_usuario", "usuarios");
    }

    public function lista_usuarios()
    {
        return $this->render("lista_usuarios", "usuarios");
    }

    public function loginIn()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header('Content-Type: application/json');
            $credenciales = json_decode(file_get_contents("php://input"), true);
            try {
                UserModel::connect_db();
                echo json_encode(UserModel::login($credenciales));
            } catch (\Throwable $th) {
                echo json_encode(array("error" => $th->getMessage()));
            }
        }
    }

    public function guardar_usuario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
                $data['correo'],
                $data['clave']
            );
            try {
                $res = $new_user->save();
                echo json_encode(array("msg" => $res));
            } catch (PDOException $ex) {
                echo 'Error conectando a la BBDD. ' . $ex->getMessage();
            } catch (\Throwable $th) {
                echo json_encode(array("msg" => "ocurrio un error: " . $th->getMessage()));
            }
        }
    }

    public function actualizar_usuario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header('Content-Type: application/json');
            $data = json_decode(file_get_contents("php://input"), true);

            /* $user = [
                "id_usuario" => $data['id_usuario'],
                "nombreUsuario" => $data['nombreUsuario'],
                "nombreCompleto" => $data['nombreCompleto'],
                "correo" => $data['correo'],
                "clave" => empty($data['clave'])? '': $data['clave']
                //"claveEncriptada" => password_hash($data['clave'], PASSWORD_BCRYPT)
            ];
            
            echo json_encode($user); */

            $new_user = new UserModel(
                $data['nombreUsuario'],
                $data['nombreCompleto'],
                $data['correo'],
                empty($data['clave']) ? '' : $data['clave']
            );

            $new_user->setId_usuario($data['id_usuario']);

            try {
                $res = $new_user->save();
                echo json_encode(array("msg" => $res));
            } catch (PDOException $ex) {
                echo 'Error conectando a la BBDD. ' . $ex->getMessage();
            } catch (\Throwable $th) {
                echo json_encode(array("msg" => "ocurrio un error: " . $th->getMessage()));
            }
        }
    }

    public function eliminar_usuario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header('Content-Type: application/json');
            $id = json_decode(file_get_contents("php://input"), true);
            //echo json_encode(["id" => $id["id"]]);

            try {
                UserModel::connect_db();
                UserModel::delete($id["id"]);
                echo json_encode(array("msg" => "eliminado"));
            } catch (\Throwable $th) {
                echo json_encode(array("error" => $th->getMessage()));
            }
        }
    }

    public function obtener_usuarios()
    {
        header('Content-Type: application/json');
        try {
            UserModel::connect_db();
            echo json_encode(UserModel::getAll());
        } catch (\Throwable $th) {
            echo json_encode(array("error" => $th->getMessage()));
        }
    }

    //Rol
    public function nuevo_rol(){
        return $this->render("nuevo_rol", "usuarios");
    }

    public function lista_roles(){
        return $this->render("lista_roles", "usuarios");
    }
}
