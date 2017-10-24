<?php

require_once ('..\dao\ProductoDAO.php');

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
echo implode(", ", $_POST);
die();


$productoDao = new ProductoDAO();

$productoDao->insertProducto();

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;