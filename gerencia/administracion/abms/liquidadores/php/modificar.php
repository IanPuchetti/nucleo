<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$id_banco=$data->id_banco;
$liquidador=$data->liquidador;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE liquidador_banco SET id_banco = '$id_banco' WHERE liquidador = '$liquidador'");
$mysqli->close();
echo 'Modificado correctamente';
?>
