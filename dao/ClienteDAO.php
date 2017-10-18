<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\Cliente.php');

/**
 * Class ClienteDAO
 */
class ClienteDAO extends SicuDAO
{

    /**
     * @return array
     */
    public function getClientesAll()
    {

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

    /**
     * @param $id
     * @return mixed
     */
    public function getClienteById($id)
    {

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

    public function deleteCliente($id){
        $pdo = $this->getPDO();

        $sql = "DELETE FROM cliente WHERE idcliente = $id";

        $pdo->query($sql);
    }
}