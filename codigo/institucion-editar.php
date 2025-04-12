<?php


//codigo para traer el documento de usuario


//$nrodoc=htmlentities(addslashes($_SESSION['doc']));

require'../codigo/conexion_BD.php';

require'../codigo/institucion-cargar.php';


//variables de programa a crear, viene con el metodo programajs.


$institucion=htmlentities(addslashes($_POST['txtnominstitucion']));
$nit=htmlentities(addslashes($_POST['txtnit']));
$ciudad=htmlentities(addslashes($_POST['txtciudad']));
$direccion=htmlentities(addslashes($_POST['txtdireccion']));
$telefono=htmlentities(addslashes($_POST['txttelefono']));
$celular=htmlentities(addslashes($_POST['txtcelular']));
$fax=htmlentities(addslashes($_POST['txtfax']));
$correo=htmlentities(addslashes($_POST['txtcorreoinst']));
$web=htmlentities(addslashes($_POST['txtsitioweb']));
$director=htmlentities(addslashes($_POST['txtdirectorinst']));


$nombre_logo= basename($_FILES['fllogo']['name']);

$nombre_logo='logotipo-institucion.png';

$tipo_logo=$_FILES['fllogo']['type'];

$tamagno_logo=$_FILES['fllogo']['size'];

if ($tipo_logo==null) {
$nombre_logo='logotipo-institucion.png';
}else{

if ($tipo_logo=='image/jpeg' || $tipo_logo=='image/jpg' || $tipo_logo=='image/png' || $tipo_logo=='image/gif'){

$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/www/symphony/imagenes/';

move_uploaded_file($_FILES['fllogo']['tmp_name'],$carpeta_destino.$nombre_logo);
}else{

  echo "Error de formato, asegúrese que el logo tenga formato 'jpeg', 'jpg', 'png' ó 'gif'";
}}

//Codigo para Actualizar

$actualizar_sql="UPDATE institucion SET nom_institucion=:institucion, 
nit=:nit, 
ciudad=:ciudad,
direccion=:direccion,
telefono=:telefono,
celular=:celular,
fax=:fax,
correo=:correo,
web=:web,
director=:director,
logotipo_institucion=:logoinst 
WHERE id=:codigo";

$resultado=$conexion->prepare($actualizar_sql);

$resultado->execute(array(":codigo"=>$codigo, ":institucion"=>$institucion,
":nit"=>$nit,
":ciudad"=>$ciudad,
":direccion"=>$direccion,
":telefono"=>$telefono,
":celular"=>$celular, 
":fax"=>$fax,
":correo"=>$correo,
":web"=>$web,
":director"=>$director,
":logoinst"=>$nombre_logo));

echo "El registro se actualizó con exito.";



?>
