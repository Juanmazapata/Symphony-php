<?php

require '../codigo/proteger-formulario.php';
require '../codigo/acentos.php';
require '../codigo/conexion_BD.php';
$datos=$conexion->query("SELECT cod_empleado, nombres, apellidos FROM empleado WHERE doc_identidad<>'71495732' ORDER BY nombres ASC");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmempleado-actualizar.css" rel="stylesheet" type="text/css"><!--estilos css-->

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../script/empleado-crear.js"></script>

<script type="text/javascript" src="../script/all(iconos-java).js"></script>

<script type="text/javascript" src="../script/empleado-actualizar-email.js"></script>

<script type="text/javascript" src="../script/empleado-actualizar-privilegio.js"></script>

<script type="text/javascript" src="../script/empleado-actualizar-estado.js"></script>

<script type="text/javascript" src="../script/empleado-actualizar.js"></script>

<script type="text/javascript" src="../script/evento-btncerrar.js"></script>

</head>
<body>
<form id="fmperfil" class="" action="" method="post">

<fieldset id="fsleyenda">
<legend><h2>CREAR MONITOR</h2></legend>
<div class="contenido">
<ul>
<li>
<label for="txtcrearemail">Email*</label>
<input type="email" id="txtcrearemail" name="txtcrearemail" />

<label for="txtclave">Contraseña*</label>
<input type="password" id="txtclave" name="txtclave" />

<label for="txtrepclave">Repita la Contraseña*</label>
<input type="password" id="txtrepclave" name="txtrepclave" />

<label for="slprivilegios">Con Privilegios del sistema*</label>

<select name="slprivilegios" id="slprivilegios" > <option selected="selected"></option><option>No</option><option>Si</option></select>
</li>
<li>
<label for="slestado">Estado</label>
<select name="slestado" id="slestado" > <option selected="selected">Habilitado</option><option>Inhabilitado</option></select>
</li>
</ul>
</div>
</fieldset>

</form>

<div class="dvbtnguardar">
<button id="btnguardar" class="btncerrar">Guardar</button>
&nbsp; &nbsp;<input type="button" id="btncerrar" value="Cerrar"/>
</div>

<form id="fmperfil" class="" action="" method="post">

<fieldset id="fsleyenda">
<legend><h2>BLOQUEAR ó ACTUALIZAR MONITOR</h2></legend>
<div class="contenido">
<ul>
<li>
<label for="slmonitor">Monitor</label>
<select id="slmonitor" name="slmonitor">
<option value="0">Seleccionar Monitor </option>
<?php while($row=$datos->fetch(PDO::FETCH_ASSOC)){?> <option value="<?php  $dats=array($row=DarAcento($row)); echo $row['cod_empleado']; ?>"><?php echo $row['nombres'] . " " . $row['apellidos']; ?></option>"; <?php }?>
</select>

<label for="slprivilegioact">Con Privilegios del sistema*</label>

<select name="slprivilegioact" id="slprivilegioact" ><option selected="selected"></option><option>No</option><option>Si</option> </select>

<label for="slestadoact">Estado</label>
<select name="slestadoact" id="slestadoact" > <option selected="selected">Habilitado</option><option>Inhabilitado</option></select>

<label for="txtactemail">Email*</label>
<input type="email" id="txtactemail" name="txtactemail" />

</li>
</ul>
</div>
</fieldset>

<p id="backup"><a href="../codigo/respaldo_BD.php">Copia de Seguridad</a></p>

<p>(*)Campo Obligatorio</p>
</form>

<div class="dvbtnactualizar">
<button id="btnactualizar" class="btnactualizar">Actualizar</button>
&nbsp; &nbsp;<input type="button" id="btncerraract" value="Cerrar"/>
</div>

</body
