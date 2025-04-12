<?PHP
//El administrador del sistema carga el correo al dar click en el monitor

require 'conexion_BD.php';

$id = $_POST['id'];


$consulta="SELECT * FROM programa WHERE id=:id";

$resultado=$conexion->prepare($consulta);

$resultado->execute(array(":id"=>$id));

while($row=$resultado->fetch(PDO::FETCH_ASSOC)){

$num=$row['niveles'];
	 		}

for($i=1;$i<=$num;$i++){
echo $html="<option>".$i."</option>";// ."<option value='".$row['niveles']."'>".$row['niveles']."</option>";

}




?>
