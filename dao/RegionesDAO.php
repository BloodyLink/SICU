<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\Regiones.php');

class RegionesDAO extends SicuDAO {

    public function getRegionesAll(){

        $pdo = $this->getPDO();

        $sql = "SELECT * FROM regiones";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Regiones");

        return $res;
    }

}