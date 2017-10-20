<!doctype html>
<head>
    <title>.:SICU:.</title>
</head>
<body>
<h2>Bienvenido al panel de administración.</h2>
<a href="index.php">Volver a Index</a>
<br>
<table>
    <tr>
        <td>
            <!-- Agregar Colegio-->
            <h3>Agregar Colegio</h3>
            <form id="formAgregarColegio">
                <input type="text" name="nombreColegio" placeholder="Nombre del Colegio" />
                <br>
                <input type="text" name="direccion" placeholder="Dirección" />
                <br>
                <select name="idRegion">
                    <option>--Selecciona Region--</option>
                </select>
                <select name="idComuna">
                    <option>--Selecciona comuna--</option>
                </select>
                <br>
                <input type="button" id="btnFormAgregarColegio" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Colegios -->
            <span id="listaColegios" width="200px" height="100px" style="overflow:scroll"></span>
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
                </select>
                <br>
                <input type="button" id="btnFormAgregarColegio" value="Guardar"/>
            </form>
        </td>
        <td>
            <!-- Listar Cursos -->
            <span id="listaCursos" width="200px" height="100px" style="overflow:scroll"></span>
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
            <span id="listaCategorias" width="200px" height="100px" style="overflow:scroll"></span>
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
            <span id="listaMarcas" width="200px" height="100px" style="overflow:scroll"></span>
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
            <span id="listaProductos" width="200px" height="100px" style="overflow:scroll"></span>
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
