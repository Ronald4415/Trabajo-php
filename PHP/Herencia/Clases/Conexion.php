<?php
class Conexion{

    private $host="localhost";
    private $user="root";
    private $password="";
    private $base="colegio";
    private $conectar;

    function __construct(){

        $cadena="mysql:host=".$this->host.";dbname=".$this->base.";setchartset=utf8";

        try{
            $this->conectar=new PDO($cadena,$this->user,$this->password);
            $this->conectar->setAttribute=(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e){
            $this->conectar="Error al conectar con la base de datos";
            echo "No se pudo realizar la conexion con la base de datos...  Revise ".$e->getMessage();
        }
    }

    public function traer_conexion(){
        return $this->conectar;

    }

}
    
?>