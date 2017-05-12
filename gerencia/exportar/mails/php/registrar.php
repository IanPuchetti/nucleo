<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$hoy = $request -> hoy;
$tabla = $request -> tabla;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
foreach ($tabla as $mail) {
	$documento= $mail->documento;
	$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL, '$documento', '0', 'Se ha enviado un MAIL.', '$hoy', 0, 0, 0, 0, 3, 0)");
	$result2 = $mysqli->query("DELETE FROM mails WHERE 1");
}
$mysqli->close();
echo 'Se han eliminado los registros exportados';
?>
