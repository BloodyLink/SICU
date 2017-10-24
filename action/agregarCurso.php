<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\CursoDAO.php');

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$nombre = $_POST["nombreCurso"];
$cantidadAlumnos = $_POST["cantidadAlumnos"];
$colegio = $_POST["idColegio"];

$cursoDao = new CursoDAO();

$cursoDao->insertCurso($nombre, $cantidadAlumnos, $colegio);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;