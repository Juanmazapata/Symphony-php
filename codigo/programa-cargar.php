<?PHP

require 'conexion_BD.php';

/*session_start();
$nrodoc=$_SESSION["doc"];trae dato de otro formulario*/


date_default_timezone_set('America/Bogota');//carga fecha y hora

		$consulta=$conexion->query("SELECT * FROM empleado WHERE doc_identidad<>'71495732'");

		$codigo_sql=$conexion->query("SELECT MAX(id) AS id FROM programa");

		$repertorio_sql=$conexion->query("SELECT * FROM repertorio_banda");


		///////////////////PAGINACION//////////////////////////////////

		$tamanio_paginas=1;

		$pagina=1;

		$inicio_desde=($pagina-1) * $tamanio_paginas;

$programas=$conexion->query("SELECT * FROM programa ");

$num_filas=$programas->rowCount();


?>
