<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$hoy = $request -> hoy;
$tabla = $request -> tabla;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
foreach ($tabla as $sms) {
	$documento= $sms->documento;
	$telefono= $sms->telefono;
	$banco= $sms->banco;
	$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL, '$documento', '$telefono', 'Se ha enviado un SMS.', '$hoy', 0, 0, 0, 0, 3, 0)");
	$result2 = $mysqli->query("DELETE FROM sms WHERE documento = '$documento' AND telefono = '$telefono'");
}
$mysqli->close();
echo 'Se han eliminado los registros exportados';
?>
