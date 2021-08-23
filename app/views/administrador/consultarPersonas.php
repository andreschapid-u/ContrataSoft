<?php 
?>

<div>
    <form class="form-horizontal">
        <div class="col-md-12"><h3>CONSULTAR USUARIO</h3></div>

        <div class=" col-md-12 table-bordered" id="datos">
            <div class="form-group ">        
                <label class="control-label col-md-3" for="identificacion">Identificación</label>
                <div class="col-md-6">
                    <input class="form-control" type="number" name="identificacion" id="identificacion" value="" placeholder="Documento de identidad" required="required" >
                </div>
            </div>

            <div class="form-group">        
                <label class="control-label col-md-3" for="identificacion">Nombre</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="nombre" id="nombre" value="" placeholder="Nombre" required="required" >

                </div>
            </div>
            <div class="form-group">        
                <label class="control-label col-md-3" for="identificacion">Apellido</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="apellido" id="apellido" value="" placeholder="Apellido" required="required" >
                </div>
            </div>

        </div>
        <div class="form-group ">
            <input class="btn btn-warning col-md-offset-3" id="BuscarPersonas" name="BuscarPersonas" type="button" value="Buscar"/>
        </div>
        <!--            Aqui se carga el resultado de la consulta-->
        <div id="ConsultaPersonas">

        </div>
    </form>

</div>
