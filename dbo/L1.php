<?php

class L1{
    var $idL1;
    var $nombre_l1;
    var $Curso_idCurso;
    
    function getIdL1() {
        return $this->idL1;
    }

    function getNombre_l1() {
        return $this->nombre_l1;
    }

    function getCurso_idCurso() {
        return $this->Curso_idCurso;
    }

    function setIdL1($idL1) {
        $this->idL1 = $idL1;
    }

    function setNombre_l1($nombre_l1) {
        $this->nombre_l1 = $nombre_l1;
    }

    function setCurso_idCurso($Curso_idCurso) {
        $this->Curso_idCurso = $Curso_idCurso;
    }


}