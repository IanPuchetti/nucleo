<?php
$proceso=$_POST['proceso'];
$datos=json_decode($_POST['datos']);
$banco=$datos->banco;
$nombre=$datos->nombre;
$fecha=$datos->fecha;
$hora=$datos->hora;
$tipo_llamado=$datos->tipo_llamado;
$descripcion=$datos->descripcion;
$tipo_gestion=0;
if($tipo_llamado=='SALIENTE'){
	$tipo_gestion=1;
}else{
	if($tipo_llamado=='ENTRANTE'){
		$tipo_gestion=2;
	}else{
		$tipo_gestion=3;
	}
}
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$result = $mysqli->query("SELECT documento FROM deudores WHERE apellido = '$nombre'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$documento=$rows[0]['documento'];

$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL, '$documento', 0, '$descripcion', '$fecha', '$hora',0,0,0,'$tipo_gestion','$banco')");


$mysqli->close();
echo $proceso;
?>
