<?php

class Colegio {
    
        var $idColegio;
        var $nombreColegio;
        var $direccion;
        var $comuna_idcomuna;
        var $nombre_comuna;
        
        function getIdColegio() {
            return $this->idColegio;
        }
    
        function getNombreColegio() {
            return $this->nombreColegio;
        }
    
        function getDireccion() {
            return $this->direccion;
        }
    
        function getComuna_idcomuna() {
            return $this->comuna_idcomuna;
        }
    
        function getNombre_comuna() {
            return $this->nombre_comuna;
        }
    
        function setIdColegio($idColegio) {
            $this->idColegio = $idColegio;
        }
    
        function setNombreColegio($nombreColegio) {
            $this->nombreColegio = $nombreColegio;
        }
    
        function setDireccion($direccion) {
            $this->direccion = $direccion;
        }
    
        function setComuna_idcomuna($comuna_idcomuna) {
            $this->comuna_idcomuna = $comuna_idcomuna;
        }
    
        function setNombre_comuna($nombre_comuna) {
            $this->nombre_comuna = $nombre_comuna;
        }
    
    
    }