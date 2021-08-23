<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../conexion/Conexion.php';

class gestionUsuarios {

    //put your code here

    private $conexion;
    public $usuario;

    public function __construct() {
        $this->conexion = Conexion::singleton();
    }

    public function validarInicioSesion($username, $password) {
        try {
            $consulta = "select * from usuario as u inner join persona as p inner join rol as r on u.usuLogin='$username' and u.usuPassword='$password' and u.usuPersona=p.idPersona and p.perRol=r.idRol";
            $resultado = $this->conexion->query($consulta);
//            $resultado->bindParam(1, $username);
//            $resultado->bindParam(2,$password);
//            $resultado->execute();
            $this->conexion = null;
//            $usuario = new stdClass();
//            print_r($resultado);
//            $usuario = $resultado->fecthObject();
//            echo $resultado;
//            echo $usuario->idPersona;
            return $resultado;
        } catch (PDOException $e) {
            $e->getMessage();
            return false;
        }
    }

}
