<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $servidor="107.180.41.149";
    $user="juanmanuelpozapa";
    $password="oz@conco@uana#pca";
    $db="juanappcanozaconco";
/*
    $conexion = new mysqli($servidor, $user, $password, $db);

    if ($conexion->connect_error) {
    die("conexion fallida:".$conexion->connect_error);

    }
    */
    /*
    $sql_db = "CREATE DATABASE nombre de la base de datos";

    if ($conexion->query($sql_db)===true) {
    echo "La base de datos se creó satisfactoriamente."
    }else{

      die("Error al crar base de datos:".$conexion->error);
    }
    */

    /*
    $sql_crear_tabla ="CREATE TABLE nombre de la tabla(nombre del campo tipo caracteres nulo o no)";

    if ($conexion->query($sql_crear_tabla)===true) {
    echo :"la tabla se creó satisfactoriamente.";
    }else{
    die( "error al crear tabla." $conexion->error);
    }
    */
/*
    $QUERY= "ALTER TABLE appconfig
    ADD ensayo2 int(2) NULL AFTER url";

    $conexion->query($QUERY);
*/

try {
        $base_de_datos = new PDO("mysql:host=$servidor;dbname=$db",
              $user, $password);

              $sql_eliminar_tabla="DELETE FROM programa WHERE id = 0";
              $base_de_datos->query($sql_eliminar_tabla);



    } catch (Exception $e) {
        echo "Ocurrió algo con la base de datos: " . $e->getMessage();
    }





  /*  return $base_de_datos
        ->query("SELECT COLUMN_NAME AS columna, COLUMN_TYPE AS tipo
            FROM information_schema.columns WHERE
            table_schema = '$db'
            AND table_name = 'programa'")
        ->fetchAll(PDO::FETCH_OBJ);
*/

/* agregar celdas
$QUERY= "ALTER TABLE programa
ADD niveles int(2) NULL AFTER descripcion";

$base_de_datos->query($QUERY);

*/


     ?>

  </body>
</html>
