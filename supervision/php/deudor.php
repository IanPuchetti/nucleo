<?php
$documento=json_decode($_POST["documento"]);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$mysqli->set_charset("utf8");
$rows = array();
foreach ($documento as $doc) {
$result = $mysqli->query("SELECT deudores.documento, deudores.apellido, productos.estado, bancos.dbanco FROM  deudores INNER JOIN productos ON deudores.documento = productos.documento INNER JOIN bancos ON bancos.cbanco = productos.banco WHERE deudores.documento = '$doc' LIMIT 1");
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
}
$rows=json_encode($rows);
echo $rows;
$mysqli->close();
?>
