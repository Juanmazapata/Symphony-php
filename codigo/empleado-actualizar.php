<?php
//el administrador del sistema actualiza los privilegios o estado del monitor.

$monitor=htmlentities(addslashes($_POST['slmonitor']));

$privilegio=htmlentities(addslashes($_POST['slprivilegioact']));

$estado=htmlentities(addslashes($_POST['slestadoact']));

$email=htmlentities(addslashes($_POST['txtactemail']));

date_default_timezone_set('America/Bogota');//carga fecha y hora
$fecha=date('d/m/y/h:i a');

$fechaactualizacion=$fecha;

if ($monitor=='0') {
echo'Debe seleccionar el monitor';
die();
}

if($email==null){
	echo "email es un campo obligatorio, debe tener registro.";
die();
}elseif ($privilegio==null) {
echo "Seleccione que tipo de privilegio va a tener el nuevo usuario en el sistema.";
die();
}

require'../codigo/conexion_BD.php';


$actualizar_sql="UPDATE empleado SET privilegio_admin=:privilegio,estado=:estado,email=:email,fecha_actualizacion=:feactualizacion WHERE cod_empleado=:codigo";

$resultado=$conexion->prepare($actualizar_sql);

$resultado->execute(array(":codigo"=>$monitor,":privilegio"=>$privilegio,":estado"=>$estado,":email"=>$email,":feactualizacion"=>$fechaactualizacion));

echo"El usuario se ha actualizado satisfactoriamente.";

	return $conexion;



?>
