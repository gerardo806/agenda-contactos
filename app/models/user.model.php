<?php
require_once(__DIR__ . "/../core/model.php");
require_once(__DIR__ . '/../config/db.php');

$db = DBConnect::connected();
class UserModel implements Model
{
    private int $id_usuario;
    private string $nombreUsuario;
    private string $nombreCompleto;
    private string $correo;
    private string $clave;
    private int $estado;

	private $db;
    
    public function __construct(
        string $nombreUsuario,
        string $nombreCompleto,
        string $correo,
        string $clave
    ){
        $this->id_usuario = 0;
        $this->nombreUsuario = $nombreUsuario;
        $this->nombreCompleto = $nombreCompleto;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->estado = 1;
		$this->db = DBConnect::connected();
    }

	public function save(): void
	{
		//global $db;
		$sql = "INSERT INTO usuario(nombreUsuario, nombreCompleto, correo, clave, estado) VALUES(?,?,?,?,?)";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			$this->nombreUsuario,
			$this->nombreCompleto,
			$this->correo,
			$this->clave,
			$this->estado
		));
		//echo "guardado...";
	}

	public static function getOne($id)
	{
		//
	}

	public static function getAll()
	{
		//
	}

	public static function delete($id): void
	{
		//
	}

	public function getId_usuario(): int {
		return $this->id_usuario;
	}
	
	public function setId_usuario(int $id_usuario): self {
		$this->id_usuario = $id_usuario;
		return $this;
	}

	public function getNombreUsuario(): string {
		return $this->nombreUsuario;
	}
	
	public function setNombreUsuario(string $nombreUsuario): self {
		$this->nombreUsuario = $nombreUsuario;
		return $this;
	}

	public function getNombreCompleto(): string {
		return $this->nombreCompleto;
	}
	
	public function setNombreCompleto(string $nombreCompleto): self {
		$this->nombreCompleto = $nombreCompleto;
		return $this;
	}

	public function getCorreo(): string {
		return $this->correo;
	}
	
	public function setCorreo(string $correo): self {
		$this->correo = $correo;
		return $this;
	}

	public function getClave(): string {
		return $this->clave;
	}
	
	public function setClave(string $clave): self {
		$this->clave = $clave;
		return $this;
	}

	public function getEstado(): int {
		return $this->estado;
	}

	public function setEstado(int $estado): self {
		$this->estado = $estado;
		return $this;
	}

    public function __toString(): string {
        $data = [
            "id_usuario" => $this->id_usuario,
            "nombreUsuario" => $this->nombreUsuario,
            "nombreCompleto" => $this->nombreCompleto,
            "correo" => $this->correo,
            "clave" => $this->clave,
            "estado" => $this->estado
        ];

        return json_encode($data);
    }
}

?>