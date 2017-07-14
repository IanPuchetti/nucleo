<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request->documento;
$rows = array();
if ($result = $mysqli->query("SELECT fecha_propuesta, monto_total as monto, monto_primer_pago as anticipo, cuotas, fecha_pago, aprobado, cuota_cero FROM propuestas where deudor = $documento")) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
