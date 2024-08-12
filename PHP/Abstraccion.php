<?php
    class Empleado{
        public $codigo;
        public $nombre;
        private $cargo;
        protected $sueldo;
        private $direccion;
        static $estado="activo";
        protected $fechaingre;
        
        function __construct(int $codi, string $nomb , string $car){
            $this->codigo=$codi;
            $this->nombre=$nomb;
            $this->cargo=$car;
            $this->sueldo=2000000;
            $this->direccion="Cra 14c # 76 - 42";
            $this->fechaingre=date("y-m-d h:m:s");
        }

        public function getcargo():string{
            return $this -> cargo;
        }

        public function getsueldo():int{
            return $this -> sueldo;
        }

        public function  getdireccion():string{
            return $this -> direccion;
        }

    }

?>