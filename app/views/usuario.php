<?php
if(isset($_SESSION['usuario_logueado']))
{
?>
<div id="infousuario" class="">
    <div id="img">
        <img class="img-responsive img-circle" id="fotoPerfil"  />
    </div>
    <label id="usuarioNombre" ><?php echo $_SESSION['usuario_logueado']->perNombre." ".$_SESSION['usuario_logueado']->perApellido?></label>
    <br/>
    <label id="usuarioRol" ><?php echo $_SESSION['usuario_logueado']->rolNombre ?></label>
</div>
<?php
}
?>
