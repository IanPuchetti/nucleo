<?php
$documento=$_POST["documento"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];

$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");

$consulta = "SELECT DISTINCT deudores.apellido, telefonos.numero, telefonos.comentario, calificacion_telefonos.titulo as calificacion FROM telefonos INNER JOIN calificacion_telefonos ON calificacion_telefonos.id = telefonos.calificacion INNER JOIN deudores ON deudores.documento = telefonos.dni WHERE telefonos.dni LIKE '%$documento%'";
if($telefono!=''){
$consulta=$consulta+" AND telefonos.numero LIKE '%$telefono%'";
}

$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
