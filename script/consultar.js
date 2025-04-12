
$(document).ready(function() {
//programas

    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });


/*function pulsar(e) {
  tecla = (document.all) ? e.keyCode :e.which;
  return (tecla!=13);
}

		$('input[type="text"]').keypress(function(){

					 if($(this).val() != ''){

							$('input[type="submit"]').removeAttr(
					 }
return false;
		});

*/

	$('#btnconsulta-programa').click("submit",function(){
//function consulta(){
$('input[type="submit"]').attr('enabled','enabled');
$('#contenido-resultado').hide();

 		var datos = new FormData($("#fmprograma-consultar")[0]);


          $.ajax({
 			type: "post",
 			url: "../codigo/programa-consulta.php",
 			data: datos,
			processData: false,//cuando hay imagenes para montar
			contentType: false,//cuando hay imagenes para montar
			cache:false,//cuando hay imagenes para montar

      success:function(r){
//window.alert(r);
$("#respuesta-consulta").show();

$("#respuesta-consulta").html(r);

$("#resultado").hide();

   }



 	});


 	return false;

});

//matriculas

$('#btnconsulta-matricula').click("submit",function(){

$('#contenido-resultado').hide();

	var datos = new FormData($("#fmmatricula-consultar")[0]);


				$.ajax({
		type: "post",
		url: "../codigo/matricula-consulta.php",
		data: datos,
		processData: false,//cuando hay imagenes para montar
		contentType: false,//cuando hay imagenes para montar
		cache:false,//cuando hay imagenes para montar

		success:function(r){
//window.alert(r);
$("#respuesta-consulta").show();

$("#respuesta-consulta").html(r);

//$("#resultado-consulta-matricula").html(r);

$("#resultado").hide();

 }



});


return false;

	});


});
