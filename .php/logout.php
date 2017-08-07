<?php
session_start();
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$result2 = $mysqli->query("UPDATE usuarios SET log='0' WHERE id='".$_SESSION['id']."' LIMIT 1");
session_destroy();
header("Location: /");
?>
