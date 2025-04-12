<?php
session_start();
$codigo_empleado=$_SESSION["codigo"];
require '../codigo/acentos.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmempleado-actualizar.css" rel="stylesheet" type="text/css"><!--estilos css-->

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../script/pestañas-frmperfil.js"></script>

<script type="text/javascript" src="../script/anexos.js"></script>

<script type="text/javascript" src="../script/all(iconos-java).js"></script>

<script type="text/javascript" src="../script/perfil-actualizar.js"></script>

</head>
<body>


<form id="fmperfil-actualizar" action="../codigo/perfil-actualizar.php" method="post" enctype="multipart/form-data">
<div class="pestañas">
<ul class="pestaña">
<li><a href="#pestaña1"><span>Información Personal</span></a></li>
<li><a href="#pestaña2"><span>Seguridad - Anexos</span></a></li>
</ul>



<div id="pestaña1">
<fieldset id="fsleyenda">
<legend><h1>ACTUALIZAR MONITOR</h1></legend>
<div class="contenido">
<ul>
<li id="linea1"><label for="txtcodempleado">Código Empleado</label>
<input type="text" name="txtcodempleado" id="txtcodempleado" readonly value="<?php require '../codigo/perfil-cargar.php'; echo $codigo; ?>">

<label for="txtnomempleado">Nombres*</label>
<input type="text" name="txtnomempleado" id="txtnomempleado" value="<?php require '../codigo/perfil-cargar.php'; echo $nombres=DarAcento($nombres); ?>">

<label for="txtapellempleado">Apellidos*</label>
<input type="text" name="txtapellempleado" id="txtapellempleado" value="<?php require '../codigo/perfil-cargar.php'; echo $apellidos=DarAcento($apellidos); ?>">

<label for="slsexo">Sexo*</label>
<select name="slsexo" id="slsexo" >
  <option selected="selected"><?php require '../codigo/perfil-cargar.php'; echo $sexo; ?></option>
  <option>Hombre</option>
  <option>Mujer</option></select>


</li>
<li id="linea2">

<label for="sltipodocumento">Tipo Documento*</label>
<select name="sltipodocumento" id="sltipodocumento" >
  <option selected="selected"><?php require '../codigo/perfil-cargar.php'; echo $tipodocumento; ?></option>
  <option>C.C.</option><option>T.I.</option><option>C.E.</option></select>

<label for="txtnrodocumento" id="lbnrodocumento">Nro. Documento*</label>
<input type="text" name="txtnrodocumento" id="txtnrodocumento" value="<?php require '../codigo/perfil-cargar.php'; echo $doc_identidad; ?>">

<label for="txteps">EPS</label>
<input type="text" name="txteps" id="txteps" value="<?php require '../codigo/perfil-cargar.php'; echo $eps; ?>">

<label for="txtpension">Fondo Pensión</label>
<input type="text" name="txtpension" id="txtpension" value="<?php require '../codigo/perfil-cargar.php'; echo $pensiones; ?>">

<label for="txtarl">ARL</label>
<input type="text" name="txtarl" id="txtarl" value="<?php require '../codigo/perfil-cargar.php'; echo $arl; ?>"></li>
</ul>
</div>
</fieldset>

<fieldset id="fsleyenda">
<legend><h2>Fecha y Lugar de Nacimiento</h2></legend>
<div class="contenido">
<ul>
<li id="linea3">
<label for="txtedad">Edad</label>
<input type="text" name="txtedad" id="txtedad" value="<?php require '../codigo/perfil-cargar.php'; echo $edad; ?>">

<label for="dtfechanacimiento">Fecha de nacimiento*</label>
<input type="date" name="dtfechanacimiento" id="dtfechanacimiento" value="<?php require '../codigo/perfil-cargar.php'; echo $f_nacimiento; ?>">

<label for="txtpais">Pais</label>
<input type="text" id="txtpais" name="txtpais" value="<?php require '../codigo/perfil-cargar.php'; echo $pais; ?>"/>

<label for="txtdepartamento">Departamento</label>
<input type="text" id="txtdepartamento" name="txtdepartamento" value="<?php require '../codigo/perfil-cargar.php'; echo $departamento; ?>"/>

<label for="txtciudad">Ciudad</label>
<input type="text" id="txtciudad" name="txtciudad" value="<?php require '../codigo/perfil-cargar.php'; echo $ciudad; ?>"/>

</li>
<li id="linea4">

<label for="txttelfijo">Teléfono Fijo</label>
<input type="text" id="txttelfijo" name="txttelfijo" value="<?php require '../codigo/perfil-cargar.php'; echo $telefono; ?>"/>

<label for="txtcelular">Celular</label>
<input type="text" id="txtcelular" name="txtcelular" value="<?php require '../codigo/perfil-cargar.php'; echo $celular; ?>"/>

<label for="txtemail">Email*</label>
<input type="email" id="txtemail" name="txtemail" value="<?php require '../codigo/perfil-cargar.php'; echo $email; ?>"/>

<label for="txtbarrver">Barrio/Vereda</label>
<input type="text" id="txtbarrver" name="txtbarrver" value="<?php require '../codigo/perfil-cargar.php'; echo $dir_barrio; ?>"/>

</li>
</ul>
</div>
</fieldset>

<fieldset id="fsleyenda">
<legend><h2>Formación Académica</h2></legend>
<div class="contenido">
<ul>
<li id="linea5">
  <input type="radio" id="rbninguna" name="rbformacion" value="ninguna" checked hidden/>

<input type="radio" id="rbprimaria" name="rbformacion" value="primaria" <?php  require '../codigo/perfil-cargar.php'; if ($estudio=='primaria') {
  echo 'checked';
}?>/>
<label for="rbprimaria">Primaria |</label>

<input type="radio" id="rbbachillerato" name="rbformacion" value="bachillerato"
<?php  require '../codigo/perfil-cargar.php'; if ($estudio=='bachillerato') {
  echo 'checked';
}?>/>
<label for="rbbachillerato">Bachillerato |</label>

<input type="radio" id="rbdiptectecnologia" name="rbformacion" value="diptectecnologia" <?php  require '../codigo/perfil-cargar.php'; if ($estudio=='diptectecnologia') {
  echo 'checked';
}?>/>
<label for="rbdiptectecnologia">Diplomado/Técnica/Técnologia |</label>

<input type="radio" id="rbprofesional" name="rbformacion" value="profesional" <?php  require '../codigo/perfil-cargar.php'; if ($estudio=='profesional') {
  echo 'checked';
}?>/>
<label for="rbprofesional">Profesional |</label>


<label for="txttitulo"> Título</label>
<input type="text" id="txttitulo" name="txttitulo" value="<?php require '../codigo/perfil-cargar.php'; echo $titulo; ?>"/>

</li>

<li id="linea6">
<label for="txtinstuniversidad">Institución/Universidad</label>
<input type="text" id="txtinstuniversidad" name="txtinstuniversidad" value="<?php require '../codigo/perfil-cargar.php'; echo $universidad; ?>"/>



</li>
</ul>
</div>

</fieldset>

<fieldset id="fsleyenda">
<legend><h2>Información Laboral</h2></legend>
<div class="contenido">
<ul>
<li id="linea7">

<label for="txtcargo">Cargo a Desempeñar*</label>
<input type="text" id="txtcargo" name="txtcargo" value="<?php require '../codigo/perfil-cargar.php'; echo $cargo; ?>"/>

<label for="slañoinicio">Año de Inicio</label>
<select name="slañoinicio" id="slañoinicio" >
<option selected="selected"><?php require '../codigo/perfil-cargar.php'; echo $anioinicio;  ?> </option>
<option value="<?php echo date("Y")-1; ?>">	   <?php echo date("Y")-1; ?>	</option>
<option value="<?php echo date("Y")-2; ?>">	   <?php echo date("Y")-2; ?>	</option>
<option value="<?php echo date("Y")-3; ?>">	   <?php echo date("Y")-3; ?>	</option>
<option value="<?php echo date("Y")-4; ?>">	   <?php echo date("Y")-4; ?>	</option>
<option value="<?php echo date("Y")-5; ?>">	   <?php echo date("Y")-5; ?>	</option>
<option value="<?php echo date("Y")-6; ?>">	   <?php echo date("Y")-6; ?>	</option>
<option value="<?php echo date("Y")-7; ?>">	   <?php echo date("Y")-7; ?>	</option>
<option value="<?php echo date("Y")-8; ?>">	   <?php echo date("Y")-8; ?>	</option>
<option value="<?php echo date("Y")-9; ?>">	   <?php echo date("Y")-9; ?>	</option>
<option value="<?php echo date("Y")-10; ?>">	   <?php echo date("Y")-10; ?>	</option>
<option value="<?php echo date("Y")-11; ?>">	   <?php echo date("Y")-11; ?>	</option>
<option value="<?php echo date("Y")-12; ?>">	   <?php echo date("Y")-12; ?>	</option>
<option value="<?php echo date("Y")-13; ?>">	   <?php echo date("Y")-13; ?>	</option>
<option value="<?php echo date("Y")-14; ?>">	   <?php echo date("Y")-14; ?>	</option>
<option value="<?php echo date("Y")-15; ?>">	   <?php echo date("Y")-15; ?>	</option>
<option value="<?php echo date("Y")-16; ?>">	   <?php echo date("Y")-16; ?>	</option>
<option value="<?php echo date("Y")-17; ?>">	   <?php echo date("Y")-17; ?>	</option>
<option value="<?php echo date("Y")-18; ?>">	   <?php echo date("Y")-18; ?>	</option>
<option value="<?php echo date("Y")-19; ?>">	   <?php echo date("Y")-19; ?>	</option>
<option value="<?php echo date("Y")-20; ?>">	   <?php echo date("Y")-20; ?>	</option>
<option value="<?php echo date("Y")-21; ?>">	   <?php echo date("Y")-21; ?>	</option>
<option value="<?php echo date("Y")-22; ?>">	   <?php echo date("Y")-22; ?>	</option>
<option value="<?php echo date("Y")-23; ?>">	   <?php echo date("Y")-23; ?>	</option>
<option value="<?php echo date("Y")-24; ?>">	   <?php echo date("Y")-24; ?>	</option>
<option value="<?php echo date("Y")-25; ?>">	   <?php echo date("Y")-25; ?>	</option>
<option value="<?php echo date("Y")-26; ?>">	   <?php echo date("Y")-26; ?>	</option>
<option value="<?php echo date("Y")-27; ?>">	   <?php echo date("Y")-27; ?>	</option>
<option value="<?php echo date("Y")-28; ?>">	   <?php echo date("Y")-28; ?>	</option>
<option value="<?php echo date("Y")-29; ?>">	   <?php echo date("Y")-29; ?>	</option>
<option value="<?php echo date("Y")-30; ?>">	  Anterior	</option>

</select>

<label for="slañoretiro">Año de Retiro</label>
<select name="slañoretiro" id="slañoretiro" >
<option selected="selected"><?php require '../codigo/perfil-cargar.php'; echo $anioretiro;  ?></option>
<option value="<?php echo date("Y")+1; ?>">	   <?php echo date("Y")+1; ?>	</option>
<option value="<?php echo date("Y")+2; ?>">	   <?php echo date("Y")+2; ?>	</option>
<option value="<?php echo date("Y")+3; ?>">	   <?php echo date("Y")+3; ?>	</option>
<option value="<?php echo date("Y")+4; ?>">	   <?php echo date("Y")+4; ?>	</option>
<option value="<?php echo date("Y")+5; ?>">	   <?php echo date("Y")+5; ?>	</option>
<option value="<?php echo date("Y")+6; ?>">	   <?php echo date("Y")+6; ?>	</option>
<option value="<?php echo date("Y")+7; ?>">	   <?php echo date("Y")+7; ?>	</option>
<option value="<?php echo date("Y")+8; ?>">	   <?php echo date("Y")+8; ?>	</option>
<option value="<?php echo date("Y")+9; ?>">	   <?php echo date("Y")+9; ?>	</option>
<option value="<?php echo date("Y")+10; ?>">	   <?php echo date("Y")+10; ?>	</option>
<option value="<?php echo date("Y")+11; ?>">	   <?php echo date("Y")+11; ?>	</option>
<option value="<?php echo date("Y")+12; ?>">	   <?php echo date("Y")+12; ?>	</option>
<option value="<?php echo date("Y")+13; ?>">	   <?php echo date("Y")+13; ?>	</option>
<option value="<?php echo date("Y")+14; ?>">	   <?php echo date("Y")+14; ?>	</option>
<option value="<?php echo date("Y")+15; ?>">	   <?php echo date("Y")+15; ?>	</option>
<option value="<?php echo date("Y")+16; ?>">	   <?php echo date("Y")+16; ?>	</option>
<option value="<?php echo date("Y")+17; ?>">	   <?php echo date("Y")+17; ?>	</option>
<option value="<?php echo date("Y")+18; ?>">	   <?php echo date("Y")+18; ?>	</option>
<option value="<?php echo date("Y")+19; ?>">	   <?php echo date("Y")+19; ?>	</option>
<option value="<?php echo date("Y")+20; ?>">	   <?php echo date("Y")+20; ?>	</option>
<option value="<?php echo date("Y")+21; ?>">	   <?php echo date("Y")+21; ?>	</option>
<option value="<?php echo date("Y")+22; ?>">	   <?php echo date("Y")+22; ?>	</option>
<option value="<?php echo date("Y")+23; ?>">	   <?php echo date("Y")+23; ?>	</option>
<option value="<?php echo date("Y")+24; ?>">	   <?php echo date("Y")+24; ?>	</option>
<option value="<?php echo date("Y")+25; ?>">	   <?php echo date("Y")+25; ?>	</option>
<option value="<?php echo date("Y")+26; ?>">	   <?php echo date("Y")+26; ?>	</option>
<option value="<?php echo date("Y")+27; ?>">	   <?php echo date("Y")+27; ?>	</option>
<option value="<?php echo date("Y")+28; ?>">	   <?php echo date("Y")+28; ?>	</option>
<option value="<?php echo date("Y")+29; ?>">	   <?php echo date("Y")+29; ?>	</option>


</select>

<label for="txttipocontrato">Tipo de Contrato*</label>
<input type="text" id="txttipocontrato" name="txttipocontrato" value="<?php require '../codigo/perfil-cargar.php'; echo $tipocontrato; ?>"/>

</li>
<li id="linea8">

<label for="txttiempocontrato">¿Cuánto Tiempo?*</label>
<input type="text" id="txttiempocontrato" name="txttiempocontrato" value="<?php require '../codigo/perfil-cargar.php'; echo $tiempocontrato; ?>"/>

<label for="txtsalario">Salario*</label>
<input type="text" id="txtsalario" name="txtsalario" value="<?php require '../codigo/perfil-cargar.php'; echo $salario; ?>"/>

</li>
</ul>
</div>
</fieldset>
</div>

<div id="pestaña2">
<fieldset id="fsleyenda">
<legend><h2>Contraseña de Registro</h2></legend>
<div class="contenido">
<ul>
<li>

  <label for="txtcontrasenia">Contraseña Actual</label>
  <input type="password" id="txtcontrasenia" name="txtcontrasenia" />

<label for="txtclave">Contraseña</label>
<input type="password" id="txtclave" name="txtclave" />

<label for="txtrepclave">Repita la Contraseña</label>
<input type="password" id="txtrepclave" name="txtrepclave" />

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
<label for="flanexocedula" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Fotocopia Cedula</label></br>
<input type="file" id="flanexocedula" class="flanexo" hidden="hidden" name="flfotcedula" />
<span id="nomarchivocedula" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnEPS" class="dvfondobtn">
<label for="flanexoEPS" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Certificado Eps</label></br>
<input type="file" id="flanexoEPS" class="flanexo" hidden="hidden" name="flEPS" />
<span id="nomarchivoEPS" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnpension" class="dvfondobtn">
<label for="flanexopension" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Certificado Pensiones</label></br>
<input type="file" id="flanexopension" class="flanexo" hidden="hidden" name="flpension" />
<span id="nomarchivopension" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnARL" class="dvfondobtn">
<label for="flanexoARL" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Certificado ARL</label></br>
<input type="file" id="flanexoARL" class="flanexo" hidden="hidden" name="flARL" />
<span id="nomarchivoARL" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnRUT" class="dvfondobtn">
<label for="flanexoRUT" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Fotocopia RUT</label></br>
<input type="file" id="flanexoRUT" class="flanexo" hidden="hidden" name="flRUT" />
<span id="nomarchivoRUT" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtncontraloria" class="dvfondobtn">
<label for="flanexocontraloria" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Certificado Contraloria</label></br>
<input type="file" id="flanexocontraloria" class="flanexo" hidden="hidden" name="flcontraloria" />
<span id="nomarchivocontraloria" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnprocuraduria" class="dvfondobtn">
<label for="flanexoprocuraduria" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Certificado Procuraduria</label></br>
<input type="file" id="flanexoprocuraduria" class="flanexo" hidden="hidden" name="flprocuraduria" />
<span id="nomarchivoprocuraduria" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnAJ" class="dvfondobtn">
<label for="flanexoAJ" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Antecedentes Judiciales</label></br>
<input type="file" id="flanexoAJ" class="flanexo" hidden="hidden" name="flAJ" />
<span id="nomarchivoAJ" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnCB" class="dvfondobtn">
<label for="flanexoCB" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Certificado Cta. Bancaria</label></br>
<input type="file" id="flanexoCB" class="flanexo" hidden="hidden" name="flCB" />
<span id="nomarchivoCB" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnLM" class="dvfondobtn">
<label for="flanexoLM" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Libreta Militar</label></br>
<input type="file" id="flanexoLM" class="flanexo" hidden="hidden" name="flLM" />
<span id="nomarchivoLM" class="nomarchivo">Sin Archivo</span>
</div>

<div id="dvfondobtnHV" class="dvfondobtn">
<label for="flanexoHV" id="lbanexo" class="input-label"><i class="fas fa-upload"></i> Hoja de Vida</label></br>
<input type="file" id="flanexoHV" class="flanexo" hidden="hidden" name="flHV" />
<span id="nomarchivoHV" class="nomarchivo">Sin Archivo</span>
</div>


 </div>

</div>
</fieldset>
</div>
</div>

<p>(*)Campo Obligatorio</p>

</form>

<div class="dvbtnactualizar">
<button id="btnactualizar" class="btnactualizar">Actualizar</button>
&nbsp; &nbsp;<input type="reset" id="btnlimpiar" value="Limpiar"/>
</div>


</body>
</html>
