<?php
$documento=$_POST["documento"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM productos WHERE documento='$documento'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
