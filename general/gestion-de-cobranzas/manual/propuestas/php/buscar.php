<?php
$documento=$_POST["documento"];
$banco=$_POST["banco"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT propuestas.fecha_propuesta AS 'Fecha de propuesta', usuarios.user AS Operador, deudores.apellido AS Titular, deudores.documento AS Documento, propuestas.monto_total AS 'Monto total', propuestas.monto_primer_pago AS 'Monto primer pago',  propuestas.cuotas AS 'Cuotas', propuestas.fecha_pago AS 'Fecha de pago', bancos.dbanco AS Banco, propuestas.asignacion AS Asignacion, IF (propuestas.aprobado = 0, 'NO', 'SI') AS Aprobado FROM propuestas INNER JOIN deudores ON propuestas.deudor = deudores.documento INNER JOIN usuarios ON usuarios.id = propuestas.operador INNER JOIN bancos ON propuestas.banco = bancos.cbanco WHERE documento='$documento' AND propuestas.banco = '$banco'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
