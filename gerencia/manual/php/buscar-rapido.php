<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento = $request->documento;
$apellido = $request->apellido;
$telefono = $request->telefono;

$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$consulta = "SELECT DISTINCT deudores.documento, deudores.apellido, estados.estado, bancos.dbanco, reportes.link FROM  productos LEFT OUTER JOIN reportes ON reportes.documento = productos.documento INNER JOIN deudores ON deudores.documento = productos.documento INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN estados ON productos.estado = estados.id LEFT OUTER JOIN telefonos ON deudores.documento = telefonos.dni WHERE deudores.documento LIKE '%$documento%' AND deudores.apellido LIKE '%$apellido%' ";
if($telefono!=''){
$consulta=$consulta." AND telefonos.numero LIKE '%$telefono%'";
}
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
