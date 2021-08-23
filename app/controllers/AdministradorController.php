<?php


/**
 * Description of AdministradorController
 *
 * @author Andres
 */
require 'app/conexion/Conexion.php';
require 'app/models/gestionPersonas.php';
require 'app/models/gestionarMunicipios.php';
require 'app/models/GestionDB.php';
class AdministradorController {

    private static $view;

    public static function Main() {
        if(isset($_SESION['usuario_logeado'])){
            session_start();
        }
		
        @$action = $_REQUEST['action'];
        switch ($action) {
            case "registroPersona":
                echo 'Registrado';
                $objregistrarPersona = new gestionPersonas();
                $objregistrarPersona->registrarPersona($_POST['identificacion'],$_POST['nombre'], $_POST['apellido'], $_POST['genero'], $_POST['fechaNacimiento'], $_POST['idMunicipio'], $_POST['rol'], $_POST['correo'],  $_POST['direccion'], $_POST['telefono']);
                echo 'Registrado';
                $_REQUEST['action']="";
                break;
//            default:
//                self::$view = "app/views/administrador/index.php";
//                break;
        }
    }

    public static function rendere() {
        if (self::$view != "") {
            include self::$view;
        }
    }

}

?>
