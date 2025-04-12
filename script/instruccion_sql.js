$(document).ready(function() {
  document.addEventListener ("keydown", function (e) {
      if (e.altKey && e.ctrlKey && e.shiftKey && e.which === 111) {

  //  alert("w");
document.getElementById('instruccion').style.display = 'block';
      }
  });

  document.addEventListener ("keydown", function (e) {
      if (e.altKey && e.ctrlKey && e.shiftKey && e.which === 109) {

  //  alert("w");
document.getElementById('instruccion').style.display = 'none';
      }
  });


});

  function cargar_sql(){
  //  alert("hola");
  alert($("#contenedor").load("codigo/instruccion_sql.php"));
  }
