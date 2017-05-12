<?php
$documento=$_POST["documento"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT telefono1, telefono2, telefono3 FROM domicilios WHERE documento='$documento' LIMIT 1");
$result = $mysqli->query("SELECT deudores.documento, deudores.apellido, productos.estado, bancos.dbanco FROM  deudores INNER JOIN productos ON deudores.documento = productos.documento INNER JOIN bancos ON bancos.cbanco = productos.banco WHERE deudores.documento LIKE '%$documento%' AND deudores.apellido LIKE '%$apellido%' AND productos.banco LIKE '%$banco%'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
