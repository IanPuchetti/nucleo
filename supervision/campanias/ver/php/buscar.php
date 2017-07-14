<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$campania=$request->nombre;
$inicio1=$request->inicio1;
$inicio2=$request->inicio2;
$finalizacion1=$request->finalizacion1;
$finalizacion2=$request->finalizacion2;
$grupo=$request->grupo->id;
if($grupo == 0){
$grupo="%%";
}
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
if($fecha1 && $fecha2){
	$consulta="AND (campanias.fecha_generacion BETWEEN '$inicio1' AND '$inicio2') ";
}else{
	$consulta='';
}
$result = $mysqli->query("SELECT campanias.id, campanias.nombre, campanias.fecha_generacion as fecha_inicio, campanias.fecha_finalizacion, campanias.comentario, grupos.nombre as grupo FROM campanias INNER JOIN grupos ON campanias.grupo = grupos.id  WHERE campanias.nombre LIKE '%$campania%' AND campanias.grupo LIKE '$grupo' ".$consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

echo $rows;

$mysqli->close();
?>
