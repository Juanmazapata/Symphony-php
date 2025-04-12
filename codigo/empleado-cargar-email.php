<?PHP
//El administrador del sistema carga el correo al dar click en el monitor
require 'conexion_BD.php';

$cod_empleado = $_POST['cod_empleado'];

		$consulta="SELECT * FROM empleado WHERE cod_empleado=:cod_empleado";

$resultado=$conexion->prepare($consulta);

$resultado->execute(array(":cod_empleado"=>$cod_empleado));
		while($row=$resultado->fetch(PDO::FETCH_ASSOC)){

		$email=$row['email'];


	 		}
echo $email;


?>
