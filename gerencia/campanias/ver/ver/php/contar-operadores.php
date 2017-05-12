<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id_campania=$request->id_campania;
$fecha=$request->fecha;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$rows = array();
if ($result = $mysqli->query("SELECT DISTINCT usuarios.user as operador, COUNT(grupos_casos.deudor) AS cantidad FROM grupos_casos INNER JOIN gestiones ON grupos_casos.gestionado = gestiones.id INNER JOIN usuarios ON gestiones.operador = usuarios.id WHERE grupos_casos.id_campania= '$id_campania' AND gestiones.fecha <= '$fecha' GROUP BY gestiones.operador")) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
