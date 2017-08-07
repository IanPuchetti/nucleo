<?php
$banco=$_POST['banco'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT deudores.documento, deudores.apellido, estados.estado, sub_estados.sub_estado, bancos.dbanco AS banco FROM productos INNER JOIN deudores ON productos.documento = deudores.documento INNER JOIN estados ON estados.id = productos.estado INNER JOIN sub_estados ON sub_estados.id = productos.sub_estado  INNER JOIN bancos ON bancos.cbanco = productos.banco  WHERE productos.banco='$banco' AND productos.estado!='1' GROUP BY deudores.documento");
$rows = array();
while($r = mysqli_fetch_assoc($result)){
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
