<?php
$documento=$_POST['documento'];
$a_modificar=json_decode($_POST['a_modificar']);
$tipo_documento=$a_modificar->deudor->tipo_documento;
$apellido=$a_modificar->deudor->apellido;
$email=$a_modificar->deudor->email;
$empresa=$a_modificar->deudor->empresa;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$deudores='';
if($apellido!=''){$deudores=$deudores.' apellido = "'.$apellido.'",';}
if($email!=''){$deudores=$deudores.' email = "'.$email.'",';}
if($empresa!=''){$deudores=$deudores.' empresa = "'.$empresa.'",';}
if($tipo_documento!=''){$deudores=$deudores.' tipo_documento = "'.$tipo_documento.'",';}
$deudores=rtrim($deudores, ',');
$domicilios='';
if($a_modificar->domicilios->direccion_laboral!=''){$domicilios=$domicilios.' direccion_laboral = "'.$a_modificar->domicilios->direccion_laboral.'",';}
if($a_modificar->domicilios->direccion_laboral2!=''){$domicilios=$domicilios.' direccion_laboral2 = "'.$a_modificar->domicilios->$direccion_laboral2.'",';}
if($a_modificar->domicilios->direccion_particular!=''){$domicilios=$domicilios.' direccion_particular = "'.$a_modificar->domicilios->$direccion_particular.'",';}
if($a_modificar->domicilios->direccion_particular2!=''){$domicilios=$domicilios.' direccion_particular2 = "'.$a_modificar->domicilios->$direccion_particular2.'",';}
if($a_modificar->domicilios->direccion_particular3!=''){$domicilios=$domicilios.' direccion_particular3 = "'.$a_modificar->domicilios->$direccion_particular3.'",';}
if($a_modificar->domicilios->provincia!=''){$domicilios=$domicilios.' provincia = "'.$a_modificar->domicilios->$provincia.'",';}
if($a_modificar->domicilios->localidad!=''){$domicilios=$domicilios.' localidad = "'.$a_modificar->domicilios->$localidad.'",';}
if($a_modificar->domicilios->codigo_postal!=''){$domicilios=$domicilios.' codigo_postal = "'.$a_modificar->domicilios->$codigo_postal.'",';}
$domicilios=rtrim($domicilios, ',');

$result = $mysqli->query('UPDATE deudores SET '.$deudores.' WHERE documento = "'.$documento.'"');
$result2 = $mysqli->query('UPDATE domicilios SET '.$domicilios.' WHERE documento = "'.$documento.'"');

$mysqli->close();
echo 'Modificado correctamente';
?>
