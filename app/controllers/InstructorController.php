<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InstructorController
 *
 * @author Aprendiz
 */

class InstructorController {
    private static $view;

    public static function Main() {
        @$action = $_REQUEST['action'];
        switch ($action) {
            case "registrarIntructor":
                
                break;
            default:
                self::$view = "app/views/instructor/index.php";
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
