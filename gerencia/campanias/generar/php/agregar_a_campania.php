<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$id_casos=$request->id_casos;
$id_campania=$request->campania->id;
$id_grupo=$request->campania->grupo;
foreach($id_casos as $id_caso){
$result = $mysqli->query("INSERT INTO grupos_casos VALUES('$id_campania', '$id_grupo', '$id_caso', 0,0)");
}
echo "Agregados correctamente";
$mysqli->close();
?>
