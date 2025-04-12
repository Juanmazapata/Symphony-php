<?php

//el formulario se abre si el usuario ha iniciado sesion en el sistema
session_start();
error_reporting(0);
$correo = $_SESSION['contrasenia'];

 if ($correo == null || $correo = ''){
	 header ("location:../index.php");

die();
	 }

?>
