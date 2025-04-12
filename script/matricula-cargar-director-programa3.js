// JavaScript Document

$(document).ready(function() {


  $("#slterprograma").change(function() {

    $("#slterprograma option:selected").each(function(){
    id = $(this).val();
    $.post("../codigo/matricula-cargar-director-programa.php", { id: id }, function(data){

$('#txtterprodirector').val(data);//val se utilia para input

    });

  });

});

});
