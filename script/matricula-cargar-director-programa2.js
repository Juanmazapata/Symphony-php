// JavaScript Document

$(document).ready(function() {


  $("#slsegprograma").change(function() {

    $("#slsegprograma option:selected").each(function(){
    id = $(this).val();
    $.post("../codigo/matricula-cargar-director-programa.php", { id: id }, function(data){

$('#txtsegprodirector').val(data);//val se utilia para input

    });

  });

});

});
