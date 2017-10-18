<?php

class Categoria {
    var $idcategoria;
    var $nombre_categoria;
    
    function getIdcategoria() {
        return $this->idcategoria;
    }

    function getNombre_categoria() {
        return $this->nombre_categoria;
    }

    function setIdcategoria($idcategoria) {
        $this->idcategoria = $idcategoria;
    }

    function setNombre_categoria($nombre_categoria) {
        $this->nombre_categoria = $nombre_categoria;
    }


    
}