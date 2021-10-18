<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bienvenida</title>
</head>
<body>

<header>
<h1>TIENDA ELECTRONICA - Bienvenido</h1>
<a href="sesion.php">Iniciar sesion</a>
<div>
	<a href="productos.php">Productos</a>
</div>
<div>
	<a href="ofertas.php">Ofertas</a>
</div>
</header>

<h2>REGISTRATE</h2>

	<form action="" method="POST">
		 
		 <label>Nombre</label><input type="text" name="nom" placeholder="Nombre" required="">
			<br>
		 <label>Contraseña</label><input type="password" name="con" placeholder="Contraseña"  required="">
			<br>
		 <label>Correo</label><input type="text" name="cor" placeholder="Correo"  required="" >
			<br>
		 <input type="submit" name="enviar" value="Enviar datos">

	</form>

	<?php 
	if(isset($_POST['nom']) && isset($_POST['con']) && isset($_POST['cor'])){
			require_once "pdo/conexion.php";
			require_once "procesos/guardar.php";
	}

	?>

</body>
</html>
