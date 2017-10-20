<?php

    spl_autoload_register(function ($class_name) {
        include ('dao/' . $class_name . '.php');
    });


    session_start();

    if(!isset($_SESSION["user"]))
        header("location:login.php");

    $regionesDao = new RegionesDAO();
    $colegiosDao = new ColegioDAO();
    $regiones = $regionesDao->getRegionesAll();
    $colegios = $colegiosDao->getColegiosAll();

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
                        echo $c->comuna_idcomuna;
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
            <form id="formAgregarCurso">
                <input type="text" name="nombreCurso" placeholder="Nombre del curso" />
                <br>
                <input type="text" name="cantidadAlumnos" placeholder="Cantidad Alumnos" />
                <br>
                <select name="idColegio">
                    <option>--Selecciona colegio--</option>
                    <?php
                    foreach($colegios as $c){
                        echo "<option value=" . $c->idColegio . ">" . $c->nombreColegio . " - " . $c->comuna_idcomuna . "</option>";
                    }
                    ?>
                </select>
                <br>
                <input type="button" id="btnFormAgregarColegio" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Cursos -->
            <div id="listaCursos" width="200px" height="100px" style="overflow:scroll"></div>
        </td>
    </tr>
    <tr>
        <td>
            <!-- Agregar Categoria-->
            <h3>Agregar Categoria</h3>
            <form id="formAgregarCurso">
                <input type="text" name="nombreCategoria" placeholder="Nombre de la categoria" />
                <br>
                <input type="button" id="btnFormAgregarColegio" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Categorias -->
            <div id="listaCategorias" width="200px" height="100px" style="overflow:scroll"></div>
        </td>
    </tr>
    <tr>
        <td>
            <!-- Agregar Marca-->
            <h3>Agregar Marca</h3>
            <form id="formAgregarMarca">
                <input type="text" name="nombreMarca" placeholder="Nombre de la marca" />
                <br>
                <input type="button" id="btnFormAgregarMarca" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Marcas -->
            <div id="listaMarcas" width="200px" height="100px" style="overflow:scroll"></div>
        </td>
    </tr>
    <tr>
        <td>
            <!-- Agregar Producto-->
            <h3>Agregar Producto</h3>
            <form id="formAgregarProducto">
                <input type="text" name="nombreProducto" placeholder="Nombre del Producto" />
                <br>
                <input type="text" name="uMayorista" placeholder="Ubicacion mayorista" />
                <br>
                <input type="text" name="uMinorista" placeholder="Ubicacion minorista" />
                <br>
                <input type="text" name="pMayorista" placeholder="Precio mayorista" />
                <br>
                <input type="text" name="pMinorista" placeholder="Precio minorista" />
                <br>
                <input type="text" name="pVenta" placeholder="Precio venta" />
                <br>
                Foto:<input type="file" name="foto" placeholder="foto" />
                <br>
                <select name="marca">
                    <option>--Selecciona marca--</option>
                </select>
                <br>
                <select name="categoria">
                    <option>--Selecciona categoria--</option>
                </select>
                <br>
                <input type="button" id="btnFormAgregarColegio" value="Guardar"/>
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
