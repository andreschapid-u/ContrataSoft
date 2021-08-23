<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AsistenteController
 *
 * @author Aprendiz
 */
class AsistenteController {
    private static $view;

    public static function Main() {
        @$action = $_REQUEST['action'];
        switch ($action) {
            case "registrarPersona":
                echo 'Registrado';
                $objregistrarPersona = new gestionPersonas();
                $objregistrarPersona->registrarPersona($_POST['identificacion'],$_POST['nombre'], $_POST['apellido'], $_POST['genero'], $_POST['fechaNacimiento'], $_POST['idMunicipio'], $_POST['rol'], $_POST['correo'],  $_POST['direccion']);
                echo 'Registrado';
                break;
            default:
                self::$view = "app/views/asistente/index.php";
                break;
        }
    }

    public static function rendere() {
        if (self::$view != "") {
            include self::$view;
        }
    }
}

?>
