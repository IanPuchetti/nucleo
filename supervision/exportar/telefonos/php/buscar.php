<?php
$documento=$_POST["documento"];
$apellido=$_POST["apellido"];
$banco=$_POST["banco"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$consulta = "SELECT deudores.*, productos.*, bancos.dbanco, domicilios.* FROM  deudores INNER JOIN productos ON deudores.documento = productos.documento INNER JOIN domicilios ON deudores.documento = domicilios.documento INNER JOIN bancos ON bancos.cbanco = productos.banco WHERE deudores.documento LIKE '%$documento%' AND deudores.apellido LIKE '%$apellido%' ";

if($banco != 0){
$consulta = $consulta."AND productos.banco LIKE '$banco' ";
}

$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
