<?php

class Marca {
    var $idmarca;
    var $nombre_marca;

    function getIdmarca() {
        return $this->idmarca;
    }

    function getNombre_marca() {
        return $this->nombre_marca;
    }

    function setIdmarca($idmarca) {
        $this->idmarca = $idmarca;
    }

    function setNombre_marca($nombre_marca) {
        $this->nombre_marca = $nombre_marca;
    }


}