<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\conexion\SicuDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dbo\Producto.php');

class ProductoDAO extends SicuDAO {

    public function getProductosAll(){
        $pdo = $this->getPDO();


        $sql = "SELECT 
                prod.*,
                mar.nombre_marca,
                cat.nombre_categoria
                FROM producto prod 
                INNER JOIN marca mar ON (prod.marca_idmarca = mar.idmarca)
                INNER JOIN categoria cat ON (prod.categoria_idcategoria = cat.idcategoria)";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Producto");

        return $res;
    }

    public function getProductoBySomething($idProducto = null, $nombre = null, $idmarca = null, $categoria = null){

        $pdo = $this->getPDO();

        $sql = "SELECT 
                prod.*,
                mar.nombre_marca,
                cat.nombre_categoria
                FROM producto prod 
                INNER JOIN marca mar ON (prod.marca_idmarca = mar.idmarca)
                INNER JOIN categoria cat ON (prod.categoria_idcategoria = cat.idcategoria)";

        $sql .= " WHERE 1 = 1 ";

        if($idProducto != null)
            $sql .= " AND idProducto = $idProducto";

        if($nombre != null)
            $sql .= " AND nombre_producto LIKE '%$nombre%'";

        if($idmarca != null)
            $sql .= " AND marca_idmarca = $idmarca";

        if($categoria != null)
            $sql .= " AND categoria = $categoria";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Producto");

        return $res;
    }

    public function updateProducto ($idproducto, $nombre, $uMayorista, $uMinorista, $pMayorista, $pMinorista, $pVenta, $foto, $marca, $categoria){
        try{
            $pdo = $this->getPDO();

            $sql = "UPDATE producto SET
                    nombre_producto = '$nombre', 
                    ubicacion_mayorista = $uMayorista, 
                    ubicacion_minorista = $uMinorista, 
                    precio_mayorista = $pMayorista, 
                    precio_minorista = $pMinorista, 
                    precio_venta = $pVenta, 
                    foto = $foto, 
                    marca_idmarca = $marca, 
                    categoria_idcategoria = $categoria
                    WHERE idproducto = $idproducto";

            $pdo->query($sql);

        }catch(excepcion $e){
            throw new Exception("Hubo un problema al actualizar producto." . $e->getMessage());
        }
    }

    public function insertProducto ($nombre, $uMayorista, $uMinorista, $pMayorista, $pMinorista, $pVenta, $foto, $marca, $categoria) {
        try{
            $pdo = $this->getPDO();

            $sql = "INSERT INTO producto (
                    nombre_producto,
                    ubicacion_mayorista,
                    ubicacion_minorista,
                    precio_mayorista,
                    precio_minorista,
                    precio_venta,
                    foto,
                    marca_idmarca,
                    categoria_idcategoria) 
                    VALUES (
                    '$nombre', 
                    '$uMayorista', 
                    '$uMinorista', 
                    $pMayorista, 
                    $pMinorista, 
                    $pVenta, 
                    '$foto', 
                    $marca, 
                    $categoria
                    )";

            $pdo->query($sql);

        }catch (exception $e) {
            throw new Exception("Hubo un error al ingresar Producto. " . $e->getMessage());
        }
    }

    public function deleteProducto($id){
        $pdo = $this->getPDO();

        $sql = "DELETE FROM producto WHERE idproducto = $id";

        $pdo->query($sql);
    }
}