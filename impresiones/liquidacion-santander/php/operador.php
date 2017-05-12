<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$operador=$data->operador;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT user from usuarios WHERE id='$operador'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();

?>

