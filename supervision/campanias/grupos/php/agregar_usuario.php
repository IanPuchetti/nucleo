<?php
$id_grupo=$_POST['id_grupo'];
$id_usuario=$_POST['id_usuario'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO grupos_usuarios VALUES($id_grupo, $id_usuario)");
$mysqli->close();
echo 'Agregado correctamente';
?>
