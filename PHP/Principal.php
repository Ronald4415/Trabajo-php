<?php
    require_once("Abstraccion.php");

    $obj1 = new Empleado(31068736737, " ronald ayala" , " ingeniero", 2000000);

    echo $obj1 -> codigo,"<br>";
    echo $obj1 -> nombre,"<br>";
    echo $obj1 -> getcargo(),"<br>";
    echo $obj1 -> getsueldo(),"<br>";
    echo $obj1 -> getdireccion()."<br>";
    echo $obj1::$estado;"<br>";


?>