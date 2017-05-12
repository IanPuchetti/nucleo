<?php
$productos=json_decode($_POST['productos']);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$numero_operacion=$productos->numero_operacion;
$rows = array();
if ($result = $mysqli->query("SELECT productos.*, carpeta.* FROM productos INNER JOIN carpeta ON carpeta.numero_operacion = productos.numero_operacion WHERE productos.numero_operacion='$numero_operacion' LIMIT 1")) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
?>
