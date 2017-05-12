<?php
$proceso=$_POST['proceso'];
$deudor=json_decode($_POST['deudor']);
$domicilios=json_decode($_POST['domicilios']);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE deudores SET tipo_documento = '".$deudor->tipo_documento."', apellido = '".$deudor->apellido."', email = '".$deudor->email."', empresa = '".$deudor->empresa."' WHERE documento = '".$deudor->documento."'");
$result = $mysqli->query("UPDATE domicilios SET , direccion_laboral = '".$domicilios->direccion_laboral."', direccion_particular = '".$domicilios->direccion_particular."', direccion_laboral2 = '".$domicilios->direccion_laboral2."', direccion_particular2 = '".$domicilios->direccion_particular2."', direccion_particular3 = '".$domicilios->direccion_particular3."', provincia = '".$domicilios->provincia."', localidad = '".$domicilios->localidad."', codigo_postal = '".$domicilios->codigo_postal."'  WHERE documento = '".$deudor->documento."'");

$mysqli->close();
echo $proceso;
?>
