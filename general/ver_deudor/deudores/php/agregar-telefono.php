<?php
$documento=$_POST['documento'];
$numero=$_POST['numero'];
$comentario=$_POST['comentario'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO telefonos VALUES('$documento', '$numero', '$comentario', 1)");
$mysqli->close();
echo 'Telefono registrado correctamente';
?>
