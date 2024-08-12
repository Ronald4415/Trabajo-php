<?php
require_once("Clases/Clases.php");
if (isset($_POST["enviar"]))
{
	$v1=$_POST['ident'];
	$v2=$_POST['nomb'];
	$v3=$_POST['ape'];
	$v4=$_POST['cor'];
	$v5=$_POST['pas'];
	$v6=$_POST['pas1'];
	$tra=new Conexion();
	if($v5==$v6)
	{
        $tra = new Trabajo();
		$tra1=$tra->adic_est($v1,$v2,$v3,$v4,$v5);

		echo "<script type='text/javascript'>
			alert('Estudiante Adicionado Correctamente...');
			window.location='adicion_est.php';
		</script>";

	}
	else
	{
		echo "<script type='text/javascript'>
			alert('No concuerdan los Password Suministrados. Reintente...');
			window.location='adicion_est.php';
		</script>";
	}
}

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
 		<form action="" method="post">
 			<input type="text" class="controles" name="ident" id="ident" placeholder="Digite el Codigo del Estudiante" >
 			<input type="text" class="controles" name="nomb" id="nomb" placeholder="Digite el Nombre del Estudiante" >
 			<input type="text" class="controles" name="ape" id="ape" placeholder="Digite el Apellido del Estudiante">
 			<input type="text" class="controles" name="cor" id="cor" placeholder="Digite el Correo del Estudiante">
 			<input type="password" class="controles" name="pas" id="pas" placeholder="Digite el Password">
 			<input type="password" class="controles" name="pas1" id="pas1" placeholder="Confirme el Password">
 			<br>

 			<input type="submit" class="boton" name="adicion" value="Adicion">
 			<input type="hidden" name="enviar" value="Enviar">

 		</form>
 	</section>
 	
 </body>
 </html>