<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$mysqli->set_charset("utf8");
$rows = array();
$result = $mysqli->query("SELECT user, id FROM  usuarios");
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);
echo $rows;
$mysqli->close();
?>
