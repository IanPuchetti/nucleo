<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id=$request->id;
$conn = new mysqli("localhost", "ian", "p", "nucleo");
$result = $conn->query("SELECT * FROM (SELECT grupos_casos.id_campania, grupos_casos.deudor FROM grupos_casos INNER JOIN grupos_usuarios ON grupos_casos.id_grupo = grupos_usuarios.id_grupo WHERE grupos_usuarios.id_usuario = '$id' AND grupos_casos.gestionado = 0 ORDER BY RAND()) as i GROUP BY id_campania");
$campanias = array();
$productos = array();
while($r = $result->fetch_array()){
	$documento=$r['deudor'];
	$id_campania=$r['id_campania'];
	$query= $conn->query("SELECT productos.documento, campanias.nombre, estados.estado, deudores.apellido, bancos.dbanco AS banco, DATE_FORMAT(fecha_generacion,'%d/%m/%Y') as fecha_generacion, DATE_FORMAT(fecha_finalizacion,'%d/%m/%Y') as fecha_finalizacion, COUNT(gestionado) as total, SUM(CASE WHEN gestionado!=0 THEN 1 ELSE 0 END) as gestionados, SUM(CASE WHEN gestionado=0 THEN 1 ELSE 0 END) as no_gestionados from campanias inner join grupos_casos on grupos_casos.id_campania = campanias.id , productos INNER JOIN estados ON estados.id = productos.estado INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN deudores ON deudores.documento = productos.documento WHERE productos.documento = $documento AND campanias.id = $id_campania LIMIT 1");
		while($a = $query->fetch_array()){
		$r['documento'] = $a['documento'];
		$r['estado']= $a['estado'];
		$r['apellido']= $a['apellido'];
		$r['banco']= $a['banco'];
		$r['nombre']= $a['nombre'];
		$r['gestionados']= $a['gestionados'];
		$r['no_gestionados']= $a['no_gestionados'];
		$r['fecha_generacion']= $a['fecha_generacion'];
		$r['fecha_finalizacion']= $a['fecha_finalizacion'];
		$r['total']= $a['total'];
		}
		if($r['nombre']){
		$campanias[] = $r;
	}
}
echo json_encode($campanias);
$conn->close();
?>
