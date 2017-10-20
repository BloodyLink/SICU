<?php

require_once ('..\dao\ComunaDAO.php');

$comunaDao = new ComunaDAO();

$comunas = $comunaDao->getComunasByRegion($_GET["idRegion"]);

echo "<option>--Selecciona Region--</option>";
foreach($comunas as $c){
    echo "<option value=" . $c->idcomuna . ">" . $c->comuna_nombre . "</option>";
}
