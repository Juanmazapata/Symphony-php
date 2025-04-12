$(document).ready(function() {

const avisofoto = document.getElementById("nomarchivofoto");

const avisofotdocident = document.getElementById("nomarchivocedula");

const avisoEPS = document.getElementById("nomarchivoEPS");

$('#btnlimpiar').click("reset",function(){

avisofoto.innerHTML = "Sin Archivo";
avisofotdocident.innerHTML = "Sin Archivo";
avisoEPS.innerHTML = "Sin Archivo";
 		});


});
