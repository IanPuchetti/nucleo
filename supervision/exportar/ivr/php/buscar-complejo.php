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

$consulta = "SELECT ivr.documento, ivr.telefono ".$mostrar." FROM  ivr INNER JOIN deudores ON deudores.documento = ivr.documento INNER JOIN (select * from productos group by documento) productos ON productos.documento=ivr.documento INNER JOIN bancos ON bancos.cbanco = ivr.banco INNER JOIN telefonos ON telefonos.numero = ivr.telefono LEFT OUTER JOIN estados ON productos.estado = estados.id  LEFT OUTER JOIN sub_estados ON productos.sub_estado = sub_estados.id INNER JOIN calificacion_telefonos ON calificacion_telefonos.id = telefonos.calificacion ";

if($banco){
$consulta = $consulta." WHERE ivr.banco = '$banco' ";
}

if($fecha1 && $fecha2){
$consulta = $consulta." AND (ivr.fecha BETWEEN '$fecha1' AND '$fecha2') ";
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
