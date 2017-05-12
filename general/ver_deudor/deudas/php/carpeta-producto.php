<?php
$id=$_POST["id"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT productos.documento, productos.producto, productos.deuda, productos.fecha_deuda, productos.fecha_mora, productos.pase_legales, productos.estado, productos.banco, productos.nombre_producto, productos.sub_estado, productos.proxima_accion, carpeta.caratula, carpeta.comentario, carpeta.sucursal, carpeta.dias_adic, carpeta.legajo, carpeta.numero_gestion, carpeta.numero_lote  FROM productos INNER JOIN carpeta ON productos.numero_operacion = carpeta.numero_operacion WHERE productos.numero_operacion='$id' LIMIT 1");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
