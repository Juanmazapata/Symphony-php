<?php
//require"../codigo/proteger-formulario.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Información Institucional</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../estilos/reset.css" type="text/css">
    <link rel="stylesheet" href="../estilos/fuente.css" type="text/css">
    <link rel="stylesheet" href="../estilos/frminstitucion.css" type="text/css">
    <script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="../script/evento-frminstitucional.js"></script>
    <script type="text/javascript" src="../script/anexo-institucion.js"></script>
    <script type="text/javascript" src="../script/all(iconos-java).js"></script>

  <script type="text/javascript" src="../script/institucion-btnactualizar.js"></script>

<script type="text/javascript" src="../script/evento-btncerrar.js"></script>


  </head>
  <body>


    <form id="fminstitucion" class="formulario" action="../codigo/institucion-editar.php" method="post" enctype="multipart/form-data">
      <div class="logo">
<?php

require '../codigo/institucion-cargar.php';

if ($logotipo!=""){
?>
<img src="../imagenes/<?php echo $logotipo; ?>"/>

<?php
}else{
	?>
<img src="../imagenes/<?php echo "cortina-logotipo-institucion.png"; ?>"/>
<?php
}

?>
      </div>

      <label for="txtnominstitucion">Nombre de la Institución</label>
      <input type="text" name="txtnominstitucion" value="<?php include '../codigo/institucion-cargar.php'; echo $institucion; ?>" id="txtnominstitucion">

      <label for="txtnit">Nit</label>
      <input type="text" name="txtnit" value="<?php include '../codigo/institucion-cargar.php'; echo $nit; ?>" id="txtnit">

      <label for="txtciudadinst">Ciudad</label>
      <input type="text" name="txtciudad" value="<?php include '../codigo/institucion-cargar.php'; echo $ciudad; ?>" id="txtciudadinst">

      <label for="txtdireccioninst">Dirección</label>
      <input type="text" name="txtdireccion" value="<?php include '../codigo/institucion-cargar.php'; echo $direccion; ?>" id="txtdireccioninst">

      <label for="txttelefonoinst">Teléfono</label>
      <input type="text" name="txttelefono" value="<?php include '../codigo/institucion-cargar.php'; echo $telefono; ?>" id="txttelefonoinst">

      <label for="txtcelularinst">Celular</label>
      <input type="text" name="txtcelular" value="<?php include '../codigo/institucion-cargar.php'; echo $celular; ?>" id="txtcelularinst">

      <label for="txtfax">Fax</label>
      <input type="text" name="txtfax" value="<?php include '../codigo/institucion-cargar.php'; echo $fax; ?>" id="txtfax">

      <div id="dvfondobtnlogo" class="dvfondobtnlogo">
      <label for="flanexologo" id="lbanexologo" class="input-label"><i class="fas fa-upload"></i> Logo: </label>
<input type="file" id="flanexologo" class="flanexologo" name="fllogo" hidden>
      <span id="nomarchivologo" class="nomarchivo">Sin Archivo</span>
      </div>

      <label for="txtcorreoinst">Correo</label>
      <input type="text" name="txtcorreoinst" value="<?php include '../codigo/institucion-cargar.php'; echo $correo; ?>" id="txtcorreoinst">

      <label for="txtsitioweb">Sitio Web</label>
      <input type="text" name="txtsitioweb" value="<?php include '../codigo/institucion-cargar.php'; echo $web; ?>" id="txtsitioweb">

      <label for="txtdirectorinst">Nombre del Director</label>
      <input type="text" name="txtdirectorinst" value="<?php include '../codigo/institucion-cargar.php'; echo $director; ?>" id="txtdirectorinst">


    </form>
    <div class="dvbtnactualizarinst">
      <button  id="btnactualizarinst" class="btnactualizarinst">Actualizar</button>
      <button  id="btncerrar" class="btncerrar">Cerrar</button>



    </div>

  </body>
</html>
