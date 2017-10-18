<?php

class Curso {
    var $idCurso;
    var $nombre_curso;
    var $cantidad_alumnos;
    var $Colegio_idColegio;
    
    function getIdCurso() {
        return $this->idCurso;
    }

    function getNombre_curso() {
        return $this->nombre_curso;
    }

    function getCantidad_alumnos() {
        return $this->cantidad_alumnos;
    }

    function getColegio_idColegio() {
        return $this->Colegio_idColegio;
    }

    function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }

    function setNombre_curso($nombre_curso) {
        $this->nombre_curso = $nombre_curso;
    }

    function setCantidad_alumnos($cantidad_alumnos) {
        $this->cantidad_alumnos = $cantidad_alumnos;
    }

    function setColegio_idColegio($Colegio_idColegio) {
        $this->Colegio_idColegio = $Colegio_idColegio;
    }


}