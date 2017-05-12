<?php
$id_grupo=$_POST['id_grupo'];
$id_usuario=$_POST['id_usuario'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("DELETE FROM grupos_usuarios WHERE id_grupo='$id_grupo' AND id_usuario='$id_usuario'");
$mysqli->close();
echo 'Eliminado correctamente';
?>
