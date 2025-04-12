<?php

require 'conexion_BD.php';

$cod_matricula=htmlentities(addslashes($_GET['cod']));

$consultar_matricula_eliminar_sql="SELECT * FROM matricula WHERE nro_matricula=:nromat";
    $resultado_matricula_eliminar_sql=$conexion->prepare($consultar_matricula_eliminar_sql);
    $resultado_matricula_eliminar_sql->execute(array(":nromat"=>$cod_matricula));

    while($fila=$resultado_matricula_eliminar_sql->fetch(PDO::FETCH_ASSOC)){

      $fotocargar=$fila['foto'];
      $fot_docident=$fila['fot_docident'];
      $fot_eps=$fila['fot_eps'];

}

      $fichero_foto="../fotos_alumno/$fotocargar";
      array_map('unlink', glob($fichero_foto));

      $fichero_docident="../anexos_alumno/$fot_docident";
      array_map('unlink', glob($fichero_docident));

      $fichero_EPS="../anexos_alumno/$fot_eps";
      array_map('unlink', glob($fichero_EPS));

$eliminar_matricula_sql="DELETE FROM matricula WHERE nro_matricula = :nro_matricula";
$resultado= $conexion->prepare($eliminar_matricula_sql);
$resultado->execute(array(":nro_matricula"=>$cod_matricula));

echo "Se ha eliminado el registro satisfactoriamente.";

 ?>
