<?php
$id_caso=$_POST['id_caso'];
$id_camp=$_POST['id_camp'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE grupos_casos SET gestionado = 1 WHERE id_caso = '$id_caso' AND id_campania = '$id_camp' LIMIT 1");
$mysqli->close();
echo 'Gestionado correctamente';
?>
