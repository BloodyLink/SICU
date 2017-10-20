<?php

require_once(dirname(__FILE__) . '\..\dao\UsuarioDAO.php');


$user = $_POST["user"];
$pass = md5($_POST["pass"]);

$usuarioDao = new UsuarioDAO();

$user = $usuarioDao->getUsuarioData($user, $pass);

if($user != null){
	session_start();

	$_SESSION["user"] = $user->usuario;
}

?>