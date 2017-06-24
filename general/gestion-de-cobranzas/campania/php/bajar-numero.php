<?php
$numero=$_POST['numero'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result = $mysqli->query("UPDATE telefonos SET sirve = 0 WHERE numero ='$numero' LIMIT 1");
$mysqli->close();
echo 'El telefono ha sido dado de baja';
?>
