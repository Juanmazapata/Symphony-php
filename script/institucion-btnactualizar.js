// JavaScript Document

$(document).ready(function() {
	$('#btnactualizarinst').click("submit",function(){

 		var datos = new FormData($("#fminstitucion")[0]);


          $.ajax({
 			type: "post",
 			url: "../codigo/institucion-editar.php",
 			data: datos,
			processData: false,//cuando hay imagenes para montar
			contentType: false,//cuando hay imagenes para montar
			cache:false,//cuando hay imagenes para montar

 			success:function(r){
window.alert(r);
 	
 		}


 	});

location.reload(true);
 	return false;

 		});


});
