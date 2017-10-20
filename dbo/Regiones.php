<?php

class Regiones {

    var $region_id;
    var $region_numero;
    var $region_descripcion;
    var $region_orden;

    /**
     * @return mixed
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * @param mixed $region_id
     */
    public function setRegionId($region_id)
    {
        $this->region_id = $region_id;
    }

    /**
     * @return mixed
     */
    public function getRegionNumero()
    {
        return $this->region_numero;
    }

    /**
     * @param mixed $region_numero
     */
    public function setRegionNumero($region_numero)
    {
        $this->region_numero = $region_numero;
    }

    /**
     * @return mixed
     */
    public function getRegionDescripcion()
    {
        return $this->region_descripcion;
    }

    /**
     * @param mixed $region_descripcion
     */
    public function setRegionDescripcion($region_descripcion)
    {
        $this->region_descripcion = $region_descripcion;
    }

    /**
     * @return mixed
     */
    public function getRegionOrden()
    {
        return $this->region_orden;
    }

    /**
     * @param mixed $region_orden
     */
    public function setRegionOrden($region_orden)
    {
        $this->region_orden = $region_orden;
    }




}