<?php

$dato=$_GET['cod'];



session_start();
$codigo_programa=htmlentities(addslashes($_SESSION['codigo']));

require "conexion_BD.php";

$dato=$_GET['cod'];

$datos=$dato;

$consultar_programa_sql="SELECT * FROM programa WHERE id=:id";
    $resultado_programa_sql=$conexion->prepare($consultar_programa_sql);

    $resultado_programa_sql->execute(array(":id"=>$datos));

    while($fila=$resultado_programa_sql->fetch(PDO::FETCH_ASSOC)){
$cod_programa=$fila["id"];
$nom_programa=$fila["nom_programa"]; //carga el programa
$descripcion=$fila["descripcion"];
$niveles=$fila["niveles"];
$realizacion=$fila["dias_realizo"];
$hinicio_M=$fila["h_inicio_M"];
$hfinal_M=$fila["h_finalizacion_M"];
$hinicio_T=$fila["h_inicio_T"];
$hfinal_T=$fila["h_finalizacion_T"];
$hinicio_N=$fila["h_inicio_N"];
$hfinal_N=$fila["h_finalizacion_N"];
$director=$fila["director"];
$monitor1=$fila["monitor1"];
$cargo1=$fila["cargo1"];
$monitor2=$fila["monitor2"];
$cargo2=$fila["cargo2"];
$monitor3=$fila["monitor3"];
$cargo3=$fila["cargo3"];
$monitor4=$fila["monitor4"];
$cargo4=$fila["cargo4"];
$monitor5=$fila["monitor5"];
$cargo5=$fila["cargo5"];
$repertorio=$fila["repertorio"];
$logotipo=$fila["logotipo"];
$nomusuario=$fila["usuario_elaboro"];
$nomusuario_act=$fila["usuario_actualizo"];
$fecha=$fila["f_registro"];
$f_registro=$fila["f_actualizacion"];

    }

include '../formulario/frmprograma-editar.php';

 ?>
