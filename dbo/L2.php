<?php

class L2{
    var $idL2;
    var $L1_idL1;
    var $cliente_idcliente;
    
    function getIdL2() {
        return $this->idL2;
    }

    function getL1_idL1() {
        return $this->L1_idL1;
    }

    function getCliente_idcliente() {
        return $this->cliente_idcliente;
    }

    function setIdL2($idL2) {
        $this->idL2 = $idL2;
    }

    function setL1_idL1($L1_idL1) {
        $this->L1_idL1 = $L1_idL1;
    }

    function setCliente_idcliente($cliente_idcliente) {
        $this->cliente_idcliente = $cliente_idcliente;
    }


}