<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$documento=$data->documento;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT  telefonos.numero, telefonos.comentario, calificacion_telefonos.titulo AS calificacion FROM telefonos INNER JOIN calificacion_telefonos ON calificacion_telefonos.id=telefonos.calificacion WHERE dni='$documento'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
