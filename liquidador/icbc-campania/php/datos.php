<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$documento=$data->documento;
$banco=$data->banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT productos.estado, bancos.dbanco AS banco, bancos.tasa_frances, bancos.tasa, bancos.honorarios AS porcentaje_honorarios, bancos.gastos, deudores.apellido AS titular, productos.documento, deudores.email, carpeta.numero_gestion, productos.fecha_deuda as fecha_actualizacion, MIN(productos.fecha_mora) as fecha_mora, productos.deuda as capital_inicial FROM productos INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN carpeta ON carpeta.numero_operacion = productos.numero_operacion INNER JOIN deudores ON deudores.documento = productos.documento WHERE productos.banco='$banco' AND productos.documento='$documento'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();

?>

