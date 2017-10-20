<?php

require_once ('..\dao\ColegioDAO.php');

//echo "<pre>";
print_r($_POST);
//echo "</pre>";

$nombre = $_POST["nombreColegio"];
$direccion = $_POST["direccion"];
$comuna = $_POST["idComuna"];

$colegioDao = new ColegioDAO();

$colegioDao->insertColegio($nombre, $direccion, $comuna);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;