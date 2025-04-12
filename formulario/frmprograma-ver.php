<?php
require "../codigo/proteger-formulario.php";

require "../codigo/conexion_BD.php";

//session_start();

// $recibido= $_SESSION['saludo'];
//
// $envio= $_SESSION['reenvio']=$recibido;

$dato=$_GET['cod'];

$datos=$dato;

$consultar_programa_ver_sql="SELECT * FROM programa WHERE id=:id";
    $resultado_programa_ver_sql=$conexion->prepare($consultar_programa_ver_sql);
    $resultado_programa_ver_sql->execute(array(":id"=>$datos));

    while($fila=$resultado_programa_ver_sql->fetch(PDO::FETCH_ASSOC)){
$nom_programa=$fila["nom_programa"]; //carga el programa
$descripcion=$fila["descripcion"];
$realizacion=$fila["dias_realizo"];
$hinicio_M=$fila["h_inicio_M"];
$hfinal_M=$fila["h_finalizacion_M"];
$hinicio_T=$fila["h_inicio_T"];
$hfinal_T=$fila["h_finalizacion_T"];
$hinicio_N=$fila["h_inicio_N"];
$hfinal_N=$fila["h_finalizacion_N"];
$director=$fila["director"];
$monitor1=$fila["monitor1"];
$cargo1=$fila["cargo1"];
$monitor2=$fila["monitor2"];
$cargo2=$fila["cargo2"];
$monitor3=$fila["monitor3"];
$cargo3=$fila["cargo3"];
$monitor4=$fila["monitor4"];
$cargo4=$fila["cargo4"];
$monitor5=$fila["monitor5"];
$cargo5=$fila["cargo5"];
$repertorio=$fila["repertorio"];
$logotipo=$fila["logotipo"];
$nomusuario=$fila["usuario"];
$fecha=$fila["f_registro"];
$f_registro=$fila["f_actualizacion"];

    }



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmprograma-ver.css" rel="stylesheet" type="text/css"><!--estilos css-->

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../script/pestañas-frmperfil-ver.js"></script>

<script type="text/javascript" src="../script/anexos.js"></script>

<script type="text/javascript" src="../script/all(iconos-java).js"></script>

<script type="text/javascript" src="../script/imprimir-anexo.js"></script>

<script type="text/javascript" src="../script/imprimir-frmprograma-ver.js"></script>



</head>
<body>

<div id="cargar-formulario-programa-ver">



<form>


<div id="dat-pro-ver">

<style type="text/css" scoped="true" media="print">

    @font-face {

	font-family:Philosopher-Italic;
  font-family:Philosopher-Bold;
	src:local(Philosopher-Italic);
  	src:local(Philosopher-Bold);
	src:url(../estilos/Philosopher-Italic.ttf);

	}

h1{
	background-color:blue;
	color:#F3F1F2;
	font-size:1.5em;
	margin-left:5px;
	margin-bottom:1px;
	padding:5px;
    font-family:Philosopher-Italic;

	}

    h2{
	background:#5C6B8C;
	color:#F3F1F2;
	font-size:1.5em;
	margin-left:5px;
	margin-bottom:10px;
	padding:5px;
    font-family:Philosopher-Italic;
	}



   fieldset{
	background:#F3F1F2;
	margin-top:2%;
	margin-left:25px;
	width:90%;
	   border: black solid;
	font-family:Philosopher-Italic;
	}


     label, p{
	font-family:Philosopher-Italic;
         }

         #dvlogoprograma{
           background:#0A0A0C;
           padding:1px;
         	margin-top:10px;
         	margin-left:39%;
         width:200px;
         height: 200px;
           position: relative;
         float: left;

         }

         #dvlogoprograma img{
           width:100%;
           height: 100%;
           background:#F3F1F2;
           border:1px solid #0A0A0C;
           padding: 3px;
           position: absolute;
           top:-10px;
         	left:-10px;
         }

         .contenido{
         	margin:5px;

         		}

         		.contenido .tit-programa-ver{
line-height: 27px;
         	width: 180px;
                 	margin-top: 0;
                  margin-left: 0;
float: left;
border: yellow dotted;
         			}

         .contenido .tit-programa-ver li{

text-align: right;
         	margin:5px;
         	list-style:none;

         	}

         	.contenido .def-programa-ver{
         		font-size: 1.4em;
         		line-height: 32.5px;
         			margin-top: 0;
         			margin-left: -5%;
         width: 400px;
float: left;
border: gold dotted;

         		}

         .contenido .def-programa-ver li{

         text-align: left;

         list-style:none;

         }

         .contenido .tit2-programa-ver{
line-height: 27px;
         width: 188px;
         margin-top: 0;
         margin-left: -1%;
         float: left;
         border: blue dotted;
         	}

         .contenido .tit2-programa-ver li{

 text-align: right;
margin-right: 5px;
         list-style:none;

         }

         .contenido .def2-programa-ver{
         	font-size: 0.8em;
         	margin-top: 1.2%;
         		margin-left: -5%;
         width: 400px;
         float: left;
         border: violet dotted;
         	}

         .contenido .def2-programa-ver li{

         text-align: justify;
         margin:0;
         list-style:none;

         }

         .contenido .tit3-programa-ver{

         width: 189px;
         margin-top: 0.5%;
         margin-left: -230px;
         float: left;
         border: red dotted;

         	}

         .contenido .tit3-programa-ver li{
	line-height: 10px;
         text-align: right;
         margin-left:-550px;
         list-style:none;

         }

         .contenido .def3-programa-ver{
         font-size: 0.6EM;
         font-family:Philosopher-Bold;
         margin-top: 0.5%;
         margin-left: -5.15%;
         width: 400px;
         float: left;
 border: brown dotted;
         	}

         .contenido .def3-programa-ver li{

         text-align: justify;
         margin-left:0;
         list-style:none;
         line-height: 10px;
         }

         .contenido .tit4-programa-ver{
         	font-size: 0.6EM;
         width: 200px;
         margin-top: 1%;
         margin-left:-1%;
         float: left;
         font-family:Philosopher-Bold;
border: green dotted;
         	}

         .contenido .tit4-programa-ver li{
         text-align: left;
margin-left: -20%;
         list-style:none;


         }

         #fsleyenda h2{
         	background:#5C6B8C;
         	color:#F3F1F2;
         	font-size:1.5em;
         	margin-left:5px;
         	margin-bottom:10px;
         	padding:5px;
         	}


         p{
         	text-align:right;


         	}


    button {
        display: none;
    }

    .contenido .firma-programa-ver{
  display: block;
  font-size: 1EM;
 width: 95%;
 margin-top: 0;
 margin-left:-1%;
 float: left;
 font-family:Philosopher-Bold;
border: palegreen dotted;

    }

.contenido .firma-programa-ver li{
  text-align: center;
margin-left: 0;
  list-style:none;

}


</style><!--Estilo css para hoja de inpresion va en este lugar para que la impresion reconozca estos estilos-->

<fieldset id="fsleyenda" >



<legend><h1>PROGRAMA</h1></legend>

<div class="programa-ver">

<div class="contenido" >

<div id="dvlogoprograma">
  <?php if($logotipo!="logotipo-programa.png") {?>
<img src="../logotipo_programa/<?php echo $logotipo; ?>">
<?php }else{ ?>
  <img src="../imagenes/<?php echo $logotipo; ?>">
<?php } ?>
</div>

<ul class="tit-programa-ver">

<li>Nombres del Programa:</li>
<li>Nombres del Director:</li>
<li>Nombres del Monitor:</li>
<li>Cargo del Monitor:</li>
<li>Dias de Realización:</li>
<li>Horario de la Mañana:</li>
<li>Horario de la Tarde:</li>
<li>Horario de la Noche:</li>
<li>Repertorio:</li>

</ul>

<ul class="def-programa-ver">
<li><?php echo $nom_programa; ?></li>
<li><?php echo $director; ?></li>
<li><?php echo $monitor1; ?></li>
<li><?php echo $cargo1; ?></li>
<li><?php echo $realizacion; ?></li>
<li><?php echo $hinicio_M . " a " . $hfinal_M ?></li>
<li><?php echo $hinicio_T . " a " .  $hfinal_T;?></li>
<li><?php echo $hinicio_N . " a " . $hfinal_N; ?></li>
<li><?php echo $repertorio; ?></li>

</ul>

<ul class="tit2-programa-ver">

  <li>Descripcion del Programa:</li>

</ul>

<ul class="def2-programa-ver">

  <li><?php echo $descripcion; ?></li>

</ul>


<ul class="tit3-programa-ver">

<li>Otros Monitores / cargos:</li>

</ul>

<ul class="def3-programa-ver">

<li><?php echo $monitor2."  /  ". $cargo2; ?></li>
<li><?php echo $monitor3."  /  ". $cargo3; ?></li>
<li><?php echo $monitor4."  /  ". $cargo4; ?></li>
<li><?php echo $monitor5."  /  ". $cargo5; ?></li>

</ul>

<ul class="tit4-programa-ver">

  <li>Editó:  <?php echo " ". $nomusuario; ?></li>
  <li>Fecha de Creación: <?php echo " ". $fecha; ?></li>
  <li>Fecha de actualización: <?php echo " ". $f_registro; ?></li>

</ul>

<ul class="firma-programa-ver" hidden>
  <li>Firma:______________________________________</li>
  <li>C.C.:</li>
</ul>

</div>

  </div>

</fieldset>
</div>

<div class="dvbtnimprimir-verprograma">
<button id="btnimprimir-verprograma" class="btnimprimir-verprograma" onclick="imprimir_programa_ver()">Imprimir</button>&nbsp; &nbsp;<button id="btnvolver-verprograma"  class="btnvolver-verprograma" onclick="volver()">Volver</button>
</div>

</form id="fmprograma-ver">
</div>


</body>
</html>
