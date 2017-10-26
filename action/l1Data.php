<?php

require_once ('..\dao\L1_ProductosDAO.php');
require_once ('..\dao\L1DAO.php');

$curso = $_GET["curso"];

$l1Dao = new L1DAO();
$listaProductosDao = new L1_ProductosDAO();

$l1 = $l1Dao->getL1ByCurso($curso);


//echo "<pre>";
//print_r($l1);
//echo "</pre>";
//die($l1);
$lista = $listaProductosDao->getL1ProductosByL1($l1->idL1);

echo "<pre>";
print_r($lista);
echo "</pre>";
echo "<table border='1'>";
echo "<tr>
        <th>Nombre Producto</th>
        <th>Cantidad</th>
        <th>Comentario</th>
        <th>Foto</th>
        <th>Precio unitario</th>
        <th>Precio</th>
      </tr>";
foreach ($lista as $l) {
    $precioXCantidad = (int)$l["precio_venta"] * (int)$l["cantidad"];
    echo "<tr>";
    echo "<td>";
    echo $l["nombre_producto"];
    echo "</td>";
    echo "<td>";
    echo "<input type='number' value='" . $l["cantidad"] . "' name='cantidad' />";
    echo "</td>";
    echo "<td>";
    echo $l["comentario"];
    echo "</td>";
    echo "<td>";
    echo "<img width='75px' height='75px' src='uploads/" . $l['foto'] . "' />";
    echo "</td>";
    echo "<td>";
    echo $l["precio_venta"];
    echo "</td>";
    echo "<td>";
    echo $precioXCantidad;
    echo "</td>";
    echo "<td>"; //FALTA LA CANTIDAD
    echo "<input type='checkbox' name='check_list[]' value='" . $l["Producto_idProducto"] . "' />";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
