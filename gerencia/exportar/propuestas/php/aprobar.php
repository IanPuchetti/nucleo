<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id= $request->id;
$aprobado=$request->aprobado;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

if($aprobado=='SI'){
	$s='NO';
	$result = $mysqli->query("UPDATE propuestas SET aprobado=0 WHERE id = $id");
}else{
	$result = $mysqli->query("UPDATE propuestas SET aprobado=1 WHERE id = $id");
	$s='SI';
}

echo $s;

$mysqli->close();
?>
