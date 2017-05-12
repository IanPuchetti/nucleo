<?php
$documento=$_POST["documento"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT llamadas.telefono, llamadas.atendio, llamadas.comentario, deudores.apellido FROM llamadas INNER JOIN deudores ON deudores.documento = llamadas.documento WHERE llamadas.documento='$documento'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
