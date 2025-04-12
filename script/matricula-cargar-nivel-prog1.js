// JavaScript Document

$(document).ready(function() {


  $("#slpriprograma").change(function() {

    $("#slpriprograma option:selected").each(function(){

    id = $(this).val();
  $.post("../codigo/matricula-cargar-nivel.php", { id: id }, function(data){


$('#slpripronivel').html(data);//val se utilia para input


   });

  });

});

});
