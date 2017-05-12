<?php
$documento=$_POST['documento'];
$tipo_documento=$_POST['tipo_documento'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$empresa=$_POST['empresa'];
$direccion_laboral=$_POST['direccion_laboral'];
$direccion_laboral2=$_POST['direccion_laboral2'];
$direccion_particular=$_POST['direccion_particular'];
$direccion_particular2=$_POST['direccion_particular2'];
$direccion_particular3=$_POST['direccion_particular3'];
$provincia=$_POST['provincia'];
$localidad=$_POST['localidad'];
$codigo_postal=$_POST['codigo_postal'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("UPDATE deudores SET documento = '$documento', tipo_documento = '$tipo_documento', apellido = '$apellido', email = '$email', empresa = '$empresa' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE domicilios SET documento = '$documento', direccion_laboral = '$direccion_laboral', direccion_laboral2 = '$direccion_laboral2', direccion_particular = '$direccion_particular', direccion_particular2 = '$direccion_particular2', direccion_particular3 = '$direccion_particular3',  provincia = '$provincia', localidad = '$localidad', codigo_postal = '$codigo_postal' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE carpeta SET documento = '$documento' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE llamadas SET documento = '$documento' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE productos SET documento = '$documento' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE productos SET dni = '$documento' WHERE dni = '$documento'");
$mysqli->close();
echo 'Modificado correctamente';
?>
