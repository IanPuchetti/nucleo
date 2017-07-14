<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$banco=$request -> banco;
$fecha1=$request -> fecha1;
$fecha2=$request -> fecha2;

$rows = array();
$consulta= "SELECT DISTINCT propuestas.fecha_propuesta , SUM( propuestas.monto_primer_pago ) AS monto FROM propuestas  WHERE 1 ";

if($banco){
	$consulta=$consulta." AND propuestas.banco = '".$banco."' ";
}

if($fecha1 && $fecha2){
	$consulta=$consulta." AND (propuestas.fecha_propuesta BETWEEN '".$fecha1."' AND '".$fecha2."') ";
}

$consulta=$consulta." GROUP BY propuestas.fecha_propuesta ";
if ($result = $mysqli->query($consulta)) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
