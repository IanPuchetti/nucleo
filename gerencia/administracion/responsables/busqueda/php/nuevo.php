<?php
$hoy = getdate();
$fecha=$hoy[mday].'/'.$hoy[mon].'/'.$hoy[year];
$nombre=$_POST['nombre'];
$comentario=$_POST['comentario'];
$id_casos=json_decode($_POST['id_casos']);
$grupo=$_POST['grupo'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("INSERT INTO campanias VALUES(NULL, '$nombre', '$fecha', '$comentario', '$grupo')");
$id= $mysqli->insert_id;
foreach($id_casos as $id_caso){
$result = $mysqli->query("INSERT INTO grupos_casos VALUES('$id', '$grupo', '$id_caso', 0)");
}
$mysqli->close();
echo 'Campaña generada correctamente.';
?>
