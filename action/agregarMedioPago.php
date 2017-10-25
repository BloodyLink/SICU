<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\MedioPagoDAO.php');

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//die();
$nombre = $_POST["nombreMedioPago"];
$comision = $_POST["porcentajeMedioPago"];

$medioPagoDao = new MedioPagoDAO();

$medioPagoDao->insertMedioPago($nombre, $comision);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;