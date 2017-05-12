<?php
$hoy = getdate();
$fecha=$hoy[mday].'/'.$hoy[mon].'/'.$hoy[year];
$nombre=$_POST['nombre'];
$comentario=$_POST['comentario'];
$dnis=$_POST['dnis'];
$responsable=$_POST['responsable'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO campanias VALUES(NULL, '$nombre', '$fecha', '$comentario', '$dnis', '$responsable')");
$mysqli->close();
echo 'Campaña generada correctamente.';
?>
