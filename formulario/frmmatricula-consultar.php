<?php
require '../codigo/conexion_BD.php';
//require '../codigo/matricula-cargar.php';
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">
</head>

<link href="../estilos/frmmatricula-consultar.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../script/consultar.js"></script><!--carga el js para traer formularios-->

<script type="text/javascript" src="../script/all(iconos-java).js"></script>

<script type="text/javascript" src="../script/matricula-editar.js"></script>

<script type="text/javascript" src="../script/matricula-controles.js"></script>

<script type="text/javascript" src="../script/editar.js"></script>



</head>

<body>

  <div id="cargar-formulario-matricula">

<form id="fmmatricula-consultar">
<fieldset>
<legend><h1>CONSULTAR ALUMNO</h1></legend>

<ul id="consulta-matricula">
  <li>
    <input type="text" name="txtconsulta-matricula" value="" id="txtconsultar-matricula">
    <button type="button" name="btnconsulta-matricula" id="btnconsulta-matricula">Ver</button>
  </li>
</ul>

<div id="contenido-resultado">



<?php

$matricula_sql=$conexion->query("SELECT * FROM matricula")->fetchAll(PDO::FETCH_OBJ); /*array de objetos*/
 require '../codigo/matricula-cargar.php';
foreach ($matricula_sql as $row):


?>

<div id="matriculas">

  <div class="informacion">
   <ul id="tit">
<li><span>Nombre:</span></li>
<li><span>Apellidos:</span></li>
<li><span>Documento:</span></li>
<li><span>Código:</span></li>
<li><span>Programa1:</span></li>
<li><span>Programa2:</span></li>
<li><span>Programa3:</span></li>
<li><span>RH:</span></li>

</ul>

<ul id="def">
    <li>
    <h2><?php echo  $row->nombres; ?>
    </li>

<li>

  <h2><?php echo  $row->apellidos; ?></h2>
</li>

        <li>
          <h3><?php echo $row->tipo_documento . " " . $row->doc_identidad; ?> </h3>
        </li>

        <li>
          <h3><?php echo $row->nro_matricula;?></h3>
        </li>

        <li>
          <h6><?php $num_programa1=$row->programa1;
          if ($num_programa1==="") {
            echo $num_programa1="-";

          }else {
              $consultar_nom_programa1_sql="SELECT * FROM programa WHERE id=:nropro1";

$resultado=$conexion->prepare($consultar_nom_programa1_sql);

		$resultado->execute(array(":nropro1"=>$num_programa1));
$allrows=$resultado->fetchAll(PDO::FETCH_OBJ);



foreach ($allrows as $row1){

echo $nom_programa1=$row1->nom_programa;


} }?></h6>
        </li>

        <li>
          <h6><?php $num_programa2=$row->programa2;
          if ($num_programa2==="02") {
            echo $num_programa2="-";

          }else {
              $consultar_nom_programa2_sql="SELECT * FROM programa WHERE id=:nropro2";

$resultado2=$conexion->prepare($consultar_nom_programa2_sql);

		$resultado2->execute(array(":nropro2"=>$num_programa2));
$allrows2=$resultado2->fetchAll(PDO::FETCH_OBJ);



foreach ($allrows2 as $row2){

echo $nom_programa2=$row2->nom_programa;


}
}

              ?></h6>
        </li>

        <li>
          <h6><?php  $num_programa3=$row->programa3;
          if ($num_programa3==="03") {
          	echo $num_programa3="-";

          }else {
              $consultar_nom_programa3_sql="SELECT * FROM programa WHERE id=:nropro3";

$resultado3=$conexion->prepare($consultar_nom_programa3_sql);

		$resultado3->execute(array(":nropro3"=>$num_programa3));
$allrows3=$resultado3->fetchAll(PDO::FETCH_OBJ);



foreach ($allrows3 as $row3){
$nom_programa3=$row3->nom_programa;

  echo $nom_programa3=$row3->nom_programa;



}} ?> </h6>
        </li>

        <li>
          <h3><?php echo $row->tipo_sangre;?></h3>
        </li>

          </ul>

        </div>

        <div class="foto-matricula">
        <?php if($row->foto !="cortina-symphony-alumno.jpg") {?>
      <img src="../fotos_alumno/<?php echo $row->foto; ?>">
      <?php }else{ ?>
        <img src="../imagenes/<?php echo $row->foto; ?>">
      <?php } ?>
    </div>


  <ul class="control-matricula">

<li> <p id="ver-matricula" onclick="ver_matricula('<?php echo $codigo=$row->nro_matricula; ?>')" name="ver_matricula"><i class="fas fa-eye"></i>&nbsp;Ver</p> </li>

  <li> <p id="editar-matricula"  onclick="editar_matricula('<?php echo $codigo=$row->nro_matricula; ?>')"><i class="fas fa-pen-alt"></i>&nbsp;Editar</p> </li>

  <li> <p id="eliminar-matricula" onclick="eliminar_matricula('<?php echo $codigo=$row->nro_matricula; ?>')"><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</p> </li>

</ul>


</div>

<?php

endforeach



?>
</div>

<div id="respuesta-consulta" hidden>

</div>

<p id="resultado">
  Registros encontrados:
  <?php

echo $num_filas;

 ?>
</p>

<p id="resultado-consulta-matricula">

</p>

</fieldset>
</form>
</div>


</body>
</html>
