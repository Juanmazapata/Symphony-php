// JavaScript Document

$(document).ready(function() {


  $("#slsegprograma").change(function() {

    $("#slsegprograma option:selected").each(function(){

    id = $(this).val();
  $.post("../codigo/matricula-cargar-nivel.php", { id: id }, function(data){


$('#slsegpronivel').html(data);//val se utilia para input


   });

  });

});

});
