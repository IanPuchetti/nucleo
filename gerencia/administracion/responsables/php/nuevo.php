<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$fecha=$request->fecha;
$nombre=$request->nombre;
$comentario=$request->comentario;
$fecha_finalizacion=$request->fecha_finalizacion;
$id_casos=$request->id_casos;
$grupo=$request->grupo->id;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("INSERT INTO campanias VALUES(NULL, '$nombre', '$fecha', '$fecha_finalizacion', '$comentario', '$grupo')");
$id= $mysqli->insert_id;
foreach($id_casos as $id_caso){

$result = $mysqli->query("INSERT INTO grupos_casos VALUES('$id', '$grupo', '$id_caso', 0)");
}
$mysqli->close();
echo 'Campaña generada correctamente.';
?>
