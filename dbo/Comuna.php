<?php 

class Comuna {
    
        var $idcomuna;
        var $nombre_comuna;
        var $region_idregion;
        var $nombre_region;
    
        function getIdcomuna() {
            return $this->idcomuna;
        }
    
        function getNombre_comuna() {
            return $this->nombre_comuna;
        }
    
        function getRegion_idregion() {
            return $this->region_idregion;
        }
    
        function getNombre_region() {
            return $this->nombre_region;
        }
    
        function setIdcomuna($idcomuna) {
            $this->idcomuna = $idcomuna;
        }
    
        function setNombre_comuna($nombre_comuna) {
            $this->nombre_comuna = $nombre_comuna;
        }
    
        function setRegion_idregion($region_idregion) {
            $this->region_idregion = $region_idregion;
        }
    
        function setNombre_region($nombre_region) {
            $this->nombre_region = $nombre_region;
        }
    
    
    
    }