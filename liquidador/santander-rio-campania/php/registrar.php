<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$fecha_propuesta = $request-> fecha_propuesta;
$total = $request-> total;
$anticipo = $request-> anticipo;
$cuotas = $request-> cuotas;
$fecha_anticipo = $request-> fecha_anticipo;
$operador = $request-> operador;
$deudor = $request-> deudor;
$banco = $request-> banco;
$telefono1 = $request-> telefono1;
$telefono2 = $request-> telefono2;
$telefono3 = $request-> telefono3;
$email = $request -> email;
$cuota_cero= $request-> cuota_cero;
$asignacion= $request-> asignacion;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("INSERT INTO propuestas VALUES(NULL,'$fecha_propuesta','$operador','$deudor','$total','$anticipo','$cuotas','$fecha_anticipo','$banco','$asignacion',0,'$cuota_cero','$telefono1','$telefono2','$telefono3')");
if($email){
$result2 = $mysqli->query("UPDATE deudores SET responsable = '$operador', email = '$email' WHERE documento = '$deudor'");
}else{
	$result2 = $mysqli->query("UPDATE deudores SET responsable = '$operador' WHERE documento = '$deudor'");

}
$result3 = $mysqli->query("INSERT INTO gestiones VALUES(NULL, '$deudor', 0, 'Se ha registrado una propuesta.', '$fecha_propuesta', 0, 0, 0, '$operador', 3, '$banco')");
$mysqli->close();
echo 'Registrado correctamente';
?>
