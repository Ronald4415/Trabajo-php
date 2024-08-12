<?php
require_once("Clases/Clases.php");


    $cod=1006;
    $tra=new Trabajo();
    $tra1=$tra->datos_uno($cod);

    $id=$tra1[0]["IdAlumno"];
    $no=$tra1[0]["NombreA"];
    $ap=$tra1[0]["ApellidoA"];
    $cor=$tra1[0]["CorrecoA"];
    $pas=$tra1[0]["Pasword"];   

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="Estilos/interfaz.css">
 	<title>Consulta Estudiantes</title>
 </head>
 <body>
 	<section class="formulario_reg">
 		<h4>Formulario Consulta Estudiantes</h4>
 		<form action="">
 			<input type="text" class="controles" name="ident" id="ident" value="<?php echo $id ?>">
 			<input type="text" class="controles" name="nomb" id="nomb" value="<?php echo $no ?>">
 			<input type="text" class="controles" name="ape" id="ape" value="<?php echo $ap ?>">
 			<input type="text" class="controles" name="cor" id="cor" value="<?php echo $cor ?>">
 			<input type="password" class="controles" name="pas" id="pas" value="<?php echo $pas ?>">
 			<br>
            <div class="botones">
     			<input type="submit" class="boton" name="regre" value="regreso">
                <input type="submit" class="boton" name="actua" value="actua">
            </div>
 		</form>
 	</section>
 </body>
 </html>