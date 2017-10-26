<?php

class L2_Productos{

    var $idL2_Productos;
    var $cantidad;
    var $Producto_idProducto;
    var $estado_idEstado;

    /**
     * @return mixed
     */
    public function getIdL2Productos()
    {
        return $this->idL2_Productos;
    }

    /**
     * @param mixed $idL2_Productos
     */
    public function setIdL2Productos($idL2_Productos)
    {
        $this->idL2_Productos = $idL2_Productos;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return mixed
     */
    public function getProductoIdProducto()
    {
        return $this->Producto_idProducto;
    }

    /**
     * @param mixed $Producto_idProducto
     */
    public function setProductoIdProducto($Producto_idProducto)
    {
        $this->Producto_idProducto = $Producto_idProducto;
    }

    /**
     * @return mixed
     */
    public function getEstadoIdEstado()
    {
        return $this->estado_idEstado;
    }

    /**
     * @param mixed $estado_idEstado
     */
    public function setEstadoIdEstado($estado_idEstado)
    {
        $this->estado_idEstado = $estado_idEstado;
    }



}