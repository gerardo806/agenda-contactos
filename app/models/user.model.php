<?php
require_once(__DIR__ . "/../core/model.php");
require_once(__DIR__ . '/../config/db.php');

class UserModel extends DBConnect implements Model
{
    private int $id_usuario;
    private string $nombreUsuario;
    private string $nombreCompleto;
    private string $correo;
    private string $clave;
    private int $estado;
    
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
		self::connected();
    }

	public static function connect_db(){
		self::connected();
	}

	public function save(): void
	{
		$sql = "INSERT INTO usuario(nombreUsuario, nombreCompleto, correo, clave, estado) VALUES(?,?,?,?,?)";
		$query = self::$db->prepare($sql);
		$query->execute(array(
			$this->nombreUsuario,
			$this->nombreCompleto,
			$this->correo,
			$this->clave,
			$this->estado
		));
	}

	public static function getOne($id)
	{
		//
	}

	public static function getAll()
	{
		$sql = "SELECT id_usuario, nombreUsuario, nombreCompleto, correo FROM usuario u WHERE estado = 1";
		$query = self::$db->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		if ($query->rowCount() > 0) {
			return $result;
		}
		return [0];
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