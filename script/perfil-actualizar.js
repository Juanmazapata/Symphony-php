// JavaScript Document

$(document).ready(function() {
    

	$('#btnactualizar').click("submit",function(){

 		var datos = new FormData($("#fmperfil-actualizar")[0]);


          $.ajax({
 			type: "post",
 			url: "../codigo/perfil-actualizar.php",
 			data: datos,
			processData: false,//cuando hay imagenes para montar
			contentType: false,//cuando hay imagenes para montar
			cache:false,//cuando hay imagenes para montar

 			success:function(r){
window.alert(r);

 		}


 	});

 	return false;

 		});

});
