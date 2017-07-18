<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id=$request->id;
$conn = new mysqli("localhost", "ian", "p", "nucleo");
$result = $conn->query("SELECT * FROM (SELECT grupos_casos.id_campania, grupos_casos.deudor FROM grupos_casos INNER JOIN grupos_usuarios ON grupos_casos.id_grupo = grupos_usuarios.id_grupo WHERE grupos_usuarios.id_usuario = '$id' AND grupos_casos.gestionado = 0 AND grupos_casos.gestionando = 0 ORDER BY RAND()) as i GROUP BY id_campania");
$campanias = array();
$productos = array();
while($r = $result->fetch_array()){
	$documento=$r['deudor'];
	$id_campania=$r['id_campania'];
//	$query= $conn->query("SELECT productos.documento, campanias.nombre, estados.estado, deudores.apellido, bancos.dbanco AS banco, DATE_FORMAT(fecha_generacion,'%d/%m/%Y') as fecha_generacion, DATE_FORMAT(fecha_finalizacion,'%d/%m/%Y') as fecha_finalizacion, COUNT(gestionado) as total, SUM(CASE WHEN gestionado!=0 THEN 1 ELSE NULL END) as gestionados, SUM(CASE WHEN gestionado=0 THEN 1 ELSE NULL END) as no_gestionados from grupos_casos inner join campanias on grupos_casos.id_campania = campanias.id , productos INNER JOIN estados ON estados.id = productos.estado INNER JOIN bancos ON bancos.cbanco = productos.banco INNER JOIN deudores ON deudores.documento = productos.documento WHERE productos.documento = $documento AND campanias.id = $id_campania GROUP BY grupos_casos.id_campania");
	$query= $conn->query("SELECT deudores.documento, campanias.nombre, deudores.apellido, DATE_FORMAT(fecha_generacion,'%d/%m/%Y') as fecha_generacion, DATE_FORMAT(fecha_finalizacion,'%d/%m/%Y') as fecha_finalizacion, COUNT(gestionado) as total, COUNT(IF(gestionado!=0, 1 ,NULL)) as gestionados, COUNT(IF(gestionado=0, 1,NULL)) as no_gestionados from grupos_casos inner join campanias on grupos_casos.id_campania = campanias.id  INNER JOIN deudores ON deudores.documento = grupos_casos.deudor WHERE campanias.id = $id_campania  GROUP BY grupos_casos.id_campania");
		while($a = $query->fetch_array()){
		$r['documento'] = $documento;
		$r['apellido']= $a['apellido'];
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
