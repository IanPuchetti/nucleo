<?php
$id=$_POST['id'];
$estado_nuevo=$_POST["estado_nuevo"];
$progreso=$_POST["progreso"];
$motivo=$_POST["motivo"];
$comentario=$_POST["comentario"];
$documento_deudor=$_POST["documento_deudor"];
$fecha=$_POST["fecha"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE productos SET estado = '$estado_nuevo' WHERE documento = $documento_deudor");
$result2 = $mysqli->query("INSERT INTO gestiones VALUES(NULL, '$documento_deudor',0, '$comentario', '$fecha', 0, 0, 0, 0, 3, 0)");
$last= $mysqli->query("SELECT AUTO_INCREMENT as last FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'nucleo' AND TABLE_NAME = 'bajas'");
$ultimo='';
while ($fila = $last->fetch_assoc()) {
        $ultimo=$fila["last"];
    }
$result3 = $mysqli->query("INSERT INTO cambios_estados VALUES(NULL, '$documento_deudor', '$estado_nuevo', '$fecha')");

if($progreso=='none'){
$result4 = $mysqli->query("INSERT INTO bajas VALUES(NULL, '$fecha' $motivo, '$comentario', '$estado_nuevo')");
echo 'Modificado correctamente';

}else{

$progreso=$progreso+1;
echo $progreso;

}

$mysqli->close();
?>
