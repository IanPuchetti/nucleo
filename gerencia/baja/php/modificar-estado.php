<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id_casos=$request->id_casos;
$estado=$request->estado;
$banco=$request->banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
foreach($id_casos as $id_caso){
$result = $mysqli->query("UPDATE productos SET estado='$estado' WHERE documento='$id_caso' AND banco='$banco'");
}
$mysqli->close();
echo 'Cambio de estado exitoso';
?>
