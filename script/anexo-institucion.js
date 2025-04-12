$(document).ready(function (){
/*FORMULARIO INSTITUCION*/
const filelogo = document.getElementById("flanexologo");
const botonlogo = document.getElementById("dvfondobtnlogo");
const avisologo = document.getElementById("nomarchivologo");

botonlogo.addEventListener("click", function(){
  filelogo.click();
  });

filelogo.addEventListener("change", function(){
  if (filelogo.value) {
    avisologo.innerHTML = filelogo.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

    }else{
      avisologo.innerHTML = "Sin Archivo";

      }
    });

    });
