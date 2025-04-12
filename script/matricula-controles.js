function editar_matricula(codigo){

var dato=codigo;
/*
			$("#fmmatricula-consultar").hide();


			$("#cargar-formulario-matricula").load("../formulario/frmmatricula-editar.php");
*/
}


function volver(){

			$("#cargar-formulario-matricula-editar").load("../formulario/frmmatricula-consultar.php");

}

function eliminar_matricula(codigo) {

  var mensaje;
    var opcion = confirm("¿Realmente desea eliminar la mátricula?");
    if (opcion == true) {
      //  mensaje = "Has clickado OK";

				var dato=codigo;

					      $.ajax({
					 			type: "GET",
					 			url: "../codigo/matricula-eliminar.php?cod="+dato,

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

function ver_matricula(codigo){

	alert('Formulario en actualización.');
}
