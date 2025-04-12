<?php
//codigo para traer el documento de usuario
session_start();
$codigo_empleado=htmlentities(addslashes($_SESSION['codigo']));

$fotocargar="";

//variables de programa a crear, viene con el metodo programajs.

$cod_matricula=htmlentities(addslashes($_POST['txtcodalumno']));

$fotocargar=htmlentities(addslashes($_POST['lbfoto']));

$fotdocident_cargar=htmlentities(addslashes($_POST['lbdocident']));

$foteps_cargar=htmlentities(addslashes($_POST['lbfotEPS']));

$nombres=htmlentities(addslashes($_POST['txtnomalumno']));

$apellidos=htmlentities(addslashes($_POST['txtapellalumno']));

$sexo=htmlentities(addslashes($_POST['slsexo']));

$tipo_documento=htmlentities(addslashes($_POST['sltipodocumento']));

$num_documento=htmlentities(addslashes($_POST['txtnrodocumento']));

$eps=htmlentities(addslashes($_POST['txteps']));

$f_nacimiento=htmlentities(addslashes($_POST['dtfechanacimiento']));

$edad=htmlentities(addslashes($_POST['txtedad']));

$pais=htmlentities(addslashes($_POST['txtpais']));

$departamento=htmlentities(addslashes($_POST['txtdepartamento']));

$ciudad=htmlentities(addslashes($_POST['txtciudad']));

$telefono=htmlentities(addslashes($_POST['txttelfijo']));

$celular=htmlentities(addslashes($_POST['txtcelular']));

$email=htmlentities(addslashes($_POST['txtemail']));

$dir_barrio_vereda=htmlentities(addslashes($_POST['txtdirbarrver']));

$zona=htmlentities(addslashes($_POST['rbzona']));

$institucion=htmlentities(addslashes($_POST['txtinstitucion']));

$sede=htmlentities(addslashes($_POST['txtsede']));

$grado=htmlentities(addslashes($_POST['txtgrado']));

$ingreso=htmlentities(addslashes($_POST['rbingreso']));

$estado=htmlentities(addslashes($_POST['slestado']));

$leyenda=htmlentities(addslashes($_POST['rbleyenda']));

$nom_acudiente=htmlentities(addslashes($_POST['txtnomacudiente']));

$apell_acudiente=htmlentities(addslashes($_POST['txtapellacudiente']));

$doc_acudiente=htmlentities(addslashes($_POST['txtdocacudiente']));

$parentesco=htmlentities(addslashes($_POST['txtparentesco']));

$tel_acudiente=htmlentities(addslashes($_POST['txttelacudiente']));

$cel_acudiente=htmlentities(addslashes($_POST['txtcelacudiente']));

$email_acudiente=htmlentities(addslashes($_POST['txtemailacudiente']));

$sangre=htmlentities(addslashes($_POST['slsangre']));

$enfermedad=htmlentities(addslashes($_POST['rbenfermedad']));

$tipo_enfermedad=htmlentities(addslashes($_POST['txtenfermedad']));

$medicamento=htmlentities(addslashes($_POST['rbmedicamento']));

$tipo_medicamento=htmlentities(addslashes($_POST['txtmedicamento']));

$alergia=htmlentities(addslashes($_POST['rbalergia']));

$tipo_alergia=htmlentities(addslashes($_POST['txtalergia']));

$programa1=htmlentities(addslashes($_POST['slpriprograma']));

$nivel_pro1=htmlentities(addslashes($_POST['slpripronivel']));

$director1=htmlentities(addslashes($_POST['txtpriprodirector']));

$instrumento1=htmlentities(addslashes($_POST['slpriproinstrumento']));

$programa2=htmlentities(addslashes($_POST['slsegprograma']));

$nivel_pro2=htmlentities(addslashes($_POST['slsegpronivel']));

$director2=htmlentities(addslashes($_POST['txtsegprodirector']));

$instrumento2=htmlentities(addslashes($_POST['slsegproinstrumento']));

$programa3=htmlentities(addslashes($_POST['slterprograma']));

$nivel_pro3=htmlentities(addslashes($_POST['slterpronivel']));

$director3=htmlentities(addslashes($_POST['txtterprodirector']));

$instrumento3=htmlentities(addslashes($_POST['slterproinstrumento']));

$recaudo=htmlentities(addslashes($_POST['slprograma-cuotas']));

$nomusuario="";
$nummatricula="";

$nombres_MAYUSCULA=strtoupper($nombres);
$apellidos_MAYUSUCLA=strtoupper($apellidos);

$nom_acudiente_MAYUSCULA=strtoupper($nom_acudiente);

$apell_acudiente_MAYUSCULA=strtoupper($apell_acudiente);

date_default_timezone_set('America/Bogota');//carga fecha y hora
$fecha=date('Y-m-d H:i:s');

$fecha_nacimiento= date("d-m-Y", strtotime($f_nacimiento));

if ($programa1==="-")
{
  $programa1="";
}

if ($programa2==="-")
{
  $programa2="";
}

if ($programa3==="-")
{
  $programa3="";
  $programa3="";
}



if ($ingreso=="nuevo") {
	$ingreso=date('Y');
	// code...
}else {
	$ingreso=htmlentities(addslashes($_POST['slañoinicio']));
}

//Codigo para traer el usuario

require '../codigo/conexion_BD.php';


$usuario_sql="SELECT nombres, apellidos FROM empleado WHERE cod_empleado=:cod_empleado";
		$resultado=$conexion->prepare($usuario_sql);
		$resultado->execute(array(":cod_empleado"=>$codigo_empleado));

		while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
$nomusuario=$fila["nombres"] . " " . $fila["apellidos"]; //carga usuario

		}



$consultar_matricula_sql="SELECT * FROM matricula WHERE nro_matricula=:nromat";
		$resultado=$conexion->prepare($consultar_matricula_sql);
		$resultado->execute(array(":nromat"=>$cod_matricula));

		while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
$nummatricula=$fila["nro_matricula"]; //carga usuario

		}


if ($nomusuario=="NUEVO USUARIO") {
echo "Debe autenticarse para actualizar registros. ";
die();
}

	if($nombres==null){
		echo "'Nombres' es un campo obligatorio, debe tener registro.";
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

		if($tipo_documento==null){
			echo "'Tipo Documento' es un campo obligatorio, debe tener registro.";
		die();
		}

		if($num_documento==null){
			echo "'Nro. Documento' es un campo obligatorio, debe tener registro.";
		die();
		}

		if($edad==null){
			echo "'Edad' es un campo obligatorio, debe tener registro.";
		die();
		}

		if ($leyenda=='menor') {
			if ($nom_acudiente==null) {
				echo "'Nombres' de acudiente es un campo obligatorio, debe tener registro.";
			die();
			}

			if ($apell_acudiente==null) {
				echo "'Apellidos' de acudiente es un campo obligatorio, debe tener registro.";
			die();
			}
		}

		if ($programa1=='Seleccionar Programa') {
			echo "'Primer Programa' es un campo obligatorio, debe tener registro.";
		die();
		}

if($programa1==$programa2){


 echo "El 'Segundo Programa' no debe ser igual al 'Primer Programa' " ;
die();
}elseif ($programa1==$programa3) {

   echo "El 'Tercer Programa' no debe ser igual al 'Primer Programa' " ;
die();
}elseif ($programa2==$programa3) {

   echo "El 'Tercer Programa' no debe ser igual al 'Segundo Programa' " ;
die();
}

//anexo foto

$foto= basename($_FILES['flfoto']['name']);

$foto='foto_' . $cod_matricula . '.png';

$tipo_foto=$_FILES['flfoto']['type'];

$tamagno_foto=$_FILES['flfoto']['size'];

if($tipo_foto==null && $fotocargar=='cortina-symphony-alumno.jpg'){
	$foto='cortina-symphony-alumno.jpg';
}elseif ($tipo_foto==null && $fotocargar!='cortina-symphony-alumno.jpg') {
$foto='foto_' . $cod_matricula . '.png';

}elseif ($tipo_foto!=null && $fotocargar=='cortina-symphony-alumno.jpg') {
	$foto='foto_' . $cod_matricula . '.png';
	if ($tipo_foto=='image/jpeg' || $tipo_foto=='image/jpg' || $tipo_foto=='image/png' || $tipo_foto=='image/gif'){

	$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/www/symphony/fotos_alumno/';

	move_uploaded_file($_FILES['flfoto']['tmp_name'],$carpeta_destino.$foto);
	}else{

	  echo "Error de formato, asegúrese que la foto tenga formato 'jpeg', 'jpg', 'png' ó 'gif'";
die();
	}

}elseif ($tipo_foto!=null && $fotocargar!='cortina-symphony-alumno.jpg') {
	$foto='foto_' . $cod_matricula . '.png';
	if ($tipo_foto=='image/jpeg' || $tipo_foto=='image/jpg' || $tipo_foto=='image/png' || $tipo_foto=='image/gif'){

	$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/www/symphony/fotos_alumno/';

	move_uploaded_file($_FILES['flfoto']['tmp_name'],$carpeta_destino.$foto);
	}else{

	  echo "Error de formato, asegúrese que la foto tenga formato 'jpeg', 'jpg', 'png' ó 'gif'";
die();
	}
}



//

//anexo doc_identidad

$ext_archivo = pathinfo($fotdocident_cargar, PATHINFO_EXTENSION);

$fotdocident= basename($_FILES['flfotdocident']['name']);

$ext = pathinfo($fotdocident, PATHINFO_EXTENSION);

$fotdocident='fot_doc-identidad_' . $cod_matricula . "." . $ext;

$tipo_fotdocident=$_FILES['flfotdocident']['type'];

$tamagno_fotdocident=$_FILES['flfotdocident']['size'];

if($tipo_fotdocident==null && $fotdocident_cargar=='sin anexar'){
	$fotdocident='sin anexar';
}elseif ($tipo_fotdocident==null && $fotdocident_cargar!='sin anexar') {
$fotdocident='fot_doc-identidad' . $cod_matricula . '.' . $ext_archivo;

}elseif ($tipo_fotdocident!=null && $fotdocident_cargar=='sin anexar') {
	$fotdocident='fot_doc-identidad_' . $cod_matricula . '.' . $ext;
	if ($tipo_fotdocident=='image/jpeg' || $tipo_fotdocident=='image/jpg' || $tipo_fotdocident=='image/png' || $tipo_fotdocident=='image/gif' ||
	$tipo_fotdocident=='application/pdf' ||		$tipo_fotdocident=='application/msword' ||		$tipo_fotdocident=='application/vnd.ms-excel' || $tipo_fotdocident=='application/vnd.ms-powerpoint' || $tipo_fotdocident=='application/vnd.ms-publisher' || $tipo_fotdocident=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotdocident=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotdocident=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_doc_identidad=$_SERVER['DOCUMENT_ROOT'] . '/www/symphony/anexos_alumno/';

	move_uploaded_file($_FILES['flfotdocident']['tmp_name'],$carpeta_destino_doc_identidad.$fotdocident);
	}else{

	  echo "Error de formato, asegúrese que la Fotocopia de la doc_identidad tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext!=$ext_archivo) {
		$fichero="../anexos_alumno/fot_doc-identidad_$cod_matricula.$ext_archivo";
	array_map('unlink', glob($fichero));


	}

}elseif ($tipo_fotdocident!=null && $fotdocident_cargar!='sin anexar') {
	$fotdocident='fot_doc-identidad_' . $cod_matricula . '.' . $ext;
	if ($tipo_fotdocident=='image/jpeg' || $tipo_fotdocident=='image/jpg' || $tipo_fotdocident=='image/png' || $tipo_fotdocident=='image/gif' ||
	$tipo_fotdocident=='application/pdf' ||		$tipo_fotdocident=='application/msword' ||		$tipo_fotdocident=='application/vnd.ms-excel'||		$tipo_fotdocident=='application/vnd.ms-powerpoint' || $tipo_fotdocident=='application/vnd.ms-publisher' || $tipo_fotdocident=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotdocident=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotdocident=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_doc_identidad=$_SERVER['DOCUMENT_ROOT'] . '/www/symphony/anexos_alumno/';

	move_uploaded_file($_FILES['flfotdocident']['tmp_name'],$carpeta_destino_doc_identidad.$fotdocident);
	}else{

	  echo "Error de formato, asegúrese que la Fotocopia de la doc_identidad tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext!=$ext_archivo) {
		$fichero="../anexos_alumno/fot_doc-identidad_$cod_matricula.$ext_archivo";
	array_map('unlink', glob($fichero));


	}

}



//

//anexo EPS

$ext_archivo_EPS = pathinfo($foteps_cargar, PATHINFO_EXTENSION);

$fotEPS= basename($_FILES['flEPS']['name']);

$ext_EPS = pathinfo($fotEPS, PATHINFO_EXTENSION);

$fotEPS='fot_EPS_' . $cod_matricula . "." . $ext_EPS;

$tipo_fotEPS=$_FILES['flEPS']['type'];

$tamagno_fotEPS=$_FILES['flEPS']['size'];

if($tipo_fotEPS==null && $foteps_cargar=='sin anexar'){
	$fotEPS='sin anexar';
}elseif ($tipo_fotEPS==null && $foteps_cargar!='sin anexar') {
$fotEPS='fot_EPS_' . $cod_matricula . '.' . $ext_archivo_EPS;

}elseif ($tipo_fotEPS!=null && $foteps_cargar=='sin anexar') {
	$fotEPS='fot_EPS_' . $cod_matricula . '.' . $ext_EPS;
	if ($tipo_fotEPS=='image/jpeg' || $tipo_fotEPS=='image/jpg' || $tipo_fotEPS=='image/png' || $tipo_fotEPS=='image/gif' ||
	$tipo_fotEPS=='application/pdf' ||		$tipo_fotEPS=='application/msword' ||		$tipo_fotEPS=='application/vnd.ms-excel' || $tipo_fotEPS=='application/vnd.ms-powerpoint' || $tipo_fotEPS=='application/vnd.ms-publisher' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_EPS=$_SERVER['DOCUMENT_ROOT'] . '/www/symphony/anexos_alumno/';

	move_uploaded_file($_FILES['flEPS']['tmp_name'],$carpeta_destino_EPS.$fotEPS);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la EPS tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_EPS!=$ext_archivo_EPS) {
		$fichero_EPS="../anexos_alumno/fot_EPS_$cod_matricula.$ext_archivo_EPS";
	array_map('unlink', glob($fichero_EPS));

	}

}elseif ($tipo_fotEPS!=null && $foteps_cargar!='sin anexar') {
	$fotEPS='fot_EPS_' . $cod_matricula . '.' . $ext_EPS;
	if ($tipo_fotEPS=='image/jpeg' || $tipo_fotEPS=='image/jpg' || $tipo_fotEPS=='image/png' || $tipo_fotEPS=='image/gif' ||
	$tipo_fotEPS=='application/pdf' ||		$tipo_fotEPS=='application/msword' ||		$tipo_fotEPS=='application/vnd.ms-excel'||		$tipo_fotEPS=='application/vnd.ms-powerpoint' || $tipo_fotEPS=='application/vnd.ms-publisher' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $tipo_fotEPS=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

	$carpeta_destino_EPS=$_SERVER['DOCUMENT_ROOT'] . '/www/symphony/anexos_alumno/';

	move_uploaded_file($_FILES['flEPS']['tmp_name'],$carpeta_destino_EPS.$fotEPS);
	}else{

	  echo "Error de formato, asegúrese que el Certificado de la EPS tenga formato 'jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx' ó 'pub'";
die();
	}

	if ($ext_EPS!=$ext_archivo_EPS) {
		$fichero_EPS="../anexos_alumno/fot_EPS_$cod_matricula.$ext_archivo_EPS";
	array_map('unlink', glob($fichero_EPS));

	}

}


//

	$actualizar_matricula_sql="UPDATE matricula SET nombres=:nom,
		  apellidos=:apell,
			sexo=:sex,
			tipo_documento=:tdoc,
			doc_identidad=:doc,
			edad=:edad,
			fecha_nacimiento=:nac,
	 		eps=:eps,
	 		pais=:pais,
			departamento=:dep,
	 		ciudad=:ciu,
			telefono=:tel,
			celular=:cel,
			email=:emai,
		 	zona=:zona,
			dir_barrio=:dir,
			institucion_educativa=:ins,
			sede=:sede,
			grado=:gra,
			anio_ingreso=:ing,
			nombres_acudiente=:nacu,
			apellidos_acudiente=:aacu,
			doc_identidad_acudiente=:doca,
			parentesco=:par,
		 	tel_acudiente=:tacu,
	 		cel_acudiente=:cacu,
			email_acudiente=:eacu,
			tipo_sangre=:san,
			enfermedad=:enf,
		 	tipo_enfermedad=:tenf,
			medicamento=:med,
			tipo_medicamento=:tmed,
			alergia=:ale,
			tipo_alergia=:tale,
			programa1=:pro1,
      nivel_pro1=:niv1,
			director1=:dir1,
			instrumento1=:ins1,
			programa2=:pro2,
      nivel_pro2=:niv2,
		 	director2=:dir2,
			instrumento2=:ins2,
			programa3=:pro3,
      nivel_pro3=:niv3,
			director3=:dir3,
		  instrumento3=:ins3,
			recauda_cuota=:rec,
			foto=:foto,
			fot_docident=:fotd,
			fot_eps=:fote,
			estado=:est,
			usuario_actualizo=:usu,
			fecha_actualizacion=:fact WHERE nro_matricula=:mat";


$resultado=$conexion->prepare($actualizar_matricula_sql);

$resultado->execute(array(
    ":mat"=>$cod_matricula,
		":nom"=>$nombres_MAYUSCULA,
		":apell"=>$apellidos_MAYUSUCLA,
		":sex"=>$sexo,
		":tdoc"=>$tipo_documento,
		":doc"=>$num_documento,
		":edad"=>$edad,
		":nac"=>$f_nacimiento,
		":eps"=>$eps,
		":pais"=>$pais,
		":dep"=>$departamento,
		":ciu"=>$ciudad,
		":tel"=>$telefono,
		":cel"=>$celular,
		":emai"=>$email,
		":zona"=>$zona,
		":dir"=>$dir_barrio_vereda,
		":ins"=>$institucion,
		":sede"=>$sede,
		":gra"=>$grado,
		":ing"=>$ingreso,
		":nacu"=>$nom_acudiente,
		":aacu"=>$apell_acudiente,
		":doca"=>$doc_acudiente,
		":par"=>$parentesco,
		":tacu"=>$tel_acudiente,
		":cacu"=>$cel_acudiente,
		":eacu"=>$email_acudiente,
		":san"=>$sangre,
		":enf"=>$enfermedad,
		":tenf"=>$tipo_enfermedad,
		":med"=>$medicamento,
		":tmed"=>$tipo_medicamento,
		":ale"=>$alergia,
		":tale"=>$tipo_alergia,
		":pro1"=>$programa1,
    ":niv1"=>$nivel_pro1,
		":dir1"=>$director1,
		":ins1"=>$instrumento1,
		":pro2"=>$programa2,
    ":niv2"=>$nivel_pro2,
		":dir2"=>$director2,
		":ins2"=>$instrumento2,
		":pro3"=>$programa3,
    ":niv3"=>$nivel_pro3,
		":dir3"=>$director3,
		":ins3"=>$instrumento3,
		":rec"=>$recaudo,
		":foto"=>$foto,
		":fotd"=>$fotdocident,
		":fote"=>$fotEPS,
		":est"=>$estado,
		":usu"=>$nomusuario,
		":fact"=>$fecha));

echo "La matricula se ha actualizado satisfactoriamente.";

?>
