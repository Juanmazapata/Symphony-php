<?php

/*
$db_host = '107.180.41.149';
$db_name = 'juanappcanozaconco';
$db_user = 'juanmanuelpozapa';
$db_pass = 'oz@conco@uana#pca';



date_default_timezone_set('America/Bogota');//carga fecha y hora
$fecha = date("Ymd-Hi");

$salida_sql = $db_name.'_'.$fecha.'.sql';

//$dump = 'c:\xampp\mysql\bin\mysqldump --single-transaction -u '.$db_user.' -p'.$db_pass.' '.$db_name.' > '.$salida_sql.'';

$dump = 'mysqldump --single-transaction -u '.$db_user.' -p'.$db_pass.' '.$db_name.' | gzip >'.$salida_sql.'.gz';

system($dump, $output);

$salida_zip = $db_name.'_'.$fecha.'.zip';

*/



$zip = new ZipArchive();
$archivo="prueba.zip";
if ($zip->open($archivo, ZIPARCHIVE::OVERWRITE) === true)
{

$zip->dir("../anexos_alumno");
$zip->close();

/*


header("Content-type: MIME");

readfile("../backups/"$salida_zip);
//unlink($salida_sql);
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

header("Content-type: application:/octet-stream");
header("Content-disposition: attachment; filename=$archivo");
echo $zip->file();









?>
