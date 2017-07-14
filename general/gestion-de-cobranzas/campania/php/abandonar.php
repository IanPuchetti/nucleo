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
$id_campania=$request->id_campania;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT MAX(id) as id FROM gestiones WHERE documento = '$documento'");
while($a = $result->fetch_array()){
		$id_gestion = $a['id'];
		$result2= $mysqli->query("UPDATE gestiones SET sub_estado = '$sub_estado' WHERE id = '$id_gestion'");
		}
$result3= $mysqli->query("UPDATE productos SET sub_estado = '$sub_estado', agenda = '$agenda' WHERE documento = '$documento'");
$result5= $mysqli->query("UPDATE grupos_casos SET gestionado = '$id_gestion' WHERE deudor='$documento' AND id_campania = '$id_campania'");
if($agenda){
$result = $mysqli->query("INSERT INTO agendas VALUES(NULL,'$documento', '$operador', '$agenda', 0)");
}
$mysqli->close();
echo 'Registrado correctamente';
?>
