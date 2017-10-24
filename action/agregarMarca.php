<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\MarcaDAO.php');

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$nombre = $_POST["nombreMarca"];

$marcaDao = new MarcaDAO();

$marcaDao->insertMarca($nombre);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;