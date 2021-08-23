<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GestionDB
 *
 * @author Aprendiz
 */
class GestionDB {

    //put your code here
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::singleton();
    }
    
    public function ejecutarConsulta($consulta) {
        try {
//            $consulta = "show tables";
            $resultado = $this->conexion->query($consulta);
            $this->conexion = null;
            return $resultado;
        } catch (PDOException $e) {
            return "Se ha producido el siguiente erro: ".$e->getMessage();
        }
    }

}

?>
