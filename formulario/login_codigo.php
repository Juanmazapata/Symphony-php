	<?php

/*
	SESSION_START();

$correo=$_SESSION["email"];//$_POST["txtcorreo"];
$pin=	$_SESSION["contrasenia"];


$contador=0;
$permiso="";
$estado="";
*/


if ($pin==0){

header ("location:../formulario/frmloginerror.html");

//header ("location:../formulario/frmmenuadmin.html");

//print "<meta http-equiv=Refresh content=\"0; url=http://sistema.cormusicaconcordia.org/formulario/frmloginerror.html\">";
	die();

	}
	require 'conexion_BD.php';

		$consulta="SELECT doc_identidad, pin, privilegio_admin, estado FROM empleado WHERE email=:correo";
		$resultado=$conexion->prepare($consulta);

		//$resultado->bindValue(":nrodoc", $nrodoc);
		//$resultado->bindValue(":pin", $pin);
		$resultado->execute(array(":correo"=>$correo));
		$registro=$resultado->rowCount();//solo cuenta si  hay registos o no hay

		while($filas=$resultado->fetch(PDO::FETCH_ASSOC)){//muestra valores consultados en la base de datos
	 $permiso=$filas['privilegio_admin'];
   $estado=$filas['estado'];
$nrodoc=$filas['doc_identidad'];

	 if(password_verify($pin, $filas['pin'])){//contraseña con cifrado
			$contador++;//incrementa si hay usuario registrados.

		}
		}



	if($contador>0 && $permiso=="Si"){
		if($estado!="Habilitado"){


		echo "<script>if(!alert('El usuario se encuentra temporalmente bloqueado.'))document.location='../index.php';</script>";

			die();
}


header ("location:../formulario/frmmenuadmin.php");

//print "<meta http-equiv=Refresh content=\"0; url=$rpta_url/formulario/frmmenuadmin.php\">";

}else if($contador>0 && $permiso=="No"){

 header ("location:../formulario/frmmenuadmin.php");
 //print "<meta http-equiv=Refresh content=\"0; url=$rpta_url/formulario/frmmenuadmin.php\">";

}else if($contador==0 || $permiso==""){
header ("location:../formulario/frmloginerror.html");

//print "<meta http-equiv=Refresh content=\"0; url=$rpta_url/formulario/frmmenuadmin.php\">";
	die();
			}
