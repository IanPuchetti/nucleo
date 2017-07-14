<?php
$id=$_POST['id'];
$dbanco=$_POST["dbanco"];
$abrev=$_POST["abrev"];
$tasa=$_POST["tasa"];
$honorarios=$_POST["honorarios"];
$gastos=$_POST["gastos"];
$tasa_frances=$_POST["tasa_frances"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE bancos SET dbanco = '$dbanco', abrev = '$abrev', tasa = '$tasa', honorarios = '$honorarios', gastos = '$gastos', tasa_frances = '$tasa_frances' WHERE cbanco = $id");
$mysqli->close();
echo 'Modificado correctamente';
?>
