<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request->filtro->documento;
$apellido=$request->filtro->apellido;
$telefono=$request->filtro->telefono;
$deudor=$request->campos->deudor;
$producto=$request->campos->producto;
$domicilios=$request->campos->domicilios;
$carpeta=$request->campos->carpeta;
$mostrar='';
if($deudor->documento){$mostrar=$mostrar.' deudores.documento,';}
if($deudor->tipo_documento){$mostrar=$mostrar.' deudores.tipo_documento,';}
if($deudor->apellido){$mostrar=$mostrar.' deudores.apellido,';}
if($deudor->mail){$mostrar=$mostrar.' deudores.email,';}
if($deudor->empresa){$mostrar=$mostrar.' deudores.empresa,';}


if($producto->estado){$mostrar=$mostrar.' estados.estado,';}
if($producto->sub_estado){$mostrar=$mostrar.' sub_estados.sub_estado,';}
if($producto->banco){$mostrar=$mostrar.' bancos.dbanco,';}
if($producto->producto){$mostrar=$mostrar.' productos.producto,';}
if($producto->numero_operacion){$mostrar=$mostrar.' productos.numero_operacion,';}
if($producto->nombre_producto){$mostrar=$mostrar.' productos.nombre_producto,';}
if($producto->deuda){$mostrar=$mostrar.' productos.deuda,';}
if($producto->fecha_deuda){$mostrar=$mostrar.' productos.fecha_deuda,';}
if($producto->fecha_ult_cobro){$mostrar=$mostrar.' productos.fecha_ult_cobro,';}
if($producto->tipo_gestion){$mostrar=$mostrar.' productos.tipo_gestion,';}
//if($producto->responsable){$mostrar=$mostrar.' usuarios.user,';}

if($carpeta->caratula){$mostrar=$mostrar.' carpeta.caratula,';}
if($carpeta->comentario){$mostrar=$mostrar.' carpeta.comentario,';}
if($carpeta->sucursal){$mostrar=$mostrar.' carpeta.sucursal,';}
if($carpeta->dias_adic){$mostrar=$mostrar.' carpeta.dias_adic,';}
if($carpeta->legajo){$mostrar=$mostrar.' carpeta.legajo,';}
if($carpeta->numero_gestion){$mostrar=$mostrar.' carpeta.numero_gestion,';}
if($carpeta->numero_lote){$mostrar=$mostrar.' carpeta.numero_lote,';}

if($domicilios->direccion_laboral){$mostrar=$mostrar.' domicilios.direccion_laboral,';}
if($domicilios->direccion_laboral2){$mostrar=$mostrar.' domicilios.direccion_laboral2,';}
if($domicilios->direccion_particular){$mostrar=$mostrar.' domicilios.direccion_particular,';}
if($domicilios->direccion_particular2){$mostrar=$mostrar.' domicilios.direccion_particular2,';}
if($domicilios->direccion_particular3){$mostrar=$mostrar.' domicilios.direccion_particular3,';}
if($domicilios->provincia){$mostrar=$mostrar.' domicilios.provincia,';}
if($domicilios->localidad){$mostrar=$mostrar.' domicilios.localidad,';}
if($domicilios->codigo_postal){$mostrar=$mostrar.' domicilios.codigo_postal,';}

$mostrar=rtrim($mostrar, ",");
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

$consulta = "SELECT ".$mostrar." FROM  deudores INNER JOIN productos ON deudores.documento = productos.documento INNER JOIN carpeta ON carpeta.numero_operacion = productos.numero_operacion INNER JOIN domicilios ON deudores.documento = domicilios.documento INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN estados ON estados.id = productos.estado INNER JOIN sub_estados ON sub_estados.id = productos.sub_estado LEFT OUTER JOIN telefonos ON deudores.documento = telefonos.dni WHERE deudores.documento LIKE '%$documento%' AND deudores.apellido LIKE '%$apellido%' ";
if($telefono!=''){
$consulta=$consulta." AND telefonos.numero LIKE '%$telefono%' ";
}
$consulta=$consulta.'GROUP BY productos.numero_operacion ';
$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
