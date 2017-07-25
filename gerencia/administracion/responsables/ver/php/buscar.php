<?php
$documento=$_POST["documento"];
$apellido=$_POST["apellido"];
$banco=$_POST["banco"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT deudores.documento, deudores.apellido, estados.estado, bancos.dbanco, reportes.link FROM  deudores INNER JOIN productos ON deudores.documento = productos.documento INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN estados ON productos.estado = estados.id LEFT OUTER JOIN reportes ON deudores.documento = reportes.documento WHERE deudores.documento LIKE '%$documento%' AND deudores.apellido LIKE '%$apellido%' AND productos.banco LIKE '%$banco%' ORDER BY deudores.apellido DESC");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
