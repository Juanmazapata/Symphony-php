<?php require "../codigo/programa-cargar.php";
require '../codigo/acentos.php';

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmprograma.css" rel="stylesheet" type="text/css"><!--estilos css-->

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../script/programa.js"></script>
<script type="text/javascript" src="../script/all(iconos-java).js"></script>
<script type="text/javascript" src="../script/anexo-programa.js"></script>



</head>
<body>

<form id="fmprograma">

<fieldset>
<legend><h1>CREAR PROGRAMA</h1></legend>

<ul class="contenido">
<li id="linea1">

  <label for="txtnomprograma">Nombre del programa*</label>
<input type="text" name="txtnomprograma" id="txtnomprograma" />
<label for="txtdiarealizacion">Días de Realización</label>
<input type="text" name="txtdiarealizacion" id="txtdiarealizacion"/> </li>

<li id="linea2"><label for="slrepertorio">Repertorio</label>
<select name="slrepertorio" id="slrepertorio"> <option selected="selected">Seleccionar Repertorio</option><?php require "../codigo/programa-cargar.php";  while($row=$repertorio_sql->fetch(PDO::FETCH_ASSOC)){ echo $html= "<option value='$row[nom_obra]'>$row[nom_obra]</option>";}?></select>

<label for="slniveles">Niveles</label>
<select name="slniveles"><option selected=""></option> <option>1</option><option>2</option> <option>3</option> <option>4</option> <option>5</option>  </select>

<label for="slhorainicio_M">Hra. inicio Mañana</label>

<select name="slhorainicio_M" id="slhorainicio_M">
<option selected="selected"></option>
 <option value="8:00 a.m."> 8:00 a.m. </option>
 <option>	8:30 a.m.	</option>
<option>	9:00 a.m.	</option>
<option>	9:30 a.m.	</option>
<option>	10:00 a.m.	</option>
<option>	10:30 a.m.	</option>
<option>	11:00 a.m.	</option>
<option>	11:30 a.m.	</option>
<option>	6:00 a.m.	</option>
<option>	6:30 a.m.	</option>
<option>	7:00 a.m.	</option>
<option>	7:30 a.m.	</option>
<option> 12:00 a.m. </option>
<option> 12:30 a.m. </option>
<option> 1:00 a.m. </option>
<option> 1:30 a.m. </option>
<option> 2:00 a.m. </option>
<option> 2:30 a.m. </option>
<option> 3:00 a.m. </option>
<option> 3:30 a.m. </option>
<option> 4:00 a.m. </option>
<option> 4:30 a.m. </option>
<option> 5:00 a.m. </option>
<option> 5:30 a.m. </option>
</select>

<label for="slhorafinalizacion_M">Hra. finalización Mañana</label>

<select name="slhorafinalizacion_M" id="slhorafinalizacion" >
  <option selected="selected"></option>
  <option> 8:30 a.m. </option>
  <option value="9:00 a.m."> 9:00 a.m. </option>
  <option> 9:30 a.m. </option>
  <option> 10:00 a.m. </option>
  <option> 10:30 a.m. </option>
  <option> 11:00 a.m. </option>
  <option> 11:30 a.m. </option>
  <option> 12:00 p.m. </option>
  <option> 12:30 p.m. </option>
  <option> 6:30 a.m. </option>
  <option> 7:00 a.m. </option>
  <option> 7:30 a.m. </option>
  <option> 8:00 a.m. </option>
  <option> 12:00 a.m. </option>
  <option> 12:30 a.m. </option>
  <option> 1:00 a.m. </option>
  <option> 1:30 a.m. </option>
  <option> 2:00 a.m. </option>
  <option> 2:30 a.m. </option>
  <option> 3:00 a.m. </option>
  <option> 3:30 a.m. </option>
  <option> 4:00 a.m. </option>
  <option> 4:30 a.m. </option>
  <option> 5:00 a.m. </option>
  <option> 5:30 a.m. </option>
  <option>	6:00 a.m.	</option>
</select>



</li>

<li id="linea3">

<label for="slhorainicio_T">Hra. inicio Tarde</label>

<select name="slhorainicio_T" id="slhorainicio_T">
  <option selected="selected"></option>
<option>	12:00 p.m.	</option>
<option>	12:30 p.m.	</option>
<option>	1:00 p.m.	</option>
<option>	1:30 p.m.	</option>
<option value="2:00 p.m.">	2:00 p.m.	</option>
<option>	2:30 p.m.	</option>
<option>	3:00 p.m.	</option>
<option>	3:30 p.m.	</option>
<option>	4:00 p.m.	</option>
<option>	4:30 p.m.	</option>
<option>	5:00 p.m.	</option>
<option>	5:30 p.m.	</option>

</select>

<label for="slhorafinalizacion_T">Hra. finalización Tarde</label>

<select name="slhorafinalizacion_T" id="slhorafinalizacion_T" >
  <option selected="selected"></option>
  <option> 12:30 p.m. </option>
  <option> 1:00 p.m. </option>
  <option> 1:30 p.m. </option>
  <option> 2:00 p.m. </option>
  <option> 2:30 p.m. </option>
  <option value="3:00 p.m."> 3:00 p.m. </option>
  <option> 3:30 p.m. </option>
  <option> 4:00 p.m. </option>
  <option> 4:30 p.m. </option>
  <option> 5:00 p.m. </option>
  <option> 5:30 p.m. </option>
  <option> 6:00 p.m. </option>
  <option> 6:30 p.m. </option>
  <option> 7:00 p.m. </option>

</select>

<label for="slhorainicio_N">Hra. inicio Noche</label>

<select name="slhorainicio_N" id="slhorainicio_N">
 <option selected="selected"></option>
<option>	6:00 p.m.	</option>
<option>	6:30 p.m.	</option>
<option>	7:00 p.m.	</option>
<option>	7:30 p.m.	</option>
<option value="8:00 p.m.">	8:00 p.m.	</option>
<option>	8:30 p.m.	</option>
<option>	9:00 p.m.	</option>
<option>	9:30 p.m.	</option>
<option> 10:00 p.m. </option>
<option> 10:30 p.m. </option>
<option> 11:00 p.m. </option>
<option> 11:30 p.m. </option>

</select>

<label for="slhorafinalizacion_N">Hra. finalización Noche</label>

<select name="slhorafinalizacion_N" id="slhorafinalizacion_N" >
  <option selected="selected"></option>
  <option>	6:30 p.m.	</option>
  <option>	7:00 p.m.	</option>
  <option>	7:30 p.m.	</option>
  <option>	8:00 p.m.	</option>
  <option>	8:30 p.m.	</option>
  <option value="9:00 p.m.">	9:00 p.m.	</option>
  <option>	9:30 p.m.	</option>
  <option> 10:00 p.m. </option>
  <option> 10:30 p.m. </option>
  <option> 11:00 p.m. </option>
  <option> 11:30 p.m. </option>
  <option> 12:00 a.m. </option>
</select>
 </li>

<li id="linea4">
<label for="txtdescprograma">Descripción del programa </label>
<textarea name="txtdescprograma" id="txtdescprograma" maxlength="200"></textarea>


</li>
</ul>
</fieldset>

<fieldset id="fsleyenda2">
<legend><h2>Director y Monitores</h2></legend>
<div class="director">
<ul>
<li><label for="sldirector">Director*</label></li>
<li><select name="sldirector" id="sldirector"> <option selected="selected">Seleccionar Director</option><?php require "../codigo/programa-cargar.php";  while($row=$consulta->fetch(PDO::FETCH_ASSOC)){$dats=array($row=DarAcento($row));  echo $html= "<option value='$row[nombres] $row[apellidos]'>$row[nombres] $row[apellidos]</option>";}?></select></li>
</ul>
</div>

<div class="monitor">
<ul>
<li><label for="slmonitor1">Monitor 1* </label>
<select name="slmonitor1" id="slmonitor1"><option selected="selected">Seleccionar Monitor</option><?php require "../codigo/programa-cargar.php";  while($row=$consulta->fetch(PDO::FETCH_ASSOC)){$dats=array($row=DarAcento($row)); echo $html= "<option value='$row[nombres] $row[apellidos]'>$row[nombres] $row[apellidos]</option>";}?></select>
<label for="txtcargo1">Cargo que desempeña*</label>
<input type="text" id="txtcargo1" name="txtcargo1"/></li>

<li><label for="slmonitor2">Monitor 2</label>
<select name="slmonitor2" id="slmonitor2"><option selected="selected">Seleccionar Monitor</option><?php require "../codigo/programa-cargar.php";  while($row=$consulta->fetch(PDO::FETCH_ASSOC)){$dats=array($row=DarAcento($row));  echo $html= "<option value='$row[nombres] $row[apellidos]'>$row[nombres] $row[apellidos]</option>";}?></select>
<label for="txtcargo2">Cargo que desempeña</label>
<input type="text" id="txtcargo2" name="txtcargo2"/></li>

<li><label for="slmonitor3">Monitor 3</label>
<select name="slmonitor3" id="slmonitor3"> <option selected="selected">Seleccionar Monitor</option><?php require "../codigo/programa-cargar.php";  while($row=$consulta->fetch(PDO::FETCH_ASSOC)){$dats=array($row=DarAcento($row));  echo $html= "<option value='$row[nombres] $row[apellidos]'>$row[nombres] $row[apellidos]</option>";}?></select>
<label for="txtcargo3">Cargo que desempeña</label>
<input type="text" id="txtcargo3" name="txtcargo3"/></li>

<li><label for="slmonitor4">Monitor 4</label>
<select name="slmonitor4" id="slmonitor4"> <option selected="selected">Seleccionar Monitor</option><?php require "../codigo/programa-cargar.php";  while($row=$consulta->fetch(PDO::FETCH_ASSOC)){$dats=array($row=DarAcento($row));  echo $html= "<option value='$row[nombres] $row[apellidos]'>$row[nombres] $row[apellidos]</option>";}?></select>
<label for="txtcargo4">Cargo que desempeña</label>
<input type="text" id="txtcargo4" name="txtcargo4"/></li>

<li><label for="slmonitor5">Monitor 5 </label>
<select name="slmonitor5" id="slmonitor5"><option selected="selected">Seleccionar Monitor</option><?php require "../codigo/programa-cargar.php";  while($row=$consulta->fetch(PDO::FETCH_ASSOC)){$dats=array($row=DarAcento($row));  echo $html= "<option value='$row[nombres] $row[apellidos]'>$row[nombres] $row[apellidos]</option>";}?></select>
<label for="txtcargo5">Cargo que desempeña</label>
<input type="text" id="txtcargo5" name="txtcargo5"></li>
</ul>
</div>

<div id="dvfondobtnlogotipo" class="dvfondobtnlogotipo">
<label for="flanexologotipo" id="lbanexologotipo" class="input-label"><i class="fas fa-upload"></i> Logotipo: </label>
<input type="file" id="flanexologotipo" class="flanexologotipo" name="fllogotipo" hidden>
<span id="nomarchivologotipo" class="nomarchivologotipo">Sin Archivo</span>
</div>


</fieldset>


<p id="parrafo">(*)Campo Obligatorio</p>



</form>

<div id="dvbtnguardar" class="dvbtnguardar">

<button id="btnguardar" name="btnguardar">Guardar</button>

</div>

</body>
</html>
