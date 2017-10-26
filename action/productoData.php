<?php

require_once ('..\dao\ProductoDAO.php');

$productoDao = new ProductoDAO();

$nombre = $_GET["nombre"];
$lista = $_GET["lista"];

$productos = $productoDao->getProductoBySomething(null, $nombre);

foreach($productos as $p){
    echo "<tr>";
    echo "<td>" . $p->nombre_producto . "</td><td>" . $p->nombre_marca . "</td><td>" . $p->nombre_categoria . "</td>
    <td><input type='radio' name='producto' value='" . $p->idProducto . "'/></td>";
    echo "</tr>";
}


