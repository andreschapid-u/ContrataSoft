<?php
extract($_REQUEST);
$objGestionPersonas = new gestionPersonas();
$persona = $objGestionPersonas->consultarPersonas($identificacion)->fetchObject();
?>

<div class="">
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4 table-bordered">
            <div class="form-group">
                <label class="control-label">Identificación:</label>
                <input class="form-control" value="<?php echo $persona->perIdentificacion; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="control-label">Nombres:</label>
                <input class="form-control" value="<?php echo $persona->perNombre; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="control-label">Apellidos:</label>
                <input class="form-control" value="<?php echo $persona->perApellido; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="control-label">Genero:</label>
                <input class="form-control" value="<?php echo $persona->perGenero; ?>" readonly>
            </div>
        </div>
        <div class="col-md-4 table-bordered">
            <div class="form-group">
                <label class="control-label">Rol:</label>
                <input class="form-control" value="<?php echo $persona->rolNombre; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="control-label">Fecha nacimiento:</label>
                <input class="form-control" value="<?php echo $persona->perFechaNacimiento; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="control-label">Lugar de nacimiento:</label>
                <input class="form-control" value="<?php echo $persona->munNombre; ?>" readonly>
            </div>
            <div class="form-group">
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel-group">
            <?php for ($i = 0; $i < 3; $i++) { ?>

                <div class="panel panel-success" >
                    <div class="panel-heading" > <!-- Header del panel-->
                        <h4 class="panel-title" >
                            <a data-toggle="collapse" href="#panel<?php echo $i; ?>" aria-expanded="true" >
                                <samp class="glyphicon glyphicon-info-sign" aria-hidden="true" > </samp>Panel #<?php echo $i; ?>
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse in" id="panel<?php echo $i; ?>" >
                        <div class="panel-body">
                            <h3><?php echo "Localizacion" . ($i + 1); ?></h3>
                            <div>datos localizacion</div>
                        </div>
                    </div>
                </div>



            <?php } ?>
        </div>
    </div>
</div>
