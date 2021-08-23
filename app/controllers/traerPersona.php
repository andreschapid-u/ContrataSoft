<?php
extract($_REQUEST);
require_once '../conexion/Conexion.php';
require_once '../models/gestionPersonas.php';
$objGestionPersonas = new gestionPersonas();
if ($identificacion != "") {
    $personas = $objGestionPersonas->consultarPersonas($identificacion);
    if ($personas->rowCount() == 0){
        $personas = $objGestionPersonas->consultarPersonas2($nombre, $apellido);
    } 
}else {
    $personas = $objGestionPersonas->consultarPersonas2($nombre, $apellido);
}

if ($personas->rowCount() == 0) {
    ?>
    <p class="alert-danger">No se encontro ninguna persona con la identificacion: <?php echo $identificacion; ?></p>
    <?php
} else {
    ?>
    <div class="col-md-12"><h3>RESULTADO DE LA CONSULTA</h3></div>
    <div class="col-md-12" style="overflow-y: scroll">
        <table class="table-condensed table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IDENTIFICACION</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>GENERO</th>

                </tr>
            </thead>
            <tbody>
                <?PHP
//            $personas->add($persona);
                while ($persona = $personas->fetchObject()) {
//    foreach ($personas as $persona){
                    ?>
                    <tr>
                        <td><?php echo $persona->idPersona; ?></td>
                        <td><?php echo $persona->perIdentificacion; ?></td>
                        <td><?php echo $persona->perNombre; ?></td>
                        <td><?php echo $persona->perApellido; ?></td>
                        <td><?php echo $persona->perGenero; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
}
?>