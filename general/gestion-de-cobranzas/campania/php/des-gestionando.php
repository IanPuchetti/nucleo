<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id_campania=$request->id_campania;
$documento=$request->documento;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result3= $mysqli->query("UPDATE grupos_casos SET gestionando = 0 WHERE id_campania = '$id_campania' AND deudor='$documento'");
$mysqli->close();
echo 'Registrado correctamente';
?>