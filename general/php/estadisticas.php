<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$operador = $request->operador;
$periodo = $request->periodo;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
if($periodo=='dia'){
	$consulta = "SELECT id, documento, sub_estado, documento, CONCAT(HOUR(hora),':00') as hora, tiempo, count(documento) as gestiones from gestiones  WHERE operador = '$operador' AND fecha = curdate() group by hora";
}
$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
