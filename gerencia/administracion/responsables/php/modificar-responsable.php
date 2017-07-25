<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id_casos=$request->id_casos;
$responsable=$request->responsable;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
foreach($id_casos as $id_caso){
$result = $mysqli->query("UPDATE deudores SET responsable='$responsable' WHERE documento='$id_caso'");
}
$mysqli->close();
echo 'Cambio de responsable exitoso';
?>
