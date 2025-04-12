	<?php



$correo=$_POST["txtcorreo"];

	require 'conexion_BD.php';

$codigo="CEM-5972";
$clave=$_POST["txtcontrasenia"];
$pin=password_hash($clave, PASSWORD_DEFAULT);


$actualizar_sql="UPDATE empleado SET
	email=:correo,pin=:pin WHERE cod_empleado=:codigo";
	$resultado=$conexion->prepare($actualizar_sql);

	$resultado->execute(array(":codigo"=>$codigo,
":pin"=>$pin,
":correo"=>$correo));



		$consulta="SELECT doc_identidad, email, pin, privilegio_admin, estado FROM empleado WHERE email=:correo";
		$resultado=$conexion->prepare($consulta);

		//$resultado->bindValue(":nrodoc", $nrodoc);
		//$resultado->bindValue(":pin", $pin);
		$resultado->execute(array(":correo"=>$correo));
		$registro=$resultado->rowCount();//solo cuenta si  hay registos o no hay

		while($filas=$resultado->fetch(PDO::FETCH_ASSOC)){//muestra valores consultados en la base de datos
	 $permiso=$filas['privilegio_admin'];
   $estado=$filas['estado'];
$nrodoc=$filas['doc_identidad'];
$email=$filas['email'];

		}

if ($correo===$email){


	session_start();
$_SESSION["email"]=$email;
header ("location:../formulario/frmmenuadmin.php");

}
	?>
