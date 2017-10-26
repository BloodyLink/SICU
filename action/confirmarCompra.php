<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\L2_ProductosDAO.php');

$l2ProductosDao = new L2_ProductosDAO();

foreach ($_POST["productos"] as $key => $idProducto) {
    $l2ProductosDao->updateL2Producto($idProducto);
}
    echo "Compra realizada con exito.";

echo "<br>";

echo "<a href='../index.php'>Volver a Index</a>";