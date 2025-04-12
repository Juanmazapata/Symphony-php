// JavaScript Document

$(document).ready(function() {


  $("#slpriprograma").change(function() {

    $("#slpriprograma option:selected").each(function(){
    id = $(this).val();
    $.post("../codigo/matricula-cargar-director-programa.php", { id: id }, function(data){

$('#txtpriprodirector').val(data);//val se utilia para input

    });

  });

});

});
