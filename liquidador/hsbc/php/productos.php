<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$documento=$data->documento;
$banco=$data->banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT productos.deuda, productos.dolar, estados.estado FROM productos INNER JOIN estados ON estados.id = productos.estado WHERE documento=$documento AND banco=$banco");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>

