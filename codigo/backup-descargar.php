<?php
include ("backup_BD.php");

echo backup_tables("107.180.41.149","juanmanuelpozapa","oz@conco@uana#pca","juanappcanozaconco");
date_default_timezone_set('America/Bogota');
$fecha=date("Y-m-d");
header("Content-disposition: attachment; filename=db-backup-".$fecha.".sql");
header("Content-type: MIME");

$db_backup="db_backup-".$fecha.".sql";

$salida_zip = "db_backup-".$fecha.'.zip';

$zip = new ZipArchive();
if ($zip->open($salida_zip, ZIPARCHIVE::CREATE) === true)
{

$zip->addFile($db_backup);
$zip->close();

//unlink($db_backup);
/*
$total = " ";
$segundos = " ";
for ($segundos = 0; $segundos <= 3; $segundos++)
{
//Para cada iteración 1 segundo
sleep($segundos);
$total = $segundos;
}

if ($total===3) {

include "quitar-fichero.php";

}
*/
}else{
  echo "Error";
}
readfile("../backups/db-backup".$salida_zip);
