<?php

$nombre="";
$apellido="";
$foto="";
$codigo_empleado="";

$codigo="";
$nrodoc="";
$usuario="";


			require 'conexion_BD.php';

			$consulta="SELECT cod_empleado, nombres, apellidos, doc_identidad, pin, privilegio_admin, foto FROM empleado WHERE email=:correo";
		$resultado=$conexion->prepare($consulta);

		$resultado->execute(array(":correo"=>$correo));
		$registro=$resultado->rowCount();//solo cuenta si  hay registos o no hay

		while($filas=$resultado->fetch(PDO::FETCH_ASSOC)){//muestra valores consultados en la base de datos
       $codigo_empleado=$filas['cod_empleado'];
	 $nombre=$filas['nombres'];
	 $apellido=$filas['apellidos'];
  	 $nrodoc=$filas['doc_identidad'];
	 $foto=$filas['foto'];

		}

?>
