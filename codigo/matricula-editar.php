<?php

session_start();
$codigo_empleado=htmlentities(addslashes($_SESSION['codigo']));

require 'conexion_BD.php';

$dato=$_GET['cod'];

$datos=$dato;



$consultar_matricula_editar_sql="SELECT * FROM matricula WHERE nro_matricula=:nromat";
    $resultado_matricula_editar_sql=$conexion->prepare($consultar_matricula_editar_sql);
    $resultado_matricula_editar_sql->execute(array(":nromat"=>$datos));

    while($fila=$resultado_matricula_editar_sql->fetch(PDO::FETCH_ASSOC)){

$cod_matricula=$fila['nro_matricula'];
$nombres=$fila['nombres'];
$apellidos=$fila['apellidos'];
$sexo=$fila['sexo'];
$tipo_documento=$fila['tipo_documento'];
$num_documento=$fila['doc_identidad'];
$eps=$fila['eps'];
$f_nacimiento=$fila['fecha_nacimiento'];
$edad=$fila['edad'];
$pais=$fila['pais'];
$departamento=$fila['departamento'];
$ciudad=$fila['ciudad'];
$telefono=$fila['telefono'];
$celular=$fila['celular'];
$email=$fila['email'];
$dir_barrio_vereda=$fila['dir_barrio'];
$zona=$fila['zona'];
$institucion=$fila['institucion_educativa'];
$sede=$fila['sede'];
$grado=$fila['grado'];
$ingreso=$fila['anio_ingreso'];
$estado=$fila['estado'];
$nom_acudiente=$fila['nombres_acudiente'];
$apell_acudiente=$fila['apellidos_acudiente'];
$doc_acudiente=$fila['doc_identidad_acudiente'];
$parentesco=$fila['parentesco'];
$tel_acudiente=$fila['tel_acudiente'];
$cel_acudiente=$fila['cel_acudiente'];
$email_acudiente=$fila['email_acudiente'];
$sangre=$fila['tipo_sangre'];
$enfermedad=$fila['enfermedad'];
$tipo_enfermedad=$fila['tipo_enfermedad'];
$medicamento=$fila['medicamento'];
$tipo_medicamento=$fila['tipo_medicamento'];
$alergia=$fila['alergia'];
$tipo_alergia=$fila['tipo_alergia'];
$programa1=$fila['programa1'];
$nivel_pro1=$fila['nivel_pro1'];
$director1=$fila['director1'];
$instrumento1=$fila['instrumento1'];
$programa2=$fila['programa2'];
$nivel_pro2=$fila['nivel_pro2'];
$director2=$fila['director2'];
$instrumento2=$fila['instrumento2'];
$programa3=$fila['programa3'];
$nivel_pro3=$fila['nivel_pro3'];
$director3=$fila['director3'];
$instrumento3=$fila['instrumento3'];
$recaudo=$fila['recauda_cuota'];
$fotocargar=$fila['foto'];
$fot_docident=$fila['fot_docident'];
$fot_eps=$fila['fot_eps'];

$consultar_programa_ver_sql="SELECT * FROM programa WHERE id=:id";
    $resultado_programa_ver_sql1=$conexion->prepare($consultar_programa_ver_sql);
    $resultado_programa_ver_sql1->execute(array(":id"=>$programa1));

    $resultado_programa_ver_sql2=$conexion->prepare($consultar_programa_ver_sql);
    $resultado_programa_ver_sql2->execute(array(":id"=>$programa2));

    $resultado_programa_ver_sql3=$conexion->prepare($consultar_programa_ver_sql);
    $resultado_programa_ver_sql3->execute(array(":id"=>$programa3));

    while($fila=$resultado_programa_ver_sql1->fetch(PDO::FETCH_ASSOC)){
$result_id1=$fila['id'];
$result_programa1=$fila['nom_programa'];
$result_director1=$fila['director'];
    }

    while($fila=$resultado_programa_ver_sql2->fetch(PDO::FETCH_ASSOC)){
    $result_id2=$fila['id'];
    $result_programa2=$fila['nom_programa'];
    $result_director2=$fila['director'];
    }

    while($fila=$resultado_programa_ver_sql3->fetch(PDO::FETCH_ASSOC)){
$result_id3=$fila['id'];
$result_programa3=$fila['nom_programa'];
$result_director3=$fila['director'];
    }



    }
    if ($programa1==="0") {
       $result_id1="0";
     $result_programa1="Seleccionar Programa 1";
     $director1="-";
     $result_director2="-";
    }


if ($programa2==="02") {
   $result_id2="02";
 $result_programa2="Seleccionar Programa 2";
     $director2="-";
     $result_director2="-";
}

if ($programa3==="03") {
   $result_id3="03";
 $result_programa3="Seleccionar Programa 3";
     $result_director3="-";
}


if ($edad<18) {
$fslyenda='menor edad';
}else {
$fslyenda='mayor edad';
}

date_default_timezone_set('America/Bogota');
$anio_actual=date('Y');

include '../formulario/frmmatricula-editar.php';

 ?>
