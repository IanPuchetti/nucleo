<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$banco= $request->filtro->banco->id;
$fecha_propuesta1= $request->filtro->fecha_propuesta1;
$fecha_propuesta2= $request->filtro->fecha_propuesta2;
$fecha_pago1= $request->filtro->fecha_pago1;
$fecha_pago2= $request->filtro->fecha_pago2;
$responsable= $request->filtro->responsable->id;
$monto_acuerdo1= $request->filtro->monto_acuerdo1;
$monto_acuerdo2= $request->filtro->monto_acuerdo2;
$monto_primer_pago1= $request->filtro->monto_primer_pago1;
$monto_primer_pago2= $request->filtro->monto_primer_pago2;
$aprobados= $request->filtro->aprobados;
$cuota_cero= $request->filtro->cuota_cero;
$cuotas= $request->filtro->cuotas;
$apellido= $request->filtro->apellido;
$asignacion= $request->filtro->asignacion;

$deudor=$request->campos->deudor;
$producto=$request->campos->producto;
$propuesta=$request->campos->propuesta;

$mostrar=' ,';
if($deudor->apellido){$mostrar=$mostrar." deudores.apellido as 'Apellido',";}
if($deudor->mail){$mostrar=$mostrar." deudores.email as 'Email',";}
if($deudor->responsable){$mostrar=$mostrar." responsable.user as 'Responsable',";}

if($producto->estado){$mostrar=$mostrar." estados.estado as 'Estado',";}
if($producto->sub_estado){$mostrar=$mostrar." sub_estados.sub_estado as 'Sub_Estado',";}
if($producto->banco){$mostrar=$mostrar." bancos.dbanco as 'Banco',";}

if($propuesta->fecha_propuesta){$mostrar=$mostrar." propuestas.fecha_propuesta as 'fecha_propuesta',";}
if($propuesta->monto_acuerdo){$mostrar=$mostrar." propuestas.monto_total as 'monto_acuerdo',";}
if($propuesta->monto_primer_pago){$mostrar=$mostrar." propuestas.monto_primer_pago as 'monto_primer_pago',";}
if($propuesta->cuotas){$mostrar=$mostrar." propuestas.cuotas as 'cuotas',";}
if($propuesta->cuota_cero){$mostrar=$mostrar." IF(propuestas.cuota_cero='0', 'NO', 'SI') as 'cuota_cero',";}
if($propuesta->fecha_pago){$mostrar=$mostrar." propuestas.fecha_pago as 'fecha_pago',";}
if($propuesta->aprobado){$mostrar=$mostrar." IF(propuestas.aprobado='0', 'NO', 'SI') as 'aprobado',";}
if($propuesta->asignacion){$mostrar=$mostrar." propuestas.asignacion as 'asignacion',";}
if($propuesta->telefono1){$mostrar=$mostrar." propuestas.telefono1 as 'telefono1',";}
if($propuesta->telefono2){$mostrar=$mostrar." propuestas.telefono2 as 'telefono2',";}
if($propuesta->telefono3){$mostrar=$mostrar." propuestas.telefono3 as 'telefono3',";}


$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

$mostrar=rtrim($mostrar, ",");
$consulta = "SELECT deudores.documento, propuestas.id ".$mostrar." FROM propuestas LEFT OUTER JOIN deudores ON propuestas.deudor = deudores.documento LEFT OUTER JOIN (SELECT * FROM  productos GROUP BY documento) productos ON propuestas.deudor = productos.documento LEFT OUTER JOIN estados ON estados.id = productos.estado LEFT OUTER JOIN usuarios as responsable ON propuestas.operador = responsable.id  LEFT OUTER JOIN sub_estados ON sub_estados.id = productos.sub_estado LEFT OUTER JOIN bancos ON bancos.cbanco = propuestas.banco  WHERE 1 ";


	if($apellido){
	$consulta = $consulta." AND deudores.apellido LIKE '%$apellido%' ";	
}

if(isset($banco)){
$consulta = $consulta." AND propuestas.banco = '$banco' ";
}

if(isset($asignacion)){
$consulta = $consulta." AND propuestas.asignacion = '$asignacion' ";
}
if(isset($cuotas)){
$consulta = $consulta." AND propuestas.cuotas = '$cuotas' ";
}

if(isset($documento1) && isset($documento2)){
$consulta = $consulta." AND (propuestas.deudor BETWEEN '$documento1' AND '$documento2') ";
}

if(isset($monto_primer_pago1) && isset($monto_primer_pago2)){
$consulta = $consulta." AND (propuestas.monto_primer_pago BETWEEN '$monto_primer_pago1' AND '$monto_primer_pago2') ";
}

if(isset($monto_acuerdo1) && isset($monto_acuerdo2)){
$consulta = $consulta." AND (propuestas.monto_total BETWEEN '$monto_acuerdo1' AND '$monto_acuerdo2') ";
}

if(isset($fecha_propuesta1) && isset($fecha_propuesta2)){
$consulta = $consulta." AND (propuestas.fecha_propuesta BETWEEN '$fecha_propuesta1' AND '$fecha_propuesta2') ";
}

if(isset($fecha_pago1) && isset($fecha_pago2)){
$consulta = $consulta." AND (propuestas.fecha_pago BETWEEN '$fecha_pago1' AND '$fecha_pago2') ";
}

if($cuota_cero=='sin'){
	$consulta = $consulta." AND propuestas.cuota_cero = 0 ";
}else{
	if($cuota_cero=='con'){
		$consulta = $consulta." AND propuestas.cuota_cero =1 ";
	}
}

if($cuota_cero=='no'){
	$consulta = $consulta." AND propuestas.cuota_cero = 0 ";
}else{
	if($cuota_cero=='si'){
		$consulta = $consulta." AND propuestas.cuota_cero =1 ";
	}
}

if($aprobados=='no'){
	$consulta = $consulta." AND propuestas.aprobado = 0 ";
}else{
	if($aprobados=='si'){
		$consulta = $consulta." AND propuestas.aprobado =1 ";
	}
}


$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
