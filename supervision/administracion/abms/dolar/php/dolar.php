<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT valor FROM monedas where moneda = 'dolar' LIMIT 1 ");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
