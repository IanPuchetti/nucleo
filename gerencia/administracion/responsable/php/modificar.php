<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request ->documento;
$operador=$request ->operador;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE deudores SET responsable = $operador WHERE documento = $documento");
$mysqli->close();
echo $documento.': su responsable fue modificado.';
?>
