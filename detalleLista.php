<?php

    spl_autoload_register(function ($class_name) {
        include ('dao/' . $class_name . '.php');
    });
    session_start();

    if(!isset($_SESSION["user"]))
        header("location:login.php");

    $idLista = $_GET["id"];
    $colegiosDao = new ColegioDAO();
    $cursosDao = new CursoDAO();
    $categoriasDao = new CategoriaDAO();
    $marcasDao = new MarcaDAO();
    $productosDao = new ProductoDAO();
    $L1_ProductosDao = new L1_ProductosDAO();

    $colegios = $colegiosDao->getColegiosAll();
    $cursos = $cursosDao->getCursosAll();
    $categorias = $categoriasDao->getCategoriasAll();
    $marcas = $marcasDao->getMarcasAll();
    $productos = $productosDao->getProductosAll();
    $lista = $L1_ProductosDao->getL1ProductosByL1($idLista);

//echo "<pre>";
//print_r($lista);
//echo "<pre>";

?>
<!doctype html>
<head>
    <title>.:SICU:.</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/dataRetrieval.js"></script>
    <meta charset="UTF-8">
</head>
<body>
	<!--Detalle lista-->
<h2>Lista Nro <?php echo $idLista; ?></h2>
<hr>
    <a href="administracion.php">Volver a administracion</a>
<table>
    <tr>
        <td>
            <!--asociar producto a esta lista -->
            <h5>Buscar Producto:</h5>
            <input type="text" id="nombreProducto" placeholder="Escribe nombre de producto"/>
            <br>
            <input type="button" id="buscarProducto" value="Buscar" />
            <br>
            <form method="post" action="action/addToList.php">
                <table border="1" id="listaProductos"></table>
                <input type="text" name="cantidad" placeholder="Cantidad" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                <br>
                <input type="text" name="comentario" placeholder="Comentario" />
                <br>
                <input hidden="hidden" id="lista" name="L1" value="<?php echo $idLista; ?>" />
                <input type="submit" value="Guardar en esta lista" />
            </form>

            <table border="1" id="listaProductos"></table>
        </td>
    </tr>
    <tr>
        <td>
            <!--lista de productos asociados-->
            <h3>Lista de productos en esta lista:</h3>
            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                </tr>
                <?php

                    foreach($lista as $l){
                        echo "<tr>";

                        echo "<td>";
                        echo $l["nombre_producto"];
                        echo "</td>";

                        echo "<td>";
                        echo $l["cantidad"];
                        echo "</td>";

                        echo "</tr>";
                    }

                ?>
            </table>

        </td>
    </tr>
</table>

</body>
</html>