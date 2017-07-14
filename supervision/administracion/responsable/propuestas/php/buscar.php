<?php
$documento=$_POST["documento"];
$banco=$_POST["banco"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT propuestas.fecha_propuesta AS fecha, propuestas.operador, deudores.apellido, deudores.documento, propuestas.monto_total AS 'Monto total', propuestas.monto_primer_pago AS 'Monto primer pago', propuestas.fecha_pago AS 'Fecha pago', bancos.dbanco AS Banco, propuestas.asignacion, propuestas.aprobado FROM propuestas INNER JOIN deudores ON propuestas.deudor = deudores.documento INNER JOIN bancos ON propuestas.banco = bancos.cbanco WHERE documento='$documento' AND propuestas.banco = '$banco'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
