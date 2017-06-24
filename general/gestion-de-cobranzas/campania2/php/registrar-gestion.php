<?php
$hoy = getdate();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$numero_operacion=$request->numero_operacion;
$hora=$request->hora;
$documento=$request->documento;
$telefono=$request->telefono->numero;
$sub_estado=$request->sub_estado;
$agenda=$request->agenda;
$comentario=$request->comentario;
$calificacion=$request->calificacion->id;
$tiempo=$request->tiempo;
$operador=$request->operador;
$id_caso=$request->id_caso;
$id_campania=$request->id_campania;
$tipo_gestion=$request->tipo_gestion->id;
$banco=$request->banco;
$fecha=$request->hoy;
$opcion=$request->opcion;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$ver_ultimo = $mysqli->query("SELECT AUTO_INCREMENT FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'nucleo' AND   TABLE_NAME   = 'gestiones'");
$rows = array();
while($r = mysqli_fetch_assoc($ver_ultimo)) {
    $rows[] = $r;
}
$gestion=$rows[0]['AUTO_INCREMENT'];

$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL,'$documento', '$telefono', '$comentario', '$fecha', '$hora', '$sub_estado', '$tiempo', '$operador', '$tipo_gestion', '$banco')");
$result2= $mysqli->query("UPDATE productos SET sub_estado = '$sub_estado', agenda = '$agenda' WHERE documento = '$documento'");
$result3= $mysqli->query("UPDATE telefonos SET calificacion = '$calificacion' WHERE numero = '$telefono'");
$result4 = $mysqli->query("INSERT INTO cambios_sub_estados VALUES(NULL,'$documento', '$sub_estado', '$fecha')");
if($opcion=='campania'){
$result5 = $mysqli->query("UPDATE grupos_casos SET gestionado = '$gestion' WHERE id_campania='$id_campania' AND deudor='$documento'");
}else{
$result5 = $mysqli->query("UPDATE agendas SET gestion = '$gestion' WHERE id='$id_campania' AND deudor='$documento'");
}
$mysqli->close();
echo "Gestion registrada correctamente.";
?>
