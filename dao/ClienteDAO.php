<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\Cliente.php');

class ClienteDAO extends SicuDAO {

    public function getClientesAll(){

        $pdo = $this->getPDO();

        $sql = "SELECT
                cli.*,
                com.nombre_comuna
                FROM cliente cli
                INNER JOIN comuna com ON (cli.comuna_idcomuna = com.idcomuna)";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Cliente");

        return $res;

    }

    public function getClienteById($id){
        
                $pdo = $this->getPDO();
        
                $sql = "SELECT
                        cli.*,
                        com.nombre_comuna
                        FROM cliente cli
                        INNER JOIN comuna com ON (cli.comuna_idcomuna = com.idcomuna)
                        WHERE cli.idcliente = $id";
        
                $q = $pdo->query($sql);
        
                $res = $q->fetchObject(PDO::FETCH_CLASS, "Cliente");
        
                return $res;
        
            }
}