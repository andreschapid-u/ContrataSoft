$(document).ready(function() {
    $("#idDepartamento").change(
            function()
            {
                $.ajax({
                    type: "POST",
                    url: "app/controllers/controlTraerMunicipios.php",
                    async: true,
                    data: 'idDepartamento=' + $(this).val(),
                    success: function(resultado) {
                        $("#Municipios").html(resultado);
                    }
                });
            });
    $("#BuscarPersonas").click(
    
            function()
            {
                $.ajax({
                    type: "POST",
                    url: "app/controllers/traerPersona.php",
                    async: true,
                    data: 'identificacion='+$("#identificacion").val()+'&nombre='+$("#nombre").val()+'&apellido='+$("#apellido").val(),
//                    data: 'identificacion=' + $(this).val(),
                    success: function(resultado) {
                        $("#ConsultaPersonas").html(resultado);
                    }
                });
            });
    $("#hacerConsulta").click(
    
            function()
            {
                $.ajax({
                    type: "POST",
                    url: "app/controllers/consultaDB.php",
                    async: true,
                    data: 'consulta='+$("#consulta").val(),
                    success: function(resultado) {
                        $("#consultaDB").html(resultado);
                    }
                });
            });
            
    $("li").addClass("table-bordered");
    $(".consultar").click(
    function(){
        $.ajax({
                    type: "POST",
                    url: "app/controllers/traerPersona.php",
                    async: true,
                    data: 'identificacion='+$("#identificacion").val()+'&nombre='+$("#nombre").val()+'&apellido='+$("#apellido").val(),
//                    data: 'identificacion=' + $(this).val(),
                    success: function(resultado) {
                        $("#ConsultaPersonas").html(resultado);
                    }
                });
    });
//    $("ul").addClass("nav nav-tabs");
//    $("li").addClass("btn btn-default");
//    $("ul").addClass("btn-group-vertical");
});




