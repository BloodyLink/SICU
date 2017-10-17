<?php

class Cliente {
    var $idcliente;
    var $rut_cliente;
    var $nombre;
    var $apellido;
    var $email;
    var $telefono;
    var $comuna_idcomuna;
    var $nombre_comuna;
    
    function getIdcliente() {
        return $this->idcliente;
    }

    function getRut_cliente() {
        return $this->rut_cliente;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getComuna_idcomuna() {
        return $this->comuna_idcomuna;
    }

    function getNombre_comuna() {
        return $this->nombre_comuna;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    function setRut_cliente($rut_cliente) {
        $this->rut_cliente = $rut_cliente;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setComuna_idcomuna($comuna_idcomuna) {
        $this->comuna_idcomuna = $comuna_idcomuna;
    }

    function setNombre_comuna($nombre_comuna) {
        $this->nombre_comuna = $nombre_comuna;
    }


}