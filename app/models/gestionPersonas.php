<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gestionPersonas
 *
 * @author andres
 */
//require_once 'app/conexion/Conexion.php';

class gestionPersonas {

    //put your code here
    private $conexion;
    public $usuario;

    public function __construct() {
        $this->conexion = Conexion::singleton();
    }

    public function listarPersonas() {
        try {
            $consulta = "SELECT p.perIdentificacion, p.perNombre, p.perApellido, p.perGenero, r.rolNombre FROM persona as p "
            ."inner join rol as r on p.perRol = r.idRol";
            $resultado = $this->conexion->query($consulta);
            $this->conexion = null;
            return $resultado;
        } catch (PDOException $e) {
            $e->getMessage();
            echo $e->getMessage();
        }
    }

    public function consultarPersonas($identificacion) {
        try {
            $consulta = "SELECT p.idPersona, p.perIdentificacion, p.perNombre, p.perApellido, p.perGenero, r.rolNombre, p.perFechaNacimiento, m.munNombre FROM persona as p "
            ."inner join municipios as m on p.perLugarNacimiento = m.idMunicipio inner join rol as r on p.perRol = r.idRol and perIdentificacion = '$identificacion'";
            
            $resultado = $this->conexion->query($consulta);
//            $this->conexion = null;
            return $resultado;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function consultarPersonas2($nombre, $apellido) {
        try {
            $consulta = "SELECT * FROM persona";
            if ($nombre != "") {
                $consulta.=" where upper(perNombre) LIKE upper('%$nombre%')";
                if ($apellido != "") {
                    $consulta .=" or upper(perApellido) LIKE upper('%$apellido%')";
                }
            }else if ($apellido!="") {
                $consulta .=" where upper(perApellido) LIKE upper('%$apellido%')";
            }
//            echo $con
//            
//            
//            
//            sulta;
            $resultado = $this->conexion->query($consulta);
//            $this->conexion = null;
            return $resultado;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function registrarPersona($identificacion, $nombres, $apellidos, $genero, $fechaNacimiento, $municipioNacimiento, $rol, $correo, $direccion, $telefono) {
        try {
            $this->conexion->beginTransaction();
            $query = $this->conexion->prepare('insert into persona values(null,?,?,?,?,?,?,?)');
            $query->bindParam(1, $identificacion);
            $query->bindParam(2, $nombres);
            $query->bindParam(3, $apellidos);
            $query->bindParam(4, $genero);
            $query->bindParam(5, $fechaNacimiento);
            $query->bindParam(6, $municipioNacimiento);
            $query->bindParam(7, $rol);
            $query->execute();

            $this->idPersona = $this->conexion->lastInsertId();
            $query = $this->conexion->prepare("INSERT INTO localizacion values(null,?,?,?,?,?)");
            $query->bindParam(1, $direccion);
            $query->bindParam(2, $telefono);
            $query->bindParam(3, $correo);
            $query->bindParam(4, $municipioNacimiento);
            $query->bindParam(5, $this->idPersona);
            $query->execute();

            $this->conexion->commit();

            echo 'Persona registrada';
        } catch (PDOException $ex) {
            $ex->getMessage();
            echo $ex;
            $this->conexion->rollBack();
            echo 'No se agrego la Persona';
        }
    }

}
