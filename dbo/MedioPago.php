<?php

class MedioPago {
    var $idmedio_pago;
    var $nombre_medio_pago;
    var $porcentaje_comision;
    
    function getIdmedio_pago() {
        return $this->idmedio_pago;
    }

    function getNombre_medio_pago() {
        return $this->nombre_medio_pago;
    }

    function getPorcentaje_comision() {
        return $this->porcentaje_comision;
    }

    function setIdmedio_pago($idmedio_pago) {
        $this->idmedio_pago = $idmedio_pago;
    }

    function setNombre_medio_pago($nombre_medio_pago) {
        $this->nombre_medio_pago = $nombre_medio_pago;
    }

    function setPorcentaje_comision($porcentaje_comision) {
        $this->porcentaje_comision = $porcentaje_comision;
    }


}