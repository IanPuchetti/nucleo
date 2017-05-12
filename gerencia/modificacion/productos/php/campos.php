<?php
$tabla=$_POST['tabla'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$rows = array();
if ($result = $mysqli->query("SELECT * FROM $tabla LIMIT 1")) {
            while ($r = $result->fetch_field()) {
       $rows[] =  $r->name;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
