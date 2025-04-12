$(document).ready(function (){
/*FORMULARIO PROGRAMA*/

const filelogoprograma = document.getElementById("flanexologotipo");
const botonlogoprograma = document.getElementById("dvfondobtnlogotipo");
const avisologoprograma = document.getElementById("nomarchivologotipo");

botonlogoprograma.addEventListener("click", function(){
filelogoprograma.click();
});

filelogoprograma.addEventListener("change", function(){
if (filelogoprograma.value) {
  avisologoprograma.innerHTML = filelogoprograma.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

  }else{
    avisologoprograma.innerHTML = "Sin Archivo";

    }
  });


    });
