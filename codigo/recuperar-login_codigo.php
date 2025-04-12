
<?php
session_start();

$_SESSION["email"]=$_POST["txtemail"];

$email=$_POST["txtemail"];

$nrodoc="";
$pin="";
$nombres="";
$apellidos="";


require'conexion_BD.php';

$consulta="SELECT nombres, apellidos, doc_identidad, pin FROM empleado WHERE email=:email";
		$resultado=$conexion->prepare($consulta);
		$resultado->execute(array(":email"=>$email));
		$registro=$resultado->rowCount();

		if($registro==0){
	echo "El correo no se encuentra registrado.";
	die();
			}
		while($filas=$resultado->fetch(PDO::FETCH_ASSOC)){//muestra valores consultados en la base de datos

	$nombres=$filas['nombres'];
 $apellidos=$filas['apellidos'];
 $nrodoc=$filas['doc_identidad'];
 $pin=$filas['pin'];
}


echo $asunto="Recuperar Contraseña.";
echo $comentario="Hola " . "<b>" . $nombres . "</b>" . " " .  "<b>" . $apellidos . "</b></br></br>" . " Cordial saludo </br></br> para recuperar la contraseña copie este código: " . "<b>" . $pin . "</b>" . "</br>" . " Lo pegas en la casilla código de verificación y escriba una contraseña nueva de ingreso, le das enviar y podras acceder al programa. </br></br> Hasta pronto.";


$headers="MIME-Version: 1.0\r\n";

$headers.="Content-type: text/html; charset=utf-8\r\n";//".=" sirve para concatenar esta variable con otra. ejmplo nombres y apellidos.

$headers.="From: Soporte Symphony < wichybeito@gmail.com >\r\n";

$exito=mail($email, $asunto, $comentario, $headers);

if($exito){


header("location:../formulario/frmcambiar-login.php");



}else{
	echo"Ha habido un error";
}





?>
