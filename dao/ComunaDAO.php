<?php

require_once('..\conexion\SicuDAO.php');
require_once('..\dbo\Comunas.php');

/**
 * Class ComunaDAO
 */
class ComunaDAO extends SicuDAO
{

    /**
     * @return array
     */
    public function getComunasByRegion($idRegion)
    {
        $pdo = $this->getPDO();

        $sql = "SELECT * FROM comunas c 
                INNER JOIN provincias p ON (c.provincia_id = p.provincia_id)
                INNER JOIN regiones r ON (p.region_id = r.region_id)
                WHERE r.region_id = $idRegion";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Comunas");

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