<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$rows = array();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request -> documento;

$consulta="SELECT estados.estado, cambios_estados.fecha FROM cambios_estados INNER JOIN estados ON estados.id = cambios_estados.estado WHERE cambios_estados.documento = '$documento' ORDER BY cambios_estados.fecha ASC";

if ($result = $mysqli->query($consulta)) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
