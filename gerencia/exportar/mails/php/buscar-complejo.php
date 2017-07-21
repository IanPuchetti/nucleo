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
$mostrar=' ,';
if($deudor->apellido){$mostrar=$mostrar." deudores.apellido as 'Apellido',";}

if($producto->estado){$mostrar=$mostrar." estados.estado as 'Estado',";}
if($producto->sub_estado){$mostrar=$mostrar." sub_estados.sub_estado as 'Sub_estado',";}
if($producto->banco){$mostrar=$mostrar." bancos.dbanco as 'Banco',";}

$mostrar=rtrim($mostrar, ",");

$consulta = "SELECT mails.documento, deudores.email as 'Email' ".$mostrar." FROM  mails INNER JOIN deudores ON deudores.documento = mails.documento INNER JOIN (select * from productos group by documento) productos ON productos.documento=mails.documento INNER JOIN bancos ON bancos.cbanco = productos.banco  LEFT OUTER JOIN estados ON productos.estado = estados.id  LEFT OUTER JOIN sub_estados ON productos.sub_estado = sub_estados.id  ";

if($banco){
$consulta = $consulta." WHERE productos.banco = '$banco' ";
}

if($fecha1 && $fecha2){
$consulta = $consulta." AND (mails.fecha BETWEEN '$fecha1' AND '$fecha2') ";
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
