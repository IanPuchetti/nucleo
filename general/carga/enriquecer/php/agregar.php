<?php
$proceso=$_POST['proceso'];
$deudor=json_decode($_POST['deudor']);
$domicilios=json_decode($_POST['domicilios']);
$email=$_POST['email'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

if($domicilios->telefono1 != ''){
$result = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono1."', '', 0)");
}

if($domicilios->telefono2 != ''){
$result2 = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono2."', '', 0)");
}

if($domicilios->telefono3 != ''){
$result3 = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono3."', '', 0)");
}

if($domicilios->telefono4 != ''){
$result4 = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono4."', '', 0)");
}

if($domicilios->telefono5 != ''){
$result5 = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono5."', '', 0)");
}

if($domicilios->telefono6 != ''){
$result6 = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono6."', '', 0)");
}

if($domicilios->telefono7 != ''){
$result7 = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono7."', '', 0)");
}

if($domicilios->telefono8 != ''){
$result8 = $mysqli->query("INSERT INTO telefonos VALUES('".$deudor->documento."', '".$domicilios->telefono8."', '', 0)");
}

if($email != ''){
$result9 = $mysqli->query("UPDATE deudores SET email = '$email' WHERE documento = '".$deudor->documento."'");
}
$mysqli->close();
echo $proceso;
?>
