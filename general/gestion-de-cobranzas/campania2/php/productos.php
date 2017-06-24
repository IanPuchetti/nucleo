<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request -> documento;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT deudores.documento ,deudores.tipo_documento, deudores.apellido, deudores.email, deudores.empresa, domicilios.direccion_laboral, domicilios.direccion_laboral2, domicilios.direccion_particular, domicilios.direccion_particular2, domicilios.direccion_particular3, domicilios.provincia, domicilios.localidad, domicilios.codigo_postal FROM deudores INNER JOIN domicilios ON deudores.documento = domicilios.documento WHERE deudores.documento='$documento' LIMIT 1");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
