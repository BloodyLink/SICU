<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\conexion\SicuDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dbo\Pedido.php');

class PedidoDAO extends SicuDAO {

    public function getPedidosAll () {

            $pdo = $this->getPDO();

            $sql = "SELECT p.*,
                    e.nombre as nombre_estado,
                    mp.nombre_medio_pago,
                    com.nombre_comuna,
                    cl.rut_cliente
                    FROM pedido p 
                    INNER JOIN estado e ON (p.estado_idestado = e.idestado)
                    INNER JOIN medio_pago mp ON (p.medio_pago_idmedio_pago = mp.idmedio_pago)
                    INNER JOIN comuna com ON (p.comuna_idcomuna = com.idcomuna)
                    INNER JOIN cliente cl ON (p.cliente_idcliente = $cl.idcliente)
                    ";

            $q = $pdo->query($sql);

            $res = $q->fetchAll(PDO::FETCH_CLASS, "Pedido");

            return $res;

    }

}