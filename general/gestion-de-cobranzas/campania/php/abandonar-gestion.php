
<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$a_sub_estado=$request->a_sub_estado;
$b_sub_estado=$request->b_sub_estado;
$documento=$request->documento;
$id_campania=$request->id_campania;
$fecha=$request->fecha;
$sub_estado=$request->sub_estado;
$agenda=$request->agenda;
$operador=$request->operador;
$banco=$request->banco;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
if($a_sub_estado->id!=$b_sub_estado->id){
	$result5 = $mysqli->query("INSERT INTO gestiones VALUES(NULL,'$documento', '0', 'Cambio de sub estado: de ".$a_sub_estado->sub_estado." a ".$b_sub_estado->sub_estado."', NOW(), NOW(), '$sub_estado', '0', '$operador', '3', '$banco') ");
}
$result2= $mysqli->query("UPDATE productos SET sub_estado = '$sub_estado', agenda = '$agenda' WHERE documento = '$documento'");
$result3= $mysqli->query("UPDATE grupos_casos SET gestionado = '1' WHERE deudor='$documento' AND id_campania = '$id_campania'");
$result = $mysqli->query("INSERT INTO cambios_sub_estados VALUES(NULL,'$documento', '$sub_estado', '$agenda')");
$result = $mysqli->query("INSERT INTO agendas VALUES(NULL,'$documento', '$operador', '$agenda', 0)");
$mysqli->close();
echo 'Registrado correctamente';
?>