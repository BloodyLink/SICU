<?php

spl_autoload_register(function ($class_name) {
    include('dao/' . $class_name . '.php');
});

$regionesDao = new RegionesDAO();
$colegiosDao = new ColegioDAO();
$cursosDao = new CursoDAO();
$categoriasDao = new CategoriaDAO();
$marcasDao = new MarcaDAO();
$productosDao = new ProductoDAO();
$medioPagoDao = new MedioPagoDAO();
$l1Dao = new L1DAO();

$regiones = $regionesDao->getRegionesAll();
$colegios = $colegiosDao->getColegiosAll();
$cursos = $cursosDao->getCursosAll();
$categorias = $categoriasDao->getCategoriasAll();
$marcas = $marcasDao->getMarcasAll();
$productos = $productosDao->getProductosAll();
$mediosPago = $medioPagoDao->getMediosPagoAll();
$l1 = $l1Dao->getL1All();
?>
<!doctype html>
<head>
    <title>.:SICU:.</title>
</head>
<body>
<h1>Sistema Centralizado Para Compra de Útiles Escolares (SICU)</h1>
<hr>
<ul>
    <li><a href="administracion.php">Administracion</a></li>

    
</ul>
</body>
</html>
