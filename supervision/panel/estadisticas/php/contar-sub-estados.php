<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$banco=$request -> banco;
$rows = array();
$consulta= "SELECT DISTINCT sub_estados.sub_estado , COUNT( productos.sub_estado ) AS cantidad FROM productos INNER JOIN sub_estados ON sub_estados.id = productos.sub_estado ";

if($banco){
	$consulta=$consulta." WHERE productos.banco = '".$banco."' ";
}

$consulta=$consulta." GROUP BY sub_estados.sub_estado ";
if ($result = $mysqli->query($consulta)) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$result->close();
$mysqli->close();
?>
