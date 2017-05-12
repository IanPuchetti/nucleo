<!DOCTYPE html>
<html lang="es">

  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="css/tooltip-view.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/styles.css"/>
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/angular.1.5.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/angular-chart.min.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}
</style>
	<script src="js/app.js"></script>
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
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campañas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/campanias/ver">Ver</a></li>
                <li><a href="/gerencia/campanias/generar">Generar</a></li>
                <li><a href="/gerencia/campanias/grupos">Grupos</a></li>              
              </ul></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/panel/gestiones">Gestiones</a></li>
                <li><a href="/gerencia/panel/estadisticas">Estadisticas</a></li>          
              </ul>
        </li>      
        
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/gerencia/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación Masiva</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/modificacion/productos">Productos</a></li>
                  <li><a tabindex="-1" href="/gerencia/modificacion/deudores">Deudores</a></li>
                </ul>
              </li>
              <li><a class="ventana" href="/gerencia/baja/">Cambio de Estado</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/gerencia/carga/enriquecer">Telefonos / Emails</a></li>
                  <li><a href="/gerencia/carga/reportes">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Gestión de Cobranzas<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/gestion-de-cobranzas/manual">Manual</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/campania">Campaña</a></li>
              <li><a href="#">Automática</a></li>  
              <li><a href="/gerencia/gestion-de-cobranzas/consultas">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cargar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/carga/gestiones-automaticas">Gestiones Automáticas</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Exporte<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/exportar/casos">Casos</a></li>
              <li><a href="/gerencia/exportar/telefonos">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/exportar/sms">SMS</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails">Mails</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails">IVR</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Informes</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/exportar/propuestas">Propuestas</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/cuotas_cero">Cuotas Cero</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/administracion/responsables">Responsables</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">ABMS</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/usuarios">Operadores</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/bancos">Bancos</a></li>
                  <!--<li><a tabindex="-1" href="/gerencia/administracion/abms/estados">Estados</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/sub-estados">Sub Estados</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/calificaciones">Calificaciones</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/motivos">Motivos</a></li>-->
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/liquidadores">Liquidadores</a></li>
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
<div class="container"  ng-app="myApp"  ng-controller="grafico" style="position:absolute;width:100%;left:0px;top:60px;"> 
	<div class="row">
	 <div class="col-md-10" style="background:url('/.img/fondo.jpg') no-repeat;background-color:white;">

          <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
            <div class="panel-heading"></div>
            <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
              <div class="input-group">
              <span class="input-group-addon">Banco</span>
              <select class="form-control" ng-model="banco" ng-options="banco.cbanco as banco.dbanco for banco in input.bancos"><option></option></select>
          </div>
            </div>
          </div>

      <div class="row" ng-show="row==1">
        <div class="col-md-6">
          <div class="panel panel-danger"  style="background:rgba(255,255,255,0.5);">
            <div class="panel-heading"></div>
            <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
              <canvas id="bar" class="chart chart-bar ng-isolate-scope" chart-data="data" chart-labels="labels" chart-series="series" chart-options="options" style="height:300px;"></canvas>
            </div>
          </div>
        </div>
  <div class="col-md-6">
      <div class="panel panel-danger"  style="background:rgba(255,255,255,0.5);">
        <div class="panel-heading"></div>
          <div class="panel-body" style="text-align:left;font-weight:200;font-size:12px;">
            <canvas id="pie" class="chart chart-pie" chart-data="data" chart-labels="labels" chart-options="options" style="height:300px;" chart-legend="true"></canvas> 
          </div>
      </div>
</div>
</div>
<div ng-show="row==0">
        <div class="panel panel-default" style="background:rgba(255,255,255,0.5);">
        <div class="panel-heading">Monto de anticipos</div>
        <div class="panel-body" style="text-align:left;font-weight:200;font-size:12px;">
          <div class="input-group">
              <span class="input-group-addon">Fecha</span>
              <span class="input-group-addon">Entre</span>
              <input class="form-control" type="date" ng-model="fecha1" ng-change="graficar.propuestas()">
              <span class="input-group-addon">y</span>
              <input class="form-control" type="date" ng-model="fecha2" ng-change="graficar.propuestas()">
          </div>
  <canvas id="line" class="chart chart-line" chart-data="data1" chart-labels="labels1" chart-series="series" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick" height="150"></canvas>
        </div>
        <div class="input-group" style="margin:auto;">
              <span class="input-group-addon">Total de anticipos</span>
              <span class="input-group-addon" style="width:20px;">$</span>
              <span class="form-control">{{anticipos | number:2}}</span>
          </div>
        </div>
</div>
</div>
	<div class="col-md-2">
		<div class="borde-abajo">
      <ul class="nav" role="tablist" style="text-align:center;">
        <li role="presentation"><a ng-click="graficar.sub_estados();row=1" ng-init="row=1">Sub Estados</a></li>
        <li role="presentation"><a ng-click="graficar.estados();row=1">Estados</a></li>
        <li role="presentation"><a ng-click="graficar.telefonos();row=1">Telefonos</a></li>
        <li role="presentation"><a ng-click="graficar.responsables();row=1">Responsables</a></li>
        <hr style="border-bottom:1px #aad solid;"></hr>
        <li role="presentation"><a ng-click="row=0">Propuestas</a></li>
      </ul>
    </div>
	</div>
</div>
</div>
</body>
</html>
