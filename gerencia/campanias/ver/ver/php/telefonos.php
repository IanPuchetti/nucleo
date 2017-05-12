<?php
$documento=$_POST["documento"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT domicilios.telefono1, domicilios.telefono2, domicilios.telefono3, deudores.apellido FROM domicilios INNER JOIN deudores ON deudores.documento = domicilios.documento WHERE domicilios.documento='$documento' LIMIT 1");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
