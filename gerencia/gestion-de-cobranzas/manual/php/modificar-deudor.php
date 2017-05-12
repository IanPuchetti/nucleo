<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$documento=$request -> documento;
$tipo_documento=$request -> tipo_documento;
$apellido=$request -> apellido;
$email=$request -> email;
$empresa=$request -> empresa;
$direccion_laboral=$request -> direccion_laboral;
$direccion_laboral2=$request -> direccion_laboral2;
$direccion_particular=$request -> direccion_particular;
$direccion_particular2=$request -> direccion_particular2;
$direccion_particular3=$request -> direccion_particular3;
$provincia=$request -> provincia;
$localidad=$request -> localidad;
$codigo_postal=$request -> codigo_postal;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$result = $mysqli->query("UPDATE deudores SET documento = '$documento', tipo_documento = '$tipo_documento', apellido = '$apellido', email = '$email', empresa = '$empresa' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE domicilios SET documento = '$documento', direccion_laboral = '$direccion_laboral', direccion_laboral2 = '$direccion_laboral2', direccion_particular = '$direccion_particular', direccion_particular2 = '$direccion_particular2', direccion_particular3 = '$direccion_particular3',  provincia = '$provincia', localidad = '$localidad', codigo_postal = '$codigo_postal' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE carpeta SET documento = '$documento' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE llamadas SET documento = '$documento' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE productos SET documento = '$documento' WHERE documento = '$documento'");
$result = $mysqli->query("UPDATE telefonos SET dni = '$documento' WHERE dni = '$documento'");
$mysqli->close();
echo 'Modificado correctamente';
?>
