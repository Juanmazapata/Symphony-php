

<html>

<head>

</head>

<!--cuerpo de la pagina-->
<body>

 <div id="formlogin">
 <h1>IDENTIFICACION</h1>
<form action="codigo/login-emergencia.php" method="post" >


<label for="txtnrodocumento">Correo</label>
<input type="email" name="txtcorreo" id="txtnrodocumento" TITLE="Introduzca aquí su Correo Electronico." style="font-family:Philosopher-Italic;" autofocus/>
<input type="password" name="txtcontrasenia" id="txtcontrasenia" TITLE="Introduzca aquí su Contraseña"/>


<p>
<input name="submit" type="submit" id="btningresar"  TITLE="Envia la informacion ingresada para entrar al programa." value="Ingresar" onclick="formReset()" style="font-family:Philosopher-Italic;" />
&nbsp;
<input type="reset" name="submit"  id="btnlimpiar" value="Limpiar" TITLE="Limpia los valores erroneos ingresados." style="font-family:Philosopher-Italic;"/></p>


</form>



</div>

</body>


</html>
