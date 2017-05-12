<?php
$deudor=json_decode($_POST['deudor']);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$documento=$deudor->documento;
$rows = array();
if ($result = $mysqli->query("SELECT deudores.*, domicilios.* FROM deudores INNER JOIN domicilios ON domicilios.documento = deudores.documento WHERE deudores.documento='$documento' LIMIT 1")) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
?>
