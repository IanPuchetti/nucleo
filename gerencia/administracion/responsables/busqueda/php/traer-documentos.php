<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$id=$_POST["id"];
$rows = array();
if ($result = $mysqli->query("SELECT id, dnis FROM campanias WHERE id = '$id' LIMIT 1")) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
