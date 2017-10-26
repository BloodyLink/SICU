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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/dataRetrieval.js"></script>
    <meta charset="UTF-8">
    <title>.:SICU:.</title>
</head>
<body>
<h1>Sistema Centralizado Para Compra de Útiles Escolares (SICU)</h1>
<hr>
<ul>
    <li><a href="administracion.php">Administracion</a></li>
    <hr>
    <h3>Compra:</h3>
<form method="post" action="action/realizarCompra.php">
    Selecciona colegio: <br>
    <select name="idColegio" id="idColegioLista">
        <option>--Selecciona Colegio--</option>
        <?php
        foreach($colegios as $c){
            echo "<option value=" . $c->idColegio . ">" . $c->nombreColegio . " - " . $c->nombre_comuna . "</option>";
        }
        ?>
    </select>
    <br>
    <select name="idCurso" id="idCurso2">
        <option>--Selecciona Curso--</option>
    </select>
    <br>
    <br>
    <input type="text" name="nombreAlumno" placeholder="Nombre del alumno" />
    <br>
    <input type="text" name="apellidoAlumno" placeholder="Apellido del alumno" />
    <br>
    <input type="button" value="Ver lista de útiles" id="btnLista" />
    <span id="lista1"></span>
    <br>
    <input type="submit" value="Finalizar Compra" />
</form>

</body>
</html>
