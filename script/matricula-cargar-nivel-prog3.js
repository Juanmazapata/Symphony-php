// JavaScript Document

$(document).ready(function() {


  $("#slterprograma").change(function() {

    $("#slterprograma option:selected").each(function(){

    id = $(this).val();
  $.post("../codigo/matricula-cargar-nivel.php", { id: id }, function(data){


$('#slterpronivel').html(data);//val se utilia para input


   });

  });

});

});
