<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request -> documento;
$numero= $request -> numero;
$comentario=$request -> comentario;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO telefonos VALUES('$documento', '$numero', '$comentario', 1)");
$mysqli->close();
echo 'Telefono registrado correctamente';
?>
