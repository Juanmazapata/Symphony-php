<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frminforme.css" rel="stylesheet" type="text/css"><!--estilos css-->


<!--<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>-->
<!--<script type="text/javascript" src="../script/repertorio.js"></script>-->
<script type="text/javascript" src="../script/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../script/refrescar-ckeditor.js"></script>


</head>
<body>

<form>

<fieldset>
<legend><h1>CREAR INFORME</h1></legend>

<ul class="contenido">
<li>
<label for="slnomprograma">Seleccione el Programa*</label>
<select name="slnomprograma" id="slnomprograma"> <option selected="selected"></option></option></select>

<label for="txtmes">Mes*</label>
<select name="slmes" id="slmes"> <option selected="selected"></option></option></select>
</br>
<label for="txtactividad">Actividad Realizada</label>
</br>
<textarea id="ckeditor" class="ckeditor" name="txtactividad" cols="130" rows="18">



</textarea>



</li>
</ul>

</fieldset>
<div id="dvbtnguardar" class="dvbtnguardar">
<button id="btnguardar" name="btnguardar">Guardar</button>&nbsp; &nbsp;<input type="reset" id="btnlimpiar" value="Limpiar" name="btnlimpiar"/>
</div>

<p id="parrafo">(*)Campo Obligatorio</p>

</form>


</body>
</html>
