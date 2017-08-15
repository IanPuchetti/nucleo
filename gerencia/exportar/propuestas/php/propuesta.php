<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$propuesta= $request->id;




$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

$mostrar=rtrim($mostrar, ",");
$consulta = "SELECT deudores.documento, propuestas.id,  deudores.apellido as 'Apellido', estados.estado as 'Estado', sub_estados.sub_estado as 'Sub_Estado', bancos.dbanco as 'Banco', propuestas.fecha_propuesta as 'fecha_propuesta', propuestas.monto_total as 'monto_acuerdo', propuestas.monto_primer_pago as 'monto_primer_pago', propuestas.cuotas as 'cuotas', IF(propuestas.cuota_cero='0', 'NO', 'SI') as 'cuota_cero', propuestas.fecha_pago as 'fecha_pago', IF(propuestas.aprobado='0', 'NO', 'SI') as 'aprobado', propuestas.asignacion as 'asignacion', propuestas.telefono1 as 'telefono1', propuestas.telefono2 as 'telefono2', propuestas.telefono3 as 'telefono3' FROM propuestas LEFT OUTER JOIN deudores ON propuestas.deudor = deudores.documento LEFT OUTER JOIN (SELECT * FROM  productos GROUP BY documento, banco) productos ON propuestas.deudor = productos.documento LEFT OUTER JOIN estados ON estados.id = productos.estado LEFT OUTER JOIN usuarios as responsable ON propuestas.operador = responsable.id  LEFT OUTER JOIN sub_estados ON sub_estados.id = productos.sub_estado LEFT OUTER JOIN bancos ON bancos.cbanco = propuestas.banco  WHERE propuestas.id='$propuesta' ";



$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
