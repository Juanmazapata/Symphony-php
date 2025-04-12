<?php
require "../codigo/proteger-formulario.php";
SESSION_START();
$correo=$_SESSION["email"];
  require '../codigo/menuadmin.php';
require '../codigo/acentos.php';

$_SESSION["codigo"]=$codigo_empleado;

date_default_timezone_set('America/Bogota');//carga fecha y hora
echo $fecha=date('Y-m-d H:i:s');


 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menú - Symphony</title>
<link rel="icon" href="../formas/LOGO-symphony.ico" /> <!--logo icono-->

<link type=”image/x-icon” rel=”shortcut icon” href=”../formas/LOGO-symphony.ico” >

<link href="../estilos/reset.css" rel="stylesheet" type="text/css"><!--estilos css-->

<link href="../estilos/fuente.css" rel="stylesheet" type="text/css"><!--estilos css-->

<link href="../estilos/menu.css" rel="stylesheet" type="text/css"><!--estilos css-->

<link rel="stylesheet" href="../estilos/frminstitucion.css" type="text/css">

<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script><!--javascript js-->

<script type="text/javascript" src="../script/menu-acordeon.js" charset="utf-8"></script><!--carga el js para menu acordeon-->

<script type="text/javascript" src="../script/imgsustitucion.js"></script><!--carga el js el efecto de botones-->

<script type="text/javascript" src="../script/cargar-formulario.js"></script><!--carga el js para traer formularios-->

<script type="text/javascript" src="../script/bootstrap.js"></script>

</head>

<body onLoad="MM_preloadImages('../formas/inicio2.png','../formas/power2.png')" bgcolor="#F3F1F2" id="bdmenu">

<div id="dvencabezado">
<ul id="barra">
<li id="linomusuario"> | <strong><?php echo $nombre=DarAcento($nombre) . "    " . $apellido=DarAcento($apellido);?></strong> |</li>

<li id="linkinicio"><a href="javascript:location.reload()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('imginicio','','../formas/inicio2.png',1)" title="Inicio"><img src="../formas/inicio.png" alt=""id="imginicio"></a></>

<li id="linkimglogo"><img src="../imagenes/logo-symphony-letra.png" id="imglogoprograma"/> </li>

<li id="linkcerrar"><a href="../codigo/cerrar_sesion_codigo.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('imgpower','','../formas/power2.png',1)" title="Cerrar sesión"><img src="../formas/power.png" alt="" id="imgpower"></a></li>
</ul>

 </div>
<div id="lateral">
<div id="dvfotousuario">
  <?php if($foto!="cortina-symphony.jpg") {?>
<img src="../fotos_empleado/<?php echo $foto; ?>">
<?php }else{ ?>
  <img src="../imagenes/<?php echo $foto; ?>">
<?php } ?>
</div>



<div id="container-main">

  <div class="accordion-container">

         <a href="#" class="accordion-titulo">Perfil<span class="toggle-icon"></span></a>
         <div class="accordion-content">
           <li id="liverperfil">Ver</li>
            <li id="liactualizarperfil">Actualizar</li>

          </div>

           </div>


  <div class="accordion-container">

        <a href="#" class="accordion-titulo">Programas<span class="toggle-icon"></span></a>
        <div class="accordion-content">
          <li id="liconsultarprograma">Consultar</li>
          <li id="licrearprograma">Crear</li>
           </div>

          </div>


    <div class="accordion-container">

        <a href="#" class="accordion-titulo">Mátriculas<span class="toggle-icon"></span></a>
        <div class="accordion-content">
          <li id="liconsutarmatricula">Consultar</li>
          <li id="licrearmatricula">Crear</li>
          <li id="liestadistica" hidden>Estadística</li>
             </div>

               </div>

     <div class="accordion-container" hidden>

        <a href="#" class="accordion-titulo">Repertorios<span class="toggle-icon"></span></a>
        <div class="accordion-content">
          <li>Consultar</li>
           <li>Actualizar</li>
              <li id="licrearrepertorio">Crear</li>
           <li>Eliminar</li>
             </div>

               </div>

  <div class="accordion-container" hidden>

        <a href="#" class="accordion-titulo">Informes<span class="toggle-icon"></span></a>
        <div class="accordion-content">
          <li>Consultar</li>
           <li>Actualizar</li>
              <li id="licrearinforme">Crear</li>
           <li>Eliminar</li>
             </div>

               </div>

                 <div class="accordion-container" hidden>

        <a href="#" class="accordion-titulo">Certificados<span class="toggle-icon"></span></a>
        <div class="accordion-content">
          <li id="lilaboral">laboral</li>
           <li id="liservisocial">Servicio Social</li>
                 </div>

               </div>
 <div class="accordion-container" hidden>

        <a href="#" class="accordion-titulo">Inventario<span class="toggle-icon"></span></a>
        <div class="accordion-content">
          <li>Consultar</li>
           <li>Actualizar</li>
              <li>Crear</li>
           <li>Eliminar</li>
             </div>

               </div>

</div>

</div>

<div id="dvformulario">

</div>
<span>

</span>

</body>
</html>
