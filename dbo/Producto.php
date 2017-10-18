<?php

class Producto {
    var $idProducto;
    var $nombre_producto;
    var $ubicacion_mayorista;
    var $ubicacion_minorista;
    var $precio_mayorista;
    var $precio_minorista;
    var $precio_venta;
    var $foto;
    var $marca_idmarca;
    var $categoria_idcategoria;
    var $nombre_marca;
    var $nombre_categoria;

    function getIdProducto() {
        return $this->idProducto;
    }

    function getNombre_producto() {
        return $this->nombre_producto;
    }

    function getUbicacion_mayorista() {
        return $this->ubicacion_mayorista;
    }

    function getUbicacion_minorista() {
        return $this->ubicacion_minorista;
    }

    function getPrecio_mayorista() {
        return $this->precio_mayorista;
    }

    function getPrecio_minorista() {
        return $this->precio_minorista;
    }

    function getPrecio_venta() {
        return $this->precio_venta;
    }

    function getFoto() {
        return $this->foto;
    }

    function getMarca_idmarca() {
        return $this->marca_idmarca;
    }

    function getCategoria_idcategoria() {
        return $this->categoria_idcategoria;
    }

    function getNombre_marca() {
        return $this->nombre_marca;
    }

    function getNombre_categoria() {
        return $this->nombre_categoria;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setNombre_producto($nombre_producto) {
        $this->nombre_producto = $nombre_producto;
    }

    function setUbicacion_mayorista($ubicacion_mayorista) {
        $this->ubicacion_mayorista = $ubicacion_mayorista;
    }

    function setUbicacion_minorista($ubicacion_minorista) {
        $this->ubicacion_minorista = $ubicacion_minorista;
    }

    function setPrecio_mayorista($precio_mayorista) {
        $this->precio_mayorista = $precio_mayorista;
    }

    function setPrecio_minorista($precio_minorista) {
        $this->precio_minorista = $precio_minorista;
    }

    function setPrecio_venta($precio_venta) {
        $this->precio_venta = $precio_venta;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setMarca_idmarca($marca_idmarca) {
        $this->marca_idmarca = $marca_idmarca;
    }

    function setCategoria_idcategoria($categoria_idcategoria) {
        $this->categoria_idcategoria = $categoria_idcategoria;
    }

    function setNombre_marca($nombre_marca) {
        $this->nombre_marca = $nombre_marca;
    }

    function setNombre_categoria($nombre_categoria) {
        $this->nombre_categoria = $nombre_categoria;
    }


    
}