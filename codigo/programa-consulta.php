<?php
require 'conexion_BD.php';
$respuesta="";
$busqueda=$_POST["txtconsultar-programa"];
$consultar_programa_sql="SELECT * FROM programa WHERE nom_programa LIKE :programa";
		$resultado=$conexion->prepare($consultar_programa_sql);
		$resultado->execute(array(":programa"=>'%'.$busqueda.'%'));

$allrows=	$resultado->fetchAll(PDO::FETCH_OBJ);

$rpta_num_filas=$resultado->rowCount();

		foreach ($allrows as $row):
$respuesta=$row->id;



			?>

<ul id="programas">

</ul>


      <div id="programas-consultas">



          <div class="programa-consulta">
            <h2 hidden>PROGRAMA</h2>

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
				<?php $codigo=$row->id; ?>
				<li><h2><?php echo $row->nom_programa; ?></h2></li>
				<li><h3><?php echo $row->dias_realizo; ?> </h3></li>
				<li><h6><?php $row->h_inicio_M. " a ". $row->h_finalizacion_M; ?></h6></li>

				<li><h6><?php $row->h_inicio_T." a ".$row->h_finalizacion_T ;  ?></h6></li>

				<li><h6><?php $row->h_inicio_N . " a " . $row->h_finalizacion_N;  ?></h6></li>


		  <li><h6><?php

			if ($row->h_inicio_M==="" && $row->h_finalizacion_M==="") {
			echo "-";
			}elseif ($row->h_inicio_M!="" && $row->h_finalizacion_M==="") {
			echo $row->h_inicio_M;
			}elseif ($row->h_inicio_M==="" && $row->h_finalizacion_M!="") {
			echo "? a" . $row->h_finalizacion_M;
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
			echo "? a" . $row->h_finalizacion_T;
			}else {
			echo $row->h_inicio_T. " a ". $row->h_finalizacion_T;
			}

			 ?></h6></li>

			<li><h6><?php

			if ($row->h_inicio_N==="" && $row->h_finalizacion_N==="") {
			echo "-";
			}elseif ($row->h_inicio_N!="" && $row->h_finalizacion_N==="") {
			echo $row->h_inicio_N;
			}elseif ($row->h_inicio_N==="" && $row->h_finalizacion_N!="") {
			echo "? a" . $row->h_finalizacion_N;
			}else {
			echo $row->h_inicio_N. " a ". $row->h_finalizacion_N;
			}

			 ?></h6>

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




if ($respuesta==="") {
echo "<center style='margin-top: 2%; margin-bottom: 2%;'>El programa no existe.</center>";
}

?>


<p id="resultado-consulta-programa">
  Registros encontrados:
  <?php

echo $rpta_num_filas;


 ?>
</p>
