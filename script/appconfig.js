$(document).ready(function() {

  document.addEventListener ("keydown", function (e) {
      if (e.altKey && e.ctrlKey && e.shiftKey && e.which === 79) {

document.getElementById('appconfig').style.display = 'block';
  //$("#dvformulario").load("../formulario/frmempleado-crear.php");

      }
  });




});
