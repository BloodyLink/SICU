<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\conexion\SicuDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dbo\Marca.php');

class MarcaDAO extends SicuDAO
{

    public function getMarcasAll()
    {
        $pdo = $this->getPDO();


        $sql = "SELECT * FROM marca";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Marca");

        return $res;
    }

    public function insertMarca($nombre)
    {

        try {
            $pdo = $this->getPDO();

            $sql = "INSERT INTO marca (nombre_marca) 
                VALUES ('$nombre')";

            $pdo->query($sql);
        } catch (exception $e) {
            throw new Exception("Hubo un problema al ingresar Marca" . $e->getMessage());
        }


    }

}