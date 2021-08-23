<!DOCTYPE html>
<?php 
//session_start();
//if(!isset($_SESSION['usuario_logueado'])){
//    session_destroy();
//    header("location: ../../../index.php");
//}
?>
<html lang="es">
    <head>
        <meta charset="utf-8"> <!--/codificación-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scaleble=1.0, maximum-scale=1.0, minimun-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title> <!--/Titulo de la página-->
        <link rel="stylesheet" href="css/estilos.css">
        <script src="jquery/jquery-1.11.1.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <?php
            include 'app/views/header.php';
            include 'setion.php';
            include 'app/views/footer.php';
            $identificacion = "halo";
            ?>
            <script>
                document.getElementById("fotoPerfil").src = "app/recursos/<?php echo $identificacion; ?>.png";
            </script>
        </div>
        <script src="js/funciones.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
