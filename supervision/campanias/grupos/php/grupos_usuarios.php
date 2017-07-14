<?php
$id= $_POST['id'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("SELECT grupos_usuarios.id_usuario, grupos_usuarios.id_grupo, usuarios.user  FROM grupos_usuarios INNER JOIN usuarios ON usuarios.id = grupos_usuarios.id_usuario WHERE grupos_usuarios.id_grupo = '$id'");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$rows=json_encode($rows);

echo $rows;

$mysqli->close();
?>
