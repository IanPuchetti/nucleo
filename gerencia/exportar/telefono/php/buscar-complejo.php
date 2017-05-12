<?php
$agenda1=$_POST["agenda1"];
$agenda2=$_POST["agenda2"];
$documento1=$_POST["documento1"];
$documento2=$_POST["documento2"];
$apellido=$_POST["apellido"];
$banco=$_POST["banco"];
$responsable=$_POST["responsable"];
$tipo_gesion=$_POST["tipo_gestion"];
$fecha_ingreso1=$_POST["fecha_ingreso1"];
$fecha_ingreso2=$_POST["fecha_ingreso2"];
$deuda1=$_POST["deuda1"];
$deuda2=$_POST["deuda2"];
$estado=$_POST["estado"];
$proxima_accion=$_POST["proxima_accion"];

$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

$consulta = "SELECT DISTINCT deudores.apellido, telefonos.numero, telefonos.comentario, calificacion_telefonos.titulo as calificacion FROM telefonos INNER JOIN calificacion_telefonos ON calificacion_telefonos.id = telefonos.calificacion INNER JOIN deudores ON deudores.documento = telefonos.dni WHERE deudores.apellido LIKE '%$apellido%' ";

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

if($responsable != ""){
$consulta = $consulta."AND productos.responsable LIKE '$responsable' ";
}

if($tipo_gestion != ""){
$consulta = $consulta."AND productos.tipo_gestion LIKE '$tipo_gestion' ";
}

if($deuda1 != "" && $deuda2 != ""){
$consulta = $consulta."AND (productos.deuda BETWEEN '$deuda1' AND '$deuda2') ";
}

if($estado != ""){
$consulta = $consulta."AND productos.estado LIKE '$estado' ";
}

if($proxima_accion != ""){
$consulta = $consulta."AND productos.proxima_accion = '$proxima_accion' ";
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
