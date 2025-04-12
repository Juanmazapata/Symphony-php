<!doctype html>
<html>
<head>

<title>Documento sin título</title>

<meta charset="utf-8">

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmmatricula.css" rel="stylesheet" type="text/css"><!--estilos css-->

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../script/pestañas-frmmatricula.js"></script>

<script type="text/javascript" src="../script/anexos.js"></script>

<script type="text/javascript" src="../script/all(iconos-java).js"></script>

<script type="text/javascript" src="../script/limpiar.js"></script>

<script type="text/javascript" src="../script/matricula-cargar-director-programa1.js"></script>

<script type="text/javascript" src="../script/matricula-cargar-director-programa2.js"></script>

<script type="text/javascript" src="../script/matricula-cargar-director-programa3.js"></script>

<script type="text/javascript" src="../script/matricula.js"></script>

<script type="text/javascript" src="../script/matricula-cargar-nivel-prog1.js"></script>

<script type="text/javascript" src="../script/matricula-cargar-nivel-prog2.js"></script>

<script type="text/javascript" src="../script/matricula-cargar-nivel-prog3.js"></script>

</head>
<body>


<form id="fmmatricula">
<div class="pestañas">
<ul class="pestaña">
<li><a href="#pestaña1"><span>Datos del Alumno</span></a></li>
<li><a href="#pestaña2"><span>Datos del Acudiente</span></a></li>
<li><a href="#pestaña3"><span>Discapacidad</span></a></li>
<li><a href="#pestaña4"><span>Datos del Programa</span></a></li>
</ul>

<div id="pestaña1">
<fieldset id="fsleyenda">
<legend><h1>CREAR ALUMNO</h1></legend>
<div class="contenido">
<ul>
<li id="linea1">

<label for="txtcodalumno">Código de Mátricula</label>
<input type="text" name="txtcodalumno" id="txtcodalumno" value="<?php require "../codigo/matricula-cargar.php"; echo $cod_matricula; ?>" readonly>

<label for="txtnomalumno">Nombres*</label>
<input type="text" name="txtnomalumno" id="txtnomalumno">

<label for="txtapellalumno">Apellidos*</label>
<input type="text" name="txtapellalumno" id="txtapellalumno">
</li>

<li id="linea2">

<label for="slsexo">Sexo*</label>
<select name="slsexo" id="slsexo" > <option selected="selected"></option><option>Hombre</option><option>Mujer</option></select>

<label for="sltipodocumento">Tipo Documento*</label>
<select name="sltipodocumento" id="sltipodocumento" > <option selected="selected"></option><option>T.I.</option><option>C.C.</option><option>C.E.</option></select>

<label for="txtnrodocumento" id="lbnrodocumento">Nro. Documento*</label>
<input type="text" name="txtnrodocumento" id="txtnrodocumento">

<label for="txteps">EPS</label>
<input type="text" name="txteps" id="txteps">
</li>
</ul>
</div>
</fieldset>

<fieldset id="fsleyenda">
<legend><h2>Lugar de Nacimiento</h2></legend>
<div class="contenido">
<ul>
<li id="linea3">


<label for="dtfechanacimiento">Fecha de nacimiento</label>
<input type="date" id="dtfechanacimiento" name="dtfechanacimiento">

<label for="txtedad">Edad*</label>
<input type="text" name="txtedad" id="txtedad">

<label for="txtpais">Pais</label>
<input type="text" id="txtpais" name="txtpais" value="Colombia"/>

<label for="txtdepartamento">Departamento</label>
<input type="text" id="txtdepartamento" name="txtdepartamento" value="Antioquia"/>

<label for="txtciudad">Ciudad</label>
<input type="text" id="txtciudad" name="txtciudad" value="Concordia"/>

</li>

<li id="linea4">

<label for="txttelfijo">Teléfono Fijo</label>
<input type="text" id="txttelfijo" name="txttelfijo" />

<label for="txtcelular">Celular</label>
<input type="text" id="txtcelular" name="txtcelular" />

<label for="txtemail">Email</label>
<input type="email" id="txtemail" name="txtemail" />

</li>

<li id="linea5">

<label for="txtdirbarrver">Direccion: Barrio/Vereda</label>
<input type="text" id="txtdirbarrver" name="txtdirbarrver" />

<label>Zona de Residencia |</label>
<input type="radio" id="rbninguno" name="rbzona" value="sin opcion" checked hidden />

<input type="radio" id="rbznurbana" name="rbzona" value="urbana" />
<label for="rbznurbana">Urbana |</label>

<input type="radio" id="rbznrural" name="rbzona" value="rural"  />
<label for="rbznrural">Rural </label>

</li>
</ul>
</div>
</fieldset>

<fieldset id="fsleyenda">
<legend><h2>Formación Académica</h2></legend>
<div class="contenido">
<ul>
<li id="linea6">

<label for="txtinstitucion">Institución Educativa</label>
<input type="text" id="txtinstitucion" name="txtinstitucion" />

<label for="txtsede"> Sede</label>
<input type="text" id="txtsede" name="txtsede" />

<label for="txtgrado"> Grado</label>
<input type="text" id="txtgrado" name="txtgrado" />

</li>
</ul>
</div>

</fieldset>

<fieldset id="fsleyenda">
<legend><h2>Año de Ingreso</h2></legend>
<div class="contenido">
<ul>
<li id="linea7">

<input type="radio" id="rbninguno" name="rbingreso" value="sin opcion" checked hidden />

<input type="radio" id="rbantiguo" name="rbingreso" value="antiguo"/>
<label for="rbantiguo">Antiguo </label>

<select name="slañoinicio" id="slañoinicio" >
<option selected="selected">    <?php echo date("Y")-1; ?></option>
<option>	   <?php echo date("Y")-2; ?>	</option>
<option>	   <?php echo date("Y")-3; ?>	</option>
<option>	   <?php echo date("Y")-4; ?>	</option>
<option>	   <?php echo date("Y")-5; ?>	</option>
<option>	   <?php echo date("Y")-6; ?>	</option>
<option>	   <?php echo date("Y")-7; ?>	</option>
<option>	   <?php echo date("Y")-8; ?>	</option>
<option>	   <?php echo date("Y")-9; ?>	</option>
<option>	   <?php echo date("Y")-10; ?>	</option>
<option>	   <?php echo date("Y")-11; ?>	</option>
<option>	   <?php echo date("Y")-12; ?>	</option>
<option>	   <?php echo date("Y")-13; ?>	</option>
<option>	   <?php echo date("Y")-14; ?>	</option>
<option>	   <?php echo date("Y")-15; ?>	</option>
<option>	   <?php echo date("Y")-16; ?>	</option>
<option>	   <?php echo date("Y")-17; ?>	</option>
<option>	   <?php echo date("Y")-18; ?>	</option>
<option>	   <?php echo date("Y")-19; ?>	</option>
<option>	   <?php echo date("Y")-20; ?>	</option>
<option>	   <?php echo date("Y")-21; ?>	</option>
<option>	   <?php echo date("Y")-22; ?>	</option>
<option>	   <?php echo date("Y")-23; ?>	</option>
<option>	   <?php echo date("Y")-24; ?>	</option>
<option>	   <?php echo date("Y")-25; ?>	</option>
<option>	   <?php echo date("Y")-26; ?>	</option>
<option>	   <?php echo date("Y")-27; ?>	</option>
<option>	   <?php echo date("Y")-28; ?>	</option>
<option>	   <?php echo date("Y")-29; ?>	</option>
<option>	  Anterior	</option>
</select>

|<input type="radio" id="rbnuevo" name="rbingreso" value="nuevo"/>
<label for="rbnuevo">  Nuevo |</label>

<label for="slestado">Estado</label>
<select name="slestado" id="slestado" > <option selected="selected">Habilitado</option><option>Inhabilitado</option></select>

</li>
</ul>
</div>
</fieldset>

</div>

<div id="pestaña2">
<fieldset id="fsleyenda">
<legend><h2>Datos del Acudiente</h2></legend>
<div class="contenido">
<ul>
<li>

<p>El alumno es: </p>

<input type="radio" id="rbninguno" name="rbleyenda" value="sin opcion" checked hidden />

  <input type="radio" id="rbadulto" name="rbleyenda" value="mayor"/>
  <label for="rbadulto">Adulto |</label>

  <input type="radio" id="rbmenoredad" name="rbleyenda" value="menor"/>
  <label for="rbmenoredad">Menor de Edad</label>
<br>
  <label for="txtnomacudiente" id="lbnomacudiente">Nombres*</label>
  <input type="text" name="txtnomacudiente" id="txtnomacudiente">

  <label for="txtapellacudiente" id="lbapellacudiente">Apellidos*</label>
  <input type="text" name="txtapellacudiente" id="txtapellacudiente">


  <label for="txtdocacudiente" id="lbdocacudiente">Nro. Documento</label>
  <input type="text" name="txtdocacudiente" id="txtdocacudiente">

  <label for="txtparentesco" id="lbparentesco">Parentesco</label>
  <input type="text" name="txtparentesco" id="txtparentesco">

  <label for="txttelacudiente" id="lbtelacudiente">Teléfono Fijo</label>
  <input type="text" id="txttelacudiente" name="txttelacudiente" />

  <label for="txtcelacudiente" id="lbcelacudiente">Celular</label>
  <input type="text" id="txtcelacudiente" name="txtcelacudiente" />

  <label for="txtemailacudiente" id="lbemailacudiente">Email</label>
  <input type="email" id="txtemailacudiente" name="txtemailacudiente" />

<p id="aviso-acudiente" hidden>NOTA: Si el alumno es adulto, no es necesario diligenciar la información del acudiente.</p>

</li>
</ul>
</div>
</fieldset>

</div>

<div id="pestaña3">
<fieldset id="fsleyenda">
<legend><h2>Discapacidad</h2></legend>
<div class="contenido">
  <ul>
  <li>

    <label for="slsexo">Tipo de Sangre</label>
    <select name="slsangre" id="slsangre" > <option selected="selected"></option>
      <option>O+</option>
      <option>A+</option>
      <option>B+</option>
      <option>AB+</option>
      <option>O-</option>
      <option>A-</option>
      <option>B-</option>
      <option>AB-</option>

    </select>

<p>¿Padece de Alguna Enfermedad?</p>

<input type="radio" id="rbninguno" name="rbenfermedad" value="sin opcion" checked hidden />

  <input type="radio" id="rbnoenfermedad" name="rbenfermedad" value="No"/>
  <label for="rbnoenfermedad">No |</label>

  <input type="radio" id="rbsienfermedad" name="rbenfermedad" value="Si"/>
  <label for="rbsienfermedad">Si </label>

  <label for="txtenfermedad">Cual</label>
  <input type="text" name="txtenfermedad" id="txtenfermedad">

<p>¿Depende de Algún Medicamento?</p>

<input type="radio" id="rbninguno" name="rbmedicamento" value="sin opcion" checked hidden />

<input type="radio" id="rbnomedicamento" name="rbmedicamento" value="No"/>
<label for="rbnomedicamento" >No |</label>

<input type="radio" id="rbmedicamento" name="rbmedicamento" value="Si"/>
<label for="rbmedicamento" >Si </label>

<label for="txtmedicamento">Cual</label>
<input type="text" name="txtmedicamento" id="txtmedicamento">

<p>¿Sufre de Alguna Alergia?</p>

<input type="radio" id="rbninguno" name="rbalergia" value="sin opcion" checked hidden />

<input type="radio" id="rbnoalergia" name="rbalergia" value="No"/>
<label for="rbnoalergia">No |</label>

<input type="radio" id="rbsialergia" name="rbalergia" value="Si"/>
<label for="rbsialergia">Si </label>

<label for="txtalergia">Cual</label>
<input type="text" name="txtalergia" id="txtalergia">
</ul>
</li>
</div>

</fieldset>
</div>

<div id="pestaña4">
<fieldset id="fsleyenda">
<legend><h2>Programas a Vincular</h2></legend>
<div class="contenido">
<ul>
  <li>

  <label for="slpriprograma">Primer Programa*</label>
  <select name="slpriprograma" id="slpriprograma" > <option  selected="selected" value="0">Seleccionar Programa 1</option><?php require "../codigo/matricula-cargar.php";  while($row=$programas->fetch(PDO::FETCH_ASSOC)){ echo $html= "<option value='$row[id]'
  >$row[nom_programa]</option>";}?></select>

  <label for="slpripronivel">Nivel</label>
  <select name="slpripronivel" id="slpripronivel"></select>

  <label for="txtpriprodirector">Director</label>
  <input type="text" name="txtpriprodirector" value="" id="txtpriprodirector" readonly>

  <label for="slpriproinstrumento">Instrumento</label>
  <select name="slpriproinstrumento" id="slpriproinstrumento" > <option selected="selected"></option></select>

  <label for="slsegprograma">Segundo Programa</label>
  <select name="slsegprograma" id="slsegprograma" > <option selected="selected" value="02">Seleccionar Programa 2</option><?php require "../codigo/matricula-cargar.php";  while($row=$programas->fetch(PDO::FETCH_ASSOC)){ echo $html= "<option value='$row[id]'
  >$row[nom_programa]</option>";}?>
</select>

<label for="slsegpronivel">Nivel</label>
<select name="slsegpronivel" id="slsegpronivel" > <option  selected="" value=""></option></select>

  <label for="txtsegprodirector">Director</label>

  <input type="text" name="txtsegprodirector" id="txtsegprodirector" readonly>

    <label for="slsegproinstrumento">Instrumento</label>
  <select name="slsegproinstrumento" id="slsegproinstrumento" > <option selected="selected"></option></select>

  <label for="slterprograma">Tercer Programa</label>
  <select name="slterprograma" id="slterprograma" ><option selected="selected" value="03">Seleccionar Programa 3</option><?php require "../codigo/matricula-cargar.php";  while($row=$programas->fetch(PDO::FETCH_ASSOC)){ echo $html= "<option value='$row[id]'
  >$row[nom_programa]</option>";}?></select>

  <label for="slterpronivel">Nivel</label>
  <select name="slterpronivel" id="slterpronivel" > <option  selected="" value=""></option></select>

  <label for="txtterprodirector">Director</label>

<input type="text" name="txtterprodirector" value="" id="txtterprodirector" readonly>

  <label for="slterproinstrumento">Instrumento</label>
  <select name="slterproinstrumento" id="slterproinstrumento" > <option selected="selected"></option></select>

  <label for="slprograma-cuotas">Programa que recauda las cuotas</label>
  <select name="slprograma-cuotas" id="slprograma-cuotas" ><option selected="Elija uno de los tres programas">Elija uno de los tres programas</option>
  <option value="Primer Programa">Primer Programa</option>
  <option value="Segundo Programa">Segundo Programa</option>
  <option value="Tercero Programa">Tercer Programa</option>
  </select>

</li>


</ul>
</div>

</fieldset>

<fieldset id="fsleyenda">
<legend><h2>Anexos</h2></legend>
<div class="contenido">
<div class="anexos">

<div id="dvfondobtnfoto" class="dvfondobtn">
<label for="flanexofoto" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Foto</label></br>
<input type="file" id="flanexofoto" class="flanexo" hidden="hidden" name="flfoto" />
<span id="nomarchivofoto" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtncedula" class="dvfondobtn">
<label for="flanexocedula" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Documento Identidad</label></br>
<input type="file" id="flanexocedula" class="flanexo" hidden="hidden" name="flfotdocident" />
<span id="nomarchivocedula" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnEPS" class="dvfondobtn">
<label for="flanexoEPS" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Certificado Eps</label></br>
<input type="file" id="flanexoEPS" class="flanexo" hidden="hidden" name="flanexoEPS" />
<span id="nomarchivoEPS" class="nomarchivo">Sin Archivo</span>
</div>

</div>
</div>
</fieldset>

</div>

</div>



<p>(*)Campo Obligatorio</p>

</form>

<div class="dvbtnguardar">
  <input type="submit" id="btnguardar" value="Guardar"/>&nbsp; &nbsp;<input type="reset" id="btnlimpiar" value="Limpiar"/>
</div>

</body>
</html>
