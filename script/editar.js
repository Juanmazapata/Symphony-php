/*function editar_programa(codigo){

var dato=codigo;

	      $.ajax({
	 			type: "GET",
	 			url: "../codigo/programa-ver.php?cod="+dato,

				processData: false,//cuando hay imagenes para montar
				contentType: false,//cuando hay imagenes para montar
				cache:false,//cuando hay imagenes para montar

	 			success:function(r){
	window.alert(r);

	 		}

	 	});

	 	return false;


}
*/

function editar_matricula(codigo){

 /*
    var hoja = document.createElement('style')
hoja.innerHTML = "form{background-color:#BFBFBF;padding:0;font-family:Philosopher-Italic;width:100%;margin:auto;}  fieldset{ background:#F3F1F2;  border: outset; margin: 1% auto; width:98%;  } #fsleyenda h2{background:#5C6B8C;color:#F3F1F2;font-size:1.5em;margin-left:5px;padding:5px;} .contenido{margin:0;margin-top:1px;} .contenido ul{line-height: 30px;}";




document.body.appendChild(hoja);
*/
var dato=codigo;

	      $.ajax({
	 			type: "GET",
	 			url: "../codigo/matricula-editar.php?cod="+dato,

				processData: false,//cuando hay imagenes para montar
				contentType: false,//cuando hay imagenes para montar
				cache:false,//cuando hay imagenes para montar

	 			success:function(r){
	//window.alert(r);
$('#cargar-formulario-matricula').html(r);
	 		}

	 	});

	 	return false;


}
