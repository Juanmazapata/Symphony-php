<?PHP
//El administrador del sistema carga el correo al dar click en el monitor

require 'conexion_BD.php';

$consultar_programa_ver_encabezado_pie_sql=$conexion->query("SELECT * FROM institucion");

	while($row=$consultar_programa_ver_encabezado_pie_sql->fetch(PDO::FETCH_ASSOC)){

$nom_institucion=$row['nom_institucion'];
$nit_institucion=$row['nit'];
$ciudad_institucion=$row['ciudad'];
$direccion_institucion=$row['direccion'];
$telefono_institucion=$row['telefono'];
$celular_institucion=$row['celular'];
$fax_institucion=$row['fax'];
$correo_institucion=$row['correo'];
$web_institucion=$row['web'];
$director_institucion=$row['director'];
$logotipo_institucion=$row['logotipo_institucion'];

}

$consulta="SELECT * FROM empleado WHERE cod_empleado=:codigo";

$resultado=$conexion->prepare($consulta);

$codigo="";
$nombres="";
$apellidos="";
$sexo="";
$tipodocumento="";
$doc_identidad="";
$eps="";
$pensiones="";
$arl="";
$edad="";
$f_nacimiento="";
$pais="";
$departamento="";
$ciudad="";
$telefono="";
$celular="";
$email="";
$dir_barrio="";
$estudio="";
$titulo="";
$universidad="";
$cargo="";
$anioinicio="";
$anioretiro="";
$tipocontrato="";
$tiempocontrato="";
$salario="";
$contrasenia="";
$nomape="";
$ape="hola";
$fotocargar="";
$fotcedula_cargar="";
$fotlibretamilitar_cargar="";
$foteps_cargar="";
$fotpensiones_cargar="";
$fotarl_cargar="";
$fotrut_cargar="";
$fotcontraloria_cargar="";
$fotprocuraduria_cargar="";
$fotantecedentes_cargar="";
$fotctabancaria_cargar="";
$fothdvida_cargar="";

	$rpta_fotcedula="";
	$rpta_fotEPS="";
	$rpta_fotpensiones="";
	$rpta_fotARL="";
	$rpta_fotRUT="";
	$rpta_fotcontraloria="";
	$rpta_fotprocuraduria="";
	$rpta_fotantecedentes="";
	$rpta_fotctabancaria="";
	$rpta_fothdvida="";
	$rpta_fotLM="";
$rpta_estudio="";

$resultado->execute(array(":codigo"=>$codigo_empleado));
		while($row=$resultado->fetch(PDO::FETCH_ASSOC)){

$codigo=$row['cod_empleado'];
$nombres=$row['nombres'];
$apellidos=$row['apellidos'];
$sexo=$row['sexo'];
$tipodocumento=$row['tipodocumento'];
$doc_identidad=$row['doc_identidad'];
$eps=$row['eps'];
$pensiones=$row['pensiones'];
$arl=$row['arl'];
$edad=$row['edad'];
$f_nacimiento=$row['fecha_nacimiento'];
$pais=$row['pais'];
$departamento=$row['departamento'];
$ciudad=$row['ciudad'];
$telefono=$row['telefono'];
$celular=$row['celular'];
$email=$row['email'];
$dir_barrio=$row['dir_barrio'];
$estudio=$row['estudio'];
$titulo=$row['titulo'];
$universidad=$row['universidad'];
$cargo=$row['cargo'];
$anioinicio=$row['anioinicio'];
$anioretiro=$row['anioretiro'];
$tipocontrato=$row['tipocontrato'];
$tiempocontrato=$row['tiempocontrato'];
$salario=$row['salario'];
$contrasenia=$row['pin'];
$fotocargar=$row['foto'];
$fotcedula_cargar=$row['fotcedula'];
$fotLM_cargar=$row['fotlibretamilitar'];
$foteps_cargar=$row['foteps'];
$fotpensiones_cargar=$row['fotpensiones'];
$fotARL_cargar=$row['fotarl'];
$fotRUT_cargar=$row['fotrut'];
$fotcontraloria_cargar=$row['fotcontraloria'];
$fotprocuraduria_cargar=$row['fotprocuraduria'];
$fotAJ_cargar=$row['fotantecedentes'];
$fotCB_cargar=$row['fotctabancaria'];
$fotHV_cargar=$row['fothdvida'];

$ext_cedula_cargar = pathinfo($fotcedula_cargar, PATHINFO_EXTENSION);

$ext_EPS_cargar = pathinfo($foteps_cargar, PATHINFO_EXTENSION);

$ext_pensiones_cargar= pathinfo($fotpensiones_cargar, PATHINFO_EXTENSION);

$ext_ARL_cargar= pathinfo($fotARL_cargar, PATHINFO_EXTENSION);

$ext_RUT_cargar= pathinfo($fotRUT_cargar, PATHINFO_EXTENSION);

$ext_contraloria_cargar= pathinfo($fotcontraloria_cargar, PATHINFO_EXTENSION);

$ext_procuraduria_cargar= pathinfo($fotprocuraduria_cargar, PATHINFO_EXTENSION);

$ext_AJ_cargar= pathinfo($fotAJ_cargar, PATHINFO_EXTENSION);

$ext_CB_cargar= pathinfo($fotCB_cargar, PATHINFO_EXTENSION);

$ext_LM_cargar= pathinfo($fotLM_cargar, PATHINFO_EXTENSION);

$ext_HV_cargar= pathinfo($fotHV_cargar, PATHINFO_EXTENSION);

	 		}

			if ($nombres==="NUEVO" && $apellidos==="USUARIO") {
				$nombres="NUEVO USUARIO";
				$apellidos="";
			}

			if ($pais===null && $departamento===null && $ciudad===null) {
				$pais="Colombia";
				$departamento="Antioquia";
				$ciudad="Concordia";
			}

			if ($estudio==="diptectecnologia") {
				$rpta_estudio="Diplomado - Técnica - Técnologia";
			}

			if ($tipodocumento==="C.C.") {
				$rpta_tipodocumento="Cédula Ciudadanía";
			}elseif ($tipodocumento==="T.I.") {
					$rpta_tipodocumento="Tarjeta Identidad";
			}elseif ($tipodocumento="C.E.") {
			$rpta_tipodocumento="Cédula Extranjería";
			}
?>
