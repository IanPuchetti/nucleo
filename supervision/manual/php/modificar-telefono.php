<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$numero= $request -> numero;
$anterior= $request -> anterior;
$comentario= $request -> comentario;
$documento=$request-> dni;
$result = $mysqli->query("UPDATE telefonos SET comentario = '$comentario', numero = '$numero' WHERE numero = '$anterior' AND dni='$documento'");
$mysqli->close();
echo 'Telefono modificado correctamente';
?>
