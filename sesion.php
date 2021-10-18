<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Inicio sesion</title>
</head>
<body>

<header>
<h1>TIENDA ELECTRONICA - Bienvenido</h1>
<a href="index.php">Registrar</a>
</header>

<?php 

if(isset($errorLogin)){
	echo $errorLogin;
}

?>

<h2>INICIO DE SESION</h2>

	<form action="logica/loguear.php" method="POST">
		 
		 <label>Nombre</label><input type="text" name="nom" placeholder="Nombre" required="">
			<br>
		 <label>Contraseña</label><input type="password" name="con" placeholder="Contraseña"  required="">
			<br>
		 <input type="submit" name="enviar" value="INICIAR">

	</form>

</body>
</html>
