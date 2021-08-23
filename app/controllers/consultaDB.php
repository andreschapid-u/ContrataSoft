<?php
require '../conexion/Conexion.php';
require '../models/GestionDB.php';
extract($_POST);

$objGestionDB = new GestionDB();
$datos = $objGestionDB->ejecutarConsulta($consulta);

//print_r(json_encode($datos));
?>
<br>
<table class="table-condensed table-bordered table-striped">
    <thead>
        <tr>
            <th>Datos obtenidos</th>
        </tr>
    </thead>
    <tbody>
        <tr><?php echo "Su consulta: ".$consulta; ?></tr>
        <?php
        if($datos->rowCount() <= 1){
            ?>
            <tr>
                <td><?php print_r($datos); ?> </td>
            </tr>
            <?php
        }else
        while ($dato = $datos->fetchObject()) {
            $objeto = json_encode($dato);
            ?>
            <tr>
                <td><?php print_r($objeto); ?> </td>
            </tr>
        <?php } ?>
    </tbody>
</table>