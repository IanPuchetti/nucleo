<?php
session_start();
if(isset($_SESSION['user'])){
}
else{
header("Location: /");
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
	<link rel="stylesheet" href="/.css/signin.css"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

nav, nav *, nav * *{
  font-size:12px;
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
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/inicio">Inicio</a></li>     
        
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/supervision/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/supervision/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación Masiva</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/supervision/modificacion/productos">Productos</a></li>
                  <li><a tabindex="-1" href="/supervision/modificacion/deudores">Deudores</a></li>
                </ul>
              </li>
              <li><a class="ventana" href="/gerencia/baja/">Cambio de Estado</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/supervision/carga/enriquecer">Telefonos / Emails</a></li>
                  <li><a href="/supervision/carga/reportes">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Gestión de Cobranzas<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/gestion-de-cobranzas/manual">Manual</a></li>
              <li><a href="/supervision/gestion-de-cobranzas/campania">Campaña</a></li>
              <li><a href="#">Automática</a></li>  
              <li><a href="/supervision/gestion-de-cobranzas/consultas">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cargar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/supervision/carga/gestiones-automaticas">Gestiones Automáticas</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Exporte<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/exportar/casos">Casos</a></li>
              <li><a href="/supervision/exportar/telefonos">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/supervision/exportar/sms">SMS</a></li>
                  <li><a tabindex="-1" href="/supervision/exportar/mails">Mails</a></li>
                  <li><a tabindex="-1" href="/supervision/exportar/mails">IVR</a></li>
                </ul>
              </li>
            </ul>
        </li>
      <ul class="nav navbar-nav navbar-right">
        <li id="logout"><a href="/.php/logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">

    <!--<div class="row">
    <div class="col-md-4">
  	    <div class="alert alert-warning" role="alert">
        <strong>Telefonos anulados :</strong> <span id="numero_anulados"></span><br>
        <button class="btn btn-warning">Eliminar</button>
	<script>
		function traer_anulados () {
					     $.ajax({
						url: 'php/traer-anulados.php',
						type: 'post',
						success: function (res){
								        $("#numero_anulados").html(res);
}
});
}
	</script>
      </div>
      <div class="alert alert-danger" role="alert">
        <strong>Casos sin gestión :</strong> <span>0</span><br>
        <button class="btn btn-danger">Ver</button>
      </div>
      
	</div>
	    <div class="col-md-8">
	<div class="panel panel-success">
		<div class="panel-heading">
									<h3 class="panel-title">Próximas acciones</h3></div>
		<div class="panel-body">
	</div>
	</div>
	    </div>
    </div>
	-->
    </div>
  </body>
</html>