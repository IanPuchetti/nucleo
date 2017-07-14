<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id=$request->id;$fecha=$request->fecha;
$conn = new mysqli("localhost", "ian", "p", "nucleo");
$result = $conn->query("SELECT grupos_casos.gestionado, productos.documento, deudores.apellido, IFNULL(sub_estados.sub_estado, ' ') as sub_estado, gestiones.fecha, IFNULL(usuarios.user, ' ') as operador FROM grupos_casos INNER JOIN productos ON productos.documento=grupos_casos.deudor INNER JOIN deudores ON deudores.documento=grupos_casos.deudor INNER JOIN sub_estados ON productos.sub_estado = sub_estados.id LEFT OUTER JOIN (SELECT id, operador, fecha FROM gestiones WHERE fecha <= '$fecha') gestiones ON gestiones.id = grupos_casos.gestionado LEFT OUTER JOIN usuarios on usuarios.id = gestiones.operador WHERE id_campania='$id'");
$rows = array();
while($r = $result->fetch_array()) {
    $rows[] = $r;
}
$rows=json_encode($rows);
echo $rows;
$conn->close();
?>
