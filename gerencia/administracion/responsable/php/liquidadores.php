<?php
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$id_banco=$data->id_banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT * FROM liquidador_banco WHERE id_banco=$id_banco");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
