<?php
$hoy = getdate();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
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
$tipo_gestion=$request->tipo_gestion->id;
$banco=$request->banco;
$fecha=$request->hoy;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL,'$documento', 0, 'Se ha dejado de gestionar.', '$fecha', '$hora', '$sub_estado', '0', '$operador', '3', '$banco')");
$result2= $mysqli->query("UPDATE productos SET sub_estado = '$sub_estado', agenda = '$agenda' WHERE documento = '$documento'");
$result = $mysqli->query("INSERT INTO cambios_sub_estados VALUES(NULL,'$documento', '$sub_estado', '$fecha')");
if($agenda){
$result = $mysqli->query("INSERT INTO agendas VALUES(NULL,'$documento', '$operador', '$agenda', 0)");
}
$mysqli->close();
echo 'Registrado correctamente';
?>
