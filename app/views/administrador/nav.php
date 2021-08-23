<?php include "app/views/usuario.php"; ?>
<div class="clearfix visible-xs-block visible-sm-block visible-md-block visible-lg-block"></div>
<nav class="hidden-xs">
    <!--col-xs-8 col-sm-10 col-md-12-->
    <ul class="list-group-item">
        <li><a href="#">Actualizar mis datos</a></li>
        <li><a href="index.php?opcion=registroUsuario">Registrar Usuarios</a></li>
        <li><a href="index.php?opcion=listarIntructores">Listar Usuarios</a></li>
        <li><a href="index.php?opcion=consultarPersonas">Consultar Usuarios</a></li>
        <li><a href="index.php?opcion=Desarrollo">Desarrollo</a></li>
        <li><a href="#">Contratos</a>
            <ul>
                <li><a href="#">Asignar</a></li>
                <li><a href="#">Consultar</a></li>
                <li><a href="#">Actualizar</a></li>
            </ul>
        </li>
        <li><a href="app/controllers/cerrasSesionController.php">Cerrar Sesion</a></li>
    </ul>
</nav>
<nav class="visible-xs">
    <ul class="list-group-item">
        <li><a href="app/controllers/cerrasSesionController.php">Cerrar Sesion</a></li>
    </ul>
</nav>
