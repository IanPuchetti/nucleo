<?php
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$mysqli->set_charset("utf8");
$telefonos=json_decode($_POST['data']);
$largo=count($telefonos);
$i=0;
while($i<$largo){
$numero=$telefonos[$i]->numero;
$reemplazo=$telefonos[$i]->reemplazo;
$comentario=$telefonos[$i]->comentario;
$result = $mysqli->query("UPDATE telefonos SET numero = '$reemplazo', comentario = '$comentario' WHERE numero = '$numero'");
$i++;
}
$mysqli->close();
echo 'Telefonos modificados correctamente';
?>
