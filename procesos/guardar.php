<?php 
$nombre=$_POST['nom'];
$contrasena=$_POST['con'];
$correo=$_POST['cor'];

$consulta=$conect->prepare("INSERT INTO usuario(nombre,contrasena,corre) VALUES(?,?,?)");

$consulta->bind_param('sss',$nombre,$contrasena,$correo);

if($consulta->execute()){
	echo "Datos almacenados";
}else{
	echo "Error no se pudo almacenar los datos";
}

?>