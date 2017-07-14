<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$agenda1=$request ->agenda1;
$agenda2=$request ->agenda2;
$documento1=$request ->documento1;
$documento2=$request ->documento2;
$apellido=$request ->apellido;
$banco=$request ->banco;
$responsable=$request ->responsable->id;
$tipo_gesion=$request ->tipo_gestion;
$fecha_ingreso1=$request ->fecha_ingreso1;
$fecha_ingreso2=$request ->fecha_ingreso2;
$deuda1=$request ->deuda1;
$deuda2=$request ->deuda2;
$estado=$request ->estado;
$sub_estado=$request ->sub_estado;

$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

$consulta = "SELECT DISTINCT deudores.documento, deudores.apellido, estados.estado, bancos.dbanco, reportes.link FROM  productos LEFT OUTER JOIN reportes ON reportes.documento = productos.documento INNER JOIN deudores ON deudores.documento = productos.documento INNER JOIN estados ON productos.estado = estados.id INNER JOIN bancos ON bancos.cbanco = productos.banco WHERE deudores.apellido LIKE '%$apellido%'";

if($banco != 0){
$consulta = $consulta."AND productos.banco LIKE '$banco' ";
}

if($documento1 != "" && $documento2 != ""){
$consulta = $consulta."AND (productos.documento BETWEEN '$documento1' AND '$documento2') ";
}

if($agenda1 != "" && $agenda2 != ""){
$consulta = $consulta."AND (productos.agenda BETWEEN '$agenda1' AND '$agenda2') ";
}

if($fecha_ingreso1 != "" && $fecha_ingreso2 != ""){
$consulta = $consulta."AND (productos.fecha_deuda BETWEEN '$fecha_ingreso1' AND '$fecha_ingreso2') ";
}

if($responsable){
$consulta = $consulta."AND deudores.responsable = '$responsable' ";
}

if($tipo_gestion != ""){
$consulta = $consulta."AND productos.tipo_gestion LIKE '$tipo_gestion' ";
}

if($deuda1 != "" && $deuda2 != ""){
$consulta = $consulta."AND (productos.deuda BETWEEN '$deuda1' AND '$deuda2') ";
}

if($estado != ""){
$consulta = $consulta."AND productos.estado = '$estado' ";
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
