<?php
$documento=$_POST["documento"];
$apellido=$_POST["apellido"];
$banco=$_POST["banco"];
$mysqli = new mysqli("localhost", "root", "p", "nucleo");
$result = $mysqli->query("SELECT deudores.documento, deudores.apellido, productos.estado, bancos.dbanco FROM  deudores INNER JOIN productos ON deudores.documento = productos.documento INNER JOIN bancos ON bancos.cbanco = productos.banco WHERE deudores.documento LIKE '%$documento%' AND deudores.apellido LIKE '%$apellido%' AND productos.banco LIKE '%$banco%'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
