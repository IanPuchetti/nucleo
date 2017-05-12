<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$rows = array();
if ($result = $mysqli->query("SELECT * FROM calificacion_telefonos")) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
