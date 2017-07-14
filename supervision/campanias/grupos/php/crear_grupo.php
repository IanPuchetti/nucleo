<?php
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$usuarios=json_decode($_POST['usuarios']);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("INSERT INTO grupos VALUES(NULL, '$nombre', '$descripcion')");
$id= $mysqli->insert_id;
foreach($usuarios as $id_usuario){
$result = $mysqli->query("INSERT INTO grupos_usuarios VALUES('$id', '$id_usuario')");
}
$mysqli->close();
echo 'Grupo generado correctamente.';
?>
