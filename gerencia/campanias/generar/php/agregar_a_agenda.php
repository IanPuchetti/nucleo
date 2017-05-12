<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$id_casos=$request->id_casos;
$fecha=$request->fecha;
$operador=$request->operador->id;
foreach($id_casos as $id_caso){
$result = $mysqli->query("INSERT INTO agendas VALUES( NULL, '$id_caso', '$operador', '$fecha', 0)");
}
echo "Agregados correctamente";
$mysqli->close();
?>
