// JavaScript Document

$(document).ready(function() {


  $("#slmonitor").change(function() {

    $("#slmonitor option:selected").each(function(){
    cod_empleado = $(this).val();
    $.post("../codigo/empleado-cargar-estado.php", { cod_empleado: cod_empleado }, function(data){

 $("#slestadoact").html(data);
    });

  });

});

});
