function editar_matricula(codigo){

var dato=codigo;

$.ajax({url: "../codigo/matricula-editar.php?cod="+codigo, success: function(result){
		 $("#cargar-formulario-matricula").html(result);

		    }});



}

function volver(){


			$("#cargar-formulario-matricula-editar").load("../formulario/frmmatricula-consultar.php");







}
