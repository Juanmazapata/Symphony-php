<?php
require '../codigo/conexion_BD.php';
require '../codigo/acentos.php';
//include '../codigo/programa-cargar.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">
</head>

<link href="../estilos/frmprograma-consultar.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../script/cargar-formulario.js"></script><!--carga el js para traer formularios-->

<script type="text/javascript" src="../script/consultar.js"></script><!--carga el js para traer formularios-->

<script type="text/javascript" src="../script/all(iconos-java).js"></script>

<script type="text/javascript" src="../script/programa-controles.js"></script>

<script type="text/javascript" src="../script/programa-controles.js"></script>



</head>

<body>



<div id="cargar-formulario-programa">



  <form id="fmprograma-consultar">

<fieldset>
<legend><h1>Consultar Programa</h1></legend>

<ul id="consulta-programa">
  <li>
    <input type="text" name="txtconsultar-programa" value="" id="txtconsultar-programa" onkeypress="return pulsar(event)">
    <button type="button" name="btnconsulta-programa" id="btnconsulta-programa" onClick="return true; consulta()">Ver</button>
  </li>
</ul>
<div id="contenido-resultado">



<?php


$programas_sql=$conexion->query("SELECT * FROM programa ORDER BY f_registro desc")->fetchAll(PDO::FETCH_OBJ); /*array de objetos*/
 require '../codigo/programa-cargar.php';
foreach ($programas_sql as $row):

?>

<div id="programas">


    <div class="programa">

      <div class="logo-programa">
        <?php if($row->logotipo != "logotipo-programa.png") {?>
      <img src="../logotipo_programa/<?php echo $row->logotipo; ?>">
      <?php }else{ ?>
        <img src="../imagenes/<?php echo $row->logotipo; ?>">
      <?php } ?>
    </div>
        <div class="informacion">

           <ul id="tit">

<li><h2>Programa:</h2></li>
<li><h3>Días ejecución:</h3></li>
<li><h6>Horario Mañana:</h6></li>
<li><h6>Horario Tarde:</h6></li>
<li><h6>Horario Noche:</h6></li>

</ul>

<ul id="def">
<?php echo $codigo=$row->id; ?>
<li><h2><?php echo $row->nom_programa; ?></h2></li>
<li><h3><?php echo $row->dias_realizo; ?> </h3></li>
<li><h6><?php  $row->h_inicio_M. " a ". $row->h_finalizacion_M; ?></h6></li>

<li><h6><?php  $row->h_inicio_T." a ".$row->h_finalizacion_T ;  ?></h6></li>

<li><h6><?php $row->h_inicio_N . " a " . $row->h_finalizacion_N;  ?></h6></li>

<li><h6><?php

if ($row->h_inicio_M==="" && $row->h_finalizacion_M==="") {
echo "-";
}elseif ($row->h_inicio_M!="" && $row->h_finalizacion_M==="") {
echo $row->h_inicio_M;
}elseif ($row->h_inicio_M==="" && $row->h_finalizacion_M!="") {
echo "a" . $row->h_finalizacion_M;
}else {
echo $row->h_inicio_M. " a ". $row->h_finalizacion_M;
}

 ?></h6></li>

<li><h6><?php

if ($row->h_inicio_T==="" && $row->h_finalizacion_T==="") {
echo "-";
}elseif ($row->h_inicio_T!="" && $row->h_finalizacion_T==="") {
echo $row->h_inicio_T;
}elseif ($row->h_inicio_T==="" && $row->h_finalizacion_T!="") {
echo "a" . $row->h_finalizacion_T;
}else {
echo $row->h_inicio_T. " a ". $row->h_finalizacion_T;
}

 ?>
</h6></li>

<li><h6>
  <?php

if ($row->h_inicio_N==="" && $row->h_finalizacion_N==="") {
echo "-";
}elseif ($row->h_inicio_N!="" && $row->h_finalizacion_N==="") {
echo $row->h_inicio_N;
}elseif ($row->h_inicio_N==="" && $row->h_finalizacion_N!="") {
echo "? a" . $row->h_finalizacion_N;
}else {
echo $row->h_inicio_N. " a ". $row->h_finalizacion_N;
}

 ?>
</h6></li>

</ul>

<ul id="tit-organiza">
<li><h5>Director:</h5></li>
<li><h5>Monitor:</h5></li>
</ul>

<ul id="def-organiza">
<li><h5><?php echo $row->director;  ?></h5></li>
<li><h5><?php echo $row->monitor1;  ?></h5></li>
</ul>

<ul>
  <li> <p id="alumnos-programa" class="alumnos-programa" title="Alumnos Activos"><i class="fas fa-users"></i>&nbsp;</p> </li>

  <li> <p id="alumnos-inactivos" class="alumnos-programa" title="Alumnos Inactivos"><i class="fas fa-user-slash"></i></p> </li>
</ul>

<ul>

<li> <p id="ver-programa" class="control-programa" onclick="ver_programa('<?php echo $codigo; ?>')" name="ver_programa"><i class="fas fa-eye"></i>&nbsp;Ver</p> </li>

  <li> <p id="editar-programa" class="control-programa" onclick="editar_programa(<?php echo $codigo; ?>)"><i class="fas fa-pen-alt"></i>&nbsp;Editar</p> </li>

  <li> <p id="eliminar-programa" class="control-programa" onclick="eliminar_programa('<?php echo $codigo; ?>')"><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</p> </li>

</ul>

</div>

</div>
</div>


<?php

endforeach;

 ?>
</div>


<div id="respuesta-consulta">

</div>


<p id="resultado">
  Registros encontrados:
  <?php

echo $num_filas;

 ?>
</p>

<p id="resultado-consulta-programa">

</p>

</fieldset>
</form>

</div>

</body>
</html>
