<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT sirve FROM telefonos WHERE sirve = 0");
$rows=$result->num_rows;
echo $rows;
$mysqli->close();
?>
