<?php
session_start();
if(isset($_SESSION['user'])){
header("Location: inicio/");
}
else{
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="icon.png">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" href=".css/bootstrap.min.css"/>
	<script type="text/javascript" src=".js/jquery.min.js"></script>
	<script type="text/javascript" src=".js/bootstrap.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}


@font-face {
    font-family: Benton-Sans;
    src: url('../fonts/Benton-Sans-Regular.ttf');
}

@font-face {
    font-family: Benton-Sans-Light;
    src: url('../fonts/Benton-Sans-Light.ttf');
}

input{
  font-family:Benton-Sans-Light;

}
.titulo{
  font-family:Benton-Sans-Light;
  padding:15px;
  margin-top:-15px;
  font-size:30px;
}

.input{
  border:1px solid rgba(255,255,255,0.2);
  background:rgba(0,0,0,0.1);
  color:#fff;
  font-size:17px;
  padding:5px;
}
button.input{
  background:none;
  color:#aaa;
}


button.input:hover{
  background:none;
  color:#888;
  background-size: cover;
}

*{ 
    outline: none;
}

.login{
  position:fixed;
  font-family: Benton-Sans;
  margin:50px 25px 50px 25px;padding:50px 25px 25px 25px;background:white;max-width:400px;border-radius:15px;
  -webkit-box-shadow: 0px 0px 69px -1px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 69px -1px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 69px -1px rgba(0,0,0,0.75);
}

@media only screen and (min-width: 600px) {
  body{
  background:url('/.img/background.jpg');
  background-size:125%;
  
}
}
@media only screen and (max-width: 600px) {
body{
  background:url('/.img/background.jpg');
background-size:125%;

}
  }

.input-group-addon{
  background:none;
}

.boton,.form-control{
  font-family: Benton-Sans;
}

.boton:hover{
  border-color:#bbdb7d;
}

.gradiente{
  background: -webkit-linear-gradient(#e11c1c, #d9aa21);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.olvido{
  color:#777;
  border-top:1px solid #eee;
  padding-top:10px;
  margin-top:20px;
  font-family:Benton-Sans-Light;
  text-align:center;
  cursor:pointer;
}

.olvido:hover{
  background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.sombra{
  position:fixed;
  left:0px;
  width:475px;
  top:0px;
  height:100%;
  background:url('/.img/sombra.png');
  background-size: cover;
  opacity: .8;
}

  </style>
  </head>
  <body>
  <div class="sombra"></div>
  <div class="login">
	<form class="form-signin" action=".php/login.php" method="post">
        <h2 class="titulo">Iniciar sesión</h2>
        <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon"><img src=".img/icon-username.png"></span>
          <input type="text" class="form-control"  placeholder="Usuario" name="user" autofocus>
        </div>
        <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon"><img src=".img/icon-password.png"></span>
          <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
        </div>
        <button class="form-control boton" style="margin-top:10px;">Entrar</button>
        <div class="olvido">
          ¿Olvidó su contraseña?
        </div>
      </form>
    </div>
    <span onclick="parent.cerrar();" style="position:fixed;right:0px;top:0px;cursor:pointer;font-size:15px;padding-right:5px;">✕</span>
  </body>
</html>
