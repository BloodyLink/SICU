<?php

class Region {
    
        var $idregion;
        var $nombre_region;
    
        function getIdregion() {
            return $this->idregion;
        }
    
        function getNombre_region() {
            return $this->nombre_region;
        }
    
        function setIdregion($idregion) {
            $this->idregion = $idregion;
        }
    
        function setNombre_region($nombre_region) {
            $this->nombre_region = $nombre_region;
        }
    
    
    }