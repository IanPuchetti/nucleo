<?php
$documento=$_POST['documento'];
$telefono=$_POST['telefono'];
$atendio=$_POST['atendio'];
$comentario=$_POST['comentario'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("INSERT INTO llamadas VALUES('$documento', '$telefono', '$atendio', '$comentario')");
$mysqli->close();
echo 'Registrado correctamente';
?>
