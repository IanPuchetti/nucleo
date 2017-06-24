<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$rows = array();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request -> documento;

$consulta="SELECT sub_estados.sub_estado, cambios_sub_estados.fecha INNER JOIN sub_estados ON sub_estados.id = cambios_sub_estados.sub_estado WHERE cambios_sub_estados.documento = '$documento' ORDER BY cambios_sub_estados.fecha ASC";

if ($result = $mysqli->query($consulta)) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
