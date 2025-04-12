<?php


$email=htmlentities(addslashes($_POST['txtcrearemail']));
$clave=htmlentities(addslashes($_POST['txtclave']));
$repclave=htmlentities(addslashes($_POST['txtrepclave']));
$privilegio=htmlentities(addslashes($_POST['slprivilegios']));
$estado=htmlentities(addslashes($_POST['slestado']));

$d1=rand(0, 9);
$d2=rand(0, 9);
$d3=rand(0, 9);
$d4=rand(0, 9);

$codigo =  'CEM-' . $d1 . $d2 . $d3 . $d4;
$nombres='NUEVO';
$apellidos='USUARIO';
$sexo=null;
$tipodoc=null;
$doc=null;
$eps=null;
$pensiones=null;
$arl=null;
$edad=null;
$fechanacimiento=null;
$pais=null;
$departamento=null;
$ciudad=null;
$tel=null;
$cel=null;
$dirbar=null;
$estudio=null;
$titulo=null;
$universidad=null;
$cargo=null;
$anioinicio=null;
$anioretiro=null;
$tipocontrato=null;
$tiempocontrato=null;
$salario=null;
$foto="cortina-symphony.jpg";
$fotcedula="sin anexar";
$fotlibretamilitar="sin anexar";
$foteps="sin anexar";
$fotpensiones="sin anexar";
$fotarl="sin anexar";
$fotrut="sin anexar";
$fotcontraloria="sin anexar";
$fotprocuraduria="sin anexar";
$fotantecedentes="sin anexar";
$fotctabancaria="sin anexar";
$fothdvida="sin anexar";

date_default_timezone_set('America/Bogota');//carga fecha y hora
$fecha=date('d/m/y/h:i a');
$fecharegistro=$fecha;
$fechaactualizacion=$fecha;

if($email==null){
	echo "email es un campo obligatorio, debe tener registro.";
die();
}elseif ($clave==null && $repclave==null) {
	echo "contraseñas son campos obligatorios, deben tener registro.";
die();
}elseif ($clave!=$repclave) {
echo "la contraseña no coincide.";
die();
}elseif ($privilegio==null) {
echo "Seleccione que tipo de privilegio va a tener el nuevo usuario en el sistema.";
die();
}

$pin=password_hash($clave, PASSWORD_DEFAULT);

//Codigo para traer el usuario

require'../codigo/conexion_BD.php';

$guardar_sql="INSERT INTO empleado(cod_empleado,
	nombres,
	apellidos,
	sexo,
	tipodocumento,
	doc_identidad,
	eps,
	pensiones,
	arl,
	edad,
	fecha_nacimiento,
	pais,
	departamento,
	ciudad,
	telefono,
	celular,
	email,
	dir_barrio,
	estudio,
	titulo,
	universidad,
	cargo,
	anioinicio,
	anioretiro,
	tipocontrato,
	tiempocontrato,
	salario,
	pin,
	foto,
	privilegio_admin,
	estado,
	fotcedula,
	fotlibretamilitar,
	foteps,
	fotpensiones,
	fotarl,
	fotrut,
	fotcontraloria,
	fotprocuraduria,
	fotantecedentes,
	fotctabancaria,
	fothdvida,
	fecha_registro,
	fecha_actualizacion)VALUES(:codigo,
		:nombre,
		:apellido,
		:sexo,
		:tipodocumento,
		:docidentidad,
		:eps,
		:pensiones,
		:arl,
		:edad,
		:fenacimiento,
		:pais,
		:departamento,
		:ciudad,
		:telefono,
		:celular,
		:email,
		:dirbarrio,
		:estudio,
		:titulo,
		:universidad,
		:cargo,
		:anioinicio,
		:anioretiro,
		:tipocontrato,
		:tiempocontrato,
		:salario,
		:pin,
		:foto,
		:privilegio,
		:estado,
:fotcedula,
:fotlibretamilitar,
:foteps,
:fotpensiones,
:fotarl,
:fotrut,
:fotcontraloria,
:fotprocuraduria,
:fotantecedentes,
:fotctabancaria,
:fothdvida,
:feregistro,
:feactualizacion)";

$resultado=$conexion->prepare($guardar_sql);

$resultado->execute(array(":codigo"=>$codigo,
":nombre"=>$nombres,
":apellido"=>$apellidos,
":sexo"=>$sexo,
":tipodocumento"=>$tipodoc,
":docidentidad"=>$doc,
":eps"=>$eps,
":pensiones"=>$pensiones,
":arl"=>$arl,
":edad"=>$edad,
":fenacimiento"=>$fechanacimiento,
":pais"=>$pais,
":departamento"=>$departamento,
":ciudad"=>$ciudad,
":telefono"=>$tel,
":celular"=>$cel,
":email"=>$email,
":dirbarrio"=>$dirbar,
":estudio"=>$estudio,
":titulo"=>$titulo,
":universidad"=>$universidad,
":cargo"=>$cargo,
":anioinicio"=>$anioinicio,
":anioretiro"=>$anioretiro,
":tipocontrato"=>$tipocontrato,
":tiempocontrato"=>$tiempocontrato,
":salario"=>$salario,
":pin"=>$pin,
":foto"=>$foto,
":privilegio"=>$privilegio,
":estado"=>$estado,
":fotcedula"=>$fotcedula,
":fotlibretamilitar"=>$fotlibretamilitar,
":foteps"=>$foteps,
":fotpensiones"=>$fotpensiones,
":fotarl"=>$fotarl,
":fotrut"=>$fotrut,
":fotcontraloria"=>$fotcontraloria,
":fotprocuraduria"=>$fotprocuraduria,
":fotantecedentes"=>$fotantecedentes,
":fotctabancaria"=>$fotctabancaria,
":fothdvida"=>$fothdvida,
":feregistro"=>$fecharegistro,
":feactualizacion"=>$fechaactualizacion));

echo"El usuario se ha creado satisfactoriamente.";

	return $conexion;



?>
