<?php
$id=$_POST['id'];
$conn = new mysqli("localhost", "ian", "p", "nucleo");
$result = $conn->query("SELECT grupos_casos.id_campania, grupos_casos.id_caso, productos.documento, productos.estado, deudores.apellido, campanias.nombre FROM grupos_casos INNER JOIN grupos_usuarios ON grupos_usuarios.id_grupo = grupos_usuarios.id_grupo INNER JOIN campanias ON campanias.id = grupos_casos.id_campania INNER JOIN productos ON productos.id = grupos_casos.id_caso INNER JOIN deudores ON productos.documento = deudores.documento WHERE grupos_usuarios.id_usuario = 10 AND grupos_casos.gestionado = 0");
$id_campanias = array();
$all = array();
while($r = $result->fetch_array()){
	$z=$r[0];
	if (array_key_exists('a'.$z, $GLOBALS)){
	${"a$z"}[]= $r;	
	}
	else{
	$id_campanias[]= $r[0];
	${"a$z"}= array();
	${"a$z"}[]= $r;
	}
}
//$rows=json_encode($rows);
foreach($id_campanias as $aidi){
		${"a$aidi"}=${"a$aidi"}[array_rand(${"a$aidi"})];
		$all [] = ${"a$aidi"};
}

echo json_encode($all);
$conn->close();
?>
