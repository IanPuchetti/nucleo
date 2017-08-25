<?php
$hoy = getdate();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request->documento;
$sub_estado=$request->sub_estado;
$agenda=$request->agenda;
$operador=$request->operador;
$id_caso=$request->id_caso;
$id_campania=$request->id_campania;
$a_sub_estado=$request->a_sub_estado;
$b_sub_estado=$request->b_sub_estado;
$banco=$request->banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT MAX(id) as id FROM gestiones WHERE documento = '$documento'");
while($a = $result->fetch_array()){
		$id_gestion = $a['id'];
		}

if($a_sub_estado->id!=$sub_estado->id){
	$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL,'$documento', '0', 'Cambio de sub estado: de ".$a_sub_estado->sub_estado." a ".$b_sub_estado->sub_estado."', NOW(), NOW(), '$sub_estado', '0', '$operador', '3', '$banco') ");
}
$result2= $mysqli->query("UPDATE gestiones SET sub_estado = '$sub_estado' WHERE id = '$id_gestion'");
$result3= $mysqli->query("UPDATE productos SET sub_estado = '$sub_estado', agenda = '$agenda' WHERE documento = '$documento'");
$result5= $mysqli->query("UPDATE grupos_casos SET gestionado = '$id_gestion', gestionando='1' WHERE deudor='$documento' AND id_campania = '$id_campania'");
if($agenda){
$result = $mysqli->query("INSERT INTO agendas VALUES(NULL,'$documento', '$operador', '$agenda', 0)");
}
$mysqli->close();
echo 'Registrado correctamente';
?>
