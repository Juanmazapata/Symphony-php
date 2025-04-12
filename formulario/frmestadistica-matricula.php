<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmestadistica-matricula.css" rel="stylesheet" type="text/css"><!--estilos css-->

<script type="text/javascript" src="../script/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../script/refrescar-ckeditor.js"></script>


</head>
<body>

<form>

<fieldset>
<legend><h1>CREAR ESTADISTICA</h1></legend>

<ul class="contenido">
<li>
<label for="txtestadistica">Digite el año completo</label>
<input type="text" id="txtestadistica" name="txtestadistica" value="">

</li>
</ul>

</fieldset>
<div id="dvbtnguardar" class="dvbtnguardar">
<button id="btnguardar" name="btnguardar">Generar Informe</button>&nbsp; &nbsp;<input type="reset" id="btnlimpiar" value="Limpiar" name="btnlimpiar"/>
</div>

<p id="parrafo">(*)Campo Obligatorio</p>

</form>


</body>
</html>
