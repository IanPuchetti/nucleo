<?php
$proceso=$_POST['proceso'];
$carpeta=json_decode($_POST['carpeta']);
$productos=json_decode($_POST['productos']);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$result = $mysqli->query("UPDATE productos SET documento = '".$deudor->documento."', producto = '".$productos->producto."', fecha_deuda = '".$productos->fecha_deuda."', fecha_mora = '".$productos->fecha_mora."', pase_legales = '".$productos->pase_legales."', estado = '".$productos->estado."', '".$productos->banco."', nombre_producto = '".$productos->nombre_producto."' WHERE numero_operacion = '".$productos->numero_operacion."'");

$result = $mysqli->query("UPDATE carpeta SET documento = '".$deudor->documento."', caratula = '".$carpeta->caratula."', comentario = '".$carpeta->comentario."', sucursal = '".$carpeta->sucursal."', dias_adic = '".$carpeta->dias_adic."', legajo = '".$carpeta->legajo."', numero_gestion = '".$carpeta->numero_gestion."', numero_lote = '".$carpeta->numero_lote."' WHERE numero_operacion = '".$productos->numero_operacion."' ");

$mysqli->close();
echo $proceso;
?>
