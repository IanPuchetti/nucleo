<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$agenda1=$request->filtro ->agenda1;
$agenda2=$request->filtro ->agenda2;
$contactado=$request->filtro ->contactado;
$fecha_contactado1=$request->filtro ->fecha_contactado1;
$fecha_contactado2=$request->filtro ->fecha_contactado2;
$movimiento=$request->filtro->movimiento;
$fecha_movimiento1=$request->filtro ->fecha_movimiento1;
$fecha_movimiento2=$request->filtro ->fecha_movimiento2;
$documento1=$request->filtro ->documento1;
$documento2=$request->filtro ->documento2;
$apellido=$request->filtro ->apellido;
$apellido1=$request->filtro ->apellido1;
$apellido2=$request->filtro ->apellido2;
$banco=$request->filtro ->banco -> id;
$responsable=$request->filtro ->responsable -> id;
$fecha_ingreso1=$request->filtro ->fecha_ingreso1;
$fecha_ingreso2=$request->filtro ->fecha_ingreso2;
$fecha_mora1=$request->filtro ->fecha_mora1;
$fecha_mora2=$request->filtro ->fecha_mora2;
$fecha_gestion1=$request->filtro ->fecha_gestion1;
$fecha_gestion2=$request->filtro ->fecha_gestion2;
$deuda1=$request->filtro ->deuda1;
$deuda2=$request->filtro ->deuda2;
$estado=$request->filtro ->estado -> id;
$sub_estado=$request->filtro ->sub_estado -> id;
$calificacion=$request->filtro ->calificacion -> id;
$tipo_gestion=$request->filtro ->tipo_gestion -> id;
$reporte=$request->filtro ->reportes;

$deudor=$request->campos->deudor;
$producto=$request->campos->producto;
$telefono=$request->campos->telefono;
$mostrar=' ,';
if($deudor->apellido){$mostrar=$mostrar." deudores.apellido as 'Apellido',";}
if($deudor->mail){$mostrar=$mostrar." deudores.email as 'Email',";}
if($deudor->responsable){$mostrar=$mostrar." responsable.user as 'Responsable',";}

if($producto->estado){$mostrar=$mostrar." estados.estado as 'Estado',";}
if($producto->sub_estado){$mostrar=$mostrar." sub_estado_actual.sub_estado as 'Sub_estado',";}
if($producto->banco){$mostrar=$mostrar." bancos.dbanco as 'Banco',";}
if($producto->deuda_total){$mostrar=$mostrar.' productos.deuda_total as deuda_total,';}

if($telefono->telefono){$mostrar=$mostrar." telefonos.numero as 'Telefono',";}
if($telefono->calificacion){$mostrar=$mostrar." IF(telefonos.calificacion='0', 'SIN CALIFICAR', calificacion_telefonos.titulo) as 'Calificacion_telefono',";}
if($telefono->comentario){$mostrar=$mostrar." telefonos.comentario as 'Descripcion',";}

//if($producto->responsable){$mostrar=$mostrar." usuarios.user,';}



$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

if($reporte=='sin' || $reporte=='con'){
	$reports='LEFT OUTER JOIN reportes ON reportes.documento = deudores.documento ';
}else{
	$reports='';
}
$joins='';

if($movimiento=='con'|| $movimiento=='todos'){
	$joins= " telefonos LEFT OUTER JOIN (SELECT * from gestiones group by gestiones.telefono) gestiones ON telefonos.dni = gestiones.documento  LEFT OUTER JOIN (SELECT * FROM deudores group by documento) deudores ON deudores.documento = telefonos.dni LEFT OUTER JOIN tipo_gestion ON tipo_gestion.id = gestiones.tipo_gestion LEFT OUTER JOIN calificacion_telefonos ON telefonos.calificacion = calificacion_telefonos.id ";
}else{
    $joins= " telefonos ";
}
$mostrar=rtrim($mostrar, ",");
$consulta = "SELECT deudores.documento ".$mostrar." FROM ".$joins." LEFT OUTER JOIN (SELECT *, round(sum(if(dolar=1, deuda*monedas.valor, deuda)),2) as deuda_total FROM  monedas, productos GROUP BY documento) productos ON deudores.documento = productos.documento LEFT OUTER JOIN bancos ON bancos.cbanco = productos.banco  LEFT OUTER JOIN estados ON estados.id = productos.estado LEFT OUTER JOIN usuarios as responsable ON deudores.responsable = responsable.id  LEFT OUTER JOIN sub_estados as sub_estado_actual ON sub_estado_actual.id = productos.sub_estado  ".$reports." WHERE 1 ";

if($apellido1 && $apellido2){
	$consulta = $consulta." AND (deudores.apellido >= '$apellido1' AND deudores.apellido <= '$apellido2') ";
}else{
	if($apellido){
	$consulta = $consulta." AND deudores.apellido LIKE '%$apellido%' ";	
}}

if(isset($banco)){
$consulta = $consulta." AND productos.banco = '$banco' ";
}

if(isset($documento1) && isset($documento2)){
$consulta = $consulta." AND (productos.documento BETWEEN '$documento1' AND '$documento2') ";
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

if(isset($calificacion)){
$consulta = $consulta." AND telefonos.calificacion = '$calificacion' ";
}

if(isset($fecha_gestion1) && isset($fecha_gestion2)){
$consulta = $consulta." AND (gestiones.fecha BETWEEN '$fecha_gestion1' AND '$fecha_gestion2') ";
}
if(isset($tipo_gestion)){
$consulta = $consulta." AND gestiones.tipo_gestion = '$tipo_gestion' ";
}
if(isset($fecha_gestion1) && isset($fecha_gestion2)){
$consulta = $consulta." AND (gestiones.fecha BETWEEN '$fecha_gestion1' AND '$fecha_gestion2') ";
}
if(isset($tipo_gestion)){
$consulta = $consulta." AND gestiones.tipo_gestion = '$tipo_gestion' ";
}
if($contactado=='sin'){
	$consulta = $consulta." AND (productos.sub_estado!='2' OR productos.sub_estado!='3' OR productos.sub_estado!='8') ";
}else{
	if($contactado=='con'){
		$consulta = $consulta." AND (productos.sub_estado='2' OR productos.sub_estado='3' OR productos.sub_estado='8') ";
	}
}

if($movimiento!='sin'){
	$consulta = $consulta." GROUP BY telefonos.numero ";
	if($movimiento=='con'){
	
}
}else{
$mostrar=',';
if($deudor->apellido){$mostrar=$mostrar." deudores.apellido as 'Apellido',";}
if($deudor->mail){$mostrar=$mostrar." deudores.email as 'Email',";}
if($deudor->responsable){$mostrar=$mostrar." responsable.user as 'Responsable',";}

if($producto->estado){$mostrar=$mostrar." estados.estado as 'Estado',";}
if($producto->sub_estado){$mostrar=$mostrar." sub_estado_actual.sub_estado as 'Sub_Estado_Actual',";}
if($producto->deuda_total){$mostrar=$mostrar.' round(sum(if(dolar=1, deuda*monedas.valor, deuda)),2) as deuda_total,';}
$mostrar=rtrim($mostrar, ",");

$consulta = "SELECT deudores.documento ".$mostrar." FROM monedas, deudores INNER JOIN productos ON productos.documento = deudores.documento LEFT OUTER JOIN estados ON estados.id = productos.estado LEFT OUTER JOIN usuarios as responsable ON deudores.responsable = responsable.id  LEFT OUTER JOIN sub_estados as sub_estado_actual ON sub_estado_actual.id = productos.sub_estado INNER JOIN bancos ON bancos.cbanco = productos.banco WHERE 1 ";
	
if($apellido1 && $apellido2){
	$consulta = $consulta." AND (deudores.apellido >= '$apellido1' AND deudores.apellido <= '$apellido2') ";
}else{
	if($apellido){
		$consulta = $consulta." AND deudores.apellido LIKE '%$apellido%' ";	
}}

if(isset($banco)){
$consulta = $consulta." AND productos.banco = '$banco' ";
}

if(isset($documento1) && isset($documento2)){
$consulta = $consulta." AND (productos.documento BETWEEN '$documento1' AND '$documento2') ";
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

$consulta = $consulta." AND deudores.documento  NOT IN (SELECT deudores.documento  FROM telefonos) GROUP BY telefonos.numero";

}


$consulta = $consulta." ";
$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

echo $rows;

$mysqli->close();
?>
