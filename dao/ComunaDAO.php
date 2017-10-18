<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\Comuna.php');

/**
 * Class ComunaDAO
 */
class ComunaDAO extends SicuDAO
{

    /**
     * @return array
     */
    public function getComunasAll()
    {
        $pdo = $this->getPDO();

        $sql = "SELECT
                com.*,
                reg.nombre_region
                FROM comuna com
                INNER JOIN region reg ON (com.region_idregion = reg.idregion)";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Comuna");

        return $res;
    }

    /**
     * @param $nombre
     * @param $regionId
     * @throws Exception
     */
    public function insertComuna($nombre, $regionId)
    {
        try {
            $pdo = $this->getPDO();

            $sql = "INSERT INTO comuna (nombre_comuna, region_idregion)
                    VALUES ('$nombre', $regionId)";

            $pdo->query($sql);

        } catch (exception $e) {
            throw new Exception("Hubo un problema al insertar comuna" . $e->getMessage());
        }
    }

    public function deleteComuna($id)
    {
        $pdo = $this->getPDO();

        $sql = "DELETE FROM comuna WHERE idcomuna = $id";

        $pdo->query($sql);
    }

}