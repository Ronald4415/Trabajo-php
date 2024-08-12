<?php
require_once("Conexion.php"); 
class Trabajo extends Conexion 
{
	private $datos;
	private $conexion;
	private $registros=array();

	function __construct()
	{
		$this->conexion=new Conexion();
		$this->conexion=$this->conexion->traer_conexion();
	}
	public function trae_datos()
	{
		$sql="select * from alumnos";
		$consulta=$this->conexion->prepare($sql);
		$consulta->execute();
		$resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
		return $resultado;
	}

	public function datos_uno($cod)
	{
		$sql="select * from alumnos where IdAlumno='$cod'";
		$consulta=$this->conexion->prepare($sql);
		$consulta->execute();
		
		return $result=$consulta->fetchAll(PDO::FETCH_ASSOC);
	}

	public function adic_est($v1,$v2,$v3,$v4,$v5)
	{
		$v5=password_hash($v5, PASSWORD_DEFAULT, array("cost"=>12));

		$sql="insert into alumnos (IdAlumno, NombreA, ApellidoA, CorrecoA, Password) values(:uno, :dos, :tre, :cua, :cin)";
		$consulta=$this->conexion->prepare($sql);
		$consulta->bindvalue(":uno", $v1);
		$consulta->bindvalue(":dos", $v2);
		$consulta->bindvalue(":tre", $v3);
		$consulta->bindvalue(":cua", $v4);
		$consulta->bindvalue(":cin", $v5);
		$resulta=$consulta->execute();
		return $resulta;
	}

	public function sube_archivo($id,$nombre)
	{

		$sql="update alumnos set imagenes ='$nombre' where id='1'";
		$consulta=$this->conexion->prepare($sql);
		$resultado=$consulta->execute();

		return $resultado;
	}
}
 ?>