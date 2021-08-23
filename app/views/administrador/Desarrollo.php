<?php ?>
<div class="container-fluid">
    <div class="row">
        <h3 >Aqui se realizan consultas y modificaciones a la estructura de la Base de datos</h3>
        <div class="col-md-3 table-bordered">
            <div class="form-group">
                <label class="control-label">Ingrese su consulta</label>
                <!--<input class="form-control" value="" id="consulta"/>-->
                <textarea class="form-control" title="Mi consulta" value="" id="consulta" style="width: 300px; height: 200px;"></textarea>
            </div>
            <div class="form-group">
                <input type="button" id="hacerConsulta" value="Ejecutas consultar" class="btn btn-primary"/>
            </div>
        </div>
        <div class="table-bordered table-responsive" id="consultaDB">

        </div>
    </div>
</div>

