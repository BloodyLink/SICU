<?php

require_once ('..\dao\CursoDAO.php');

$cursoDao = new CursoDAO();

$cursos = $cursoDao->getCursosByColegio($_GET["idColegio"]);

echo "<option>--Selecciona Curso--</option>";
foreach($cursos as $c){
    echo "<option value='" . $c->idCurso . "'>" . $c->nombre_curso . "</option>";
}
