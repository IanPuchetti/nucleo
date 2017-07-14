<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$rows = array();
if ($result = $mysqli->query("SELECT * FROM campanias")) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
