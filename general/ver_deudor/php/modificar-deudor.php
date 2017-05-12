<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request -> documento;
$email=$request -> email;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("UPDATE deudores SET  email = '$email' WHERE documento = '$documento'");
$mysqli->close();
echo 'Email modificado correctamente';
?>
