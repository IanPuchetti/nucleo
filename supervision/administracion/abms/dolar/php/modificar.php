<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$valor=$data->valor;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE monedas SET valor = '$valor' WHERE id = '1'");
$mysqli->close();
echo 'Modificado correctamente';
?>
