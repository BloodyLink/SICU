<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\CategoriaDAO.php');

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$nombre = $_POST["nombreCategoria"];

$categoriaDao = new CategoriaDAO();

$categoriaDao->insertCategoria($nombre);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;