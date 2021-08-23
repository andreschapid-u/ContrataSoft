<?php
//    require 'app/models/gestionPersonas.php';
$objGestionPersonas = new gestionPersonas();
$personas = $objGestionPersonas->listarPersonas();
?>

<div class="">
    <div class="col-md-12"><h3>REGISTRO USUARIO</h3></div>
    <div class="col-md-12">
        <table class="table-condensed table-bordered table-striped">
            <thead>
                <tr>
                    <!--<th>ID</th>-->
                    <th>IDENTIFICACION</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>GENERO</th>
                    <th>ROL</th>
                    <th>CONSULTAR</th>
                    <th>ACTUALIZAR</th>

<!--<th>ROL</th>-->

                </tr>
            </thead>
            <tbody>
                <?php while ($persona = $personas->fetchObject()) {
                    ?>
                    <tr>

                        <td><?php echo $persona->perIdentificacion ?></td>
                        <td><?php echo $persona->perNombre ?></td>
                        <td><?php echo $persona->perApellido ?></td>
                        <td><?php echo $persona->perGenero ?></td>
                        <td><?php echo $persona->rolNombre ?></td>
                        <td>
                            <div align="center">
                                <a class="consultar" href="index.php?opcion=consultarUsuario&identificacion=<?php echo $persona->perIdentificacion ?>">
                                    <img src="app/recursos/ACTUALIZAR.JPG" width="25" height="22" align="absmiddle" />
                                </a>
                            </div>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>