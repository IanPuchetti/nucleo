<?php
$documento=$_POST["documento"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT telefono1, telefono2, telefono3 FROM domicilios WHERE documento='$documento' LIMIT 1");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
