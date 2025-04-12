<html>

<head>
<!--icono de la pestaña-->
<link rel="icon" type=”image/png” href="formas/icons8-logo-de-google-16.png" />



<!--titulo de la pestaña-->
<title>Identificación - Symphony</title>

<!--estilo de la pagina-->

<link href="estilos/reset.css" rel="stylesheet" type="text/css">



<link href="estilos/login.css" rel="stylesheet" type="text/css">
<link href="estilos/fuente.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="script/jquery-3.3.1.min.js"></script><!--javascript js-->

<script type="text/javascript" src="script/instruccion_sql.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!--cuerpo de la pagina-->
<body>
<div id="contenedor">
<div class="banner">
 <img src="imagenes/cortina presentación.png"  alt="" />
</div>
 <div id="formlogin">
 <h1>IDENTIFICACION</h1>
<form action="codigo/inicio_sesion.php" method="post" >

<div id="logcorporativo">
  <img src="imagenes/logotipo-institucion.png"/>

</div>

<label for="txtnrodocumento">Correo</label>
<input type="email" name="txtcorreo" id="txtnrodocumento" TITLE="Introduzca aquí su Correo Electronico." style="font-family:Philosopher-Italic;" autofocus/>

<label for="txtcontrasenia">Contraseña</label>

<input type="password" name="txtcontrasenia" id="txtcontrasenia" TITLE="Introduzca aquí su Contraseña"/>
<p>
<input name="submit" type="submit" id="btningresar"  TITLE="Envia la informacion ingresada para entrar al programa." value="Ingresar" onclick="formReset()" style="font-family:Philosopher-Italic;" />
&nbsp;
<input type="reset" name="submit"  id="btnlimpiar" value="Limpiar" TITLE="Limpia los valores erroneos ingresados." style="font-family:Philosopher-Italic;"/></p>
<a href="formulario/frmcorreologin.php" id="lkreccontrasenia">Olvidé mi contraseña </a>

</form>

</div>
<p class="navegador"></p>
<div class="industria">

<img src="imagenes/ORION2.png" alt="" width="136" height="33" />
</div>

</div>

<button id="instruccion" onclick="cargar_sql()">Instruccion sql</button>

</body>


</html>
