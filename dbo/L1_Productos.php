<?php

class L1_Productos{
    var $idL1_Productos;
    var $cantidad;
    var $comentario;
    var $Producto_idProducto;
    
    function getIdL1_Productos() {
        return $this->idL1_Productos;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getComentario() {
        return $this->comentario;
    }

    function getProducto_idProducto() {
        return $this->Producto_idProducto;
    }

    function setIdL1_Productos($idL1_Productos) {
        $this->idL1_Productos = $idL1_Productos;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    function setProducto_idProducto($Producto_idProducto) {
        $this->Producto_idProducto = $Producto_idProducto;
    }


}