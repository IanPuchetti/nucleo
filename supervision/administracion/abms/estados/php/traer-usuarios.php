<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT * FROM usuarios");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
