$(document).ready(function(){
    $('#idRegion').change(function(){
        getComunasByRegion($(this).val());
    });

    $('#idColegioLista').change(function(){
        getCursosByColegio($(this).val());
    });

    $('#buscarProducto').click(function(){
        getProductosByNombre($('#nombreProducto').val(), $('#lista').val());
    });

});

function getComunasByRegion(idRegion) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $('#idComuna').html(this.responseText);
        }
    };
    xhttp.open("GET", "action/comunaData.php?idRegion=" + idRegion, true);
    xhttp.send();
}

function getCursosByColegio(idColegio) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $('#idCurso2').html(this.responseText);
        }
    };
    xhttp.open("GET", "action/cursoData.php?idColegio=" + idColegio, true);
    xhttp.send();
}

function getProductosByNombre(nombre, lista) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $('#listaProductos').html(this.responseText);
        }
    };
    xhttp.open("GET", "action/productoData.php?nombre=" + nombre + "&lista=" + lista, true);
    xhttp.send();
}