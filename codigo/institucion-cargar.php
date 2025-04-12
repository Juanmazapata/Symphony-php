<?PHP



require 'conexion_BD.php';

$codigo=0;
$institucion="";
$nit="";
$ciudad="";
$direccion="";
$telefono="";
$celular="";
$fax="";
$correo="";
$web="";
$director="";
$logotipo="";

		$consulta=$conexion->query("SELECT * FROM institucion");

 while($row=$consulta->fetch(PDO::FETCH_ASSOC)){

	$codigo=$row['id'];
	$institucion=$row['nom_institucion'];
	$nit=$row['nit'];
	$ciudad=$row['ciudad'];
	$direccion=$row['direccion'];
	$telefono=$row['telefono'];
	$celular=$row['celular'];
	$fax=$row['fax'];
	$correo=$row['correo'];
	$web=$row['web'];
	$director=$row['director'];
	$logotipo=$row['logotipo_institucion'];

		}



?>
