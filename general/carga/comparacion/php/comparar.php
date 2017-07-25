<?php
$banco=$_POST['banco'];
$documento=$_POST['documento'];
$numero_operacion=$_POST['numero_operacion'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT deudores.documento FROM productos INNER JOIN deudores ON productos.documento = deudores.documento WHERE deudores.documento = '$documento' AND productos.banco = '$banco' AND productos.numero_operacion='$numero_operacion' AND productos.estado!='1'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
if(sizeof($rows)!=0){
echo 'coincidente';
}
else{
	$result2 = $mysqli->query("SELECT deudores.documento FROM productos INNER JOIN deudores ON productos.documento = deudores.documento WHERE deudores.documento = '$documento' AND productos.banco = '$banco' AND productos.numero_operacion='$numero_operacion'");
		while($r = mysqli_fetch_assoc($result2)) {
    		$rows[] = $r;
	}
	if(sizeof($rows)!=0){
		echo 'no_coincide_estado';
	}else{
		$result3 = $mysqli->query("SELECT deudores.documento FROM productos INNER JOIN deudores ON productos.documento = deudores.documento WHERE deudores.documento = '$documento' AND productos.banco = '$banco' ");
		while($r = mysqli_fetch_assoc($result3)){
    		$rows[] = $r;
		}
		if(sizeof($rows)!=0){
		echo 'producto_nuevo';
		}else{
			echo 'agregar';
		}
	}
}
$mysqli->close();
?>

