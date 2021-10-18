<?php 
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: sesion.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bienvenida</title>
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
</head>
<body>

<header>
<h1>TIENDA ELECTRONICA - BIENVENIDO <?php echo $usuario ?></h1><img src="img/luis.jpg" width="150" height="150">
<a href="logica/salir.php">Cerrar sesion</a>
<a href="ofertas-sesion.php">Ofertas</a>
<a href="compras.php">Compras</a>
<a href="detalle.compras.php">Detalle de compras</a>
<?php echo "<a href='logica/salir.php'>Cerrar Sesion</a>" ?>
</header>

<div class="tableta2">
		<img src="img/huawei2.jpg" width="150" height="150" />
		<p>
			Huawei MediaPad T3 7 - Tablet Wi-Fi, Mediatek 1.3 Ghz, 1GB RAM, 8GB ROM, Android 7 Marshmallow, Gris Espacial, 7 pulgadas
			<br/>
			<br/>
			Cable cargador 1m
			Resolución: 1024 x 600 (HD)
			Sistema operativo: EMUI 4.1 (Basado en Android M)
			Batería recargable con duración de 280 horas
			Tamaño: 7.0 pulgadas
			<br/>
			<br/>
			<strong>$1,799.00</strong>
		</p>

	</div>
		<i class='fas fa-dollar-sign'></i>
		<a href="formulario.html" class="compra">Comprar</a>
		<i class="fas fa-shopping-cart"></i>
		<input class="compra" type="submit" name="carrito" value="Agregar al carrito" onclick="carrito()" />
	<div id="clearfix"></div>
	<hr/>
	<div class="tableta2">
		<img src="img/odc.jpg" width="150" height="150" />
		<p>
			ODLICNO Tablet 10 Pulgadas Android Go 7.0 Certificado por Google, Llamada telefónica 3G y Tableta WiFi 5G con Tarjeta Dual Sim, 1GB RAM + 16GB ROM, procesador Quad-Core, Bluetooth, GPS (Negro)
			<br/>
			<br/>
			【Llamada telefónica 3G y conexión WIFI 5G】 --- La tableta más nueva admite la inserción de la tarjeta telefónica 2pcs, le permite llamar o enviar masajes a cualquier persona en cualquier lugar en cualquier momento, incluso sin wifi. La conexión wifi 5G es perfecta para una red de conexión rápida.
			【Excelente en respuesta rápida】 --- Con el sistema operativo Android 7.0 Nougat de cuatro CPU Quad Core de 1.3 GHz de alto rendimiento, garantiza una experiencia de juego ultra suave y multimedia rápida.
			【Storage Increíble almacenamiento】 ---- Con 1 GB de RAM y 16 GB de almacenamiento interno (MicroSD ampliable a 64 GB), es perfecto para ejecutar una gran cantidad de aplicaciones de entretenimiento con fluidez, como Youtube, Instagram, Skype, etc.
			【Gran experiencia visual】 --- 178 grados de experiencia visual en todos los ángulos a través de una combinación de pantalla IPS de 10.1 pulgadas 800x1280, perfecta para ver películas HD, jugar juegos y leer libros electrónicos en una silla o cama.
			【Batería de gran capacidad】--- Equipada con una batería recargable incorporada de 5500 mAh, permite un uso mixto de 6 a 8 horas sobre la marcha
			<br/>
			<br/>
			<strong>$2,699.00</strong>
		</p>

	</div>
		<i class='fas fa-dollar-sign'></i>
		<a href="formulario.html" class="compra">Comprar</a>
		<i class="fas fa-shopping-cart"></i>
		<input class="compra" type="submit" name="carrito" value="Agregar al carrito" onclick="carrito()" />
	<div id="clearfix"></div>
	<hr/>
	<div class="tableta2">
		<img src="img/43.jpg" width="150" height="150" />
		<p>
			HUAWEI MediaPad M6 - Tablet 10.8", Cámara Trasera de 13 MP, 4GB RAM + 128 GB ROM, Color Gris Titanio
			<br/>
			<br/>
			Este producto es único porque aun conteniendo el sistema operativo basado en Android, no contiene los servicios de google preinstalados, tales como gmail, google play store, youtube, google maps, etc. para más información sobre las características de este producto contacta al servicio de atención al cliente de Huawei.
			Rendimiento potente - Chipset Kirin 980 - GPU turbo 3.0
			IA para una vida inteligente - HiVision
			Fácil para el trabajo - Admite el modo PC con una interfaz de escritorio, - Soporte de lápiz óptico M-Pen
			lite - Teclado magnético inteligente - Soporta fácil proyección de forma inalámbrica o por cable
			Experiencia de entretenimiento premium - Nuevo sistema de sonido de cuatro canales y cuatro altavoces 			estéreo - Pantalla de cristal 2K - Afinación por Harman Kardon
			<br/>
			<br/>
			<strong>$6,748.22</strong>
		</p>

	</div>
		<i class='fas fa-dollar-sign'></i>
		<a href="formulario.html" class="compra">Comprar</a>
		<i class="fas fa-shopping-cart"></i>
		<input class="compra" type="submit" name="carrito" value="Agregar al carrito" onclick="carrito()" />
	<div id="clearfix"></div>
	<hr/>
	<div class="tableta2">
		<img src="img/huawei2.jpg" width="150" height="150" />
		<p>
			Huawei MediaPad T3 7 - Tablet Wi-Fi, Mediatek 1.3 Ghz, 1GB RAM, 8GB ROM, Android 7 Marshmallow, Gris Espacial, 7 pulgadas
			<br/>
			<br/>
			Cable cargador 1m
			Resolución: 1024 x 600 (HD)
			Sistema operativo: EMUI 4.1 (Basado en Android M)
			Batería recargable con duración de 280 horas
			Tamaño: 7.0 pulgadas
			<br/>
			<br/>
			<strong>$1,799.00</strong>
		</p>

	</div>
		<i class='fas fa-dollar-sign'></i>
		<a href="formulario.html" class="compra">Comprar</a>
		<i class="fas fa-shopping-cart"></i>
		<input class="compra" type="submit" name="carrito" value="Agregar al carrito" onclick="carrito()" />
	<div id="clearfix"></div>
	<hr/>
	<div class="tableta2">
		<img src="img/odc.jpg" width="150" height="150" />
		<p>
			ODLICNO Tablet 10 Pulgadas Android Go 7.0 Certificado por Google, Llamada telefónica 3G y Tableta WiFi 5G con Tarjeta Dual Sim, 1GB RAM + 16GB ROM, procesador Quad-Core, Bluetooth, GPS (Negro)
			<br/>
			<br/>
			【Llamada telefónica 3G y conexión WIFI 5G】 --- La tableta más nueva admite la inserción de la tarjeta telefónica 2pcs, le permite llamar o enviar masajes a cualquier persona en cualquier lugar en cualquier momento, incluso sin wifi. La conexión wifi 5G es perfecta para una red de conexión rápida.
			【Excelente en respuesta rápida】 --- Con el sistema operativo Android 7.0 Nougat de cuatro CPU Quad Core de 1.3 GHz de alto rendimiento, garantiza una experiencia de juego ultra suave y multimedia rápida.
			【Storage Increíble almacenamiento】 ---- Con 1 GB de RAM y 16 GB de almacenamiento interno (MicroSD ampliable a 64 GB), es perfecto para ejecutar una gran cantidad de aplicaciones de entretenimiento con fluidez, como Youtube, Instagram, Skype, etc.
			【Gran experiencia visual】 --- 178 grados de experiencia visual en todos los ángulos a través de una combinación de pantalla IPS de 10.1 pulgadas 800x1280, perfecta para ver películas HD, jugar juegos y leer libros electrónicos en una silla o cama.
			【Batería de gran capacidad】--- Equipada con una batería recargable incorporada de 5500 mAh, permite un uso mixto de 6 a 8 horas sobre la marcha
			<br/>
			<br/>
			<strong>$2,699.00</strong>
		</p>

	</div>
		<i class='fas fa-dollar-sign'></i>
		<a href="formulario.html" class="compra">Comprar</a>
		<i class="fas fa-shopping-cart"></i>
		<input class="compra" type="submit" name="carrito" value="Agregar al carrito" onclick="carrito()" />
	<div id="clearfix"></div>
	<hr/>
	<div class="tableta2">
		<img src="img/43.jpg" width="150" height="150" />
		<p>
			HUAWEI MediaPad M6 - Tablet 10.8", Cámara Trasera de 13 MP, 4GB RAM + 128 GB ROM, Color Gris Titanio
			<br/>
			<br/>
			Este producto es único porque aun conteniendo el sistema operativo basado en Android, no contiene los servicios de google preinstalados, tales como gmail, google play store, youtube, google maps, etc. para más información sobre las características de este producto contacta al servicio de atención al cliente de Huawei.
			Rendimiento potente - Chipset Kirin 980 - GPU turbo 3.0
			IA para una vida inteligente - HiVision
			Fácil para el trabajo - Admite el modo PC con una interfaz de escritorio, - Soporte de lápiz óptico M-Pen
			lite - Teclado magnético inteligente - Soporta fácil proyección de forma inalámbrica o por cable
			Experiencia de entretenimiento premium - Nuevo sistema de sonido de cuatro canales y cuatro altavoces 			estéreo - Pantalla de cristal 2K - Afinación por Harman Kardon
			<br/>
			<br/>
			<strong>$6,748.22</strong>
		</p>

	</div>
		<i class='fas fa-dollar-sign'></i>
		<a href="formulario.html" class="compra">Comprar</a>
		<i class="fas fa-shopping-cart"></i>
		<input class="compra" type="submit" name="carrito" value="Agregar al carrito" onclick="carrito()" />

		<div id="clearfix"></div>

	<footer>
		Creado por: Luis Hernández &copy;
	</footer>

</body>
</html>
