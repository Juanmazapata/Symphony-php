<?php



try{


	$conexion=new PDO ('mysql:host=82.197.82.123; dbname=u441839449_juanappcanozac', 'u441839449_juanmanuelpoza', 'yhj$q*Q1');
$conexion->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET UTF8");



 }catch(Exception $e){
	 die('Error: ' . $e->getmessage());
	 	echo "Linea de error" .  $e->getLine();
	 }

	return $conexion;


?>
