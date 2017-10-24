<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\conexion\SicuDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dbo\Colegio.php');


class ColegioDAO extends SicuDAO{

    /**
     * @return array
     */
    public function getColegiosAll(){
        $pdo = $this->getPDO();

        $sql = "SELECT 
                col.*,
                com.comuna_nombre as nombre_comuna
                FROM colegio col
                INNER JOIN comunas com ON (com.idcomuna = col.comuna_idcomuna)";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Colegio");

        return $res;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getColegioById($id){
        $pdo = $this->getPDO();
        
                $sql = "SELECT 
                        col.*,
                        com.nombre_comuna
                        FROM colegio col
                        INNER JOIN comuna com ON (com.id_comuna = col.comuna_idcomuna)
                        WHERE col.idcolegio = $id";
        
                $q = $pdo->query($sql);
        
                $res = $q->fetchObject(PDO::FETCH_CLASS, "Colegio");
        
                return $res;
    }

    /**
     * @param $name
     * @return array
     */
    public function getColegioByName($name) {
        $pdo = $this->getPDO();

        $sql = "SELECT 
                col.*,
                com.nombre_comuna
                FROM colegio col
                INNER JOIN comuna com ON (com.id_comuna = col.comuna_idcomuna)
                WHERE col.nombrecolegio LIKE '%$name%'";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Colegio");

        return $res;
    }

    /**
     * @param $nombre
     * @param $direccion
     * @param $comuna
     * @throws Exception
     */
    public function insertColegio($nombre, $direccion, $comuna){

        try{
            $pdo = $this->getPDO();
            
            $sql = "INSERT INTO colegio(nombreColegio, direccion, comuna_idcomuna)
                    VALUES ('$nombre', '$direccion', $comuna)";
    
            $pdo->query($sql);

        }catch (Exception $e) {
            throw new Exception("Hubo un problema al insertar colegio: " . $e->getMessage());
        }

        
    }


    /**
     * @param $idColegio
     * @param null $nombreColegio
     * @param null $direccion
     * @param null $idcomuna
     * @throws Exception
     */
    public function updateColegio($idColegio, $nombreColegio = null, $direccion = null, $idcomuna = null) {

        try{
            $pdo = $this->getPDO();

            $sql = "UPDATE colegio SET 
                    nombreColegio = '$nombreColegio', 
                    direccion = '$direccion', 
                    comuna_idcomuna = $idcomuna 
                    WHERE idColegio = $idColegio";

            $pdo->query($sql);
        }catch (exception $e){
            throw new Exception("Hubo un problema al actualizar colegio." . $e->getMessage());
        }

    }

    public function deleteColegio($id){
        $pdo = $this->getPDO();

        $sql = "DELETE FROM colegio WHERE idColegio = $id";

        $pdo->query($sql);
    }

}