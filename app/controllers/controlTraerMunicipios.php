<?php
extract($_REQUEST);
require "../conexion/Conexion.php";
require "../models/gestionarMunicipios.php";
$objgestionarMunicipios = new gestionarMunicipios();
$municipios = $objgestionarMunicipios->obtenerMunicipios($idDepartamento);
?>
<label for="idMunicipio" class="control-label col-md-3">Municipio</label>
<div class="col-md-6">
    <select class="form-control" name="idMunicipio" id="idMunicipio">
        <option value="0">Seleccione</option>

        <?php
        while ($municipio = $municipios->fetchObject()) {
            ?>
            <option value="<?php echo $municipio->idMunicipio ?>">
                <?php echo $municipio->munNombre ?></option>
            <?php
        }
        ?>
    </select>
</div>