<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$fecha = $request->fecha;

$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$consulta = "SELECT DISTINCT deudores.documento, agendas.gestion, agendas.id, deudores.apellido, estados.estado, bancos.dbanco FROM  agendas INNER JOIN deudores ON deudores.documento = agendas.deudor INNER JOIN productos ON agendas.deudor = productos.documento INNER JOIN bancos ON bancos.cbanco = productos.banco  INNER JOIN estados ON productos.estado = estados.id  WHERE agendas.fecha = '$fecha' ";
$consulta=$consulta." GROUP BY deudores.documento";
$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
