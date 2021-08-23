<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gestionarMunicipios
 *
 * @author Aprendiz
 */
class gestionarMunicipios {

    //put your code here
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::singleton();
    }

    public function obtenerDeparatamentos() {
        try {
            $consulta = "select * from departamento";
            $resultado = $this->conexion->query($consulta);
            $this->conexion = null;
            return $resultado;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function obtenerMunicipios($idDepartamento) {
        try {
            $consulta = "select * from municipios where munDepartamento=?";
            $resultado = $this->conexion->prepare($consulta);
            $resultado->bindParam(1, $idDepartamento);
            $resultado->execute();
            $this->conexion = null;
            return $resultado;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}

?>
