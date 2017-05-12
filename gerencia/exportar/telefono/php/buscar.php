<?php
$documento=$_POST["documento"];
$apellido=$_POST["apellido"];
$banco=$_POST["banco"];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$consulta = "SELECT deudores.apellido AS 'Nombre y Apellido', telefonos.dni AS 'Documento', telefonos.numero AS Numero, calificacion_telefonos.titulo AS Calificacion, telefonos.comentario AS Comentario, deudores.email AS 'Email'  FROM  telefonos INNER JOIN deudores ON deudores.documento = telefonos.dni INNER JOIN calificacion_telefonos ON calificacion_telefonos.id = telefonos.calificacion INNER JOIN productos ON telefonos.dni = productos.documento LEFT OUTER JOIN bancos ON bancos.cbanco = productos.banco WHERE telefonos.dni LIKE '%$documento%' AND deudores.apellido LIKE '%$apellido%' ";

if($banco != 0){
$consulta = $consulta."AND productos.banco LIKE '$banco' ";
}

$consulta = $consulta."GROUP BY telefonos.numero";
$result = $mysqli->query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

print_r($rows);

$mysqli->close();
?>
