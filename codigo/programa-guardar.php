<?php
//codigo para traer el documento de usuario
session_start();
$codigo_empleado=htmlentities(addslashes($_SESSION['codigo']));


$programa=htmlentities(addslashes($_POST['txtnomprograma']));
$realizacion=htmlentities(addslashes($_POST['txtdiarealizacion']));
$repertorio=htmlentities(addslashes($_POST['slrepertorio']));

$niveles=htmlentities(addslashes($_POST['slniveles']));

$hinicio_M=htmlentities(addslashes($_POST['slhorainicio_M']));
$hfinal_M=htmlentities(addslashes($_POST['slhorafinalizacion_M']));
$hinicio_T=htmlentities(addslashes($_POST['slhorainicio_T']));
$hfinal_T=htmlentities(addslashes($_POST['slhorafinalizacion_T']));
$hinicio_N=htmlentities(addslashes($_POST['slhorainicio_N']));
$hfinal_N=htmlentities(addslashes($_POST['slhorafinalizacion_N']));
$descripcion=htmlentities(addslashes($_POST['txtdescprograma']));
$director=htmlentities(addslashes($_POST['sldirector']));
$monitor1=htmlentities(addslashes($_POST['slmonitor1']));
$cargo1=htmlentities(addslashes($_POST['txtcargo1']));
$monitor2=htmlentities(addslashes($_POST['slmonitor2']));
$cargo2=htmlentities(addslashes($_POST['txtcargo2']));
$monitor3=htmlentities(addslashes($_POST['slmonitor3']));
$cargo3=htmlentities(addslashes($_POST['txtcargo3']));
$monitor4=htmlentities(addslashes($_POST['slmonitor4']));
$cargo4=htmlentities(addslashes($_POST['txtcargo4']));
$monitor5=htmlentities(addslashes($_POST['slmonitor5']));
$cargo5=htmlentities(addslashes($_POST['txtcargo5']));

date_default_timezone_set('America/Bogota');//carga fecha y hora
$fecha=date('Y-m-d H:i:s');

$nomusuario="";

//Codigo para traer el usuario

require '../codigo/programa-cargar.php';

$codprograma="";
while($row=$codigo_sql->fetch(PDO::FETCH_ASSOC)){
$codprograma=$row['id']+1;

}


$usuario_sql="SELECT nombres, apellidos FROM empleado WHERE cod_empleado=:nromat";
		$resultado=$conexion->prepare($usuario_sql);
		$resultado->execute(array(":nromat"=>$codigo_empleado));

		while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
$nomusuario=$fila["nombres"] . " " . $fila["apellidos"]; //carga usuario

		}

		if ($realizacion==="") {
		$realizacion="-";
		}

	if($programa==null){
		echo "'Nombre del programa' es un campo obligatorio, debe tener registro.";
die();
		}elseif($director=="Seleccionar Director"){
		echo "'Director' es un campo obligatorio, debe tener registro.";
die();
		}elseif ($monitor1=="Seleccionar Monitor"){
		echo "'Monitor 1' es un campo obligatorio, debe tener registro.";
die();
		}elseif($cargo1==null){
		echo "'Cargo que desempeña' del monitor 1 es un campo obligatorio, debe tener registro.";
die();
				}else{




//logotipo

$logotipo= basename($_FILES['fllogotipo']['name']);

$logotipo='programa_' . $codprograma . '.png';

$tipo_logotipo=$_FILES['fllogotipo']['type'];

$tamagno_logotipo=$_FILES['fllogotipo']['size'];

if ($tipo_logotipo==null) {
$logotipo='logotipo-programa.png';

}else{

if ($tipo_logotipo=='image/jpeg' || $tipo_logotipo=='image/jpg' || $tipo_logotipo=='image/png' || $tipo_logotipo=='image/gif'){

$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/www/symphony/logotipo_programa/';

move_uploaded_file($_FILES['fllogotipo']['tmp_name'],$carpeta_destino.$logotipo);
}else{

  echo "Error de formato, asegúrese que el logotipo tenga formato 'jpeg', 'jpg', 'png' ó 'gif'";
}}

$guardar_programa="INSERT INTO programa(nom_programa,
	descripcion,
	niveles,
	dias_realizo,
	h_inicio_M,
	h_finalizacion_M,
	h_inicio_T,
	h_finalizacion_T,
	h_inicio_N,
	h_finalizacion_N,
	director,
	monitor1,
	cargo1,
	monitor2,
	cargo2,
	monitor3,
	cargo3,
	monitor4,
	cargo4,
	monitor5,
	cargo5,
	repertorio,
	logotipo,
usuario_elaboro,
usuario_actualizo,
	f_registro,
	f_actualizacion)VALUES(:pro,
		:des,
		:niv,
		:rea,
		:ini_m,
		:fin_m,
		:ini_t,
		:fin_t,
		:ini_n,
		:fin_n,
		:dir,
		:mon1,
		:carg1,
		:mon2,
		:carg2,
		:mon3,
		:carg3,
		:mon4,
		:carg4,
		:mon5,
		:carg5,
		:rep,
		:logi,
		:usue,
		:usua,
		:reg,
		:act)";

$resultado=$conexion->prepare($guardar_programa);

$resultado->execute(array(":pro"=>$programa,
":des"=>$descripcion,
":niv"=>$niveles,
":rea"=>$realizacion,
":ini_m"=>$hinicio_M,
":fin_m"=>$hfinal_M,
":ini_t"=>$hinicio_T,
":fin_t"=>$hfinal_T,
":ini_n"=>$hinicio_N,
":fin_n"=>$hfinal_N,
":dir"=>$director,
":mon1"=>$monitor1,
":carg1"=>$cargo1,
":mon2"=>$monitor2,
":carg2"=>$cargo2,
":mon3"=>$monitor3,
":carg3"=>$cargo3,
":mon4"=>$monitor4,
":carg4"=>$cargo4,
":mon5"=>$monitor5,
":carg5"=>$cargo5,
":rep"=>$repertorio,
":logi"=>$logotipo,
":usue"=>$nomusuario,
":usua"=>$nomusuario,
":reg"=>$fecha,
":act"=>$fecha));

echo "El Programa se ha almacenado satisfactoriamente.";

	}


?>
