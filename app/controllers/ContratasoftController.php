<?php
/**
 * Description of ContratasoftController
 *
 * @author Andres
 */
class ContratasoftController {

    private static $view;

   public static function Main() {
        if (isset($_SESSION['usuario_logueado'])) {
            switch ($_SESSION['usuario_logueado']->rolNombre){
                case "Administrador":
//                    require_once 'app/controllers/AdministradorController.php';
//                    AdministradorController::Main();
//                    AdministradorController::rendere();
                     self::$view = "app/views/administrador/index.php";
                    break;
                case "Instructor":
                    require_once 'app/controllers/InstructorController.php';
                    InstructorController::Main();
                    InstructorController::rendere();
                    break;
                case "Asistente":
                    require_once 'app/controllers/AsistenteController.php';
                    AsistenteController::Main();
                    AsistenteController::rendere();
                    break;
            }
        }else{
            self::$view = "app/views/inicioSesion.php";
        }
    }

    public static function rendere() {
        if (self::$view != "") {
            include self::$view;
        }
    }

}

?>
