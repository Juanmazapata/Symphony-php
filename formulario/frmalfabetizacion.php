<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmalfabetizacion.css" rel="stylesheet" type="text/css"><!--estilos css-->

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../script/pestañas-frmalfabetizacion.js"></script>

</head>
<body>


<form>
<div class="pestañas">
<ul class="pestaña">
<li><a href="#pestaña1"><span>Matriculado</span></a></li>
<li><a href="#pestaña2"><span>Particular</span></a></li>
</ul>



<div id="pestaña1">
<fieldset id="fsleyenda">
<legend><h1>CREAR CERTIFICADO</h1></legend>
<div class="contenido">
<ul>
<li>
<label for="sltipodocumento">Tipo Documento*</label>
<select name="sltipodocumento" id="sltipodocumento" > <option selected="selected"></option><option>C.C.</option><option>T.I.</option><option>C.E.</option></select>

<label for="txtnumdocumento">Nro. Documento*</label>
<input type="text" name="txtnumdocumento" id="txtnumdocumento">

<label for="slintensidad">Intensidad Horaria*</label>
<select name="slintensidad" id="slintensidad" > <option selected="200">200</option><option></option><option></option></select>

<label for="txtactrealizada">Actividad Realizada*</label>
<input type="text" name="txtactrealizada" id="txtactrealizada">

</li>
</ul>
</div>
</fieldset>

<div class="dvbtnguardar">
  <input type="submit" id="btncertificado" value="Generar Certificado"/>&nbsp; &nbsp;<input type="reset" id="btnlimpiar" value="Limpiar"/>
</div>

</div>

<div id="pestaña2">
<fieldset id="fsleyenda">
<legend><h1>CERTIFICADO SERVICIO SOCIAL (Alfabetizador)</h1></legend>
<div class="contenido">
<ul>
  <li>
    <label for="txtnomapelparticular">Nombres y Apellidos*</label>
    <input type="text" name="txtnomapelparticular" id="txtnomapelparticular">

  <label for="sltipodocparticular">Tipo Documento*</label>
  <select name="sltipodocparticular" id="sltipodocparticular" > <option selected="selected"></option><option>C.C.</option><option>T.I.</option><option>C.E.</option></select>

  <label for="txtnumdocparticular">Nro. Documento*</label>
  <input type="text" name="txtnumdocparticular" id="txtnumdocparticular">

  <label for="txtgrado">Grado*</label>
  <input type="text" name="txtgrado" id="txtgrado">

  <label for="slintensidadparticular">Intensidad Horaria*</label>
  <select name="slintensidadparticular" id="slintensidadparticular" > <option selected="200">200</option><option></option><option></option></select>

  <label for="txtactrealizadaparticular">Actividad Realizada*</label>
  <input type="text" name="txtactrealizadaparticular" id="txtactrealizadaparticular">
  </li>
</ul>
</div>
</fieldset>

<div class="dvbtnguardar">
  <input type="submit" id="btncertparticular" value="Generar Certificado"/>&nbsp; &nbsp;<input type="reset" id="btnlimpiar" value="Limpiar"/>
</div>

</div>



</div>


<p>(*)Campo Obligatorio</p>

</form>
</body>
</html>
