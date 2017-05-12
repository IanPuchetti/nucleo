<?php
$documento=$_POST["documento"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
-$result = $mysqli->query("SELECT telefonos.numero, deudores.apellido FROM telefonos INNER JOIN deudores ON deudores.documento = telefonos.dni WHERE telefonos.dni='$documento'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
