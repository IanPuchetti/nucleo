<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$hora=$request->hora;
$documento=$request->documento;
$telefono=$request->telefono;
$comentario=$request->comentario;
$calificacion=$request->calificacion->id;
$tiempo=$request->tiempo;
$operador=$request->operador;
$sub_estado=$request->sub_estado;
$tipo_gestion=$request->tipo_gestion->id;
$banco=$request->banco;
$fecha=$request->hoy;
$id_agenda=$request->id_agenda;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL,'$documento', '$telefono', '$comentario', '$fecha', '$hora', '$sub_estado', '$tiempo', '$operador', '$tipo_gestion', '$banco')");
$result4= $mysqli->query("UPDATE agendas SET gestion=1 WHERE id='$id_agenda'");
$result3= $mysqli->query("UPDATE telefonos SET calificacion = '$calificacion' WHERE numero = '$telefono'");
$mysqli->close();
echo 'Registrado correctamente';
?>