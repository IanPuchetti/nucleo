<?php
$documento=$_POST["documento"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT gestiones.telefono, gestiones.documento, sub_estados.sub_estado, gestiones.comentario, deudores.apellido as 'deudor', gestiones.fecha, gestiones.hora, gestiones.tiempo, usuarios.user as operador, tipo_gestion.tipo as 'tipo gestion' FROM gestiones INNER JOIN deudores ON deudores.documento = gestiones.documento LEFT OUTER JOIN sub_estados ON sub_estados.id = gestiones.sub_estado LEFT OUTER JOIN usuarios ON gestiones.operador = usuarios.id LEFT OUTER JOIN tipo_gestion ON gestiones.tipo_gestion = tipo_gestion.id WHERE gestiones.documento='$documento' GROUP BY deudores.documento");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
$mysqli->close();
?>
