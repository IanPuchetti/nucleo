<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$hoy=$request->hoy;
$documento=$request->documento;
$telefono=$request->telefono->numero;
$banco=$request->banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO sms VALUES('$documento', '$telefono', '$banco', '$hoy')");
$mysqli->close();
echo 'SMS puesto en cola.';
?>
