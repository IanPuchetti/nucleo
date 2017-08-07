<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
if ($result = $mysqli->query("SELECT * FROM usuarios WHERE user='$user' AND pass='$pass' AND log='0' LIMIT 1")) {
$rows = $result->num_rows;
if($rows!=0){
$result2 = $mysqli->query("UPDATE usuarios SET log='1' WHERE user='$user' AND pass='$pass' AND log='0' LIMIT 1");
session_start();
$_SESSION['user']=$user;
$_SESSION['pass']=$pass;
while($r = mysqli_fetch_assoc($result)) {
    $_SESSION['puesto']=$r["puesto"];
    $_SESSION['id']=$r["id"];
}
header("Location: ../inicio/");
}else{
header("Location: ../inicio/");
}
$result->close();
}
$mysqli->close();
?>
