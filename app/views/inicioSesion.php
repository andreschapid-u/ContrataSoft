<div id="contenedor">
    <?php
    include "header.php";
    $user = "";
    ?>
    <div class="row">
        <div style="height: 500px;">
            <br>
            <form action="app/controllers/inicioSesionController.php" method="POST" class="col-md-4 col-md-offset-5">
                <input type="hidden" name="action" value="iniciarSesion"/>
                <div class="form-group">
                    <label class="control-label" for="inicio"/>INICIO DE SESION

                </div>
                <div class="form-group">
                    <label for="username">Nombre de Usuario</label>
                    <input type="number" value="" name="username" id="username" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" value="" name="password" id="password" class="form-control" required="required">
                </div>
                <?php
                if (isset($_REQUEST['error'])) {
                    if ($_REQUEST['error'] == 1) {
                        ?>
                        <div class="form-group has-error">
                            <label class="control-label has-error">Usuario o contraseña incorrectos!</label>
                        </div>
                        <?php
                        unset($_REQUEST['error']);
                    }
                }
                ?>
                <div class=" form-group col-md-offset-4">
                    <input class="btn btn-success" type="submit" value="INGRESAR"/>
                </div>
            </form>
            <br>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</div>