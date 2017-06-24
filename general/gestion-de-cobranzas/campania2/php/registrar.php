<?php
$hoy = getdate();
$fecha=$hoy[year].'-'.$hoy[mon].'-'.$hoy[mday];
$hora=$_POST['hora'];
$documento=$_POST['documento'];
$telefono=$_POST['telefono'];
$atendio=$_POST['atendio'];
$comentario=$_POST['comentario'];
$proxima_accion=$_POST['proxima_accion'];
$tiempo=$_POST['tiempo'];
$operador=$_POST['operador'];
$id_caso=$_POST['id_caso'];
$id_campania=
$tipo_gestion=$_POST['tipo_gestion'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO llamadas VALUES(NULL,'$documento', '$id_caso', '$telefono', '$atendio', '$comentario', '$fecha', '$hora', '$proxima_accion', '$tiempo', '$operador', '$tipo_gestion')");
$result2= $mysqli->query("UPDATE productos SET proxima_accion = '$proxima_accion' WHERE id = '$id_caso'");
$result3 = $mysqli->query("UPDATE grupos_casos SET gestionado = 1 WHERE id_caso = '$id_caso' AND id_campania = '$id_campania' LIMIT 1");
$mysqli->close();
echo 'Registrado correctamente';
?>
