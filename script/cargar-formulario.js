$(document).ready(function() {

	$(function() {
$("#liverperfil").click(function(){

	$("#dvformulario").load("../formulario/frmperfil-ver.php");

	});
});

			$(function() {
		$("#liactualizarperfil").click(function(){

			$("#dvformulario").load("../formulario/frmperfil-actualizar.php");

			});
		});

$(function() {
	$("#liconsultarprograma").click(function(){

		$("#dvformulario").load("../formulario/frmprograma-consultar.php");

		});
	});

	$(function() {
	$("#licrearprograma").click(function(){

		$("#dvformulario").load("../formulario/frmprograma-crear.php");

		});
	});

	$(function() {
		$("#liconsutarmatricula").click(function(){

			$("#dvformulario").load("../formulario/frmmatricula-consultar.php");

			});
		});

	$(function() {
$("#licrearmatricula").click(function(){

	$("#dvformulario").load("../formulario/frmmatricula-crear.php");

	});
});


$(function() {
$("#liestadistica").click(function(){

$("#dvformulario").load("../formulario/frmestadistica-matricula.php");

});
});


$(function() {
$("#licrearrepertorio").click(function(){

$("#dvformulario").load("../formulario/frmrepertorio-crear.php");

});
});

$(function() {
$("#licrearinforme").click(function(){

$("#dvformulario").load("../formulario/frminforme-crear.php");


});
});

$(function() {
$("#liservisocial").click(function(){

$("#dvformulario").load("../formulario/frmalfabetizacion.php");


});
});

document.addEventListener ("keydown", function (e) {
    if (e.altKey && e.ctrlKey && e.shiftKey && e.which === 123) {

//$('.modal-symphony').modal('toggle');
$("#dvformulario").load("../formulario/frminstitucional.php");

    }
});



document.addEventListener ("keydown", function (e) {
    if (e.altKey && e.ctrlKey && e.shiftKey && e.which === 45) {

$("#dvformulario").load("../formulario/frmempleado-crear.php");

    }
});

/*Opcion sin uso*/
let abrir = document.getElementById('linkimglogo');
let flex = document.getElementById('modal-opciones');
let modal = document.getElementById('modal-symphony');
let cerrar = document.getElementById('closed');



cerrar.addEventListener('click', function(){
$('.modal-symphony').hide();

});



});
