<?php
require_once "pdo/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bienvenida</title>
</head>
<body>

<header>
<h1>TIENDA ELECTRONICA - Bienvenido</h1>
<a href="productos-sesion.php">Productos</a>
<a href="ofertas-sesion.php">Ofertas</a>
<a href="compras.php">Compras</a>

</header>

	<table border="1">
	<tr>
		<td>Detalle de compra</td>
	</tr>

		<?php 
		$sql="SELECT * FROM compra"; //mostrar todos los datos.
		//$sql="DELETE FROM usuario WHERE contrasena='chimino' AND id='7'";
		$result=mysqli_query($conect,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		?>
		
		<tr>
		<td><?php echo $mostrar['detalle_compra'] ?></td>
		</tr>
		
		<?php
		}
		?>
	</table>

</body>
</html>
