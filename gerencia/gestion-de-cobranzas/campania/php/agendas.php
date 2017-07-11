<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id=$request->id;
$fecha=$request->fecha;
$conn = new mysqli("localhost", "ian", "p", "nucleo");
$result = $conn->query("SELECT * FROM (SELECT agendas.id, agendas.deudor as documento, deudores.apellido, estados.estado, bancos.dbanco, agendas.fecha FROM agendas INNER JOIN deudores ON deudores.documento = agendas.deudor INNER JOIN productos ON productos.documento = agendas.deudor LEFT OUTER JOIN bancos ON bancos.cbanco=productos.banco LEFT OUTER JOIN estados ON estados.id = productos.estado WHERE agendas.operador = $id AND agendas.fecha = '$fecha' AND agendas.gestion = 0) i GROUP BY documento ORDER BY RAND() LIMIT 1");
$agendas = array();
while($r = $result->fetch_array()){
		$agendas[] = $r;
	}
echo json_encode($agendas);
$conn->close();
?>
