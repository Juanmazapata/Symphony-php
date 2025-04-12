<?PHP
//El administrador del sistema carga el correo al dar click en el monitor

require 'conexion_BD.php';

$id = $_POST['id'];

if ($id==="0") {
	echo $director="-";
}elseif ($id==="02") {
	echo $director="-";
}elseif ($id==="03") {
	echo $director="-";
}else{
		$consulta="SELECT * FROM programa WHERE id=:id";

$resultado=$conexion->prepare($consulta);

$resultado->execute(array(":id"=>$id));
		while($row=$resultado->fetch(PDO::FETCH_ASSOC)){

		$director=$row['director'];

	 		}


echo $director;
}

?>
