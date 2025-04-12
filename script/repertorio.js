// JavaScript Document

$(document).ready(function() {

//alert("RECUERDE: Es recomendable consultar el programa que va a crear, para no generar duplicados en el sistema.");

	$('#btnguardar').click(function(){

		var datos=$('#fmprograma').serialize();


		$.ajax({
			type: "POST",
			url: "../codigo/programa-guardar.php",
			data: datos,


			success:function(r){
				if(r==0){
			alert("'Nombre del programa' es un campo obligatorio, debe tener registro.");

		}else if(r==1){
			alert("'Director' es un campo obligatorio, debe tener registro.");

			}else if(r==2){
			alert("'Monitor 1' es un campo obligatorio, debe tener registro.");

			}else if(r==3){
			alert("'Cargo que desempeña' del monitor 1 es un campo obligatorio, debe tener registro.");

				}else if(r==4){
			alert("'Monitor 2' es un campo obligatorio, debe tener registro.");

				}else if(r==5){
			alert("'Cargo que desempeña' del monitor 2 es un campo obligatorio, debe tener registro.");

				}else if(r==6){
			alert("'Monitor 3' es un campo obligatorio, debe tener registro.");

				}else if(r==7){
			alert("'Cargo que desempeña' del monitor 3 es un campo obligatorio, debe tener registro.");

			}else if(r==8){
			alert("'Monitor 4' es un campo obligatorio, debe tener registro.");

			}else if(r==9){
			alert("'Cargo que desempeña' del monitor 4 es un campo obligatorio, debe tener registro.");

			}else if(r==10){
			alert("'Monitor 5' es un campo obligatorio, debe tener registro.");

			}else if(r==11){
			alert("'Cargo que desempeña' del monitor 5 es un campo obligatorio, debe tener registro.");

		}else{
				alert("Correcto");


}
}

	});


	return false;

		});



	/*
		$("#resultadophp").load("../codigo/programa-guardar.php");



	*/
/*
	$(form).submit(function(e){
		e.preventDefault();
		$("#btnguardar").click(function(){
		$("#resultadophp").load("../codigo/programa-guardar.php");
		});
		});*/
});
