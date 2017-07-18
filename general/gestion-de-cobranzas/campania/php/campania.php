<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id_campania=$request->id_campania;
$conn = new mysqli("localhost", "ian", "p", "nucleo");
$result = $conn->query("SELECT * FROM (SELECT grupos_casos.id_campania, grupos_casos.deudor FROM grupos_casos WHERE grupos_casos.gestionado = 0 AND grupos_casos.gestionando = 0 AND grupos_casos.id_campania = '$id_campania' ORDER BY RAND() LIMIT 1) as i GROUP BY id_campania");
$campanias = array();
$productos = array();
while($r = $result->fetch_array()){
		$campanias[] = $r;
}
echo json_encode($campanias);
$conn->close();
?>
