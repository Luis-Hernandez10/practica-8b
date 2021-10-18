<?php 
$nombre1=$_POST['nombres'];
$precio=$_POST['precios'];
$existencia=$_POST['existencias'];


$consulta=$conect->prepare("INSERT INTO productos(nombre,existencia) VALUES(?,?)");
$consulta2=$conect->prepare("INSERT INTO detalle_venta(dprecio) VALUES(?)");

$consulta->bind_param('si',$nombre1,$existencia);
$consulta2->bind_param('i',$precio);

if($consulta->execute() && $consulta2->execute()){
	echo "Datos almacenados";
}else{
	echo "Error no se pudo almacenar los datos";
}

?>