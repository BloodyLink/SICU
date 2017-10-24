<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\conexion\SicuDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '\sicu\dbo\Usuario.php');


class UsuarioDAO extends SicuDAO {

    public function getUsuarioData($user, $pass){
        try{
            $pdo = $this->getPDO();

            $sql = "SELECT * FROM usuario WHERE usuario = '$user' AND password = '$pass'";

            $q = $pdo->query($sql);

            $res = $q->fetchAll(PDO::FETCH_CLASS, "Usuario");

            return $res[0];

        } catch (exception $e) {
            throw new Exception("Hubo un problema al adquirir datos del usuario $user." . $e->getMessage());
        }
    }

}