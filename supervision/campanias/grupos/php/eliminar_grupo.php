<?php
$id=$_POST['id'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("DELETE FROM grupos WHERE id='$id' LIMIT 1");
$result = $mysqli->query("DELETE FROM grupos_usuarios WHERE id_grupo='$id'");
$mysqli->close();
echo 'Eliminado correctamente';
?>
