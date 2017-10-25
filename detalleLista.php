<?php

    spl_autoload_register(function ($class_name) {
        include ('dao/' . $class_name . '.php');
    });
    session_start();

    if(!isset($_SESSION["user"]))
        header("location:login.php");


    $colegiosDao = new ColegioDAO();
    $cursosDao = new CursoDAO();
    $categoriasDao = new CategoriaDAO();
    $marcasDao = new MarcaDAO();
    $productosDao = new ProductoDAO();

    $colegios = $colegiosDao->getColegiosAll();
    $cursos = $cursosDao->getCursosAll();
    $categorias = $categoriasDao->getCategoriasAll();
    $marcas = $marcasDao->getMarcasAll();
    $productos = $productosDao->getProductosAll();

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
</body>
</html>