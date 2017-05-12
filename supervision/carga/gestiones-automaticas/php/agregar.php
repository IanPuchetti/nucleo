<?php
$proceso=$_POST['proceso'];
$datos=json_decode($_POST['datos']);
$telefono=$datos->telefono;
$estado=$datos->estado;
$fecha=$datos->conexion;
$ivr=$datos->ivr;
if($ivr=='Si'){
	if($estado=='ANSWER'){
		$estado='Contactado - Gestion Automatica';
	}else{
		if($estado=='BUSY'){
			$estado='Ocupado - Gestion Automatica';
		}else{
			if($estado=='NOANSWER'){
				$estado='No contesta - Gestion Automatica';
			}
		}
	}
}else{
	if($estado=='ANSWER'){
		$estado='Contactado ';
	}else{
		if($estado=='BUSY'){
			$estado='Ocupado ';
		}else{
			if($estado=='NOANSWER'){
				$estado='No contesta ';
			}
		}
	}
}
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");

$result = $mysqli->query("SELECT dni FROM telefonos WHERE numero = '$telefono'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$documento=$rows[0]['dni'];

$result = $mysqli->query("INSERT INTO gestiones VALUES(NULL, '$documento', '$telefono', '$estado', '$fecha', 0,0,0,0,1,0)");


$mysqli->close();
echo $proceso;
?>
