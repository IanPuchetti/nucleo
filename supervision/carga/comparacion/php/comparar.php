<?php
$banco=$_POST['banco'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
if($result = $mysqli->query("SELECT deudores.apellido AS 'Nombre y apellido', productos.documento, deudores.tipo_documento, carpeta.legajo, estados.estado FROM productos INNER JOIN deudores ON productos.documento = deudores.documento INNER JOIN carpeta ON carpeta.numero_operacion = productos.numero_operacion INNER JOIN estados ON estados.id = productos.estado WHERE banco = '$banco'")) {

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

$rows = json_encode($rows);
print_r ($rows);
}
$mysqli->close();
?>
