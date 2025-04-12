<?php
$name="";
function backup_tables($host,$user,$pass,$name,$tables = '*')
{
   $return='';
   $link = new mysqli($host,$user,$pass,$name);
  // mysql_select_db($name,$link);

   //get all of the tables
   if($tables == '*')
   {
      $tables = array();
      $result = $link->query('SHOW TABLES');
      while($row = mysqli_fetch_row($result))
      {
         $tables[] = $row[0];
      }
   }
   else
   {
      $tables = is_array($tables) ? $tables : explode(',',$tables);
   }

   //cycle through
   foreach($tables as $table)
   {
      $result = $link->query('SELECT * FROM '.$table);
      $num_fields = mysqli_num_fields($result);


      //$return.= 'DROP TABLE '.$table.';';
      $row2 = mysqli_fetch_row($link->query('SHOW CREATE TABLE '.$table));
      $return.= "\n\n".$row2[1].";\n\n";

    for ($i = 0; $i < $num_fields; $i++)
      {
         while($row = mysqli_fetch_row($result))
         {
            $return.= 'INSERT INTO '.$table.' VALUES(';
            for($j=0; $j<$num_fields; $j++)
            {
               $row[$j] = addslashes($row[$j]);
               $row[$j] = preg_replace("/\n/","\\n",$row[$j]);
               if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
               if ($j<($num_fields-1)) { $return.= ','; }
            }
            $return.= ");\n";
         }
      }
      $return.="\n\n\n";
   }
   $fecha=date("Y-m-d");
   //save file
   $handle = fopen('../backups/db-backup-'.$fecha.'.sql','w+');
    fwrite($handle,$return);
    fclose($handle);
}







































/*
$dbhost = 'sites.luiscarlosmoreno.com';
$dbname = 'juanappcanozaconco';
$dbuser = 'juanmanuelpozapa';
$dbpass = 'oz@conco$uana#pca';

$backup_file = $dbname. "-" .date("Y-m-d-H-i-s"). ".sql";

// comandos a ejecutar
$commands = array(
        "sites.luiscarlosmoreno.com\mysql\bin\mysqldump --opt -h $dbhost -u $dbuser -p$dbpass -v $dbname > $backup_file",
      "bzip2 $backup_file"
);

// ejecución y salida de éxito o errores
foreach ( $commands as $command ) {
        system($command,$output);
        echo $output;
}




$dbhost = 'sites.luiscarlosmoreno.com';
$dbname = 'juanappcanozaconco';
$dbuser = 'juanmanuelpozapa';
$dbpass = 'oz@conco$uana#pca';

$backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';

// comandos a ejecutar
$command = "sites.luiscarlosmoreno.com\mysql\bin\mysqldump --single-transaction  -h $dbhost -u $dbuser -p$dbpass $dbname | gzip > $backup_file";

// ejecución y salida de éxito o errores
system($command,$output);
echo $output;


define("DB_USER", 'juanmanuelpozapa');
define("DB_PASSWORD", 'oz@conco$uana#pca');
define("DB_NAME", 'juanappcanozaconco');
define("DB_HOST", 'sites.luiscarlosmoreno.com');
define("BACKUP_DIR", 'myphp-backup-files/myphp-backup-smf-20160131_111735.sql.gz'); // Comment this line to use same script's directory ('.')
define("TABLES", '*'); // Full backup
//define("TABLES", 'table1 table2 table3'); // Partial backup
define("CHARSET", 'utf8');
define("GZIP_BACKUP_FILE", true); // Set to false if you want plain SQL backup files (not gzipped)




$db_host = 'sites.luiscarlosmoreno.com';
$db_name = 'juanappcanozaconco';
$db_user = 'juanmanuelpozapa';
$db_pass = 'oz@conco$uana#pca';

date_default_timezone_set('America/Bogota');//carga fecha y hora
$fecha = date("Ymd-Hi");

$salida_sql = $db_name.'_'.$fecha.'.sql';

//$dump = 'c:\xampp\mysql\bin\mysqldump --single-transaction -u '.$db_user.' -p'.$db_pass.' '.$db_name.' > '.$salida_sql.'';

$dump = "sites.luiscarlosmoreno.com\mysql\bin\mysqldump --opt  -h $dbhost -u $dbuser -p$dbpass $dbname | gzip > $backup_file";
system($dump, $output);

$salida_zip = $db_name.'_'.$fecha.'.zip';
header("Location: $salida_zip");

$zip = new ZipArchive();
if ($zip->open($salida_zip, ZIPARCHIVE::CREATE) === true)
{

$zip->addFile($salida_sql);
$zip->close();

unlink($salida_sql);

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

}else{
  echo "Error";
}

*/









?>
