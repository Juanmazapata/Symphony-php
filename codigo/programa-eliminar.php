<?php

require 'conexion_BD.php';

$cod_programa=htmlentities(addslashes($_GET['cod']));

$consultar_programa_eliminar_sql="SELECT * FROM programa WHERE id=:id";
    $resultado_programa_eliminar_sql=$conexion->prepare($consultar_programa_eliminar_sql);
    $resultado_programa_eliminar_sql->execute(array(":id"=>$cod_programa));

    while($fila=$resultado_programa_eliminar_sql->fetch(PDO::FETCH_ASSOC)){

      $logo_cargar=$fila['logotipo'];

}

      $fichero_logotipo="../logotipo_programa/$logo_cargar";
      array_map('unlink', glob($fichero_logotipo));


$eliminar_programa_sql="DELETE FROM programa WHERE id = :id";
$resultado= $conexion->prepare($eliminar_programa_sql);
$resultado->execute(array(":id"=>$cod_programa));

echo "Se ha eliminado el registro satisfactoriamente.";

 ?>
