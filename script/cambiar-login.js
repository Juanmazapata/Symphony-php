$(document).ready(function() {
    

	$('#btningresar').click("submit",function(){

 		var datos = new FormData($("#fmcambiar-login")[0]);


          $.ajax({
 			type: "post",
 			url: "../codigo/cambiar-login_codigo.php",
 			data: datos,
			processData: false,//cuando hay imagenes para montar
			contentType: false,//cuando hay imagenes para montar
			cache:false,//cuando hay imagenes para montar

 			success:function(r){
$('#opcion').html(r);
alert(r);
 		}


 	});

 	return false;

 		});

});
