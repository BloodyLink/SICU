<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\conexion\SicuDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dbo\L2_Productos.php');

class L2_ProductosDAO extends SicuDAO{

    public function insertL2Productos($idProducto, $cantidad){

        try{
            $pdo = $this->getPDO();

            $sql = "INSERT INTO L2_Productos (producto_idproducto, cantidad, estado_idestado) 
                VALUES ($idProducto, $cantidad, 2) ";

            $pdo->query($sql);
        }catch (exception $e) {
            Throw new Exception("Hubo un problema al insertar L2. " . $e->getMessage());
        }
    }

    public function updateL2Producto($idProducto){
        try{
            $pdo = $this->getPDO();

            $sql = "UPDATE L2_Productos set estado_idestado = 2 WHERE producto_idproducto = $idProducto";

            $pdo->query($sql);

        }catch (exception $e){
            Throw new Exception("Hubo un error al actualizar.- " . $e->getMessage());
        }
    }

}