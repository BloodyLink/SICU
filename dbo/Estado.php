<?php

class Estado{
    var $idestado;
    var $nombre;
    
    function getIdestado() {
        return $this->idestado;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdestado($idestado) {
        $this->idestado = $idestado;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}