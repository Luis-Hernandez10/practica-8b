<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$useSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
	//echo "hay sesion";
	$user->setUser($userSession->getCurrentUser);
	include_once 'productos.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
	//echo "Validacion de login";

	$userFrom = $_POST['username'];
	$userFrom = $_POST['password'];

	if($user->userExists($userForm, $passForm)){
		//echo "Usuario valido";
		$userSession->setCurrentUser($userForm);
		$user->setUser($userForm);

		include->setUser($userForm);
	}else{
		//echo "nombre de usuario y/o password incorrecto";
		$errorLogin = "Nombre de usuario y/o password es incorrecto";
		include_once 'sesion.php';
	}
}else{
	include_once 'sesion.php';
}

 ?>