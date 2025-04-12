function ver_programa(codigo){

	var dato=codigo;
	//alert(codigo);

	$.ajax({url: "../codigo/programa-ver.php?cod="+codigo, success: function(result){
	//alert(result);
	
	$("#cargar-formulario-programa").html(result);


			    }});


}

function editar_programa(codigo){

var dato=codigo;
//alert(codigo);

$.ajax({url: "../codigo/programa-editar.php?cod="+codigo, success: function(result){
//alert(result);

$("#cargar-formulario-programa").html(result);


		    }});

}


function eliminar_programa(codigo){

	var mensaje;
    var opcion = confirm("¿Realmente desea eliminar la programa?");
    if (opcion == true) {
      //  mensaje = "Has clickado OK";

				var dato=codigo;

					      $.ajax({
					 			type: "GET",
					 			url: "../codigo/programa-eliminar.php?cod="+dato,

								processData: false,//cuando hay imagenes para montar
								contentType: false,//cuando hay imagenes para montar
								cache:false,//cuando hay imagenes para montar

					 			success:function(r){
					window.alert(r);

			//	$('#cargar-formulario-matricula').html(r);
					 		}

					 	});

					 	return false;

	} else {
	  me.closed
	}

	document.getElementById("fmmatricula-consultar").innerHTML = mensaje;

	alert(mensaje);


}

function volver(){


			$("#cargar-formulario-programa-ver").load("../formulario/frmprograma-consultar.php");
}
