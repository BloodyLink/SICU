<?php

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
$productos = $_POST["productos"];
$cantidad = $_POST["cantidad"];

require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\L2_ProductosDAO.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '\sicu\dao\ProductoDAO.php');

$productoDao = new ProductoDAO();
?>
<!doctype html>
<head>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/dataRetrieval.js"></script>
    <meta charset="UTF-8">
    <title>.:SICU:.</title>
</head>
<body>
<h3>Confirmar productos para compra:</h3>
<form method="post" action="confirmarCompra.php">

    <?php

    echo "<table border=1>";
    $total = 0;
    echo "<tr><th>Nombre</th><th>precio</th><th>Marca</th><th>Cantidad</th></tr>";
    foreach ($productos as $key => $p) {
        $subtotal = 0;

        $producto = $productoDao->getProductoBySomething($p);
//        echo "<pre>";
//        print_r($producto);
//        echo "</pre>";
        echo "<tr>";
        echo "<td>";
        echo $producto[0]->nombre_producto;
        echo "</td>";
        echo "<td>";
        echo $producto[0]->precio_venta;
        echo "</td>";
        echo "<td>";
        echo $producto[0]->nombre_marca;
        echo "</td>";
        echo "<td>";
        echo $cantidad[$key];
        echo "<input hidden=hidden name='productos[]' value='" . $producto[0]->idProducto . "' />";
        echo "</td>";
        echo "</tr>";

        $subtotal = (int)$producto[0]->precio_venta * (int)$cantidad[$key];
        $total += $subtotal;
    }
    echo "</table>";


    echo "<h3>Total $total</h3>";
    echo "<input hidden=hidden name='total' value='" . $total . "' />";
    ?>
    <input type="submit" value="Confirmar Compra" />
</form>


</body>
</html>
