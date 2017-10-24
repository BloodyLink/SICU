<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\UsuarioDAO.php');


$user = $_POST["user"];
$pass = md5($_POST["pass"]);

$usuarioDao = new UsuarioDAO();

$user = $usuarioDao->getUsuarioData($user, $pass);



if($user != null){
	session_start();

	$_SESSION["user"] = $user->usuario;

    header("location:administracion.php");
}

?>