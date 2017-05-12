<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$numero= $request -> numero;
$comentario= $request -> comentario;
$result = $mysqli->query("UPDATE telefonos SET comentario = '$comentario' WHERE numero = '$numero'");
$mysqli->close();
echo 'Telefono modificado correctamente';
?>
