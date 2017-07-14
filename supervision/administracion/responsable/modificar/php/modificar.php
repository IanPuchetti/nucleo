<?php
$id=$_POST['id'];
$user=$_POST["user"];
$pass=$_POST["pass"];
$puesto=$_POST["puesto"];
$mysqli = new mysqli("localhost", "root", "p", "nucleo");
$result = $mysqli->query("UPDATE usuarios SET user = '$user', pass = '$pass', puesto = '$puesto' WHERE id = $id");
$mysqli->close();
echo 'Modificado correctamente';
?>
