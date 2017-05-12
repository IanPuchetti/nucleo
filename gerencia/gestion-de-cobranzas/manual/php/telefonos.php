<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request -> documento;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT *, numero AS anterior FROM telefonos WHERE dni='$documento'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
