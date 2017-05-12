<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$rows = array();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$banco=$request -> banco;

$consulta="SELECT DISTINCT calificacion_telefonos.titulo, COUNT( telefonos.calificacion ) AS cantidad FROM telefonos INNER JOIN calificacion_telefonos ON calificacion_telefonos.id = telefonos.calificacion INNER JOIN productos ON productos.documento = telefonos.dni ";
if($banco){
	$consulta=$consulta." WHERE productos.banco = '".$banco."' ";
}
$consulta=$consulta." GROUP BY titulo";
if ($result = $mysqli->query($consulta)) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
