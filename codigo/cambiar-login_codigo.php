<?php

	session_start();

$codigo=htmlentities(addslashes($_GET["txtcodigo"]));
	$pin=htmlentities(addslashes($_GET["txtreccontrasenia"]));
$repin=htmlentities(addslashes($_GET["txtrepcontrasenia"]));
$nrodoc="";
$cod_mat="";
$contador="";
if ($pin!=$repin){
		echo "la contraseña no coincide.";

			die();
			}

//echo $cifrado=password_hash($pin, PASSWORD_DEFAULT);//sirve para encriptar las contraseñas


	require 'conexion_BD.php';



		$consulta="SELECT doc_identidad, pin, privilegio_admin FROM empleado WHERE pin=:codigo";
		$resultado=$conexion->prepare($consulta);

				//$resultado->bindValue(":nrodoc", $nrodoc);
		//$resultado->bindValue(":pin", $pin);
		$resultado->execute(array(":codigo"=>$codigo));
		$registro=$resultado->rowCount();//solo cuenta si  hay registos o no hay
	while($filas=$resultado->fetch(PDO::FETCH_ASSOC)){//muestra valores consultados en la base de datos
	$nrodoc=$filas["doc_identidad"];
			}


			if($registro===0){
	echo "El código de verificación es incorrecto.";
	die();
}else{


			$cifrado=password_hash($pin, PASSWORD_DEFAULT);

			$actualizar="UPDATE empleado SET  pin=:cifrado WHERE doc_identidad=:nrodoc ";
			$resultado2=$conexion->prepare($actualizar);
			$resultado2->execute(array(":nrodoc"=>$nrodoc, ":cifrado"=>$cifrado));

				$consulta="SELECT cod_empleado, privilegio_admin, pin FROM empleado WHERE doc_identidad=:nrodoc";
		$resultado3=$conexion->prepare($consulta);
		$resultado3->execute(array(":nrodoc"=>$nrodoc));

		while($filas2=$resultado3->fetch(PDO::FETCH_ASSOC)){//muestra valores consultados en la base de datos
		$cod_mat=$filas2['cod_empleado'];
	 $permiso=$filas2['privilegio_admin'];
	//$usuario=$filas['Nombres'];

	// $filas['pin'];

	 if(password_verify($pin, $filas2['pin'])){//contraseña con cifrado
			$contador++;//incrementa si hay usuario registrados.

		}
		}

	if($contador>0 && $permiso=="Si"){
	$_SESSION["codigo"]=$cod_mat;
	//print "<meta http-equiv=Refresh content=\"0; url=https://symphony-cem.000webhostapp.com/formulario/frmmenuadmin.php\">";

header ("location: ../formulario/frmmenuadmin.php");

		}else if($contador>0 && $permiso=="Sin Privilegios"){


			$_SESSION["codigo"]=$cod_mat;
header ("location: ../formulario/frmmenuadmin.php");
//print "<meta http-equiv=Refresh content=\"0; url=https://symphony-cem.000webhostapp.com/formulario/frmmenuadmin.php\">";


			}else if($permiso==""){


				$_SESSION["codigo"]=$cod_mat;
			header ("location: ../formulario/frmloginerror.html");
//print "<meta http-equiv=Refresh content=\"0; url=https://symphony-cem.000webhostapp.com/formulario/frmloginerror.html\">";

			}
}







	?>
