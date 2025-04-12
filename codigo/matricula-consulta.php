<?php
require 'matricula-cargar.php';
$respuesta="";
$busqueda=$_POST["txtconsulta-matricula"];
$consultar_matricula_sql="SELECT * FROM matricula WHERE nombres LIKE :matricula  OR apellidos LIKE :matricula OR nro_matricula LIKE :matricula OR doc_identidad LIKE :matricula";

		$resultado=$conexion->prepare($consultar_matricula_sql);

		$resultado->execute(array(":matricula"=>'%'.$busqueda.'%'));
$allrows=	$resultado->fetchAll(PDO::FETCH_OBJ);

$rpta_num_filas2=$resultado->rowCount();


foreach ($allrows as $row):

$respuesta=$row->nro_matricula;

?>

<ul id="matriculas" hidden>

</ul>


      <div id="matriculas-consultas">

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


}} ?></h6>
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

echo $nom_programa3=$row3->nom_programa;
}

}

 ?>


</h6>
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

				<li> <p id="ver-matricula"  onclick="ver_matricula('<?php echo $codigo=$row->nro_matricula; ?>')" name="ver_matricula"><i class="fas fa-eye"></i>&nbsp;Ver</p> </li>

				  <li> <p id="editar-matricula"  onclick="editar_matricula('<?php echo $codigo=$row->nro_matricula; ?>')"><i class="fas fa-pen-alt"></i>&nbsp;Editar</p> </li>

				  <li> <p id="eliminar-matricula" onclick="eliminar_matricula('<?php echo $codigo=$row->nro_matricula; ?>')"><i class="fas fa-trash-alt"></i>&nbsp;Eliminar</p> </li>
				</ul>

</div>

<?php


endforeach;


if ($respuesta==="") {
echo "<center style='margin-top: 2%; margin-bottom: 2%;'>No se encontrarón datos relacionados.</center>";
}

?>


<p id="resultado-consulta-matricula">
  Registros encontrados:
  <?php

echo $rpta_num_filas2;


 ?>
</p>
