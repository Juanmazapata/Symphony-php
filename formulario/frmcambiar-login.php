<?php

session_start();
error_reporting(0);
$correo = $_SESSION['email'];

 if ($correo == null || $correo = ''){
	 header ("location:../index.php");

die();
	 }

?>

<!doctype html>
<html>
<head>
<!--icono de la pestaña-->
<link rel="icon" href="../../symphony/formas/LOGO-symphony.ico" />


<!--titulo de la pestaña-->
<title>Ingresar Contraseña - Symphony</title>

<!--estilo de la pagina-->

<link href="../../symphony/estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../../symphony/estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/login.css" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../script/imgsustitucion.js"></script>

<!--<script type="text/javascript" src="../script/cambiar-login.js"></script>-->

<?php session_start();
$nrodoc=$_SESSION["email"];
 if ($nrodoc== null || $nrodoc=''){
	 header ("location:../index.php");

	 }?>

</head>

<body id="bdrecuperar-login" onLoad="MM_preloadImages('../formas/btnvolver2.png')">
<center>
 <div id="contenedorcontrasenia">
 <div id="formulario2">
<h1 id="titprincipal">CAMBIAR CONTRASEÑA</h1>
<form id="fmcambiar-login">
	<div class="opcion-cambiar-login">
    <h2 id="titsecundario">El correo se envió con exito.</h2>
    </div>

 <div class="opcion-cambiar-login">
	<label for="txtingcod">Insertar código de verificación</label>
	<input type="text" name="txtcodigo" autofocus id="txtingcod" style="font-family:Philosopher-Italic;" title="Copia aquí el codigo de verificación que te llegó al correo."/>

<label for="txtingcon">Ingresar nueva Contraseña</label>
	<input type="password" name="txtreccontrasenia"  id="txtingcon" />

	<label for="txtingrepcon">Repetir la nueva Contraseña</label>
	<input type="password" name="txtrepcontrasenia" id="txtingrepcon" />

    </div>
    <div class="opcion-cambiar-login">
	<p><input type="submit" name="btnrecconingresar" value="Ingresar" id="btningresar"  />
	<input type="reset" name="btnrecconlimpiar"  value="Limpiar" id='btnlimpiar' /></p>
	</div>

    <div id="btnvolver">
  <a href="../codigo/cerrar-sesion_codigo.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('volver','','../formas/btnvolver2.png',1)"><img src="../formas/btnvolver.png" alt="" width="475" height="115" id="volver"></a>
  </div>


</form>

<div class="opcion">
      <h2><?php
if (isset($_GET['btnrecconingresar'])) {
require '../codigo/cambiar-login_codigo.php';
}


?>     </h2>
      </div>

</div>
</div>
</body>
</html>
