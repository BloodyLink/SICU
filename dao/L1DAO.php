<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\L1.php');

class L1DAO extends SicuDAO {

    public function getL1All(){

        $pdo = $this->getPDO();

        $sql = "SELECT
                l1.*,
                cur.nombre_curso
                FROM l1
                INNER JOIN curso cur ON (l1.curso_idcurso = cur.idcurso)";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "L1");

        return $res;

    }

    public function getL1ById($id){

        $pdo = $this->getPDO();

        $sql = "SELECT
                l1.*,
                cur.nombre_curso
                FROM l1
                INNER JOIN curso cur ON (l1.curso_idcurso = cur.idcurso)
                WHERE idL1 = $id";

        $q = $pdo->query($sql);

        $res = $q->fetchObject(PDO::FETCH_CLASS, "L1");

        return $res;

    }

    public function insertL1($nombre, $curso){

        try{
            $pdo = $this->getPDO();

            $sql = "INSERT INTO L1 (nombre_l1, curso_idcurso)
                    VALUES ('$nombre', $curso)"

            $pdo->query($sql);
        }catch (exception $e) {
            throw new Exception("Hubo un problema al insertar L1. " . $e->getMessage());
        }

    }

    public function updateL1($id, $nombre, $curso){
        try{
            $pdo = $this->getPDO();

            $sql = "UPDATE L1 SET 
                    nombre_l1 = '$nombre', 
                    curso_idcurso = $curso
                    WHERE idL1 = $id";
            $pdo->query($sql);
        }catch (exception $e) {
            throw new Exception("Hubo un problema al editar L1. " . $e->getMessage());
        }
    }

    public function deleteL1 ($id) {
        $pdo = $this->getPDO();

        $sql = "DELETE FROM L1 WHERE idL1 = $id";

        $pdo->query($sql);
    }
}