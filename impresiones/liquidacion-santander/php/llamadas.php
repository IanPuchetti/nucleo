<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$documento=$data->documento;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT llamadas.telefono, llamadas.comentario, llamadas.fecha, proximas_acciones.accion, tipo_gestion.tipo, usuarios.user AS operador FROM llamadas INNER JOIN proximas_acciones ON proximas_acciones.id=llamadas.proxima_accion INNER JOIN usuarios ON usuarios.id = llamadas.operador INNER JOIN tipo_gestion ON tipo_gestion.id = llamadas.tipo_gestion WHERE llamadas.documento='$documento'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
