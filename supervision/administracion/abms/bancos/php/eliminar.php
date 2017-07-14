<?php
$id=$_POST['id'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("DELETE FROM bancos WHERE cbanco='$id' LIMIT 1");
$mysqli->close();
echo 'Eliminado correctamente';
?>
