<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
}else{
if($_SESSION['puesto']=='ger'){
header("Location: ../gerencia/");
}else{
if($_SESSION['puesto']=='sup'){
header("Location: ../supervision/");
}else{
if($_SESSION['puesto']=='gen'){
header("Location: ../general/");
}else{
}
}
}
}
}
else{
header("Location: ../");
}
?>
<html lang="es">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="/.css/bootstrap.min.css"/>
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}
</style>
  </head>

  <body>
  <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Nucleo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href=".">Inicio</a></li>
                <li><a href="usuarios">Usuarios</a></li>
                <li><a href="bancos">Bancos</a></li>
              </ul></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/.php/logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
	<div class="jumbotron text-center">
  		<h1>Administración</h1>
  		<p>En el menú superior escoja lo que quiera administrar.</p> 
	</div>
    </div>
  </body>

</html>
