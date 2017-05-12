<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../../../admin/");
}
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
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
  <script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script type="text/javascript" src="/.js/ng-infinite-scroll.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

tbody tr:hover{
  color:gray;
}

</style>
  </head>

  <body ng-app="app" ng-controller="controller">
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
      <div style="margin-top:-20px;">
        <div class="input-group">
        <span class="input-group-addon btn" style="height:25px;" ng-click="buscar()">Buscar</span>
        <input style="height:25px;" placeholder="Nombre de la campaña..." class="form-control" ng-model="complejo.nombre">
        <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de inicio &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.inicio1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.inicio2">
          </li>
        </ul>
      </span> 
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de finalizacion &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.finalizacion1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.finalizacion2">
          </li>
        </ul>
      </span> 
      <span style="height:25px;" class="input-group-addon">Grupo de la campaña</span><select style="font-size:9px;height:25px" class="form-control" ng-model="generar.grupo"  ng-options="grupo as grupo.nombre for grupo in grupos"><option></option></select>
      </div>
      </div>
      <div style="height:70%;overflow-y:auto;margin-top:-20px;" class="tablon">
<table ng-init="limite=20;orden='documento';" height="100px" ng-if="tabla" class="table table-condensed" style="font-size:10px;">
  <thead>
    <tr style="background:white;">
      <td ng-click="ordenar('nombre')">Nombre</td>
      <td ng-click="ordenar('comentario')">Descripcion</td>
      <td ng-click="ordenar('fecha_inicio')">Fecha Inicio</td>
      <td ng-click="ordenar('fecha_finalizacion')">Fecha Finalizacion</td>
      <td ng-click="ordenar('grupo')">Grupo</td>
    </tr>
  </thead>
  <tbody ng-if="volver==1"  infinite-scroll="bajar()" infinite-scroll-container='".tablon"' infinite-scroll-distance="1" infinite-scroll-disabled="!tabla || limite>=tabla.length">
    <tr ng-repeat="campania in ::tabla  | orderBy: orden" style="cursor:pointer;" ng-dblclick="abrir(campania.id)">
      <td>{{campania.nombre}}</td>
      <td>{{campania.comentario}}</td>
      <td>{{campania.fecha_inicio | date: "dd/MM/yyyy"}}</td>
      <td>{{campania.fecha_finalizacion | date: "dd/MM/yyyy"}}</td>
      <td>{{campania.grupo}}</td>
    </tr>
  </tbody> >
</html>
