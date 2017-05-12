<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$documento=$data->documento;
$banco=$data->banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT estados.estado, deudores.apellido, deudores.documento, domicilios.*, bancos.dbanco, carpeta.*, productos.* FROM productos INNER JOIN deudores ON deudores.documento=productos.documento INNER JOIN bancos ON bancos.cbanco=productos.banco INNER JOIN estados ON estados.id=productos.estado LEFT OUTER JOIN domicilios ON domicilios.documento=productos.documento INNER JOIN carpeta ON carpeta.numero_operacion = productos.numero_operacion WHERE productos.documento='$documento' AND productos.banco='$banco'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();

?>

