<?php
$dbanco=$_POST["dbanco"];
$abrev=$_POST["abrev"];
$tasa=$_POST["tasa"];
$honorarios=$_POST["honorarios"];
$gastos=$_POST["gastos"];
$tas_frances=$_POST["tas_frances"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO bancos VALUES(NULL, '$dbanco', '$abrev', '$tasa', '$honorarios', '$gastos', '$tasa_frances')");
$mysqli->close();
echo 'Registrado correctamente';
?>
