<?php
$sheet1=json_decode($_POST['sheet1']);
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$largo=count($sheet1);
$coincidentes = array();
$nocoincidentes = array();
$i=0;
while($i<$largo){
$dni=$sheet1[$i]->dni;
if($result = $mysqli->query("SELECT * FROM deudores WHERE dni='$dni' LIMIT 1"))
{
$rows = $result->num_rows;
if($rows!=0){
$coincidentes[]=$sheet1[$i];
}else{
$nocoincidentes[]=$sheet1[$i];
}
$result->close();
}
$i++;
}
$data[0]= $coincidentes;
$data[1]= $nocoincidentes;
echo $data;
?>
