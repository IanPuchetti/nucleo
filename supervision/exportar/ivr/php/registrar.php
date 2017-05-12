<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$hoy = $request -> hoy;
$tabla = $request -> tabla;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
foreach ($tabla as $ivr) {
	$documento= $ivr->documento;
	$telefono= $ivr->telefono;
	$banco= $ivr->banco;
	$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL, '$documento', '$telefono', 'Se ha enviado un ivr.', '$hoy', 0, 0, 0, 0, 3, 0)");
	$result2 = $mysqli->query("DELETE FROM ivr WHERE documento = '$documento' AND telefono = '$telefono'");
}
$mysqli->close();
echo 'Se han eliminado los registros exportados';
?>
