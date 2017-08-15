<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$hoy=$request->hoy;
$documento=$request->documento;
$banco=$request->banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO mails VALUES('$documento', CURDATE())");
$mysqli->close();
echo 'Mail puesto en cola.';
?>