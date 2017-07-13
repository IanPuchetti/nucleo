<?php
$carpeta=json_decode($_POST['carpeta']);
$deudor=json_decode($_POST['deudor']);
$domicilios=json_decode($_POST['domicilios']);
$productos=json_decode($_POST['productos']);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$result = $mysqli->query("INSERT INTO deudores VALUES('".$deudor->documento."', '".$deudor->tipo_documento."', '".$deudor->apellido."', '".$deudor->email."', '".$deudor->empresa."', 0)");

$result = $mysqli->query("INSERT INTO domicilios VALUES('".$deudor->documento."', '".$domicilios->direccion_laboral."', '".$domicilios->direccion_particular."', '".$domicilios->direccion_laboral2."', '".$domicilios->direccion_particular2."', '".$domicilios->direccion_particular3."', '".$domicilios->provincia."', '".$domicilios->localidad."', '".$domicilios->codigo_postal."' )");

$result = $mysqli->query("INSERT INTO productos VALUES('".$productos->numero_operacion."', '".$deudor->documento."', '".$productos->producto."','".$productos->deuda."', '".$productos->dolar."', '".$productos->fecha_deuda."', '".$productos->fecha_mora."', '".$productos->fecha_ult_cobro."', '".$productos->estado."', '".$productos->sub_estado."', '".$productos->banco."', '".$productos->nombre_producto."', '".$productos->tipo_gestion."', 0)");

$result = $mysqli->query("INSERT INTO carpeta VALUES('".$productos->numero_operacion."', '".$deudor->documento."', '".$carpeta->caratula."', '".$carpeta->comentario."', '".$carpeta->sucursal."', '".$carpeta->dias_adic."', '".$carpeta->legajo."', '".$carpeta->numero_gestion."', '".$carpeta->numero_lote."')");

if($domicilios->telefono1 != ''){
$result = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono1."', '', 0)");
}

if($domicilios->telefono2 != ''){
$result = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono2."', '', 0)");
}

if($domicilios->telefono3 != ''){
$result = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono3."', '', 0)");
}

$mysqli->close();
echo 'Registrados correctamente';
?>
