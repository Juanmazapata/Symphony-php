<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmrepertorio.css" rel="stylesheet" type="text/css"><!--estilos css-->


<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../script/repertorio.js"></script>


</head>
<body>

<form>

<fieldset>
<legend><h1>CREAR REPERTORIO</h1></legend>

<ul class="contenido">
<li>
<label for="txtcodobra">Código de la Obra</label>
<input type="text" name="txtcodobra" id="txtcodobra"/>

<label for="txtnomobra">Nombre de la Obra*</label>
<input type="text" name="txtnomobra" id="txtnomobra"/>

<label for="txtcompositor">Compositor</label>
<input type="text" name="txtcompositor" id="txtcompositor"/>

<label for="txtritgenero">Ritmo/Género</label>
<input type="text" name="txtritgenero" id="txtritgenero"/>

<label for="txtnrocarpeta">Número de Carpeta*</label>
<input type="text" name="txtnrocarpeta" id="txtnrocarpeta"/>

<label for="dtfechanacimiento">Fecha Última Presentación: dd/mm/aaaa</label>
<input type="date" id="dtfechanacimiento">

</li>
</ul>

</fieldset>
<div id="dvbtnguardar" class="dvbtnguardar">
<button id="btnguardar" name="btnguardar">Guardar</button>&nbsp; &nbsp;<input type="reset" id="btnlimpiar" value="Limpiar" name="btnlimpiar"/>
</div>

<fieldset>
  <legend><h1>BUSCAR REPERTORIO</h1></legend>
  <label for="slclasbusqueda">Buscar por:</label>
  <select name="slclasbusqueda" id="slclasbusqueda" > <option selected="selected"></option>
<option value="Código de la obra">Código de la obra</option>
<option value="Nombre de la obra">Nombre de la obra</option>
<option value="Compositor">Compositor</option>
<option value="Ritmo/Género">Ritmo/Género</option>
<option value="Número de Carpeta">Número de Carpeta</option>
<option value="F. última Presentación">F. última Presentación</option>
<option value="Registrado por:">Registrado por:</option>

  </select>

  <label for="txtbuscrepertorio">Buscar:</label>
  <input type="text" name="txtbuscrepertorio" id="txtbuscrepertorio"/>

<div class="">
  <table>
    <tr>

  <th>Código Obra</th>
  <th>Nombre de la Obra</th>
  <th>Compositor</th>
  <th>Genero</th>
  <th>Nro. Carpeta</th>
  <th>Fecha Última Presentación</th>
  <th>Usuario</th>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</div>

</fieldset>

<p id="parrafo">(*)Campo Obligatorio</p>

</form>


</body>
</html>
