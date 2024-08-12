<?php
class Operaciones{
    public $valor1;
    public $valor2;
    public $valor3;

    function construct(int $val1, int $val2){

        $this->valor1=$val1;
        $this->valor1=$val2;
    }

    public function Suma(){

        $this->valor3=$this->valor1+$this->valor2;
        return $this->valor3;
    }

}




?>