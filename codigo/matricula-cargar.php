<?PHP

require 'conexion_BD.php';

/*session_start();
$nrodoc=$_SESSION["doc"];trae dato de otro formulario*/

date_default_timezone_set('America/Bogota');//carga fecha y hora

$nomusuario="";


$num_programa1="";
$num_programa2="";
$num_programa3="";

$nom_programa1="";
$nom_programa2="";
/*
$nom_programa3="";
*/


		$consulta=$conexion->query("SELECT * FROM programa");

		$codigo_sql=$conexion->query("SELECT MAX(id) AS id FROM programa");


$programas=$conexion->query("SELECT * FROM programa");

$consulta_matricula_sql=$conexion->query("SELECT * FROM matricula");


$d1=rand(0, 9);
$d2=rand(0, 9);
$d3=rand(0, 9);
$d4=rand(0, 9);
$d5=rand(0, 9);

$cod_matricula =  'CEMMAT-' . $d1 . $d2 . $d3 . $d4 . $d5;

///////////////////PAGINACION//////////////////////////////////

$tamanio_paginas=1;

$pagina=1;

$inicio_desde=($pagina-1) * $tamanio_paginas;

$matriculas_sql=$conexion->query("SELECT * FROM matricula ");

$num_filas=$matriculas_sql->rowCount();




?>
