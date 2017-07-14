<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$agenda1=$request->filtro ->agenda1;
$agenda2=$request->filtro ->agenda2;
$documento1=$request->filtro ->documento1;
$documento2=$request->filtro ->documento2;
$apellido=$request->filtro ->apellido;
$apellido1=$request->filtro ->apellido1;
$apellido2=$request->filtro ->apellido2;
$banco=$request->filtro ->banco -> id;
$responsable=$request->filtro ->responsable -> id;
$tipo_gesion=$request->filtro ->tipo_gestion;
$fecha_ingreso1=$request->filtro ->fecha_ingreso1;
$fecha_ingreso2=$request->filtro ->fecha_ingreso2;
$fecha_mora1=$request->filtro ->fecha_mora1;
$fecha_mora2=$request->filtro ->fecha_mora2;
$deuda1=$request->filtro ->deuda1;
$deuda2=$request->filtro ->deuda2;
$estado=$request->filtro ->estado -> id;
$sub_estado=$request->filtro ->sub_estado -> id;
$reporte=$request->filtro ->reportes;

$deudor=$request->campos->deudor;
$producto=$request->campos->producto;
$domicilios=$request->campos->domicilios;
$carpeta=$request->campos->carpeta;
$mostrar=' ,';
if($deudor->tipo_documento){$mostrar=$mostrar.' deudores.tipo_documento,';}
if($deudor->apellido){$mostrar=$mostrar.' deudores.apellido,';}
if($deudor->mail){$mostrar=$mostrar.' deudores.email,';}
if($deudor->empresa){$mostrar=$mostrar.' deudores.empresa,';}
if($deudor->responsable){$mostrar=$mostrar.' usuarios.user as responsable,';}

if($producto->deuda_total){$mostrar=$mostrar.' products.deuda_total as deuda_total,';}
 
if($producto->estado){$mostrar=$mostrar.' estados.estado,';}
if($producto->sub_estado){$mostrar=$mostrar.' sub_estados.sub_estado,';}
if($producto->banco){$mostrar=$mostrar.' bancos.dbanco,';}
if($producto->producto){$mostrar=$mostrar.' productos.producto,';}
if($producto->numero_operacion){$mostrar=$mostrar.' productos.numero_operacion,';}
if($producto->nombre_producto){$mostrar=$mostrar.' productos.nombre_producto,';}
if($producto->deuda){$mostrar=$mostrar.' productos.deuda,';}
if($producto->moneda){$mostrar=$mostrar.' IF(productos.dolar = 1, "US$", "$") as moneda,';}
if($producto->fecha_deuda){$mostrar=$mostrar.' productos.fecha_deuda,';}
if($producto->fecha_mora){$mostrar=$mostrar.' productos.fecha_mora,';}
if($producto->fecha_ult_cobro){$mostrar=$mostrar.' productos.fecha_ult_cobro,';}
if($producto->tipo_gestion){$mostrar=$mostrar.' productos.tipo_gestion,';}
if($producto->agenda){$mostrar=$mostrar.' productos.agenda,';}
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

if($reporte=='sin' || $reporte=='con'){
	$reports='LEFT OUTER JOIN reportes ON reportes.documento = deudores.documento ';
}else{
	$reports='';
}

$consulta = "SELECT deudores.documento ".$mostrar." FROM deudores INNER JOIN productos ON deudores.documento = productos.documento INNER JOIN carpeta ON carpeta.numero_operacion = productos.numero_operacion INNER JOIN domicilios ON deudores.documento = domicilios.documento INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN estados ON estados.id = productos.estado INNER JOIN sub_estados ON sub_estados.id = productos.sub_estado LEFT OUTER JOIN usuarios ON usuarios.id=deudores.responsable ".$reports." WHERE 1 ";

if($apellido1 && $apellido2){
	$consulta = $consulta." AND (deudores.apellido >= '$apellido1' AND deudores.apellido <= '$apellido2') ";
}else{
	if($apellido){
	$consulta = $consulta." AND deudores.apellido LIKE '%$apellido%' ";	
}
}


if(isset($banco)){
$consulta = $consulta." AND productos.banco = '$banco' ";
}

if(isset($documento1) && isset($documento2)){
$consulta = $consulta." AND (productos.documento BETWEEN '$documento1' AND '$documento2') ";
}else{
	if($documento){
	$consulta = $consulta." AND productos.documento LIKE '%$documento%' ";	
}
}

if(isset($agenda1) && isset($agenda2)){
$consulta = $consulta." AND (productos.agenda BETWEEN '$agenda1' AND '$agenda2') ";
}

if(isset($fecha_ingreso1) && isset($fecha_ingreso2)){
$consulta = $consulta." AND (productos.fecha_deuda BETWEEN '$fecha_ingreso1' AND '$fecha_ingreso2') ";
}

if(isset($responsable)){
$consulta = $consulta." AND deudores.responsable = '$responsable' ";
}

if(isset($tipo_gestion)){
$consulta = $consulta." AND productos.tipo_gestion = '$tipo_gestion' ";
}

if( isset($deuda1) && isset($deuda2)){
$consulta = $consulta." AND (productos.deuda BETWEEN '$deuda1' AND '$deuda2') ";
}

if(isset($fecha_mora1) && isset($fecha_mora2)){
$consulta = $consulta." AND (productos.fecha_mora BETWEEN '$fecha_mora1' AND '$fecha_mora2') ";
}


if(isset($estado)){
$consulta = $consulta." AND productos.estado = '$estado' ";
}

if(isset($sub_estado)){
$consulta = $consulta." AND productos.sub_estado = '$sub_estado' ";
}

if($reporte=='sin'){
	$consulta = $consulta." AND reportes.link IS NULL ";
}else{
	if($reporte=='con'){
		$consulta = $consulta." AND reportes.link IS NOT NULL ";
	}
}


$consulta = $consulta." GROUP BY productos.numero_operacion";
$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
