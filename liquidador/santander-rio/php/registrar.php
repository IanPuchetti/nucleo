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
$fecha_comentario=date("d/m/Y", strtotime($fecha_anticipo));
$result3 = $mysqli->query("INSERT INTO gestiones VALUES(NULL, '$deudor', 0, 'Se ha registrado una propuesta de $cuotas cuotas, con un monto total de $ $total y un anticipo de $ $anticipo a pagar el $fecha_comentario.', '$fecha_propuesta', current_time(), 0, 0, '$operador', 3, '$banco')");
if($telefono1 != ''){
$result = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor."', '".$telefono1."', 'VERIFICADO PROPUESTA', 6)");
}

if($telefono2 != ''){
$result = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor."', '".$telefono2."', 'VERIFICADO PROPUESTA', 6)");
}

if($telefono3 != ''){
$result = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor."', '".$telefono3."', 'VERIFICADO PROPUESTA', 6)");
}
$mysqli->close();
echo 'Registrado correctamente';
?>
