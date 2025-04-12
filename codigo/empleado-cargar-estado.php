<?PHP

require 'conexion_BD.php';

$cod_empleado = $_POST['cod_empleado'];



		$consulta="SELECT * FROM empleado WHERE cod_empleado=:cod_empleado";
		$resultado=$conexion->prepare($consulta);

		$resultado->execute(array(":cod_empleado"=>$cod_empleado));

$html="<option value='0'>seleccionar Monitor</option><option value='Habilitado'>Habilitado</option><option value='Inhabilitado'>Inhabilitado</option>";

		while($row=$resultado->fetch(PDO::FETCH_ASSOC)){


$html="<option value='".$row['estado']."'>".$row['estado']."</option> <option value='Habilitado'>Habilitado</option> <option value='Inhabilitado'>Inhabilitado</option>" ;

	 		}

echo $html;

?>
