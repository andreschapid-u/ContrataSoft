<?php
session_start();
//require 'app/models/gestionUsuarios.php';
include '../models/gestionUsuarios.php';
$username = $_POST['username'];
$password = $_POST['password'];
$objGestionUsuarios = new gestionUsuarios();
$usuario = $objGestionUsuarios->validarInicioSesion($username, md5($password))->fetchObject();
if ($usuario) {
    $_SESSION['usuario_logueado'] = $usuario;
    header("location: ../../index.php");
   // echo 'ingresate';
}  else {
    session_destroy();
    header("location: ../../index.php?error=1");
}

//var_dump($usuario);

?>