<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request->documento;
$telefono=$request->telefono;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO ivr VALUES('$documento', '$telefono',  CURDATE())");
$mysqli->close();
echo 'IVR puesto en cola.';
?>
