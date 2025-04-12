<!doctype html>
<html>
<head>
<meta charset="utf-8">

<!--icono de la pestaña-->
<link rel="icon" href="../../symphony/formas/LOGO-symphony.ico" />

<!--titulo de la pestaña-->
<title>Recuperar Login - Symphony</title>
<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/login.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../script/imgsustitucion.js"></script>
</head>

<body id="bdrecuperar-login" onLoad="MM_preloadImages('../formas/btnvolver2.png')">

<div id="contenedorcorreo">
<div id="formulario">
<h1 id="titprincipal">RECUPERAR CONTRASEÑA</h1>
<form method="post">

<div id="opcionprincipal">
<label for="txtemail">Enviar correo de recuperación</label>
<input type="text" name="txtemail" maxlength="100" size="50" id "txtemail"
 TITLE="Envia a traves del correo el login de recuperación." style="font-family:Philosopher-Italic;" autofocus/>
</div>

<div class="opcion">
<p><input type="submit" value="Enviar" name="btnenviar" id="btnenviar" style="font-family:Philosopher-Italic;"/>
<input type="reset" name="submit"  id="btnlimpiar" value="Limpiar" TITLE="Limpia los valores erroneos ingresados." style="font-family:Philosopher-Italic;"/></p>
</div>

<div class="opcion">
  <a href="../index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('volver','','../formas/btnvolver2.png',1)"><img src="../formas/btnvolver.png" alt="" width="503" height="123" id="volver"></a>
   </div>

 <div class="opcion">
<h2><?php if(isset($_POST["btnenviar"])){  require '../codigo/recuperar-login_codigo.php';}
			?></h2>
</div>

  </form>
 </div>
 </div>
</body>
</html>
