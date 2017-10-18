<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\Curso.php');

/**
 * Class CursoDAO
 */
class CursoDAO extends SicuDAO
{

    /**
     * @return array
     */
    public function getCursosAll()
    {
        $pdo = $this->getPDO();

        $sql = "SELECT
                cur.*,
                col.nombreColegio
                FROM curso cur
                INNER JOIN colegio col ON (cur.colegio_idcolegio = col.idColegio)";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Curso");

        return $res;
    }

    /**
     * @param $idColegio
     * @return array
     */
    public function getCursosByColegio($idColegio)
    {
        $pdo = $this->getPDO();

        $sql = "SELECT
                cur.*,
                col.nombreColegio
                FROM curso cur
                INNER JOIN colegio col ON (cur.colegio_idcolegio = col.idColegio)
                WHERE cur.colegio_idcolegio = $idColegio";

        $q = $pdo->query($sql);

        $res = $q->fetchAll(PDO::FETCH_CLASS, "Curso");

        return $res;
    }

    /**
     * @param $nombre
     * @param $cantidadAlumnos
     * @param $idColegio
     * @throws Exception
     */
    public function insertCurso($nombre, $cantidadAlumnos, $idColegio)
    {
        try {
            $pdo = $this->getPDO();

            $sql = "INSERT INTO curso (nombre_curso, cantidad_alumnos, Colegio_idColegio)
                    VALUES ('$nombre', $cantidadAlumnos, $idColegio)";

            $pdo->query($sql);

        } catch (exception $e) {
            throw new Exception("Hubo un problema al insertar Curso." . $e->getMessage());
        }
    }

    public function updateCurso($idCurso, $nombre, $cantidad, $idColegio)
    {
        try {
            $pdo = $this->getPDO();

            $sql = "UPDATE curso SET 
                    nombre_curso = '$nombre',
                    cantidad_alumnos = $cantidad,
                    colegio_idcolegio = $idColegio 
                    WHERE idcurso = $idCurso";

            $pdo->query($sql);

        } catch (exception $e) {
            throw new Exception("Hubo un problema al actualizar Curso." . $e->getMessage());
        }
    }

    public function deleteCurso($id)
    {
        $pdo = $this->getPDO();

        $sql = "DELETE FROM curso WHERE idcurso = $id";

        $pdo->query($sql);
    }

}