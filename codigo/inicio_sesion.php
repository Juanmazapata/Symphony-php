<?php
ob_start();
SESSION_START();

$pin=htmlentities(addslashes($_POST ["txtcontrasenia"]));
$correo=htmlentities(addslashes($_POST ["txtcorreo"]));

$_SESSION["email"]=$correo;//$_POST["txtcorreo"];
$_SESSION["contrasenia"]=$pin;

require "login_codigo.php";

 ?>
