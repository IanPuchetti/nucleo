<?php
$proceso=$_POST['proceso'];
$largo=$_POST['largo'];
$estado=$_POST['estado'];
$sub_estado=$_POST['sub_estado'];
$documento=$_POST['documento'];
$motivo=$_POST["motivo"];
$comentario=$_POST["comentario"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE productos SET estado = '$estado', sub_estado = '$sub_estado' WHERE documento = '$documento' ");

$last= $mysqli->query("SELECT AUTO_INCREMENT as last FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'nucleo' AND TABLE_NAME = 'bajas'");
$ultimo='';
while ($fila = $last->fetch_assoc()) {
        $ultimo=$fila["last"];
    }
$result2 = $mysqli->query("INSERT INTO llamadas VALUES(NULL, '$documento', '$id', 0, 0, '$comentario', '$fecha', 0, 1, 0, 0, 3)");
$result3 = $mysqli->query("INSERT INTO baja_deudor VALUES($ultimo, $documento_deudor)");
if($proceso==$largo-1){
$result4 = $mysqli->query("INSERT INTO bajas VALUES(NULL, '$fecha' $motivo, '$comentario', '$estado_nuevo')");
}
$mysqli->close();
echo $proceso;
?>
