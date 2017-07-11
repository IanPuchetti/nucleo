<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id=$request->id;
$conn = new mysqli("localhost", "ian", "p", "nucleo");
$result = $conn->query("SELECT grupos_casos.id_campania, grupos_casos.id_caso, productos.documento, productos.numero_operacion, estados.estado, deudores.apellido, campanias.nombre, bancos.dbanco AS banco FROM grupos_casos INNER JOIN grupos_usuarios ON grupos_casos.id_grupo = grupos_usuarios.id_grupo INNER JOIN campanias ON campanias.id = grupos_casos.id_campania INNER JOIN productos ON productos.numero_operacion = grupos_casos.id_caso INNER JOIN estados ON productos.estado = estados.id  INNER JOIN deudores ON productos.documento = deudores.documento INNER JOIN bancos ON bancos.cbanco = productos.banco WHERE grupos_usuarios.id_usuario = '$id' AND grupos_casos.gestionado = 0");
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
