<?php
require '../codigo/acentos.php';
 ?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Documento sin título</title>

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

<script type="text/javascript" src="../script/matricula-cargar-nivel-prog1.js"></script>

<script type="text/javascript" src="../script/matricula-cargar-nivel-prog2.js"></script>

<script type="text/javascript" src="../script/matricula-cargar-nivel-prog3.js"></script>

<script type="text/javascript" src="../script/matricula.js"></script>

</head>
<body>

<div id="cargar-formulario-matricula-editar">

<form id="fmmatricula">
<input type="label" name="lbfoto" value="<?php echo $fotocargar; ?>" hidden/>

<input type="label" name="lbdocident" value="<?php echo $fot_docident; ?>"hidden/>

<input type="label" name="lbfotEPS" value="<?php echo $fot_eps; ?>"hidden/>


<div class="pestañas">
<ul class="pestaña">
<li><a href="#pestaña1"><span>Datos del Alumno</span></a></li>
<li><a href="#pestaña2"><span>Datos del Acudiente</span></a></li>
<li><a href="#pestaña3"><span>Discapacidad</span></a></li>
<li><a href="#pestaña4"><span>Datos del Programa</span></a></li>
</ul>

<div id="pestaña1">
<fieldset id="fsleyenda">
<legend><h1>ACTUALIZAR ALUMNO</h1></legend>
<div class="contenido">
<ul>
<li id="linea1">

<label for="txtcodalumno">Código de Mátricula</label>
<input type="text" name="txtcodalumno" id="txtcodalumno" value="<?php echo $cod_matricula; ?>" readonly>

<label for="txtnomalumno">Nombres*</label>
<input type="text" name="txtnomalumno" id="txtnomalumno" value="<?php echo $nombres; ?>">

<label for="txtapellalumno">Apellidos*</label>
<input type="text" name="txtapellalumno" id="txtapellalumno" value="<?php echo $apellidos; ?>">
</li>

<li id="linea2">

<label for="slsexo">Sexo*</label>
<select name="slsexo" id="slsexo" > <option selected="<?php echo $sexo; ?>"><?php echo $sexo; ?></option><option>Hombre</option><option>Mujer</option></select>

<label for="sltipodocumento">Tipo Documento*</label>
<select name="sltipodocumento" id="sltipodocumento" > <option selected="<?php echo $tipo_documento; ?>"><?php echo $tipo_documento; ?></option><option>T.I.</option><option>C.C.</option><option>C.E.</option></select>

<label for="txtnrodocumento" id="lbnrodocumento">Nro. Documento*</label>
<input type="text" name="txtnrodocumento" id="txtnrodocumento" value="<?php echo $num_documento; ?>">

<label for="txteps">EPS</label>
<input type="text" name="txteps" id="txteps" value="<?php echo $eps; ?>">
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
<input type="date" id="dtfechanacimiento" name="dtfechanacimiento" value="<?php echo $f_nacimiento; ?>">

<label for="txtedad">Edad*</label>
<input type="text" name="txtedad" id="txtedad" value="<?php echo $edad; ?>">

<label for="txtpais">Pais</label>
<input type="text" id="txtpais" name="txtpais" value="<?php echo $pais; ?>"/>

<label for="txtdepartamento">Departamento</label>
<input type="text" id="txtdepartamento" name="txtdepartamento" value="<?php echo $departamento; ?>"/>

<label for="txtciudad">Ciudad</label>
<input type="text" id="txtciudad" name="txtciudad" value="<?php echo $ciudad; ?>"/>

</li>

<li id="linea4">

<label for="txttelfijo">Teléfono Fijo</label>
<input type="text" id="txttelfijo" name="txttelfijo" value="<?php echo $telefono; ?>"/>

<label for="txtcelular">Celular</label>
<input type="text" id="txtcelular" name="txtcelular" value="<?php echo $celular; ?>" />

<label for="txtemail">Email</label>
<input type="email" id="txtemail" name="txtemail" value="<?php echo $email; ?>" />

</li>

<li id="linea5">

<label for="txtdirbarrver">Direccion: Barrio/Vereda</label>
<input type="text" id="txtdirbarrver" name="txtdirbarrver" value="<?php echo $dir_barrio_vereda; ?>"/>

<label>Zona de Residencia |</label>
<input type="radio" id="rbninguno" name="rbzona" value="sin opcion" checked hidden />

<input type="radio" id="rbznurbana" name="rbzona" value="urbana" <?php if ($zona==="Urbana") {echo  "checked";} ?>/>
<label for="rbznurbana">Urbana |</label>

<input type="radio" id="rbznrural" name="rbzona" value="rural" <?php if ($zona==="Rural") {echo  "checked";} ?> />
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
<input type="text" id="txtinstitucion" name="txtinstitucion" value="<?php echo $institucion; ?>" />

<label for="txtsede"> Sede</label>
<input type="text" id="txtsede" name="txtsede" value="<?php echo $sede; ?>"/>

<label for="txtgrado">Grado</label>
<input type="text" id="txtgrado" name="txtgrado" value="<?php echo $grado; ?>"/>

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

<input type="radio" id="rbantiguo" name="rbingreso" value="antiguo" <?php if($ingreso!=$anio_actual){echo 'checked';}?>/>
<label for="rbantiguo">Antiguo </label>

<select name="slañoinicio" id="slañoinicio" >
<option selected="<?php echo $ingreso; ?>">    <?php if($ingreso!=$anio_actual){echo $ingreso;} ?></option>
<option>     <?php echo date("Y")-1; ?></option>
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

|<input type="radio" id="rbnuevo" name="rbingreso" value="nuevo" <?php if ($ingreso===$anio_actual) {
echo 'checked';
} ?>/>
<label for="rbnuevo">  Nuevo |</label>

<label for="slestado">Estado</label>
<select name="slestado" id="slestado" >
<option selected="<?php echo $estado; ?>"><?php echo $estado; ?></option>
<option>Habilitado</option>
<option>Inhabilitado</option></select>

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

  <input type="radio" id="rbadulto" name="rbleyenda" value="mayor" <?php if ($fslyenda==='mayor edad'){echo 'checked';} ?>/>
  <label for="rbadulto">Adulto |</label>

  <input type="radio" id="rbmenoredad" name="rbleyenda" value="menor" <?php if ($fslyenda==='menor edad'){echo 'checked';} ?>/>
  <label for="rbmenoredad">Menor de Edad</label>
<br>
  <label for="txtnomacudiente" id="lbnomacudiente">Nombres*</label>
  <input type="text" name="txtnomacudiente" id="txtnomacudiente" value="<?php echo $nom_acudiente; ?>">

  <label for="txtapellacudiente" id="lbapellacudiente">Apellidos*</label>
  <input type="text" name="txtapellacudiente" id="txtapellacudiente" value="<?php echo $apell_acudiente; ?>">

  <label for="txtdocacudiente" id="lbdocacudiente">Nro. Documento</label>
  <input type="text" name="txtdocacudiente" id="txtdocacudiente" value="<?php echo $doc_acudiente; ?>">

  <label for="txtparentesco" id="lbparentesco">Parentesco</label>
  <input type="text" name="txtparentesco" id="txtparentesco" value="<?php echo $parentesco; ?>">

  <label for="txttelacudiente" id="lbtelacudiente">Teléfono Fijo</label>
  <input type="text" id="txttelacudiente" name="txttelacudiente" value="<?php echo $tel_acudiente; ?>"/>

  <label for="txtcelacudiente" id="lbcelacudiente">Celular</label>
  <input type="text" id="txtcelacudiente" name="txtcelacudiente" value="<?php echo $cel_acudiente; ?>"/>

  <label for="txtemailacudiente" id="lbemailacudiente">Email</label>
  <input type="email" id="txtemailacudiente" name="txtemailacudiente" value="<?php echo $email_acudiente; ?>"/>

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
    <select name="slsangre" id="slsangre" > <option selected="<?php echo $sangre; ?>"><?php echo $sangre; ?></option>
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

  <input type="radio" id="rbnoenfermedad" name="rbenfermedad" value="No" <?php if($enfermedad==='No'){echo 'checked';}?>/>
  <label for="rbnoenfermedad">No |</label>

  <input type="radio" id="rbsienfermedad" name="rbenfermedad" value="Si" <?php if($enfermedad==='Si'){echo 'checked';}?>/>
  <label for="rbsienfermedad">Si </label>
  <label for="txtenfermedad">Cual</label>
  <input type="text" name="txtenfermedad" id="txtenfermedad" value="<?php echo $tipo_enfermedad; ?>">

<p>¿Depende de Algún Medicamento?</p>
<input type="radio" id="rbninguno" name="rbmedicamento" value="sin opcion" checked hidden />


<input type="radio" id="rbnomedicamento" name="rbmedicamento" value="No" <?php if($medicamento==='No'){echo 'checked';}?>/>
<label for="rbnomedicamento" >No |</label>

<input type="radio" id="rbmedicamento" name="rbmedicamento" value="Si"  <?php if($medicamento==='Si'){echo 'checked';}?>/>
<label for="rbmedicamento" >Si </label>

<label for="txtmedicamento">Cual</label>
<input type="text" name="txtmedicamento" id="txtmedicamento" value="<?php echo $tipo_medicamento; ?>">

<p>¿Sufre de Alguna Alergia?</p>
<input type="radio" id="rbninguno" name="rbalergia" value="sin opcion" checked hidden />

<input type="radio" id="rbnoalergia" name="rbalergia" value="No" <?php if($alergia==='No'){echo 'checked';}?>/>
<label for="rbnoalergia">No |</label>

<input type="radio" id="rbsialergia" name="rbalergia" value="Si" <?php if($alergia==='Si'){echo 'checked';}?>/>
<label for="rbsialergia">Si </label>

<label for="txtalergia">Cual</label>
<input type="text" name="txtalergia" id="txtalergia" value="<?php echo $tipo_alergia; ?>">
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
  <select name="slpriprograma" id="slpriprograma" > <option selected="<?php echo $result_id1; ?>" value="<?php echo $result_id1; ?>"><?php echo $result_programa1; ?>
  </option><?php require "../codigo/matricula-cargar.php";  while($row=$programas->fetch(PDO::FETCH_ASSOC)){ echo $html= "<option value='$row[id]'
  >$row[nom_programa]</option>";}?></select>

  <label for="slpripronivel">Nivel</label>
  <select name="slpripronivel" id="slpripronivel">
    <option  selected="<?php echo $nivel_pro1; ?>" value=""><?php echo $nivel_pro1; ?></option>
  </select>


  <label for="txtpriprodirector">Director</label>
  <input type="text" name="txtpriprodirector" value="<?php echo $result_director1; ?>" id="txtpriprodirector" readonly>

  <label for="slpriproinstrumento">Instrumento</label>
  <select name="slpriproinstrumento" id="slpriproinstrumento" > <option selected="selected"></option></select>

  <label for="slsegprograma">Segundo Programa</label>
  <select name="slsegprograma" id="slsegprograma" > <option selected="<?php echo $result_id2; ?>" value="<?php echo $result_id2; ?>"><?php echo $result_programa2; ?></option><?php require "../codigo/matricula-cargar.php";  while($row=$programas->fetch(PDO::FETCH_ASSOC)){ echo $html= "<option value='$row[id]'
  >$row[nom_programa]</option>";}?>
</select>

<label for="slsegpronivel">Nivel</label>
<select name="slsegpronivel" id="slsegpronivel" > <option  selected="<?php echo $nivel_pro2; ?>" value=""><?php echo $nivel_pro2; ?></option></select>

  <label for="txtsegprodirector">Director</label>

  <input type="text" name="txtsegprodirector" id="txtsegprodirector" readonly value="<?php echo $result_director2; ?>">

    <label for="slsegproinstrumento">Instrumento</label>
  <select name="slsegproinstrumento" id="slsegproinstrumento" > <option selected="selected"></option></select>

  <label for="slterprograma">Tercer Programa</label>
  <select name="slterprograma" id="slterprograma" ><option selected="<?php echo $result_id3; ?>" value="<?php echo $result_id3; ?>"><?php echo $result_programa3; ?></option><?php require "../codigo/matricula-cargar.php";  while($row=$programas->fetch(PDO::FETCH_ASSOC)){ echo $html= "<option value='$row[id]'
  >$row[nom_programa]</option>";}?></select>

  <label for="slterpronivel">Nivel</label>
  <select name="slterpronivel" id="slterpronivel" > <option  selected="<?php echo $nivel_pro3 ?>" value=""><?php echo $nivel_pro3 ?></option></select>

  <label for="txtterprodirector">Director</label>

<input type="text" name="txtterprodirector" id="txtterprodirector" readonly value="<?php echo $result_director3; ?>">

  <label for="slterproinstrumento">Instrumento</label>
  <select name="slterproinstrumento" id="slterproinstrumento" > <option selected="selected"></option></select>

  <label for="slprograma-cuotas">Programa que recauda las cuotas</label>
  <select name="slprograma-cuotas" id="slprograma-cuotas" ><option selected="<?php echo $recaudo; ?>"><?php echo $recaudo; ?></option>
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
<input type="file" id="flanexoEPS" class="flanexo" hidden="hidden" name="flEPS" />
<span id="nomarchivoEPS" class="nomarchivo">Sin Archivo</span>
</div>

</div>
</div>
</fieldset>

</div>

</div>

<p id="p">(*)Campo Obligatorio</p>


</form>

<div class="dvbtnactualizar">
  <input type="submit" id="btnactualizar" value="Actualizar" onClick="matricula_actualizar()"/>&nbsp; &nbsp;<input type="submit" id="btnvolver" value="Volver" onClick="matricula_editar_volver()"/>
</div>

</div>

</body>
</html>
