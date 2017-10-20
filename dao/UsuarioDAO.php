<?php

require_once('conexion\SicuDAO.php');
require_once('dbo\Usuario.php');


class UsuarioDAO extends SicuDAO {

    public function getUsuarioData($user, $pass){
        try{
            $pdo = $this->getPDO();

            $sql = "SELECT * FROM usuario WHERE usuario = $user AND pass = $pass";

            $q = $pdo->query($sql);

            $res = $q->fetchObject(PDO::FETCH_CLASS, "Usuario");

            return $res;

        } catch (exception $e) {
            throw new Exception("Hubo un problema al adquirir datos del usuario $user." . $e->getMessage());
        }
    }

}