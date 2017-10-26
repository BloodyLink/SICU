<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\L1_ProductosDAO.php');

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$idL1 = $_POST["L1"];
$idProducto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
$comentario = $_POST["comentario"];


$listaDao = new L1_ProductosDAO();

$listaDao->asociarProductoAL1($idL1, $idProducto, $cantidad, $comentario);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;