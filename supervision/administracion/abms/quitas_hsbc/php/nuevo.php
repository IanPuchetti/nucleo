<?php
$n_gestion=$_POST["n_gestion"];
$cuotas=$_POST["cuotas"];
$tasa=$_POST["tasa"];
$anticipo=$_POST["anticipo"];
$descuento=$_POST["descuento"];
$maximo=$_POST["maximo"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO quitas_hsbc VALUES( '$n_gestion', '$cuotas', '$tasa', '$anticipo', '$descuento', '$maximo')");
$mysqli->close();
echo 'Registrado correctamente';
?>
