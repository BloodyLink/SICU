<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\conexion\SicuDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dbo\Categoria.php');

class CategoriaDAO extends SicuDAO
{

    public function getCategoriasAll()
    {
        $pdo = $this->getPDO();


        $sql = "SELECT * FROM categoria";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Categoria");

        return $res;
    }

    public function insertCategoria($nombre)
    {

        try {
            $pdo = $this->getPDO();

            $sql = "INSERT INTO categoria (nombre_categoria) 
                VALUES ('$nombre')";

            $pdo->query($sql);
        } catch (exception $e) {
            throw new Exception("Hubo un problema al ingresar Categoria" . $e->getMessage());
        }


    }

}