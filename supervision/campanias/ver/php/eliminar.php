<?php
$id=$_POST['id'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("DELETE FROM campanias WHERE id='$id' LIMIT 1");
$mysqli->close();
echo 'Eliminado correctamente';
?>
