$(document).ready(function() {
	$('#btnguardar').click("submit",function(){

 		var datos = new FormData($("#fmmatricula")[0]);


          $.ajax({
 			type: "post",
 			url: "../codigo/matricula-guardar.php",
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

function matricula_actualizar() {

     		var datos = new FormData($("#fmmatricula")[0]);


          $.ajax({
 			type: "post",
 			url: "../codigo/matricula-actualizar.php",
 			data: datos,
			processData: false,//cuando hay imagenes para montar
			contentType: false,//cuando hay imagenes para montar
			cache:false,//cuando hay imagenes para montar

 			success:function(r){
window.alert(r);

 		}


 	});

//location.reload(true);
// 	return false;


}

function matricula_editar_volver(){

$("#cargar-formulario-matricula-editar").load("../formulario/frmmatricula-consultar.php");

}
