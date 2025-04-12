$(document).ready(function() {
	$('#btnguardar').click("submit",function(){

 		var datos = new FormData($("#fmprograma")[0]);


          $.ajax({
 			type: "post",
 			url: "../codigo/programa-guardar.php",
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

function programa_actualizar() {

     		var datos = new FormData($("#fmprograma")[0]);


          $.ajax({
 			type: "post",
 			url: "../codigo/programa-actualizar.php",
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

function programa_editar_volver(){
//alert("hola");
$("#cargar-formulario-programa-editar").load("../formulario/frmprograma-consultar.php");

}
