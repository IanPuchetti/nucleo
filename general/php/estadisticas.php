<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$operador = $request->operador;
$periodo = $request->periodo;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
if($periodo=='dia'){
	//$consulta = "SELECT id, documento, sub_estado, documento, CONCAT(HOUR(hora),':00') as hora, tiempo, count(documento) as gestiones from gestiones  WHERE operador = '$operador' AND fecha = curdate() group by hora";
	$consulta = "SELECT id, documento, documento, CONCAT(HOUR(hora),':00') as horas, count(documento) as gestiones from gestiones  WHERE operador = '$operador' AND fecha = curdate() group by horas";
}else{
	if($periodo=='semana'){
			$consulta = "SELECT id, documento, documento, DATE_FORMAT(fecha,'%d/%m/%Y') as fecha, count(documento) as gestiones from gestiones  WHERE operador = '$operador' AND YEARWEEK(fecha) = YEARWEEK(NOW()) group by fecha";
	}else{
		if($periodo=='mes'){
						$consulta = "SELECT id, documento, documento,  DATE_FORMAT(fecha,'%d/%m/%Y') as fecha, count(documento) as gestiones from gestiones  WHERE operador = '$operador' AND MONTH(fecha) = MONTH(NOW()) group by fecha";
		}
	}
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
