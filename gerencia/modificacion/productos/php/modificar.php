<?php
$a_modificar=json_decode($_POST['a_modificar']);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

$numero_operacion=$a_modificar->productos->numero_operacion;
$producto=$a_modificar->productos->producto;
$deuda=$a_modificar->productos->deuda;
$fecha_deuda=$a_modificar->productos->fecha_deuda;
$fecha_mora=$a_modificar->productos->fecha_mora;
$fecha_ult_cobro=$a_modificar->productos->fecha_ult_cobro;
$nombre_producto=$a_modificar->productos->nombre_producto;

$productos='';

if($producto!=''){$productos=$productos.' producto = "'.$producto.'",';}
if($deuda!=''){$productos=$productos.' deuda = "'.$deuda.'",';}
if($fecha_deuda!=''){$productos=$productos.' fecha_deuda = "'.$fecha_deuda.'",';}
if($fecha_mora!=''){$productos=$productos.' fecha_mora = "'.$fecha_mora.'",';}
if($fecha_ult_cobro!=''){$productos=$productos.' fecha_ult_cobro = "'.$fecha_ult_cobro.'",';}
if($nombre_producto!=''){$productos=$productos.' nombre_producto = "'.$nombre_producto.'",';}
$productos=rtrim($productos, ",");

$caratula=$a_modificar->carpeta->caratula;
$comentario=$a_modificar->carpeta->comentario;
$sucursal=$a_modificar->carpeta->sucursal;
$dias_adic=$a_modificar->carpeta->dias_adic;
$legajo=$a_modificar->carpeta->legajo;
$numero_gestion=$a_modificar->carpeta->numero_gestion;
$numero_lote=$a_modificar->carpeta->numero_lote;

$carpetas='';
if($caratula!=''){$carpetas=$carpetas.' caratula = "'.$caratula.'",';}
if($comentario!=''){$carpetas=$carpetas.' comentario = "'.$comentario.'",';}
if($sucursal!=''){$carpetas=$carpetas.' sucursal = "'.$sucursal.'",';}
if($dias_adic!=''){$carpetas=$carpetas.' dias_adic = "'.$dias_adic.'",';}
if($legajo!=''){$carpetas=$carpetas.' legajo = "'.$legajo.'",';}
if($numero_gestion!=''){$carpetas=$carpetas.' numero_gestion = "'.$numero_gestion.'",';}
if($numero_lote!=''){$carpetas=$carpetas.' numero_lote = "'.$numero_lote.'",';}
$carpetas=rtrim($carpetas, ",");

$result = $mysqli->query("UPDATE productos SET ".$productos." WHERE numero_operacion = '$numero_operacion'");
$result = $mysqli->query("UPDATE carpeta SET ".$carpetas." WHERE numero_operacion = '$numero_operacion'");

$mysqli->close();
echo 'Modificado correctamente';
?>
