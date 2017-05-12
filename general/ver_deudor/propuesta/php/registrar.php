<?php
$fecha_propuesta=$_POST['fecha_propuesta'];
$operador=$_POST['operador'];
$deudor=$_POST['documento'];
$monto_total=$_POST['monto_total'];
$monto_primer_pago=$_POST['monto_primer_pago'];
$fecha_pago	=$_POST['fecha_pago'];
$banco=$_POST['banco'];
$asignacion=$_POST['asignacion'];

$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO propuestas VALUES(NULL, '$fecha_propuesta', '$operador', '$deudor', '$monto_total', '$monto_primer_pago', '$fecha_pago', '$banco', '$asignacion', 0)");
$mysqli->close();
echo 'Registrado correctamente';
?>
