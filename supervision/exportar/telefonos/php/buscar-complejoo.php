<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$agenda1=$request->filtro ->agenda1;
$agenda2=$request->filtro ->agenda2;
$documento1=$request->filtro ->documento1;
$documento2=$request->filtro ->documento2;
$apellido=$request->filtro ->apellido;
$banco=$request->filtro ->banco -> id;
$responsable=$request->filtro ->responsable->id;
$tipo_gesion=$request->filtro ->tipo_gestion;
$fecha_ingreso1=$request->filtro ->fecha_ingreso1;
$fecha_ingreso2=$request->filtro ->fecha_ingreso2;
$deuda1=$request->filtro ->deuda1;
$deuda2=$request->filtro ->deuda2;
$estado=$request->filtro ->estado -> id;

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
if($deudor->responsable){$mostrar=$mostrar.' usuarios.user,';}


if($producto->estado){$mostrar=$mostrar.' estados.estado,';}
if($producto->sub_estado){$mostrar=$mostrar.' sub_estados.sub_estado,';}
if($producto->banco){$mostrar=$mostrar.' bancos.dbanco,';}
if($producto->proxima_accion){$mostrar=$mostrar.' proximas_acciones.accion,';}
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

$consulta = "SELECT ".$mostrar." FROM  deudores INNER JOIN productos ON deudores.documento = productos.documento INNER JOIN carpeta ON carpeta.numero_operacion = productos.numero_operacion INNER JOIN domicilios ON deudores.documento = domicilios.documento INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN estados ON estados.id = productos.estado INNER JOIN sub_estados ON sub_estados.id = productos.sub_estado WHERE deudores.apellido LIKE '%$apellido%' ";

if(isset($banco)){
$consulta = $consulta."AND productos.banco LIKE '$banco' ";
}

if(isset($documento1) && isset($documento2)){
$consulta = $consulta."AND (productos.documento BETWEEN '$documento1' AND '$documento2') ";
}

if(isset($agenda1) && isset($agenda2)){
$consulta = $consulta."AND (productos.agenda BETWEEN '$agenda1' AND '$agenda2') ";
}

if(isset($fecha_ingreso1) && isset($fecha_ingreso2)){
$consulta = $consulta."AND (productos.fecha_deuda BETWEEN '$fecha_ingreso1' AND '$fecha_ingreso2') ";
}

if(isset($responsable)){
$consulta = $consulta."AND productos.responsable LIKE '$responsable' ";
}

if(isset($tipo_gestion)){
$consulta = $consulta."AND productos.tipo_gestion LIKE '$tipo_gestion' ";
}

if( isset($deuda1) && isset($deuda2)){
$consulta = $consulta."AND (productos.deuda BETWEEN '$deuda1' AND '$deuda2') ";
}

if(isset($estado)){
$consulta = $consulta."AND productos.estado LIKE '$estado' ";
}

if(isset($proxima_accion)){
$consulta = $consulta."AND productos.proxima_accion LIKE '$proxima_accion' ";
}

$consulta = $consulta." GROUP BY deudores.documento";
$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
