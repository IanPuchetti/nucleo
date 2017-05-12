<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento = $request->documento;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT productos.numero_operacion, productos.documento, productos.producto, productos.deuda, productos.fecha_deuda, productos.fecha_mora, productos.estado,  productos.fecha_ult_cobro, productos.banco, bancos.dbanco, productos.nombre_producto, productos.sub_estado, carpeta.caratula, carpeta.comentario, carpeta.sucursal, carpeta.dias_adic, carpeta.legajo, carpeta.numero_gestion, carpeta.numero_lote  FROM productos INNER JOIN carpeta ON productos.numero_operacion = carpeta.numero_operacion INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN estados ON estados.id = productos.estado  INNER JOIN sub_estados ON sub_estados.id = productos.sub_estado WHERE productos.documento='$documento'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
