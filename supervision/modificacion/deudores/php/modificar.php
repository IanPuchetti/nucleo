<?php
$documento=$_POST['documento'];
$a_modificar=json_decode($_POST['a_modificar'][0]);
$tipo_documento=$a_modificar->tipo_documento;
$apellido=$a_modificar->apellido;
$email=$a_modificar->email;
$empresa=$a_modificar->empresa;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$deudores='';
if($apellido!=''){$deudores=$deudores.' apellido = '.$apellido.','}
if($email!=''){$deudores=$deudores.' email = '.$email.','}
if($empresa!=''){$deudores=$deudores.' empresa = '.$empresa.','}
if($tipo_documento!=''){$deudores=$deudores.' tipo_documento = '.$tipo_documento.','}
$deudores=rtrim($deudores, ",");
$domicilios='';
if($a_modificar->direccion_laboral!=''){$domicilios=$domicilios.' direccion_laboral = '.$direccion_laboral.','}
if($a_modificar->direccion_laboral2!=''){$domicilios=$domicilios.' direccion_laboral2 = '.$direccion_laboral2.','}
if($a_modificar->direccion_particular!=''){$domicilios=$domicilios.' direccion_particular = '.$direccion_particular.','}
if($a_modificar->direccion_particular2!=''){$domicilios=$domicilios.' direccion_particular2 = '.$direccion_particular2.','}
if($a_modificar->direccion_particular3!=''){$domicilios=$domicilios.' direccion_particular3 = '.$direccion_particular3.','}
if($a_modificar->provincia!=''){$domicilios=$domicilios.' provincia = '.$provincia.','}
if($a_modificar->localidad!=''){$domicilios=$domicilios.' localidad = '.$localidad.','}
if($a_modificar->codigo_postal!=''){$domicilios=$domicilios.' codigo_postal = '.$codigo_postal.','}
$domicilios=rtrim($domicilios, ",");

$result = $mysqli->query("UPDATE deudores SET ".$deudores." WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE domicilios SET ".$domicilios." WHERE documento = '$documento'");

$mysqli->close();
echo 'Modificado correctamente';
?>
