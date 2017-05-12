<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$rows = array();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$banco= $request->banco;

$consulta = "SELECT DISTINCT usuarios.user, COUNT( deudores.responsable ) AS cantidad FROM deudores INNER JOIN usuarios ON usuarios.id = deudores.responsable INNER JOIN productos ON productos.documento = deudores.documento ";

if($banco){
	$consulta=$consulta." WHERE productos.banco = '".$banco."' ";
}

$consulta=$consulta." GROUP BY usuarios.user";
if ($result = $mysqli->query($consulta)) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
