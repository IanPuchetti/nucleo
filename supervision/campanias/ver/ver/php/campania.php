<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id=$request->id;
$conn = new mysqli("localhost", "ian", "p", "nucleo");
$result = $conn->query("SELECT campanias.*, grupos.* from campanias LEFT OUTER JOIN grupos ON grupos.id = campanias.grupo WHERE campanias.id='$id'");
$rows = array();
while($r = $result->fetch_array()) {
    $rows[] = $r;
}
$rows=json_encode($rows);
echo $rows;
$conn->close();
?>
