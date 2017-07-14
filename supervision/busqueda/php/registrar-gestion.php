<?php
$hoy = getdate();
$fecha=$hoy[year].'-'.$hoy[mon].'-'.$hoy[mday];
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$hora=$request->hora;
$documento=$request->documento;
$telefono=$request->telefono;
$agenda=$request->agenda;
$comentario=$request->comentario;
$proxima_accion=$request->proxima_accion;
$calificacion=$request->calificacion;
$tiempo=$request->tiempo;
$operador=$request->operador;
$id_caso=$request->id_caso;
$tipo_gestion=$request->tipo_gestion;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO llamadas VALUES(NULL,'$documento', '$id_caso', '$telefono', '$comentario', '$fecha', '$hora', '$proxima_accion', '$tiempo', '$operador', '$tipo_gestion')");
$result2= $mysqli->query("UPDATE productos SET proxima_accion = '$proxima_accion', agenda = '$agenda' WHERE documento = '$documento'");
$result3= $mysqli->query("UPDATE telefonos SET calificacion = '$calificacion' WHERE numero = '$telefono'");
$mysqli->close();
echo 'Registrado correctamente';
?>
