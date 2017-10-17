<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\Colegio.php');


class ColegioDAO extends SicuDAO{

    public function getColegiosAll(){
        $pdo = $this->getPDO();

        $sql = "SELECT 
                col.*,
                com.nombre_comuna
                FROM colegio col
                INNER JOIN comuna com ON (com.id_comuna = col.comuna_idcomuna)";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Colegio");

        return $res;
    }

    public function getColegioById($id){
        $pdo = $this->getPDO();
        
                $sql = "SELECT 
                        col.*,
                        com.nombre_comuna
                        FROM colegio col
                        INNER JOIN comuna com ON (com.id_comuna = col.comuna_idcomuna)
                        WHERE col.idcolegio = $id";
        
                $q = $pdo->query($sql);
        
                $res = $q->fetchObject(PDO::FETCH_CLASS, "Colegio");
        
                return $res;
    }

}