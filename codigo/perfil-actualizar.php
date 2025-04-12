<?php
//el administrador del sistema actualiza los privilegios o estado del monitor.
session_start();
$codigo_empleado=$_SESSION["codigo"];
require 'perfil-cargar.php';

$codigo=htmlentities(addslashes($_POST['txtcodempleado']));

$nombres=htmlentities(addslashes($_POST['txtnomempleado']));

$apellidos=htmlentities(addslashes($_POST['txtapellempleado']));

$sexo=htmlentities(addslashes($_POST['slsexo']));

$tipodocumento=htmlentities(addslashes($_POST['sltipodocumento']));

$doc_identidad=htmlentities(addslashes($_POST['txtnrodocumento']));

$eps=htmlentities(addslashes($_POST['txteps']));

$pensiones=htmlentities(addslashes($_POST['txtpension']));

$arl=htmlentities(addslashes($_POST['txtarl']));

$edad=htmlentities(addslashes($_POST['txtedad']));

$f_nacimiento=htmlentities(addslashes($_POST['dtfechanacimiento']));

$pais=htmlentities(addslashes($_POST['txtpais']));

$departamento=htmlentities(addslashes($_POST['txtdepartamento']));

$ciudad=htmlentities(addslashes($_POST['txtciudad']));

$telefono=htmlentities(addslashes($_POST['txttelfijo']));

$celular=htmlentities(addslashes($_POST['txtcelular']));

$email=htmlentities(addslashes($_POST['txtemail']));

$dir_barrio=htmlentities(addslashes($_POST['txtbarrver']));

$estudio=htmlentities(addslashes($_POST['rbformacion']));

$titulo=htmlentities(addslashes($_POST['txttitulo']));

$universidad=htmlentities(addslashes($_POST['txtinstuniversidad']));

$cargo=htmlentities(addslashes($_POST['txtcargo']));

$anioinicio=htmlentities(addslashes($_POST['slañoinicio']));

$anioretiro=htmlentities(addslashes($_POST['slañoretiro']));

$tipocontrato=htmlentities(addslashes($_POST['txttipocontrato']));

$tiempocontrato=htmlentities(addslashes($_POST['txttiempocontrato']));

$salario=htmlentities(addslashes($_POST['txtsalario']));

$contrasenia_actual=htmlentities(addslashes($_POST['txtcontrasenia']));

$pin=htmlentities(addslashes($_POST['txtclave']));

$repin=htmlentities(addslashes($_POST['txtrepclave']));

$fotcedula="";

$fotlibretamilitar="";

$foteps="";

$fotpensiones="";

$fotarl="";

$fotrut="";

$fotcontraloria="";

$fotprocuraduria="";

$fotantecedentes="";

$fotctabancaria="";

$fothdvida="";

$fecharegistro="";

$fechaactualizacion="";

$compare="";

$nombres_MAYUSCULA=strtoupper($nombres);
$apellidos_MAYUSUCLA=strtoupper($apellidos);


date_default_timezone_set('America/Bogota');//carga fecha y hora
$fecha=date('d/m/y/h:i a');

$fechaactualizacion=$fecha;

$fecha_nacimiento= date("d-m-Y", strtotime($f_nacimiento));

if($nombres===null || $nombres==="NUEVO USUARIO"){
	echo "'Nombres' es un campo obligatorio, debe tener registro ó poner nombre autentico.";
die();
}

if($apellidos==null){
	echo "'Apelllidos' es un campo obligatorio, debe tener registro.";
die();
}

if($sexo==null){
	echo "'Sexo' es un campo obligatorio, debe tener registro.";
die();
}

if($tipodocumento==null){
	echo "'Tipo Documento' es un campo obligatorio, debe tener registro.";
die();
}

if($doc_identidad==null){
	echo "'Nro. Documento' es un campo obligatorio, debe tener registro.";
die();
}

if($f_nacimiento==null){
	echo "'Fecha de nacimiento' es un campo obligatorio, debe tener registro.";
die();
}

if($email==null){
	echo "'Email' es un campo obligatorio, debe tener registro.";
die();
}

if($cargo==null){
	echo "'Cargo a Desempeñar' es un campo obligatorio, debe tener registro.";
die();
}


if($tipocontrato==null){
	echo "'Tipo de Contrato' es un campo obligatorio, debe tener registro.";
die();
}

if($tiempocontrato==null){
	echo "'Tiempo de Contrato' es un campo obligatorio, debe tener registro.";
die();
}

if($salario==null){
	echo "'Salario' es un campo obligatorio, debe tener registro.";
die();
}

if($contrasenia_actual=="" && $pin=="" && $repin==""){
$clave=$contrasenia;

}

if($contrasenia_actual!="" && $pin=="" && $repin==""){

echo "Los campos 'Contraseña' y 'Repita la Contraseña' no deben estar en blanco.";
die();
}

if($contrasenia_actual==""&& $pin!=$repin){

echo "la contraseña no coincide.";
die();
}

if($contrasenia_actual!="" && $pin!=$repin){

echo "la contraseña no coincide.";
die();
}

if($contrasenia_actual=="" && $pin===$repin){
if(empty($pin) && empty($repin)){
$clave=$contrasenia;
}else{
	echo"Digite la Contraseña Actual.";
die();
}
}



if($contrasenia_actual!="" && $pin===$repin){
$compare=password_verify($contrasenia_actual, $contrasenia);

if($compare===false) {

	echo "La contraseña actual es incorrecta.";
die();
}else{

$clave=password_hash($pin, PASSWORD_DEFAULT);
}

}


if ($estudio===null) {
	$estudio=" ";
}

//anexo foto

$foto= basename($_FILES['flfoto']['name']);

$foto='foto_' . $codigo . '.png';

$tipo_foto=$_FILES['flfoto']['type'];

$tamagno_foto=$_FILES['flfoto']['size'];

if($tipo_foto==null && $fotocargar=='cortina-symphony.jpg'){
	$foto='cortina-symphony.jpg';
}elseif ($tipo_foto==null && $fotocargar!='cortina-symphony.jpg') {
$foto='foto_' . $codigo . '.png';

}elseif ($tipo_foto!=null && $fotocargar=='cortina-symphony.jpg') {

	$fichero_foto="../fotos_empleado/$fotocargar";
array_map('unlink', glob($fichero_foto));

	$foto='foto_' . $codigo . '.png';
	if ($tipo_foto=='image/jpeg' || $tipo_foto=='image/jpg' || $tipo_foto=='image/png' || $tipo_foto=='image/gif'){

	$carpeta_destino= '../fotos_empleado/';

	move_uploaded_file($_FILES['flfoto']['tmp_name'],$carpeta_destino.$foto);
	}else{

	  echo "Error de formato, asegúrese que la foto tenga formato 'jpeg', 'jpg', 'png' ó 'gif'";
die();
	}

}elseif ($tipo_foto!=null && $fotocargar!='cortina-symphony.jpg') {

	$fichero_foto="../fotos_empleado/$fotocargar";
array_map('unlink', glob($fichero_foto));

	$foto='foto_' . $codigo . '.png';
	if ($tipo_foto=='image/jpeg' || $tipo_foto=='image/jpg' || $tipo_foto=='image/png' || $tipo_foto=='image/gif'){

	$carpeta_destino= '../fotos_empleado/';

	move_uploaded_file($_FILES['flfoto']['tmp_name'],$carpeta_destino.$foto);
	}else{

	  echo "Error de formato, asegúrese que la foto tenga formato 'jpeg', 'jpg', 'png' ó 'gif'";
die();

	}

}



//

//anexo cedula

$ext_archivo = pathinfo($fotcedula_cargar, PATHINFO_EXTENSION);

$fotcedula= basename($_FILES['flfotcedula']['name']);

$ext = pathinfo($fotcedula, PATHINFO_EXTENSION);

$fotcedula='cedula_' . $codigo . "." . $ext;

$tipo_fotcedula=$_FILES['flfotcedula']['type'];

$tamagno_fotcedula=$_FILES['flfotcedula']['size'];

if($tipo_fotcedula==null && $fotcedula_cargar=='sin anexar'){
	$fotcedula='sin anexar';
}elseif ($tipo_fotcedula==null && $fotcedula_cargar!='sin anexar') {
$fotcedula='fot_cedula_' . $codigo . '.' . $ext_archivo;

}elseif ($tipo_fotcedula!=null && $fotcedula_cargar=='sin anexar') {
	$fotcedula='fot_cedula_' . $codigo . '.' . $ext;
	if ($tipo_fotcedula=='image/jpeg' || $tipo_fotcedula=='image/jpg' || $tipo_fotcedula=='image/png' || $tipo_fotcedula=='image/gif' ||
	$tipo_fotcedula=='application/pdf' ||		$tipo_fotcedula=='application/msword' ||		$tipo_fotcedula=='application/vnd.ms-excel' || $tipo_fotcedula=='application/vnd.ms-powerpoint' || $tipo_fotcedula=='application/vnd.ms-publisher' || $tipo_fotcedula=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotcedula=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotcedula=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_cedula= '../anexos_empleado/';

	move_uploaded_file($_FILES['flfotcedula']['tmp_name'],$carpeta_destino_cedula.$fotcedula);
	}else{

	  echo "Error de formato, asegúrese que la Fotocopia de la cedula tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext!=$ext_archivo) {
		$fichero_cedula="../anexos_empleado/fot_cedula_$codigo.$ext_archivo";
	array_map('unlink', glob($fichero_cedula));


	}

}elseif ($tipo_fotcedula!=null && $fotcedula_cargar!='sin anexar') {
	$fotcedula='fot_cedula_' . $codigo . '.' . $ext;
	if ($tipo_fotcedula=='image/jpeg' || $tipo_fotcedula=='image/jpg' || $tipo_fotcedula=='image/png' || $tipo_fotcedula=='image/gif' ||
	$tipo_fotcedula=='application/pdf' ||		$tipo_fotcedula=='application/msword' ||		$tipo_fotcedula=='application/vnd.ms-excel'||		$tipo_fotcedula=='application/vnd.ms-powerpoint' || $tipo_fotcedula=='application/vnd.ms-publisher' || $tipo_fotcedula=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotcedula=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotcedula=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_cedula= '../anexos_empleado/';

	move_uploaded_file($_FILES['flfotcedula']['tmp_name'],$carpeta_destino_cedula.$fotcedula);
	}else{

	  echo "Error de formato, asegúrese que la Fotocopia de la cedula tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext!=$ext_archivo) {
		$fichero_cedula="../anexos_empleado/fot_cedula_$codigo.$ext_archivo";
	array_map('unlink', glob($fichero_cedula));


	}

}



//

//anexo EPS

$ext_archivo_EPS = pathinfo($foteps_cargar, PATHINFO_EXTENSION);

$fotEPS= basename($_FILES['flEPS']['name']);

$ext_EPS = pathinfo($fotEPS, PATHINFO_EXTENSION);

$fotEPS='fot_EPS_' . $codigo . "." . $ext_EPS;

$tipo_fotEPS=$_FILES['flEPS']['type'];

$tamagno_fotEPS=$_FILES['flEPS']['size'];

if($tipo_fotEPS==null && $foteps_cargar=='sin anexar'){
	$fotEPS='sin anexar';
}elseif ($tipo_fotEPS==null && $foteps_cargar!='sin anexar') {
$fotEPS='fot_EPS_' . $codigo . '.' . $ext_archivo_EPS;

}elseif ($tipo_fotEPS!=null && $foteps_cargar=='sin anexar') {
	$fotEPS='fot_EPS_' . $codigo . '.' . $ext_EPS;
	if ($tipo_fotEPS=='image/jpeg' || $tipo_fotEPS=='image/jpg' || $tipo_fotEPS=='image/png' || $tipo_fotEPS=='image/gif' ||
	$tipo_fotEPS=='application/pdf' ||		$tipo_fotEPS=='application/msword' ||		$tipo_fotEPS=='application/vnd.ms-excel' || $tipo_fotEPS=='application/vnd.ms-powerpoint' || $tipo_fotEPS=='application/vnd.ms-publisher' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_EPS= '../anexos_empleado/';

	move_uploaded_file($_FILES['flEPS']['tmp_name'],$carpeta_destino_EPS.$fotEPS);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la EPS tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_EPS!=$ext_archivo_EPS) {
		$fichero_EPS="../anexos_empleado/fot_EPS_$codigo.$ext_archivo_EPS";
	array_map('unlink', glob($fichero_EPS));

	}

}elseif ($tipo_fotEPS!=null && $foteps_cargar!='sin anexar') {
	$fotEPS='fot_EPS_' . $codigo . '.' . $ext_EPS;
	if ($tipo_fotEPS=='image/jpeg' || $tipo_fotEPS=='image/jpg' || $tipo_fotEPS=='image/png' || $tipo_fotEPS=='image/gif' ||
	$tipo_fotEPS=='application/pdf' ||		$tipo_fotEPS=='application/msword' ||		$tipo_fotEPS=='application/vnd.ms-excel'||		$tipo_fotEPS=='application/vnd.ms-powerpoint' || $tipo_fotEPS=='application/vnd.ms-publisher' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_EPS= '../anexos_empleado/';

	move_uploaded_file($_FILES['flEPS']['tmp_name'],$carpeta_destino_EPS.$fotEPS);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la EPS tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_EPS!=$ext_archivo_EPS) {
		$fichero_EPS="../anexos_empleado/fot_EPS_$codigo.$ext_archivo_EPS";
	array_map('unlink', glob($fichero_EPS));

	}

}


//

//anexo pension

$ext_archivo_pension = pathinfo($fotpensiones_cargar, PATHINFO_EXTENSION);

$fotpension= basename($_FILES['flpension']['name']);

$ext_pension = pathinfo($fotpension, PATHINFO_EXTENSION);

$fotpension='fot_pension_' . $codigo . "." . $ext_pension;

$tipo_fotpension=$_FILES['flpension']['type'];

$tamagno_fotpension=$_FILES['flpension']['size'];

if($tipo_fotpension==null && $fotpensiones_cargar=='sin anexar'){
	$fotpension='sin anexar';
}elseif ($tipo_fotpension==null && $fotpensiones_cargar!='sin anexar') {
$fotpension='fot_pension_' . $codigo . '.' . $ext_archivo_pension;

}elseif ($tipo_fotpension!=null && $fotpensiones_cargar=='sin anexar') {
	$fotpension='fot_pension_' . $codigo . '.' . $ext_pension;
	if ($tipo_fotpension=='image/jpeg' || $tipo_fotpension=='image/jpg' || $tipo_fotpension=='image/png' || $tipo_fotpension=='image/gif' ||
	$tipo_fotpension=='application/pdf' ||		$tipo_fotpension=='application/msword' ||		$tipo_fotpension=='application/vnd.ms-excel' || $tipo_fotpension=='application/vnd.ms-powerpoint' || $tipo_fotpension=='application/vnd.ms-publisher' || $tipo_fotpension=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotpension=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotpension=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_pension= '../anexos_empleado/';

	move_uploaded_file($_FILES['flpension']['tmp_name'],$carpeta_destino_pension.$fotpension);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la pension tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_pension!=$ext_archivo_pension) {
		$fichero_pension="../anexos_empleado/fot_pension_$codigo.$ext_archivo_pension";
	array_map('unlink', glob($fichero_pension));

	}

}elseif ($tipo_fotpension!=null && $fotpensiones_cargar!='sin anexar') {
	$fotpension='fot_pension_' . $codigo . '.' . $ext_pension;
	if ($tipo_fotpension=='image/jpeg' || $tipo_fotpension=='image/jpg' || $tipo_fotpension=='image/png' || $tipo_fotpension=='image/gif' ||
	$tipo_fotpension=='application/pdf' ||		$tipo_fotpension=='application/msword' ||		$tipo_fotpension=='application/vnd.ms-excel'||		$tipo_fotpension=='application/vnd.ms-powerpoint' || $tipo_fotpension=='application/vnd.ms-publisher' || $tipo_fotpension=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotpension=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotpension=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_pension= '../anexos_empleado/';

	move_uploaded_file($_FILES['flpension']['tmp_name'],$carpeta_destino_pension.$fotpension);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la pension tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_pension!=$ext_archivo_pension) {
		$fichero_pension="../anexos_empleado/fot_pension_$codigo.$ext_archivo_pension";
	array_map('unlink', glob($fichero_pension));

	}
}

//

//anexo ARL

$ext_archivo_ARL = pathinfo($fotARL_cargar, PATHINFO_EXTENSION);

$fotARL= basename($_FILES['flARL']['name']);

$ext_ARL = pathinfo($fotARL, PATHINFO_EXTENSION);

$fotARL='fot_ARL_' . $codigo . "." . $ext_ARL;

$tipo_fotARL=$_FILES['flARL']['type'];

$tamagno_fotARL=$_FILES['flARL']['size'];

if($tipo_fotARL==null && $fotARL_cargar=='sin anexar'){
	$fotARL='sin anexar';
}elseif ($tipo_fotARL==null && $fotARL_cargar!='sin anexar') {
$fotARL='fot_ARL_' . $codigo . '.' . $ext_archivo_ARL;

}elseif ($tipo_fotARL!=null && $fotARL_cargar=='sin anexar') {
	$fotARL='fot_ARL_' . $codigo . '.' . $ext_ARL;
	if ($tipo_fotARL=='image/jpeg' || $tipo_fotARL=='image/jpg' || $tipo_fotARL=='image/png' || $tipo_fotARL=='image/gif' ||
	$tipo_fotARL=='application/pdf' ||		$tipo_fotARL=='application/msword' ||		$tipo_fotARL=='application/vnd.ms-excel' || $tipo_fotARL=='application/vnd.ms-powerpoint' || $tipo_fotARL=='application/vnd.ms-publisher' || $tipo_fotARL=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotARL=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotARL=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_ARL= '../anexos_empleado/';

	move_uploaded_file($_FILES['flARL']['tmp_name'],$carpeta_destino_ARL.$fotARL);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la ARL tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_ARL!=$ext_archivo_ARL) {
		$fichero_ARL="../anexos_empleado/fot_ARL_$codigo.$ext_archivo_ARL";
	array_map('unlink', glob($fichero_ARL));

	}

}elseif ($tipo_fotARL!=null && $fotARL_cargar!='sin anexar') {
	$fotARL='fot_ARL_' . $codigo . '.' . $ext_ARL;
	if ($tipo_fotARL=='image/jpeg' || $tipo_fotARL=='image/jpg' || $tipo_fotARL=='image/png' || $tipo_fotARL=='image/gif' ||
	$tipo_fotARL=='application/pdf' ||		$tipo_fotARL=='application/msword' ||		$tipo_fotARL=='application/vnd.ms-excel'||		$tipo_fotARL=='application/vnd.ms-powerpoint' || $tipo_fotARL=='application/vnd.ms-publisher' || $tipo_fotARL=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotARL=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotARL=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_ARL= '../anexos_empleado/';

	move_uploaded_file($_FILES['flARL']['tmp_name'],$carpeta_destino_ARL.$fotARL);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la ARL tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_ARL!=$ext_archivo_ARL) {
		$fichero_ARL="../anexos_empleado/fot_ARL_$codigo.$ext_archivo_ARL";
	array_map('unlink', glob($fichero_ARL));

	}
}

//

//anexo RUT

$ext_archivo_RUT = pathinfo($fotRUT_cargar, PATHINFO_EXTENSION);

$fotRUT= basename($_FILES['flRUT']['name']);

$ext_RUT = pathinfo($fotRUT, PATHINFO_EXTENSION);

$fotRUT='fot_RUT_' . $codigo . "." . $ext_RUT;

$tipo_fotRUT=$_FILES['flRUT']['type'];

$tamagno_fotRUT=$_FILES['flRUT']['size'];

if($tipo_fotRUT==null && $fotRUT_cargar=='sin anexar'){
	$fotRUT='sin anexar';
}elseif ($tipo_fotRUT==null && $fotRUT_cargar!='sin anexar') {
$fotRUT='fot_RUT_' . $codigo . '.' . $ext_archivo_RUT;

}elseif ($tipo_fotRUT!=null && $fotRUT_cargar=='sin anexar') {
	$fotRUT='fot_RUT_' . $codigo . '.' . $ext_RUT;
	if ($tipo_fotRUT=='image/jpeg' || $tipo_fotRUT=='image/jpg' || $tipo_fotRUT=='image/png' || $tipo_fotRUT=='image/gif' ||
	$tipo_fotRUT=='application/pdf' ||		$tipo_fotRUT=='application/msword' ||		$tipo_fotRUT=='application/vnd.ms-excel' || $tipo_fotRUT=='application/vnd.ms-powerpoint' || $tipo_fotRUT=='application/vnd.ms-publisher' || $tipo_fotRUT=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotRUT=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotRUT=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_RUT= '../anexos_empleado/';

	move_uploaded_file($_FILES['flRUT']['tmp_name'],$carpeta_destino_RUT.$fotRUT);
	}else{

	  echo "Error de formato, asegúrese que la Fotocopia del RUT tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_RUT!=$ext_archivo_RUT) {
		$fichero_RUT="../anexos_empleado/fot_RUT_$codigo.$ext_archivo_RUT";
	array_map('unlink', glob($fichero_RUT));

	}

}elseif ($tipo_fotRUT!=null && $fotRUT_cargar!='sin anexar') {
	$fotRUT='fot_RUT_' . $codigo . '.' . $ext_RUT;
	if ($tipo_fotRUT=='image/jpeg' || $tipo_fotRUT=='image/jpg' || $tipo_fotRUT=='image/png' || $tipo_fotRUT=='image/gif' ||
	$tipo_fotRUT=='application/pdf' ||		$tipo_fotRUT=='application/msword' ||		$tipo_fotRUT=='application/vnd.ms-excel'||		$tipo_fotRUT=='application/vnd.ms-powerpoint' || $tipo_fotRUT=='application/vnd.ms-publisher' || $tipo_fotRUT=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotRUT=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotRUT=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_RUT= '../anexos_empleado/';

	move_uploaded_file($_FILES['flRUT']['tmp_name'],$carpeta_destino_RUT.$fotRUT);
	}else{

	  echo "Error de formato, asegúrese que la Fotocopia del RUT tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_RUT!=$ext_archivo_RUT) {
		$fichero_RUT="../anexos_empleado/fot_RUT_$codigo.$ext_archivo_RUT";
	array_map('unlink', glob($fichero_RUT));

	}
}

//

//anexo contraloria

$ext_archivo_contraloria = pathinfo($fotcontraloria_cargar, PATHINFO_EXTENSION);

$fotcontraloria= basename($_FILES['flcontraloria']['name']);

$ext_contraloria = pathinfo($fotcontraloria, PATHINFO_EXTENSION);

$fotcontraloria='fot_contraloria_' . $codigo . "." . $ext_contraloria;

$tipo_fotcontraloria=$_FILES['flcontraloria']['type'];

$tamagno_fotcontraloria=$_FILES['flcontraloria']['size'];

if($tipo_fotcontraloria==null && $fotcontraloria_cargar=='sin anexar'){
	$fotcontraloria='sin anexar';
}elseif ($tipo_fotcontraloria==null && $fotcontraloria_cargar!='sin anexar') {
$fotcontraloria='fot_contraloria_' . $codigo . '.' . $ext_archivo_contraloria;

}elseif ($tipo_fotcontraloria!=null && $fotcontraloria_cargar=='sin anexar') {
	$fotcontraloria='fot_contraloria_' . $codigo . '.' . $ext_contraloria;
	if ($tipo_fotcontraloria=='image/jpeg' || $tipo_fotcontraloria=='image/jpg' || $tipo_fotcontraloria=='image/png' || $tipo_fotcontraloria=='image/gif' ||
	$tipo_fotcontraloria=='application/pdf' ||		$tipo_fotcontraloria=='application/msword' ||		$tipo_fotcontraloria=='application/vnd.ms-excel' || $tipo_fotcontraloria=='application/vnd.ms-powerpoint' || $tipo_fotcontraloria=='application/vnd.ms-publisher' || $tipo_fotcontraloria=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotcontraloria=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotcontraloria=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_contraloria= '../anexos_empleado/';

	move_uploaded_file($_FILES['flcontraloria']['tmp_name'],$carpeta_destino_contraloria.$fotcontraloria);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de Contraloria tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_contraloria!=$ext_archivo_contraloria) {
		$fichero_contraloria="../anexos_empleado/fot_contraloria_$codigo.$ext_archivo_contraloria";
	array_map('unlink', glob($fichero_contraloria));

	}

}elseif ($tipo_fotcontraloria!=null && $fotcontraloria_cargar!='sin anexar') {
	$fotcontraloria='fot_contraloria_' . $codigo . '.' . $ext_contraloria;
	if ($tipo_fotcontraloria=='image/jpeg' || $tipo_fotcontraloria=='image/jpg' || $tipo_fotcontraloria=='image/png' || $tipo_fotcontraloria=='image/gif' ||
	$tipo_fotcontraloria=='application/pdf' ||		$tipo_fotcontraloria=='application/msword' ||		$tipo_fotcontraloria=='application/vnd.ms-excel'||		$tipo_fotcontraloria=='application/vnd.ms-powerpoint' || $tipo_fotcontraloria=='application/vnd.ms-publisher' || $tipo_fotcontraloria=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotcontraloria=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotcontraloria=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_contraloria= '../anexos_empleado/';

	move_uploaded_file($_FILES['flcontraloria']['tmp_name'],$carpeta_destino_contraloria.$fotcontraloria);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de Contraloria tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_contraloria!=$ext_archivo_contraloria) {
		$fichero_contraloria="../anexos_empleado/fot_contraloria_$codigo.$ext_archivo_contraloria";
	array_map('unlink', glob($fichero_contraloria));

	}
}

//

//anexo procuraduria

$ext_archivo_procuraduria = pathinfo($fotprocuraduria_cargar, PATHINFO_EXTENSION);

$fotprocuraduria= basename($_FILES['flprocuraduria']['name']);

$ext_procuraduria = pathinfo($fotprocuraduria, PATHINFO_EXTENSION);

$fotprocuraduria='fot_procuraduria_' . $codigo . "." . $ext_procuraduria;

$tipo_fotprocuraduria=$_FILES['flprocuraduria']['type'];

$tamagno_fotprocuraduria=$_FILES['flprocuraduria']['size'];

if($tipo_fotprocuraduria==null && $fotprocuraduria_cargar=='sin anexar'){
	$fotprocuraduria='sin anexar';
}elseif ($tipo_fotprocuraduria==null && $fotprocuraduria_cargar!='sin anexar') {
$fotprocuraduria='fot_procuraduria_' . $codigo . '.' . $ext_archivo_procuraduria;

}elseif ($tipo_fotprocuraduria!=null && $fotprocuraduria_cargar=='sin anexar') {
	$fotprocuraduria='fot_procuraduria_' . $codigo . '.' . $ext_procuraduria;
	if ($tipo_fotprocuraduria=='image/jpeg' || $tipo_fotprocuraduria=='image/jpg' || $tipo_fotprocuraduria=='image/png' || $tipo_fotprocuraduria=='image/gif' ||
	$tipo_fotprocuraduria=='application/pdf' ||		$tipo_fotprocuraduria=='application/msword' ||		$tipo_fotprocuraduria=='application/vnd.ms-excel' || $tipo_fotprocuraduria=='application/vnd.ms-powerpoint' || $tipo_fotprocuraduria=='application/vnd.ms-publisher' || $tipo_fotprocuraduria=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotprocuraduria=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotprocuraduria=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_procuraduria= '../anexos_empleado/';

	move_uploaded_file($_FILES['flprocuraduria']['tmp_name'],$carpeta_destino_procuraduria.$fotprocuraduria);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de Procuraduria tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_procuraduria!=$ext_archivo_procuraduria) {
		$fichero_procuraduria="../anexos_empleado/fot_procuraduria_$codigo.$ext_archivo_procuraduria";
	array_map('unlink', glob($fichero_procuraduria));

	}

}elseif ($tipo_fotprocuraduria!=null && $fotprocuraduria_cargar!='sin anexar') {
	$fotprocuraduria='fot_procuraduria_' . $codigo . '.' . $ext_procuraduria;
	if ($tipo_fotprocuraduria=='image/jpeg' || $tipo_fotprocuraduria=='image/jpg' || $tipo_fotprocuraduria=='image/png' || $tipo_fotprocuraduria=='image/gif' ||
	$tipo_fotprocuraduria=='application/pdf' ||		$tipo_fotprocuraduria=='application/msword' ||		$tipo_fotprocuraduria=='application/vnd.ms-excel'||		$tipo_fotprocuraduria=='application/vnd.ms-powerpoint' || $tipo_fotprocuraduria=='application/vnd.ms-publisher' || $tipo_fotprocuraduria=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotprocuraduria=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotprocuraduria=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_procuraduria= '../anexos_empleado/';

	move_uploaded_file($_FILES['flprocuraduria']['tmp_name'],$carpeta_destino_procuraduria.$fotprocuraduria);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de Procuraduria tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_procuraduria!=$ext_archivo_procuraduria) {
		$fichero_procuraduria="../anexos_empleado/fot_procuraduria_$codigo.$ext_archivo_procuraduria";
	array_map('unlink', glob($fichero_procuraduria));

	}
}

//

//anexo AJ 'Antecedentes Judiciales'

$ext_archivo_AJ = pathinfo($fotAJ_cargar, PATHINFO_EXTENSION);

$fotAJ= basename($_FILES['flAJ']['name']);

$ext_AJ = pathinfo($fotAJ, PATHINFO_EXTENSION);

$fotAJ='fot_AJ_' . $codigo . "." . $ext_AJ;

$tipo_fotAJ=$_FILES['flAJ']['type'];

$tamagno_fotAJ=$_FILES['flAJ']['size'];

if($tipo_fotAJ==null && $fotAJ_cargar=='sin anexar'){
	$fotAJ='sin anexar';
}elseif ($tipo_fotAJ==null && $fotAJ_cargar!='sin anexar') {
$fotAJ='fot_AJ_' . $codigo . '.' . $ext_archivo_AJ;

}elseif ($tipo_fotAJ!=null && $fotAJ_cargar=='sin anexar') {
	$fotAJ='fot_AJ_' . $codigo . '.' . $ext_AJ;
	if ($tipo_fotAJ=='image/jpeg' || $tipo_fotAJ=='image/jpg' || $tipo_fotAJ=='image/png' || $tipo_fotAJ=='image/gif' ||
	$tipo_fotAJ=='application/pdf' ||		$tipo_fotAJ=='application/msword' ||		$tipo_fotAJ=='application/vnd.ms-excel' || $tipo_fotAJ=='application/vnd.ms-powerpoint' || $tipo_fotAJ=='application/vnd.ms-publisher' || $tipo_fotAJ=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotAJ=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotAJ=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_AJ= '../anexos_empleado/';

	move_uploaded_file($_FILES['flAJ']['tmp_name'],$carpeta_destino_AJ.$fotAJ);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de Antecedentes Judiciales tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_AJ!=$ext_archivo_AJ) {
		$fichero_AJ="../anexos_empleado/fot_AJ_$codigo.$ext_archivo_AJ";
	array_map('unlink', glob($fichero_AJ));

	}

}elseif ($tipo_fotAJ!=null && $fotAJ_cargar!='sin anexar') {
	$fotAJ='fot_AJ_' . $codigo . '.' . $ext_AJ;
	if ($tipo_fotAJ=='image/jpeg' || $tipo_fotAJ=='image/jpg' || $tipo_fotAJ=='image/png' || $tipo_fotAJ=='image/gif' ||
	$tipo_fotAJ=='application/pdf' ||		$tipo_fotAJ=='application/msword' ||		$tipo_fotAJ=='application/vnd.ms-excel'||		$tipo_fotAJ=='application/vnd.ms-powerpoint' || $tipo_fotAJ=='application/vnd.ms-publisher' || $tipo_fotAJ=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotAJ=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotAJ=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_AJ= '../anexos_empleado/';

	move_uploaded_file($_FILES['flAJ']['tmp_name'],$carpeta_destino_AJ.$fotAJ);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de Antecedentes Judiciales tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_AJ!=$ext_archivo_AJ) {
		$fichero_AJ="../anexos_empleado/fot_AJ_$codigo.$ext_archivo_AJ";
	array_map('unlink', glob($fichero_AJ));

	}
}

//

//anexo CB 'Cuenta Bancaria'

$ext_archivo_CB = pathinfo($fotCB_cargar, PATHINFO_EXTENSION);

$fotCB= basename($_FILES['flCB']['name']);

$ext_CB = pathinfo($fotCB, PATHINFO_EXTENSION);

$fotCB='fot_CB_' . $codigo . "." . $ext_CB;

$tipo_fotCB=$_FILES['flCB']['type'];

$tamagno_fotCB=$_FILES['flCB']['size'];

if($tipo_fotCB==null && $fotCB_cargar=='sin anexar'){
	$fotCB='sin anexar';
}elseif ($tipo_fotCB==null && $fotCB_cargar!='sin anexar') {
$fotCB='fot_CB_' . $codigo . '.' . $ext_archivo_CB;

}elseif ($tipo_fotCB!=null && $fotCB_cargar=='sin anexar') {
	$fotCB='fot_CB_' . $codigo . '.' . $ext_CB;
	if ($tipo_fotCB=='image/jpeg' || $tipo_fotCB=='image/jpg' || $tipo_fotCB=='image/png' || $tipo_fotCB=='image/gif' ||
	$tipo_fotCB=='application/pdf' ||		$tipo_fotCB=='application/msword' ||		$tipo_fotCB=='application/vnd.ms-excel' || $tipo_fotCB=='application/vnd.ms-powerpoint' || $tipo_fotCB=='application/vnd.ms-publisher' || $tipo_fotCB=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotCB=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotCB=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_CB= '../anexos_empleado/';

	move_uploaded_file($_FILES['flCB']['tmp_name'],$carpeta_destino_CB.$fotCB);
	}else{

	  echo "Error de formato, asegúrese que que el Certificado de la Cuenta Bancaria tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_CB!=$ext_archivo_CB) {
		$fichero_CB="../anexos_empleado/fot_CB_$codigo.$ext_archivo_CB";
	array_map('unlink', glob($fichero_CB));

	}

}elseif ($tipo_fotCB!=null && $fotCB_cargar!='sin anexar') {
	$fotCB='fot_CB_' . $codigo . '.' . $ext_CB;
	if ($tipo_fotCB=='image/jpeg' || $tipo_fotCB=='image/jpg' || $tipo_fotCB=='image/png' || $tipo_fotCB=='image/gif' ||
	$tipo_fotCB=='application/pdf' ||		$tipo_fotCB=='application/msword' ||		$tipo_fotCB=='application/vnd.ms-excel'||		$tipo_fotCB=='application/vnd.ms-powerpoint' || $tipo_fotCB=='application/vnd.ms-publisher' || $tipo_fotCB=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotCB=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotCB=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_CB= '../anexos_empleado/';

	move_uploaded_file($_FILES['flCB']['tmp_name'],$carpeta_destino_CB.$fotCB);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la Cuenta Bancaria tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_CB!=$ext_archivo_CB) {
		$fichero_CB="../anexos_empleado/fot_CB_$codigo.$ext_archivo_CB";
	array_map('unlink', glob($fichero_CB));

	}
}

//

//anexo LM 'Libreta Militar'

$ext_archivo_LM = pathinfo($fotLM_cargar, PATHINFO_EXTENSION);

$fotLM= basename($_FILES['flLM']['name']);

$ext_LM = pathinfo($fotLM, PATHINFO_EXTENSION);

$fotLM='fot_LM_' . $codigo . "." . $ext_LM;

$tipo_fotLM=$_FILES['flLM']['type'];

$tamagno_fotLM=$_FILES['flLM']['size'];

if($tipo_fotLM==null && $fotLM_cargar=='sin anexar'){
	$fotLM='sin anexar';
}elseif ($tipo_fotLM==null && $fotLM_cargar!='sin anexar') {
$fotLM='fot_LM_' . $codigo . '.' . $ext_archivo_LM;

}elseif ($tipo_fotLM!=null && $fotLM_cargar=='sin anexar') {
	$fotLM='fot_LM_' . $codigo . '.' . $ext_LM;
	if ($tipo_fotLM=='image/jpeg' || $tipo_fotLM=='image/jpg' || $tipo_fotLM=='image/png' || $tipo_fotLM=='image/gif' ||
	$tipo_fotLM=='application/pdf' ||		$tipo_fotLM=='application/msword' ||		$tipo_fotLM=='application/vnd.ms-excel' || $tipo_fotLM=='application/vnd.ms-powerpoint' || $tipo_fotLM=='application/vnd.ms-publisher' || $tipo_fotLM=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotLM=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotLM=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_LM= '../anexos_empleado/';

	move_uploaded_file($_FILES['flLM']['tmp_name'],$carpeta_destino_LM.$fotLM);
	}else{

	  echo "Error de formato, asegúrese que la Fotocopia de la Libreta Militar tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_LM!=$ext_archivo_LM) {
		$fichero_LM="../anexos_empleado/fot_LM_$codigo.$ext_archivo_LM";
	array_map('unlink', glob($fichero_LM));

	}

}elseif ($tipo_fotLM!=null && $fotLM_cargar!='sin anexar') {
	$fotLM='fot_LM_' . $codigo . '.' . $ext_LM;
	if ($tipo_fotLM=='image/jpeg' || $tipo_fotLM=='image/jpg' || $tipo_fotLM=='image/png' || $tipo_fotLM=='image/gif' ||
	$tipo_fotLM=='application/pdf' ||		$tipo_fotLM=='application/msword' ||		$tipo_fotLM=='application/vnd.ms-excel'||		$tipo_fotLM=='application/vnd.ms-powerpoint' || $tipo_fotLM=='application/vnd.ms-publisher' || $tipo_fotLM=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotLM=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotLM=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_LM= '../anexos_empleado/';

	move_uploaded_file($_FILES['flLM']['tmp_name'],$carpeta_destino_LM.$fotLM);
	}else{

	  echo "Error de formato, asegúrese que la Fotocopia de la Libreta Militar tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_LM!=$ext_archivo_LM) {
		$fichero_LM="../anexos_empleado/fot_LM_$codigo.$ext_archivo_LM";
	array_map('unlink', glob($fichero_LM));

	}
}

//

//anexo HV 'Hoja de Vida'

$ext_archivo_HV = pathinfo($fotHV_cargar, PATHINFO_EXTENSION);

$fotHV= basename($_FILES['flHV']['name']);

$ext_HV = pathinfo($fotHV, PATHINFO_EXTENSION);

$fotHV='fot_HV_' . $codigo . "." . $ext_HV;

$tipo_fotHV=$_FILES['flHV']['type'];

$tamagno_fotHV=$_FILES['flHV']['size'];

if($tipo_fotHV==null && $fotHV_cargar=='sin anexar'){
	$fotHV='sin anexar';
}elseif ($tipo_fotHV==null && $fotHV_cargar!='sin anexar') {
$fotHV='fot_HV_' . $codigo . '.' . $ext_archivo_HV;

}elseif ($tipo_fotHV!=null && $fotHV_cargar=='sin anexar') {
	$fotHV='fot_HV_' . $codigo . '.' . $ext_HV;
	if ($tipo_fotHV=='application/pdf' ||		$tipo_fotHV=='application/msword' ||   $tipo_fotHV=='application/vnd.openxmlformats-officedocument.wordprocessingml.document'){

	$carpeta_destino_HV= '../anexos_empleado/';

	move_uploaded_file($_FILES['flHV']['tmp_name'],$carpeta_destino_HV.$fotHV);
	}else{

	  echo "Error de formato, asegúrese que la Hoja de vida tenga formato 'pdf', 'docx' ó 'doc'";
die();
	}

	if ($ext_HV!=$ext_archivo_HV) {
		$fichero_HV="../anexos_empleado/fot_HV_$codigo.$ext_archivo_HV";
	array_map('unlink', glob($fichero_HV));

	}

}elseif ($tipo_fotHV!=null && $fotHV_cargar!='sin anexar') {
	$fotHV='fot_HV_' . $codigo . '.' . $ext_HV;
	if ($tipo_fotHV=='application/pdf' ||		$tipo_fotHV=='application/msword' ||   $tipo_fotHV=='application/vnd.openxmlformats-officedocument.wordprocessingml.document'){

	$carpeta_destino_HV= '../anexos_empleado/';

	move_uploaded_file($_FILES['flHV']['tmp_name'],$carpeta_destino_HV.$fotHV);
	}else{

	  echo "Error de formato, asegúrese que la Hoja de vida tenga formato 'pdf', 'docx' ó 'doc'";
die();
	}

	if ($ext_HV!=$ext_archivo_HV) {
		$fichero_HV="../anexos_empleado/fot_HV_$codigo.$ext_archivo_HV";
	array_map('unlink', glob($fichero_HV));

	}
}

//

$actualizar_sql="UPDATE empleado SET
nombres=:nombres,
apellidos=:apellidos,
sexo=:sexo,
tipodocumento=:tipodocumento,
doc_identidad=:doc_identidad,
eps=:eps,
pensiones=:pensiones,
arl=:arl,
edad=:edad,
fecha_nacimiento=:fecha_nacimiento,
pais=:pais,
departamento=:departamento,
ciudad=:ciudad,
telefono=:telefono,
celular=:celular,
email=:email,
dir_barrio=:dir_barrio,
estudio=:estudio,
titulo=:titulo,
universidad=:universidad,
cargo=:cargo,
anioinicio=:anioinicio,
anioretiro=:anioretiro,
tipocontrato=:tipocontrato,
tiempocontrato=:tiempocontrato,
salario=:salario,
pin=:pin,
foto=:foto,
fotcedula=:fotcedula,
fotlibretamilitar=:fotlibretamilitar,
foteps=:foteps,
fotpensiones=:fotpensiones,
fotarl=:fotarl,
fotrut=:fotrut,
fotcontraloria=:fotcontraloria,
fotprocuraduria=:fotprocuraduria,
fotantecedentes=:fotantecedentes,
fotctabancaria=:fotctabancaria,
fothdvida=:fothdvida,
fecha_actualizacion=:feactualizacion WHERE cod_empleado=:codigo";

$resultado=$conexion->prepare($actualizar_sql);

$resultado->execute(array(":codigo"=>$codigo,
":nombres"=>$nombres_MAYUSCULA,
":apellidos"=>$apellidos_MAYUSUCLA,
":sexo"=>$sexo,
":tipodocumento"=>$tipodocumento,
":doc_identidad"=>$doc_identidad,
":eps"=>$eps,
":pensiones"=>$pensiones,
":arl"=>$arl,
":edad"=>$edad,
":fecha_nacimiento"=>$f_nacimiento,
":pais"=>$pais,
":departamento"=>$departamento,
":ciudad"=>$ciudad,
":telefono"=>$telefono,
":celular"=>$celular,
":email"=>$email,
":dir_barrio"=>$dir_barrio,
":estudio"=>$estudio,
":titulo"=>$titulo ,
":universidad"=>$universidad,
":cargo"=>$cargo,
":anioinicio"=>$anioinicio,
":anioretiro"=>$anioretiro,
":tipocontrato"=>$tipocontrato,
":tiempocontrato"=>$tiempocontrato ,
":salario"=>$salario,
":pin"=>$clave,
":foto"=>$foto,
":fotcedula"=>$fotcedula,
":fotlibretamilitar"=>$fotLM,
":foteps"=>$fotEPS,
":fotpensiones"=>$fotpension,
":fotarl"=>$fotARL,
":fotrut"=>$fotRUT ,
":fotcontraloria"=>$fotcontraloria,
":fotprocuraduria"=>$fotprocuraduria,
":fotantecedentes"=>$fotAJ,
":fotctabancaria"=>$fotCB,
":fothdvida"=>$fotHV,
":feactualizacion"=>$fechaactualizacion));

echo"El usuario se ha actualizado satisfactoriamente.";

	return $conexion;



?>
