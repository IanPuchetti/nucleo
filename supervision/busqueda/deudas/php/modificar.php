<?php
$id=$_POST['id'];
$caratula=$_POST['caratula'];
$comentario=$_POST['comentario'];
$sucursal=$_POST['sucursal'];
$dias_adic=$_POST['dias_adic'];
$legajo=$_POST['legajo'];
$numero_gestion=$_POST['numero_gestion'];
$numero_lote=$_POST['numero_lote'];
$producto=$_POST['producto'];
$deuda=$_POST['deuda'];
$fecha_deuda=$_POST['fecha_deuda'];
$fecha_mora=$_POST['fecha_mora'];
$pase_legales=$_POST['pase_legales'];
$estado=$_POST['estado'];
$sub_estado=$_POST['sub_estado'];
$banco=$_POST['banco'];
$nombre_producto=$_POST['nombre_producto'];
$proxima_accion=$_POST['proxima_accion'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result2 = $mysqli->query("UPDATE productos SET deuda = '$deuda', fecha_deuda = '$fecha_deuda', fecha_mora = '$fecha_mora', pase_legales = '$pase_legales', estado = '$estado', sub_estado = '$sub_estado', banco = '$banco', nombre_producto = '$nombre_producto', proxima_accion = '$proxima_accion', producto = '$producto' WHERE numero_operacion = '$id' LIMIT 1");

$result = $mysqli->query("UPDATE carpeta SET caratula = '$caratula', comentario = '$comentario', sucursal = '$sucursal', dias_adic = '$dias_adic', legajo = '$legajo', numero_gestion = '$numero_gestion', numero_lote = '$numero_lote' WHERE numero_operacion = '$id' LIMIT 1");

$mysqli->close();
echo 'Modificado correctamente';
?>
