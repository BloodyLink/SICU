<?php

    spl_autoload_register(function ($class_name) {
        include ('dao/' . $class_name . '.php');
    });


    session_start();

    if(!isset($_SESSION["user"]))
        header("location:login.php");

    $regionesDao = new RegionesDAO();
    $colegiosDao = new ColegioDAO();
    $cursosDao = new CursoDAO();
    $categoriasDao = new CategoriaDAO();
    $marcasDao = new MarcaDAO();
    $productosDao = new ProductoDAO();

    $regiones = $regionesDao->getRegionesAll();
    $colegios = $colegiosDao->getColegiosAll();
    $cursos = $cursosDao->getCursosAll();
    $categorias = $categoriasDao->getCategoriasAll();
    $marcas = $marcasDao->getMarcasAll();
    $productos = $productosDao->getProductosAll();

//echo "<pre>";
//print_r($cursos);
//echo "<pre>";

//    var_dump($regiones);
?>
<!doctype html>
<head>
    <title>.:SICU:.</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/dataRetrieval.js"></script>
    <meta charset="UTF-8">
</head>
<body>
<h2>Bienvenido al panel de administración.</h2>
<a href="index.php">Volver a Index</a>
<br>
<a href="cerrarSesion.php">Cerrar Sesion</a>
<br>
<table>
    <tr>
        <td>
            <!-- Agregar Colegio-->
            <h3>Agregar Colegio</h3>
            <form id="formAgregarColegio" method="post" action="action/agregarColegio.php">
                <input type="text" name="nombreColegio" placeholder="Nombre del Colegio" />
                <br>
                <input type="text" name="direccion" placeholder="Dirección" />
                <br>
                <select name="idRegion" id="idRegion">
                    <option>--Selecciona Region--</option>
                    <?php

                    foreach ($regiones as $r){
                        echo '<option value="' . $r->region_id . '" >' . $r->region_numero . ' ' . $r->region_descripcion . '</option>';
                    }

                    ?>
                </select>
                <br>
                <select name="idComuna" id="idComuna">
                    <option>--Selecciona comuna--</option>
                </select>
                <br>
                <input type="submit" id="btnFormAgregarColegio" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Colegios -->
            <div id="listaColegios" width="200px" height="100px" style="overflow:scroll">
                <table border="1">
                    <?php
                    foreach($colegios as $c){
                        echo "<tr>";
                        echo "<td>";
                        echo $c->nombreColegio;
                        echo "</td>";
                        echo "<td>";
                        echo $c->direccion;
                        echo "</td>";
                        echo "<td>";
                        echo $c->nombre_comuna;
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <!-- Agregar Curso-->
            <h3>Agregar Curso</h3>
            <form id="formAgregarCurso" method="post" action="action/agregarCurso.php">
                <input type="text" name="nombreCurso" placeholder="Nombre del curso" />
                <br>
                <input type="text" name="cantidadAlumnos" placeholder="Cantidad Alumnos" />
                <br>
                <select name="idColegio">
                    <option>--Selecciona colegio--</option>
                    <?php
                    foreach($colegios as $c){
                        echo "<option value=" . $c->idColegio . ">" . $c->nombreColegio . " - " . $c->nombre_comuna . "</option>";
                    }
                    ?>
                </select>
                <br>
                <input type="submit" id="btnFormAgregarColegio" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Cursos -->
            <div id="listaCursos" width="200px" height="100px" style="overflow:scroll">
                <table border="1">
                    <?php
                    foreach($cursos as $c){
                        echo "<tr>";
                        echo "<td>";
                        echo $c->nombre_curso;
                        echo "</td>";
                        echo "<td>";
                        echo $c->cantidad_alumnos;
                        echo "</td>";
                        echo "<td>";
                        echo $c->nombreColegio;
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <!-- Agregar Categoria-->
            <h3>Agregar Categoria</h3>
            <form id="formAgregarCurso" method="post" action="action/agregarCategoria.php">
                <input type="text" name="nombreCategoria" placeholder="Nombre de la categoria" />
                <br>
                <input type="submit" id="btnFormAgregarColegio" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Categorias -->
            <div id="listaCategorias" width="200px" height="100px" style="overflow:scroll">
                <table border="1">
                    <?php
                    foreach($categorias as $c){
                        echo "<tr>";
                        echo "<td>";
                        echo $c->nombre_categoria;
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <!-- Agregar Marca-->
            <h3>Agregar Marca</h3>
            <form id="formAgregarMarca" method="post" action="action/agregarMarca.php">
                <input type="text" name="nombreMarca" placeholder="Nombre de la marca" />
                <br>
                <input type="submit" id="btnFormAgregarMarca" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Marcas -->
            <div id="listaMarcas" width="200px" height="100px" style="overflow:scroll">
                <table border="1">
                    <?php
                    foreach($marcas as $m){
                        echo "<tr>";
                        echo "<td>";
                        echo $m->nombre_marca;
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <!-- Agregar Producto-->
            <h3>Agregar Producto</h3>
            <form id="formAgregarProducto" method="post" action="action/agregarProducto.php" enctype="multipart/form-data">
                <input type="text" name="nombreProducto" placeholder="Nombre del Producto" />
                <br>
                <input type="text" name="uMayorista" placeholder="Ubicacion mayorista" />
                <br>
                <input type="text" name="uMinorista" placeholder="Ubicacion minorista" />
                <br>
                <input type="text" name="pMayorista" placeholder="Precio mayorista" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                <br>
                <input type="text" name="pMinorista" placeholder="Precio minorista" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                <br>
                <input type="text" name="pVenta" placeholder="Precio venta" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                <br>
                Foto:<input type="file" name="foto" placeholder="foto" />
                <br>
                <select name="marca">
                    <option>--Selecciona marca--</option>
                    <?php
                    foreach($marcas as $m){
                        echo "<option value='" . $m->idmarca . "'>" . $m->nombre_marca . "</option>";
                    }
                    ?>
                </select>
                <br>
                <select name="categoria">
                    <option>--Selecciona categoria--</option>
                    <?php
                    foreach($categorias as $c){
                        echo "<option value='" . $c->idcategoria . "'>" . $c->nombre_categoria . "</option>";
                    }
                    ?>
                </select>
                <br>
                <input type="submit" id="btnFormAgregarColegio" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Productos -->
            <div id="listaProductos" width="200px" height="100px" style="overflow:scroll"></div>
        </td>
    </tr>
    <tr>
        <td>
            <!-- Agregar Medio de pago-->
            <h3>Agregar Medio de pago</h3>
            <form id="formAgregarMedioPago">
                <input type="text" name="nombreMedioPago" placeholder="Nombre del medio de pago" />
                <br>
                <input type="text" name="porcentajeMedioPago" placeholder="% comision" />
                <br>
                <input type="button" id="btnFormAgregarMedioPago" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Medios de pago -->

        </td>
    </tr>
</table>
</body>
</html>
