<?php

class Pedido {
    var $idpedido;
    var $precio_total;
    var $direccion;
    var $estado_idestado;
    var $medio_pago_idmedio_pago;
    var $comuna_idcomuna;
    var $cliente_idcliente;

    function getIdpedido() {
        return $this->idpedido;
    }

    function getPrecio_total() {
        return $this->precio_total;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEstado_idestado() {
        return $this->estado_idestado;
    }

    function getMedio_pago_idmedio_pago() {
        return $this->medio_pago_idmedio_pago;
    }

    function getComuna_idcomuna() {
        return $this->comuna_idcomuna;
    }

    function getCliente_idcliente() {
        return $this->cliente_idcliente;
    }

    function setIdpedido($idpedido) {
        $this->idpedido = $idpedido;
    }

    function setPrecio_total($precio_total) {
        $this->precio_total = $precio_total;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEstado_idestado($estado_idestado) {
        $this->estado_idestado = $estado_idestado;
    }

    function setMedio_pago_idmedio_pago($medio_pago_idmedio_pago) {
        $this->medio_pago_idmedio_pago = $medio_pago_idmedio_pago;
    }

    function setComuna_idcomuna($comuna_idcomuna) {
        $this->comuna_idcomuna = $comuna_idcomuna;
    }

    function setCliente_idcliente($cliente_idcliente) {
        $this->cliente_idcliente = $cliente_idcliente;
    }


}