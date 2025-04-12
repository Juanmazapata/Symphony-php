<?php

require 'conexion_BD.php';

$logo="";

$consulta=$conexion->query("SELECT * FROM institucion");

while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
		
		$logo=$fila["logotipo"]	;				
	
		}			
		echo"<img src='data:image/jpeg; base64," . base64_encode($logo) .  "'>" ;
		
						
			?>