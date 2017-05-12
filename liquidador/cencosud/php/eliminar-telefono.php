<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$numero=$_POST['numero'];
$result = $mysqli->query("DELETE FROM telefonos WHERE numero = '$numero' LIMIT 1");
$mysqli->close();
echo 'Telefono eliminado correctamente';
?>
