<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$id=$_POST["id"];
$dnis=$_POST["dnis"];
$result = $mysqli->query("UPDATE campanias SET dnis = '$dnis' WHERE id = '$id'");
echo "Agregado correctamente";
$mysqli->close();
?>
