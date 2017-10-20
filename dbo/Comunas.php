<?php

class Comunas
{

    var $idcomuna;
    var $comuna_nombre;
    var $provincia_id;
    var $comuna_codigo_tesoreria;
    var $comuna_codigo_conara;

    /**
     * @return mixed
     */
    public function getIdcomuna()
    {
        return $this->idcomuna;
    }

    /**
     * @param mixed $idcomuna
     */
    public function setIdcomuna($idcomuna)
    {
        $this->idcomuna = $idcomuna;
    }

    /**
     * @return mixed
     */
    public function getComunaNombre()
    {
        return $this->comuna_nombre;
    }

    /**
     * @param mixed $comuna_nombre
     */
    public function setComunaNombre($comuna_nombre)
    {
        $this->comuna_nombre = $comuna_nombre;
    }

    /**
     * @return mixed
     */
    public function getProvinciaId()
    {
        return $this->provincia_id;
    }

    /**
     * @param mixed $provincia_id
     */
    public function setProvinciaId($provincia_id)
    {
        $this->provincia_id = $provincia_id;
    }

    /**
     * @return mixed
     */
    public function getComunaCodigoTesoreria()
    {
        return $this->comuna_codigo_tesoreria;
    }

    /**
     * @param mixed $comuna_codigo_tesoreria
     */
    public function setComunaCodigoTesoreria($comuna_codigo_tesoreria)
    {
        $this->comuna_codigo_tesoreria = $comuna_codigo_tesoreria;
    }

    /**
     * @return mixed
     */
    public function getComunaCodigoConara()
    {
        return $this->comuna_codigo_conara;
    }

    /**
     * @param mixed $comuna_codigo_conara
     */
    public function setComunaCodigoConara($comuna_codigo_conara)
    {
        $this->comuna_codigo_conara = $comuna_codigo_conara;
    }


}