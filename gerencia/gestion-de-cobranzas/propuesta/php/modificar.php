<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id= $request->id;
$fecha_propuesta= $request->fecha_propuesta;
$monto_primer_pago= $request->monto_primer_pago;
$fecha_pago= $request->fecha_pago;
$monto_total= $request->monto_total;
$cuotas= $request->cuotas;
$aprobado= $request->aprobado;
$cuota_cero= $request->cuota_cero;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE propuestas SET fecha_propuesta = '$fecha_propuesta', fecha_pago = '$fecha_pago', monto_primer_pago = '$monto_primer_pago', monto_total = '$monto_total', cuotas='$cuotas', aprobado='$aprobado', cuota_cero='$cuota_cero' WHERE id = $id");
$mysqli->close();
echo 'Modificado correctamente';
?>
