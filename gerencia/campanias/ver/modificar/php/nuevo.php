<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$puesto=$_POST['puesto'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("INSERT INTO usuarios VALUES(NULL, '$user', '$pass', '$puesto')");
$mysqli->close();
echo 'Registrado correctamente';
?>
