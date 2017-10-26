<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\L1DAO.php');

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//die();
$nombre = $_POST["nombre_lista"];
$curso = $_POST["idCurso"];

$lista1Dao = new L1DAO();

$lista1Dao->insertL1($nombre, $curso);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;