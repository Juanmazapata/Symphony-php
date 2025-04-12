<?php
require "../codigo/quitar-fichero.php";//sirve para que al cerrar sesion elimine archivos zip de copia de seguridad y evitar muchos duplicados en el servidor.
session_start();
error_reporting(0);
$correo = $_SESSION['email'];

 if ($correo == null || $correo = ''){

	 header ("location:../index.php");


die();
	 }
session_destroy();

header("location:../index.php");

?>
