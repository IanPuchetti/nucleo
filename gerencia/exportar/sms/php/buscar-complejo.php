<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$banco= $request->filtro->banco->id;
$fecha1= $request->filtro->fecha1;
$fecha2= $request->filtro->fecha2;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

$deudor=$request->campos->deudor;
$producto=$request->campos->producto;
$telefono=$request->campos->telefono;
$mostrar=' ,';
if($deudor->apellido){$mostrar=$mostrar." deudores.apellido as 'Apellido',";}
if($deudor->mail){$mostrar=$mostrar." deudores.email as 'Email',";}

if($producto->estado){$mostrar=$mostrar." estados.estado as 'Estado',";}
if($producto->sub_estado){$mostrar=$mostrar." sub_estados.sub_estado as 'Sub_estado',";}
if($producto->banco){$mostrar=$mostrar." bancos.dbanco as 'Banco',";}

if($telefono->calificacion){$mostrar=$mostrar." IF(telefonos.calificacion='0', 'SIN CALIFICAR', calificacion_telefonos.titulo) as 'Calificacion_telefono',";}
if($telefono->comentario){$mostrar=$mostrar." telefonos.comentario as 'Descripcion',";}
$mostrar=rtrim($mostrar, ",");

$consulta = "SELECT sms.documento, sms.telefono ".$mostrar." FROM  sms LEFT OUTER JOIN deudores ON deudores.documento = sms.documento LEFT OUTER JOIN (select * from productos group by documento) productos ON productos.documento=sms.documento LEFT OUTER JOIN bancos ON bancos.cbanco = productos.banco LEFT OUTER JOIN telefonos ON telefonos.numero = sms.telefono LEFT OUTER JOIN estados ON productos.estado = estados.id  LEFT OUTER JOIN sub_estados ON productos.sub_estado = sub_estados.id LEFT OUTER JOIN calificacion_telefonos ON calificacion_telefonos.id = telefonos.calificacion WHERE 1 ";

if($banco){
$consulta = $consulta." AND productos.banco = '$banco' ";
}

if($fecha1 && $fecha2){
$consulta = $consulta." AND (sms.fecha BETWEEN '$fecha1' AND '$fecha2') ";
}
$consulta=$consulta." GROUP BY sms.telefono ";
$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
