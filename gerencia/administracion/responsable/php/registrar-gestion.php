<?php
$hoy = getdate();
$fecha=$hoy[year].'-'.$hoy[mon].'-'.$hoy[mday];
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$hora=$request->hora;
$documento=$request->documento;
$telefono=$request->telefono->numero;
$sub_estado=$request->sub_estado->id;
$agenda=$request->agenda;
$comentario=$request->comentario;
$calificacion=$request->calificacion->id;
$tiempo=$request->tiempo;
$operador=$request->operador;
$id_caso=$request->id_caso;
$tipo_gestion=$request->tipo_gestion->id;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL,'$documento', '$id_caso', '$telefono', '$comentario', '$fecha', '$hora', '$sub_estado', '$tiempo', '$operador', '$tipo_gestion')");
$result2= $mysqli->query("UPDATE productos SET sub_estado = '$sub_estado', agenda = '$agenda' WHERE documento = '$documento'");
$result3= $mysqli->query("UPDATE telefonos SET calificacion = '$calificacion' WHERE numero = '$telefono'");
$mysqli->close();
echo 'Registrado correctamente';
?>
