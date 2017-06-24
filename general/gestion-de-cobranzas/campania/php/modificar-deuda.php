<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id=$request -> numero_operacion;
$caratula=$request -> caratula;
$comentario=$request -> comentario;
$sucursal=$request -> sucursal;
$dias_adic=$request -> dias_adic;
$legajo=$request -> legajo;
$numero_gestion=$request -> numero_gestion;
$numero_lote=$request -> numero_lote;
$producto=$request -> producto;
$deuda=$request -> deuda;
$fecha_deuda=$request -> fecha_deuda;
$fecha_mora=$request -> fecha_mora;
$fecha_ult_cobro=$request -> fecha_ult_cobro;
$pase_legales=$request -> pase_legales;
$estado=$request -> estado;
$sub_estado=$request -> sub_estado;
$banco=$request -> banco;
$nombre_producto=$request -> nombre_producto;
$proxima_accion=$request -> proxima_accion;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result2 = $mysqli->query("UPDATE productos SET deuda = '$deuda', fecha_deuda = '$fecha_deuda', fecha_mora = '$fecha_mora',  fecha_ult_cobro = '$fecha_ult_cobro', estado = '$estado', sub_estado = '$sub_estado', banco = '$banco', nombre_producto = '$nombre_producto', producto = '$producto' WHERE numero_operacion = '$id' LIMIT 1");

$result = $mysqli->query("UPDATE carpeta SET caratula = '$caratula', comentario = '$comentario', sucursal = '$sucursal', dias_adic = '$dias_adic', legajo = '$legajo', numero_gestion = '$numero_gestion', numero_lote = '$numero_lote' WHERE numero_operacion = '$id' LIMIT 1");

$mysqli->close();
echo 'Modificado correctamente';
?>