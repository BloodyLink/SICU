<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\MedioPago.php');

class MedioPagoDAO extends SicuDAO{

    public function getMediosPagoAll () {
        $pdo = $this->getPDO();

        $sql = "SELECT * FROM medio_pago";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "MedioPago");

        return $res;

    }

    public function getMedioPagoById($id){
        $pdo = $this->getPDO();

        $sql = "SELECT * FROM medio_pago WHERE idmedio_pago = $id";

        $q = $pdo->query($sql);

        $res = $q->fetchObject(PDO::FETCH_CLASS, "MedioPago");

        return $res;
    }

    public function insertMedioPago($nombre, $comision){
        $pdo = $this->getPDO();

        $sql = "INSERT INTO medio_pago (nombre_medio_pago, porcentaje_comision) 
                VALUEs ('$nombre', $comision)";

        $pdo->query($sql);
    }

    public function deleteMedioPago($id){
        $pdo = $this->getPDO();

        $sql = "DELETE FROM medio_pago
                WHERE idmedio_pago = $id";

        $pdo->query($sql);
    }
}