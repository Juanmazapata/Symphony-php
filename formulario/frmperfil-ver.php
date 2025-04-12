<?php
//require"../codigo/proteger-formulario.php";

SESSION_START();
$codigo_empleado=$_SESSION["codigo"];
require '../codigo/acentos.php';
require '../codigo/perfil-cargar.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../estilos/reset.css" rel="stylesheet" type="text/css">

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css">

<link href="../estilos/frmperfil-ver.css" rel="stylesheet" type="text/css"><!--estilos css-->

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../script/pestañas-frmperfil-ver.js"></script>

<script type="text/javascript" src="../script/anexos.js"></script>

<script type="text/javascript" src="../script/all(iconos-java).js"></script>

<script type="text/javascript" src="../script/imprimir-anexo.js"></script>

<script type="text/javascript" src="../script/imprimir-frmperfil-ver.js"></script>

</head>
<body>


<form>

<div id="dat-per">

<style type="text/css" scoped="true" media="print">

    @font-face {

	font-family:Philosopher-Italic;
	src:local(Philosopher-Italic);
	src:url(../estilos/Philosopher-Italic.ttf);
	}

  body{
      position: relative;
  }

    #dvfotousuario{
display: block;
	background:#0A0A0C;
	padding:1px;
	/*margin-top:10px;
	margin-left:50px;*/
	width:70px;
	height:90px;
	position:relative;
        position: absolute;
        left:76px;
        top:140px;
	}

#dvfotousuario img{
	background:#F3F1F2;
	width:70px;
	height:90px;
	border:1px solid #0A0A0C;
	padding:3px;
	position:absolute;
	top:-8px;
	left:-8px;

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
	margin-top:2%;   /*2*/
	margin-left:25px;
	width:90%;
	   border: black solid;

	}

  .fsleyenda1{
 background:#F3F1F2;
 margin-top:11%;   /*2*/
 margin-left:25px;
 width:90%;
    border: black solid;

 }

.fsleyenda3{
background:#F3F1F2;
position: absolute;
top: 108.3%;
width:90%;
   border: black solid;

}

.fsleyenda4{
background:#F3F1F2;
position: absolute;
top: 138%;
width:90%;
   border: black solid;

}

    ul{
    line-height: 27px;
    list-style:none;
			}


   li{
    margin-top: -1px;
	padding:2px;
	line-height: 25px;
    text-align: right;
    margin-left: 255px;
    position: relative;
    margin:5px;
	float:left;
width: 37%;
	}

     label, p{
	font-family:Philosopher-Italic;
         }

    #item{

        position:absolute;
left:212px;
top:-26.4px;
width: 300px;
font-size: 25px

    }


    #item3{
position: absolute;
top:-1px;
left: 178px;
width: 300px;
font-size: 25px;
}

    #item4{
position: absolute;
top:30px;
left: 44px;
width: 300px;
font-size: 20px;
}

    #item5{
position: absolute;
top:55px;
left: 20px;
width: 300px;
font-size: 20px;

}

#item6{
position: absolute;

top: 80px;
left: 238px;
width: 330px;
font-size: 20px;

}


#item8{
position: absolute;

top:105px;
left: 14px;
width: 300px;
font-size: 20px;
}

#item9{
position: absolute;

top:130px;
left: 104px;
width: 300px;
font-size: 20px;
}

#item10{
position: absolute;

top:156px;
left: 138px;
width: 300px;
font-size: 20px;
}

 #item11{
position: absolute;

top: -16.2px;
left: 253px;
font-size: 18px;
}

#item12{
position: absolute;
width: 50%;
top: 9px;
left: 215px;
font-size: 18px;
}


#item13{
position: absolute;
top: 33px;
left: 252px;
font-size: 18px;
}

#item14{
position: absolute;
top: 59px;
left: 252px;
font-size: 18px;
}

#item15{
position: absolute;
top: 84px;
left: 252px;
font-size: 18px;
}

#item16{
position: absolute;
top: 109px;
left: 252px;
font-size: 18px;
}

#item17{
position: absolute;
top: 134px;
left: 252px;
font-size: 18px;
}

#item18{
position: absolute;
top: 158.2px;
left: 252px;
font-size: 18px;
}

#item19{
position: absolute;
top: 183.7px;
left: 213px;
font-size: 18px;
width: 300px;
}

#item20{
position: absolute;
width: 300px;
top: -16px;
left: 142px;
font-size: 18px;
}

#item21{
position: absolute;
top: 9px;
left: 252px;
font-size: 18px;
}

#item22{
position: absolute;
top: 34px;
left: 252px;
font-size: 18px;
}

#item23{
position: absolute;
top: 59px;
left: 252px;
font-size: 18px;
}

#item24{
position: absolute;
top: 84px;
left: 15px;
font-size: 18px;
width: 300px;
}

#item25{
position: absolute;
top: 109px;
left: 252px;
font-size: 18px;
}

#item26{
position: absolute;
text-align: left;
top: -16px;
left: 252px;
width: 300px;
font-size: 18px;
}

#item27{
position: absolute;
text-align: left;
top: 9px;
left: 252px;
width: 400px;
font-size: 18px;

}

#item28{
position: absolute;
text-align: left;
top: 34px;
left: 252px;
width: 400px;
font-size: 18px;
}

    button {
        display: none;
    }

.firma{
    display: block;
    position: absolute;
    top:164%;
    width: 100%;
    font-family:Philosopher;
  font-size: 0.9em;
padding-left: 5.5%;

}
.firma ul{
    width: 100%;
    padding: 0;
    border:

}

.firma ul li{
  float: left;
  width: 46%;
  text-align: left;
  margin-bottom: -2%;
}

#li{
  margin-right: 36px;
  float: right;

}

.encabezado{
display:flex;
width: 100%;


}

.encabezado ul{

  margin-top: 3%;
  width: 100%;
position: fixed;
font-family:Philosopher;

}

.encabezado ul li{
  margin-left: 60px;
  width: 60%;
text-align: center;
margin-top: -2%;

}

#logo{
  float: right;
  width:15%;
  margin-right: 70px;
  margin-left: 0;
margin-top: -4.2%;

}

#logo img{

width: 90px;
height: 90px;

}

.pie{
  position: fixed;
  width: 100%;
  display:flex;
font-family:Philosopher;
margin-top: 17%;

}


.pie ul{
  width: 100%;

}

.pie ul li{
  width: 100%;
  text-align: center;
  margin-left: -28px;
  margin-bottom: -2%;
color: rgb(166,166,166);
}

</style><!--Estilo css para hoja de inpresion va en este lugar para que la impresion reconozca estos estilos-->

<div class="encabezado" hidden>
  <ul>
  <?php
  $logotipo="";
  if ($logotipo!=""){
  ?>
    <li id="logo"> <img src="../imagenes/<?php echo $logotipo_institucion; ?>"></li>
	<?php
  }else{
		?>

		 <li id="logo"> <img src="../imagenes/<?php echo "cortina-logotipo-institucion.png"; ?>"></li>

		 	<?php
  }
		?>

    <li><?php  echo $nom_institucion;  ?></li>
    <li>Nit:<?php  echo " ".$nit_institucion;  ?></li>


  </ul>

</div>


<fieldset id="fsleyenda" class="fsleyenda1" >

<legend><h1>MONITOR</h1></legend>
<div class="contenido" >

<div id="dvfotousuario" hidden>
  <?php if($fotocargar!="cortina-symphony.jpg") {?>
<img src="../fotos_empleado/<?php echo $fotocargar; ?>">
<?php }else{ ?>
  <img src="../imagenes/<?php echo $foto; ?>">
<?php } ?>
</div>

<ul class="monitor">
<li>
<span>
  <label for="txtnomempleado">Nombres:</label></br>
<p id="item"><?php echo $nombres=DarAcento($nombres); ?></p>

  <label for="txtapellempleado">Apellidos:</label></br>
<p id="item3"><?php echo $apellidos=DarAcento($apellidos); ?></p>

  <label for="txtcodempleado">Código Empleado:</label></br>
<p id="item4"><?php echo $codigo_empleado;  ?></p>

  <label for="slsexo">Sexo:</label></br>
  <p id="item5"><?php echo $sexo;  ?></p>

  <label for="sltipodocumento">Tipo Documento:</label></br>
  <p id="item6"><?php echo $rpta_tipodocumento . " Número: " . $doc_identidad ?></p>


  <label for="txteps">EPS:</label></br>
  <p id="item8"><?php echo $eps;  ?></p>

  <label for="txtpension">Fondo Pensión:</label></br>
  <p id="item9"><?php echo $pensiones;  ?></p>

  <label for="txtarl">ARL:</label></br>
  <p id="item10"><?php echo $arl;  ?></p>
</span>
</li>
</ul>

</div>

<div class="dvbtnactualizar">
<button id="btnimprimir-verperfil" class="btnactualizar" onclick="imprimir()">Imprimir</button>
</div>



</fieldset>




</div>


<div class="pestañas">

<ul class="pestaña">
  <li><a href="#pestaña1"><span>Lugar de Nacimiento</span></a></li>
  <li><a href="#pestaña2"><span>Información Laboral</span></a></li>
  <li><a href="#pestaña3"><span>Formación Académica</span></a></li>
  <li><a href="#pestaña4"><span>Anexos</span></a></li>
  </ul>

<div id="pestaña1">


<fieldset id="fsleyenda">
<legend><h2>Fecha y Lugar de Nacimiento</h2></legend>
<div class="contenido">
<ul>

<li>


<label for="txtedad">Edad:</label></br>
<p id="item11"><?php echo $edad;  ?></p>

<label for="dtfechanacimiento">Fecha de nacimiento:</label></br>
<p id="item12"><?php echo $f_nacimiento;  ?></p>

<label for="txtpais">Pais:</label></br>
<p id="item13"><?php echo $pais;  ?></p>

<label for="txtdepartamento">Departamento:</label></br>
<p id="item14"><?php echo $departamento;  ?></p>

<label for="txtciudad">Ciudad:</label></br>
<p id="item15"><?php echo $ciudad;  ?></p>

<label for="txttelfijo">Teléfono Fijo:</label></br>
<p id="item16"><?php echo $telefono;  ?></p>

<label for="txtcelular">Celular:</label></br>
<p id="item17"><?php echo $celular;  ?></p>

<label for="txtemail">Email:</label></br>
<p id="item18"><?php echo $email;  ?></p>

<label for="txtbarrver">Barrio/Vereda:</label></br>
<p id="item19"><?php echo $dir_barrio;  ?></p>

</li>
</ul>
</div>
</fieldset>

<div class="pie" hidden>

  <ul>

    <li>Direccion:<?php  echo " ".$direccion_institucion." "; ?>Ciudad:<?php  echo " ".$ciudad_institucion." "; ?></li>

    <li>Télefono:<?php  echo " ".$telefono_institucion." "; ?>Celular:<?php  echo " ".$celular_institucion." "; ?>Fax:<?php  echo " ".$fax_institucion." ";  ?></li>

    <li>Correo:<?php  echo " ".$correo_institucion." ";  ?>Sitio web:<?php  echo " ".$web_institucion." "; ?></li>

  </ul>

</div>

</div>

<div id="pestaña2">

  <fieldset id="fsleyenda" class="fsleyenda3">
  <legend><h2>Información Laboral</h2></legend>
  <div class="contenido">
  <ul>
  <li>


  <label for="txtcargo">Cargo que Desempeña:</label></br>
  <p id="item20"><?php echo $cargo;  ?></p>

  <label for="slañoinicio">Año de Inicio:</label></br>
  <p id="item21"><?php echo $anioinicio;  ?></p>

  <label for="slañoretiro">Año de Finalización:</label></br>
  <p id="item22"><?php echo $anioretiro;  ?></p>

  <label for="txttipocontrato">Tipo de Contrato:</label></br>
  <p id="item23"><?php echo $tipocontrato;  ?></p>

  <label for="txttiempocontrato">Tiempo de Contrato:</label></br>
  <p id="item24"><?php echo $tiempocontrato;  ?></p>

  <label for="txtsalario">Salario a Devengar:</label>
  <p id="item25"><?php echo $salario;  ?></p>

  </li>
  </ul>
  </div>
  </fieldset>

  <div class="firma" hidden>
    <ul>
  <li>Firma Monitor:__________________________________</li>
  <li>________________________________________________</li>
                <li>C.C./T.I.</li>
                <li> <?php echo $director_institucion;  ?> </li>
                <li id="li">Director</li>
    </ul>
  </div>

</div>

<div id="pestaña3">
  <fieldset id="fsleyenda" class="fsleyenda4">
  <legend><h2>Formación Académica</h2></legend>
  <div class="contenido">
  <ul>
  <li>


  <label for="rbprimaria">Nivel de Estudio:</label></br>
  <p id="item26"><?php echo $rpta_estudio;  ?></p>

  <label for="txttitulo"> Título:</label></br>
  <p id="item27"><?php echo $titulo;  ?></p>

  <label for="txtinstuniversidad">Institución/Universidad:</label></br>
  <p id="item28"><?php echo $universidad;  ?></p>

  </li>
  </ul>
  </div>

  </fieldset>
</div>



<div id="pestaña4">
<fieldset id="fsleyenda">
<legend><h2>Anexos</h2></legend>
<div class="contenido">
<div class="anexos">

  <ul>
  <li id="cel1">

  <label for="flanexocedula" id="lbanexo1" >Fotocopia Cedula:</label>

  <!--modal fotocopia cedula-->
  <?php if ($fotcedula_cargar!="sin anexar"){?>
  <input id="mostrar-fotcedula" name="modal-fotcedula" type="radio" />
      <label for="mostrar-fotcedula">ANEXADO</label></br>
  <?php }else{ ?>

    <input id="sin-fotcedula" name="modal-fotcedula" type="radio" />
      <label for="sin-fotcedula">sin anexar</label></br>
  <?php } ?>
      <div id="modal-fotcedula" >
    <h3 id="titulo">Fotocopia Cédula:</h3> </br>


        <p>
          <span id="fot-cedula">
            <?php if ($ext_cedula_cargar==='png' || $ext_cedula_cargar==='jpg' || $ext_cedula_cargar==='jpeg' || $ext_cedula_cargar==='gif') { ?>
        <img src="../anexos_empleado/<?php echo $fotcedula_cargar; ?>"> </br>

</span>

        <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-cedula')">Imprimir</button>



      <?php  }elseif($ext_cedula_cargar==='pdf'){ ?>
      <iframe src="../anexos_empleado/<?php echo $fotcedula_cargar; ?>" width="30%" height="200%" style="margin-top: 5%;"></iframe>


    <?php  }elseif($ext_cedula_cargar==='docx' || $ext_cedula_cargar==='doc' || $ext_cedula_cargar==='ppt' || $ext_cedula_cargar==='pptx' || $ext_cedula_cargar==='xls' || $ext_cedula_cargar==='xlsx' || $ext_cedula_cargar==='pub'){ ?>
  <iframe src="http://docs.google.com/viewer?url=PONER RUTA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="margin-top: 5%; border: none;"></iframe>

  <?php } ?>
      </p>

      </div>

      <input id="cerrar-fotcedula" name="modal-fotcedula" type="radio" />
      <label for="cerrar-fotcedula"> X </label>
  <!---->

  </li>

  <li id="cel2">
  <label for="flanexoEPS" id="lbanexo2" >Certificado Eps:</label>

  <!--modal fotocopia EPS-->
  <?php if ($foteps_cargar!="sin anexar"){?>
  <input id="mostrar-fotEPS" name="modal-fotEPS" type="radio" />
      <label for="mostrar-fotEPS">ANEXADO</label></br>
  <?php }else{ ?>

    <input id="sin-fotEPS" name="modal-fotEPS" type="radio" />
      <label for="sin-fotEPS">sin anexar</label></br>
  <?php } ?>
      <div id="modal-fotEPS" >
    <h3>Certificado EPS:</h3>
    <p>
       <span id="fot-EPS">

    <?php if ($ext_EPS_cargar==='png' || $ext_EPS_cargar==='jpg' || $ext_EPS_cargar==='jpeg' || $ext_EPS_cargar==='gif') { ?>
        <img src="../anexos_empleado/<?php echo $foteps_cargar; ?>">

     </span>
        </br>
         <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-EPS')">Imprimir</button>

      <?php  }elseif($ext_EPS_cargar==='pdf'){ ?>
  <iframe src="../anexos_empleado/<?php echo $foteps_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
  <?php }elseif($ext_EPS_cargar==='docx' || $ext_EPS_cargar==='doc' || $ext_EPS_cargar==='ppt' || $ext_EPS_cargar==='pptx' || $ext_EPS_cargar==='xls' || $ext_EPS_cargar==='xlsx' || $ext_EPS_cargar==='pub'){ ?>
  <iframe src="http://docs.google.com/viewer?url=PONER RUTA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none; margin-top:5%;"></iframe>
  <?php  } ?>


      </p>

      </div>

      <input id="cerrar-fotEPS" name="modal-fotEPS" type="radio" />
      <label for="cerrar-fotEPS"> X </label>


  <!---->
  </li>

<li id="cel3">

  <label for="flanexopension" id="lbanexo3" >Certificado Pensiones:</label>

  <!--modal fotocopia pensiones-->
<?php if ($fotpensiones_cargar!="sin anexar"){?>
<input id="mostrar-fotpensiones" name="modal-fotpensiones" type="radio" />
    <label for="mostrar-fotpensiones">ANEXADO</label></br>
<?php }else{ ?>

  <input id="sin-fotpensiones" name="modal-fotpensiones" type="radio" />
    <label for="sin-fotpensiones">sin anexar</label></br>
<?php } ?>
    <div id="modal-fotpensiones" >
  <h3>Certificado pensiones:</h3>
  <p>

     <span id="fot-pension">

     <?php if ($ext_pensiones_cargar==='png' || $ext_pensiones_cargar==='jpg' || $ext_pensiones_cargar==='jpeg' || $ext_pensiones_cargar==='gif') { ?>
      <img src="../anexos_empleado/<?php echo $fotpensiones_cargar; ?>">
      </br>
      </span>

      <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-pension')">Imprimir</button>


    <?php  }elseif($ext_pensiones_cargar==='pdf'){ ?>
<iframe src="../anexos_empleado/<?php echo $fotpensiones_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
<?php }elseif($ext_pensiones_cargar==='docx' || $ext_pensiones_cargar==='doc' || $ext_pensiones_cargar==='ppt' || $ext_pensiones_cargar==='pptx' || $ext_pensiones_cargar==='xls' || $ext_pensiones_cargar==='xlsx' || $ext_pensiones_cargar==='pub'){ ?>
<iframe src="http://docs.google.com/viewer?url=PONER RUTA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none;"></iframe>
<?php  } ?>


    </p>

    </div>

    <input id="cerrar-fotpensiones" name="modal-fotpensiones" type="radio" />
    <label for="cerrar-fotpensiones"> X </label>


<!---->


</li>

<li id="cel4">
  <label for="flanexoARL" id="lbanexo4" >Certificado ARL:</label>

  <!--modal fotocopia ARL-->
  <?php if ($fotARL_cargar!="sin anexar"){?>
  <input id="mostrar-fotARL" name="modal-fotARL" type="radio" />
      <label for="mostrar-fotARL">ANEXADO</label></br>
  <?php }else{ ?>

    <input id="sin-fotARL" name="modal-fotARL" type="radio" />
      <label for="sin-fotARL">sin anexar</label></br>
  <?php } ?>
      <div id="modal-fotARL" >
    <h3>Certificado ARL:</h3>
    <p>

       <span id="fot-ARL">

       <?php if ($ext_ARL_cargar==='png' || $ext_ARL_cargar==='jpg' || $ext_ARL_cargar==='jpeg' || $ext_ARL_cargar==='gif') { ?>
        <img src="../anexos_empleado/<?php echo $fotARL_cargar; ?>">

        </br>

        </span>

        <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-ARL')">Imprimir</button>


      <?php  }elseif($ext_ARL_cargar==='pdf'){ ?>
  <iframe src="../anexos_empleado/<?php echo $fotARL_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
  <?php }elseif($ext_ARL_cargar==='docx' || $ext_ARL_cargar==='doc' || $ext_ARL_cargar==='ppt' || $ext_ARL_cargar==='pptx' || $ext_ARL_cargar==='xls' || $ext_ARL_cargar==='xlsx' || $ext_ARL_cargar==='pub'){ ?>
  <iframe src="http://docs.google.com/viewer?url=PONER RUTA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none;"></iframe>
  <?php  } ?>


      </p>

      </div>

      <input id="cerrar-fotARL" name="modal-fotARL" type="radio" />
      <label for="cerrar-fotARL"> X </label>


  <!---->

</li>

<li id="cel5">

  <label for="flanexoRUT" id="lbanexo5">Fotocopia RUT:</label>

  <!--modal fotocopia RUT-->
    <?php if ($fotRUT_cargar!="sin anexar"){?>
    <input id="mostrar-fotRUT" name="modal-fotRUT" type="radio" />
        <label for="mostrar-fotRUT">ANEXADO</label></br>
    <?php }else{ ?>

      <input id="sin-fotRUT" name="modal-fotRUT" type="radio" />
        <label for="sin-fotRUT">sin anexar</label></br>
    <?php } ?>
        <div id="modal-fotRUT" >
      <h3>Fotocopia RUT:</h3>
      <p>

         <span id="fot-RUT">
         <?php if ($ext_RUT_cargar==='png' || $ext_RUT_cargar==='jpg' || $ext_RUT_cargar==='jpeg' || $ext_RUT_cargar==='gif') { ?>
          <img src="../anexos_empleado/<?php echo $fotRUT_cargar; ?>">

          </br>

          </span>

             <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-RUT')">Imprimir</button>




        <?php  }elseif($ext_RUT_cargar==='pdf'){ ?>
    <iframe src="../anexos_empleado/<?php echo $fotRUT_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
    <?php }elseif($ext_RUT_cargar==='docx' || $ext_RUT_cargar==='doc' || $ext_RUT_cargar==='ppt' || $ext_RUT_cargar==='pptx' || $ext_RUT_cargar==='xls' || $ext_RUT_cargar==='xlsx' || $ext_RUT_cargar==='pub'){ ?>
    <iframe src="http://docs.google.com/viewer?url=PONER RUTA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none;"></iframe>
    <?php  } ?>


        </p>

        </div>

        <input id="cerrar-fotRUT" name="modal-fotRUT" type="radio" />
        <label for="cerrar-fotRUT"> X </label>


    <!---->

</li>



<li id="cel6">
  <label for="flanexocontraloria" id="lbanexo6">Certificado Contraloria:</label>
  <!--modal fotocopia contraloria-->
      <?php if ($fotcontraloria_cargar!="sin anexar"){?>
      <input id="mostrar-fotcontraloria" name="modal-fotcontraloria" type="radio" />
          <label for="mostrar-fotcontraloria">ANEXADO</label></br>
      <?php }else{ ?>

        <input id="sin-fotcontraloria" name="modal-fotcontraloria" type="radio" />
          <label for="sin-fotcontraloria">sin anexar</label></br>
      <?php } ?>
          <div id="modal-fotcontraloria" >
        <h3>Certificado Contraloría:</h3>
        <p>

            <span id="fot-contraloria">

           <?php if ($ext_contraloria_cargar==='png' || $ext_contraloria_cargar==='jpg' || $ext_contraloria_cargar==='jpeg' || $ext_contraloria_cargar==='gif') { ?>
            <img src="../anexos_empleado/<?php echo $fotcontraloria_cargar; ?>">

              </br>

           </span>

            <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-contraloria')">Imprimir</button>





          <?php  }elseif($ext_contraloria_cargar==='pdf'){ ?>
      <iframe src="../anexos_empleado/<?php echo $fotcontraloria_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
      <?php }elseif($ext_contraloria_cargar==='docx' || $ext_contraloria_cargar==='doc' || $ext_contraloria_cargar==='ppt' || $ext_contraloria_cargar==='pptx' || $ext_contraloria_cargar==='xls' || $ext_contraloria_cargar==='xlsx' || $ext_contraloria_cargar==='pub'){ ?>
      <iframe src="http://docs.google.com/viewer?url=PONER contraloriaA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none;"></iframe>
      <?php  } ?>


          </p>

          </div>

          <input id="cerrar-fotcontraloria" name="modal-fotcontraloria" type="radio" />
          <label for="cerrar-fotcontraloria"> X </label>


      <!---->


</li>

<li id="cel7">
  <label for="flanexoprocuraduria" id="lbanexo7" >Certificado Procuraduria:</label>
  <!--modal fotocopia procuraduria-->
    <?php if ($fotprocuraduria_cargar!="sin anexar"){?>
    <input id="mostrar-fotprocuraduria" name="modal-fotprocuraduria" type="radio" />
        <label for="mostrar-fotprocuraduria">ANEXADO</label></br>
    <?php }else{ ?>

      <input id="sin-fotprocuraduria" name="modal-fotprocuraduria" type="radio" />
        <label for="sin-fotprocuraduria">sin anexar</label></br>
    <?php } ?>
        <div id="modal-fotprocuraduria" >
      <h3>Certificado Procuraduría:</h3>

      <p>

         <span id="fot-procuraduria">

         <?php if ($ext_procuraduria_cargar==='png' || $ext_procuraduria_cargar==='jpg' || $ext_procuraduria_cargar==='jpeg' || $ext_procuraduria_cargar==='gif') { ?>
          <img src="../anexos_empleado/<?php echo $fotprocuraduria_cargar; ?>">

          </br>

          </span>

           <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-procuraduria')">Imprimir</button>




        <?php  }elseif($ext_procuraduria_cargar==='pdf'){ ?>
    <iframe src="../anexos_empleado/<?php echo $fotprocuraduria_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
    <?php }elseif($ext_procuraduria_cargar==='docx' || $ext_procuraduria_cargar==='doc' || $ext_procuraduria_cargar==='ppt' || $ext_procuraduria_cargar==='pptx' || $ext_procuraduria_cargar==='xls' || $ext_procuraduria_cargar==='xlsx' || $ext_procuraduria_cargar==='pub'){ ?>
    <iframe src="http://docs.google.com/viewer?url=PONER procuraduriaA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none;"></iframe>
    <?php  } ?>


        </p>

        </div>

        <input id="cerrar-fotprocuraduria" name="modal-fotprocuraduria" type="radio" />
        <label for="cerrar-fotprocuraduria"> X </label>


    <!---->

</li>

<li id="cel8">

  <label for="flanexoAJ" id="lbanexo8" >Certificado de Antecedentes Judiciales:</label>

  <!--modal fotocopia AJ-->
    <?php if ($fotAJ_cargar!="sin anexar"){?>
    <input id="mostrar-fotAJ" name="modal-fotAJ" type="radio" />
        <label for="mostrar-fotAJ">ANEXADO</label></br>
    <?php }else{ ?>

      <input id="sin-fotAJ" name="modal-fotAJ" type="radio" />
        <label for="sin-fotAJ">sin anexar</label></br>
    <?php } ?>
        <div id="modal-fotAJ" >
      <h3>Certificado de Antecedentes Judiciales:</h3>
      <p>

         <span id="fot-AJ">

         <?php if ($ext_AJ_cargar==='png' || $ext_AJ_cargar==='jpg' || $ext_AJ_cargar==='jpeg' || $ext_AJ_cargar==='gif') { ?>
          <img src="../anexos_empleado/<?php echo $fotAJ_cargar; ?>">

          </br>

          </span>

           <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-AJ')">Imprimir</button>

        <?php  }elseif($ext_AJ_cargar==='pdf'){ ?>
    <iframe src="../anexos_empleado/<?php echo $fotAJ_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
    <?php }elseif($ext_AJ_cargar==='docx' || $ext_AJ_cargar==='doc' || $ext_AJ_cargar==='ppt' || $ext_AJ_cargar==='pptx' || $ext_AJ_cargar==='xls' || $ext_AJ_cargar==='xlsx' || $ext_AJ_cargar==='pub'){ ?>
    <iframe src="http://docs.google.com/viewer?url=PONER AJA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none;"></iframe>
    <?php  } ?>


        </p>

        </div>

        <input id="cerrar-fotAJ" name="modal-fotAJ" type="radio" />
        <label for="cerrar-fotAJ"> X </label>


    <!---->

  </li>

  <li id="cel9">

  <label for="flanexoCB" id="lbanexo9" >Certificado Cuenta Bancaria:</label>

  <!--modal fotocopia CB-->
  <?php if ($fotCB_cargar!="sin anexar"){?>
  <input id="mostrar-fotCB" name="modal-fotCB" type="radio" />
      <label for="mostrar-fotCB">ANEXADO</label></br>
  <?php }else{ ?>

    <input id="sin-fotCB" name="modal-fotCB" type="radio" />
      <label for="sin-fotCB">sin anexar</label></br>
  <?php } ?>
      <div id="modal-fotCB" >
    <h3>Certificado Cuenta Bancaria:</h3>
    <p>

       <span id="fot-CB">

       <?php if ($ext_CB_cargar==='png' || $ext_CB_cargar==='jpg' || $ext_CB_cargar==='jpeg' || $ext_CB_cargar==='gif') { ?>
        <img src="../anexos_empleado/<?php echo $fotCB_cargar; ?>">

           </br>

          </span>

           <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-CB')">Imprimir</button>


      <?php  }elseif($ext_CB_cargar==='pdf'){ ?>
  <iframe src="../anexos_empleado/<?php echo $fotCB_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
  <?php }elseif($ext_CB_cargar==='docx' || $ext_CB_cargar==='doc' || $ext_CB_cargar==='ppt' || $ext_CB_cargar==='pptx' || $ext_CB_cargar==='xls' || $ext_CB_cargar==='xlsx' || $ext_CB_cargar==='pub'){ ?>
  <iframe src="http://docs.google.com/viewer?url=PONER CBA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none;"></iframe>
  <?php  } ?>


      </p>

      </div>

      <input id="cerrar-fotCB" name="modal-fotCB" type="radio" />
      <label for="cerrar-fotCB"> X </label>


  <!---->

</li>

<li id="cel10">

  <label for="flanexoLM" id="lbanexo10" >Fotocopia Libreta Militar:</label>

  <!--modal fotocopia LM-->
  <?php if ($fotLM_cargar!="sin anexar"){?>
  <input id="mostrar-fotLM" name="modal-fotLM" type="radio" />
      <label for="mostrar-fotLM">ANEXADO</label></br>
  <?php }else{ ?>

    <input id="sin-fotLM" name="modal-fotLM" type="radio" />
      <label for="sin-fotLM">sin anexar</label></br>
  <?php } ?>
      <div id="modal-fotLM" >
    <h3>Fotocopia Libreta Militar:</h3>
    <p>

       <span id="fot-LM">

       <?php if ($ext_LM_cargar==='png' || $ext_LM_cargar==='jpg' || $ext_LM_cargar==='jpeg' || $ext_LM_cargar==='gif') { ?>
        <img src="../anexos_empleado/<?php echo $fotLM_cargar; ?>">

           </br>

          </span>

           <button id="btnactualizar" class="btnactualizar"  onclick="javascript:printlayer('fot-LM')">Imprimir</button>


      <?php  }elseif($ext_LM_cargar==='pdf'){ ?>
  <iframe src="../anexos_empleado/<?php echo $fotLM_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
  <?php }elseif($ext_LM_cargar==='docx' || $ext_LM_cargar==='doc' || $ext_LM_cargar==='ppt' || $ext_LM_cargar==='pptx' || $ext_LM_cargar==='xls' || $ext_LM_cargar==='xlsx' || $ext_LM_cargar==='pub'){ ?>
  <iframe src="http://docs.google.com/viewer?url=PONER LMA DEL ARCHIVO CUANDO ESTE MONTADO EN EL SERVIDOR=true" width="600" height="600" style="border: none;"></iframe>
  <?php  } ?>


      </p>

      </div>

      <input id="cerrar-fotLM" name="modal-fotLM" type="radio" />
      <label for="cerrar-fotLM"> X </label>


  <!---->


</li>

<li id="cel11">

  <label for="flanexoHV" id="lbanexo11" >Hoja de Vida:</label>

  <!--modal fotocopia HV-->
  <?php if ($fotHV_cargar!="sin anexar"){?>
  <input id="mostrar-fotHV" name="modal-fotHV" type="radio" />
      <label for="mostrar-fotHV">ANEXADO</label></br>
  <?php }else{ ?>

    <input id="sin-fotHV" name="modal-fotHV" type="radio" />
      <label for="sin-fotHV">sin anexar</label></br>
  <?php } ?>
      <div id="modal-fotHV" >
    <h3>Hoja de Vida:</h3>
    <p><?php if($ext_HV_cargar==='pdf'){ ?>
  <iframe src="../anexos_empleado/<?php echo $fotHV_cargar; ?>" width="30%" height="200%" style="margin-top:5%;"></iframe>
  <?php }elseif($ext_HV_cargar==='docx' || $ext_HV_cargar==='doc' || $ext_HV_cargar==='ppt' || $ext_HV_cargar==='pptx' || $ext_HV_cargar==='xls' || $ext_HV_cargar==='xlsx' || $ext_HV_cargar==='pub'){ ?>
  <iframe src="http://docs.google.com/viewer?url=http://sistema.cormusicaconcordia.org/sistema_cormusicaconcordi_/anexos_empleado/<?php echo $fotHV_cargar; ?>=true" width="600" height="600" style="border: none;"></iframe>
  <?php  } ?>


      </p>

      </div>

      <input id="cerrar-fotHV" name="modal-fotHV" type="radio" />
      <label for="cerrar-fotHV"> X </label>


  <!---->


</li>
  </ul>

 </div>

</div>

</fieldset>
</div>
</div>


</form>



</body>
</html>
