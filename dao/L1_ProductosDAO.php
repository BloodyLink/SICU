<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\conexion\SicuDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dbo\L1_Productos.php');

class L1_ProductosDAO extends SicuDAO{

    public function getL1ProductosByL1($idL1){

        $pdo = $this->getPDO();

        $sql = "SELECT * 
                FROM L1_Productos lp 
                INNER JOIN L1 l ON (l.idL1 = lp.L1_idL1) 
                INNER JOIN Producto p ON (p.idProducto = lp.Producto_idProducto)
                WHERE l.idL1 = $idL1";

        $q = $pdo->query($sql);

        $res = $q->fetchAll();

        return $res;
    }

    public function asociarProductoAL1 ($idL1, $idProducto, $cantidad, $comentario) {

        try{

            $pdo = $this->getPDO();

            $sql = "INSERT INTO L1_Productos (cantidad, comentario, Producto_idProducto, L1_idL1) 
                    VALUES ($cantidad, '$comentario', $idProducto, $idL1)";

            $pdo->query($sql);
        }catch(exception $e){
            Throw new Exception("Hubo un problema al asociar producto a L1. " . $e->getMessage());
        }

    }

}