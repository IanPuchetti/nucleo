<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$banco=$request -> banco;

$consulta="SELECT DISTINCT estados.estado , COUNT( productos.estado ) AS cantidad FROM productos INNER JOIN estados ON estados.id = productos.estado ";

if($banco){
$consulta=$consulta." WHERE productos.banco = '".$banco."' ";
}

$consulta=$consulta." GROUP BY productos.estado";

$rows = array();
if ($result = $mysqli->query($consulta)) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
echo json_encode($rows);
$mysqli->close();
?>
