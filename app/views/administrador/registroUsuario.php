<?php
//include "app/conexion/Conexion.php";
//require "app/models/gestionarMunicipios.php";
$objGestionarmunicipios = new gestionarMunicipios();
$departamentos = $objGestionarmunicipios->obtenerDeparatamentos();
?>

<div>
    <form class="form-horizontal" method="POST">
        <input name="action" id="action" value="registroPersona">
        <div class="col-md-12"><h3>REGISTRO USUARIO</h3></div>

        <div class=" col-md-6 table-bordered">
            <label class="control-label">DATOS PERSONALES</label>
            <div class="form-group">        
                <label class="control-label col-md-3" for="identificacion">Identificación</label>
                <div class="col-md-6">
                    <input class="form-control" type="number" name="identificacion" id="identificacion" value="" placeholder="Documento de identidad" required="required" >
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3" for="nombre">Nombres</label>
                <div class=" col-md-6">
                    <input class="form-control" name="nombre" type="text" required="required" id="nombre" placeholder="Primer y segundo nombre" value="" maxlength="30">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="apellido">Apellidos</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="apellido" id="apellido" value="" placeholder="Apellidos" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="genero">Género</label>
                <div class="col-md-6">
                    <select class="form-control" name="genero" id="genero" required="required">
                        <option value="0">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3" for="fechaNacimiento">Fecha de nacimiento</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="">
                </div>
            </div>

        </div>

        <div class="col-md-6 table-bordered">
            <label class="control-label">LUGAR DE NACIMINTO</label>
            <div class="form-group">
                <label class="control-label col-md-3" for="idDepartamento">Departamento</label>
                <div class="col-md-6">
                    <select class="form-control" name="idDepartamento" id="idDepartamento">
                        <option value="0">Seleccione</option>
                        <?php
                        while ($departamento = $departamentos->fetchObject()) {
                            ?>
                            <option value="<?php echo $departamento->depCodigo ?>"><?php echo $departamento->depNombre ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div id="Municipios" class="form-group">
                <fieldset disabled>
                    <label class="control-label col-md-3" for="idMunicipio">Municipio</label>
                    <div class="col-md-6">
                        <select class="form-control" name="idMunicipio" id="idMunicipio">
                            <option value="0">Seleccione</option>
                        </select>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <div class="col-md-6 table-bordered">
            <label class="control-label">LOCALIZACION</label>
            <div class="form-group">        
                <label class="control-label col-md-3" for="correo">Correo</label>
                <div class="col-md-6">
                    <input class="form-control" type="email" name="correo" id="correo" value="" placeholder="ejemplo@prueba.com" required="required" >
                </div>
            </div>
            <div class="form-group">        
                <label class="control-label col-md-3" for="direccion">Dirección</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="direccion" id="direccion" value="" placeholder="Direccion de la casa" required="required" >
                </div>
            </div>
            <div class="form-group">        
                <label class="control-label col-md-3" for="telefono">Telefono</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="telefono" id="telefono" value="" placeholder="Númer Telefonico" required="required" >
                </div>
            </div>
        </div>

        <div class="col-md-5 table-bordered">
            <label class="control-label">PERFIL USUARIO</label>
            <div class="form-group">
                <label class="control-label col-md-3" for="rol">Rol</label>
                <div class="col-md-6">
                    <select class="form-control" name="rol" id="rol" required="required">
                        <option value="0">Seleccione</option>
                        <option value="2">Asistente</option>
                        <option value="3">Instructor</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group ">
            <input class="btn btn-success col-md-offset-3" type="submit" value="INGRESAR"/>
        </div>

    </form>
</div>
