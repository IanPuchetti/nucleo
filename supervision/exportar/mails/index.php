<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
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
	<link rel="stylesheet" href="/.css/signin.css"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
	<script type="text/javascript" src="/.js/icg-json-to-xlsx.js"></script>
  <script type="text/javascript" src="/.js/jszip.min.js"></script>
  <script type="text/javascript" src="/.js/xlsx.min.js"></script>
  <script type="text/javascript" src="/.js/lodash.min.js"></script>
  <script type="text/javascript" src="/.js/FileSaver.js"></script>
  <script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script type="text/javascript" src="/.js/ng-infinite-scroll.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/angular-chart.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
<style>
body{
  background:#fff;
}


table thead tr th{
  font-weight:400;
  border-right:1px solid #fff;
  padding:5px;
  font-size:12px;
  cursor:pointer;
}
table tbody tr{
      background:rgba(100,100,100,0.9); 

}
table tbody tr:hover{
  background:rgba(100,100,100,0.7);
}

table td{
    border:1px solid #aaa;
    color:white;
    padding:5px;
    font-size:10px;

}

table{
width:100%;
max-height:300px;

}

.flechita{
  color:#666;
}

.btn, .input-group-addon, .form-control{
  border-radius:0px;
}
</style>
</head>
<body ng-app="exporte" ng-controller="filtro">
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
<nav class="navbar  nav2 navbar-default" style="border-bottom:#ddd 1px solid;margin-top:-45px;">
  <div class="navbar-header pull-right" id="myNavbar">
    <span class="dropdown" >
      <span class="dropdown" >
      <span class="dropdown-toggle" type="button" style="border-radius:0px;color:#885656;border:0px;padding:10px;cursor:pointer;" data-toggle="dropdown">Sub estados<span class="caret"></span></span>
      <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;margin-top:9px;height:300px;overflow-y:auto;width:300px;">
        <li>
            <canvas id="pie" class="chart chart-pie" chart-data="data" chart-labels="labels" chart-options="options" style="height:300px;" chart-legend="true"></canvas> 
            <div ng-repeat="(key, value) in Sub_estados" style="font-weight:200;padding:0px 10px 0px 10px;border-bottom:1px solid #ccc;">{{key=='null' ? 'SIN SUB ESTADO' : key}}:{{value}}</div>
         </li>
      </ul>
    </span>
      <span class="dropdown-toggle" type="button" style="border-radius:0px;color:#4574a9;border:0px;padding:10px;cursor:pointer;" data-toggle="dropdown">Campos<span class="caret"></span></span>
      <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;margin-top:9px;height:200px;overflow-y:auto;width:200px;">
        <li>
          <button class="btn btn-default" onclick="$('.css-checkbox').click()" style="width:100%;font-size:10px;color:#4574a9;padding:2px;">Todos</button>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.documento" ng-init="campo.deudor.documento=true" class="css-checkbox" id="check1"><label class="css-label" for="check1" style="font-size:12px;font-weight:normal;">Numero de documento</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.apellido" ng-init="campo.deudor.apellido=true" class="css-checkbox" id="check2"><label class="css-label" for="check2" style="font-size:12px;font-weight:normal;">Apellido</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.mail" ng-init="campo.deudor.mail=true" class="css-checkbox" id="check3"><label class="css-label" for="check3" style="font-size:12px;font-weight:normal;">Mail</label></div>

          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.estado" ng-init="campo.producto.estado=true" class="css-checkbox" id="check5"><label class="css-label" for="check5" style="font-size:12px;font-weight:normal;">Estado</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.sub_estado" ng-init="campo.producto.sub_estado=true" class="css-checkbox" id="check6"><label class="css-label" for="check6" style="font-size:12px;font-weight:normal;">Sub estado</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.banco" ng-init="campo.producto.banco=true" class="css-checkbox" id="check7"><label class="css-label" for="check7" style="font-size:12px;font-weight:normal;">Banco</label></div>
        </li>
      </ul>
    </span>
    <span class="dropdown" style="margin-left:-5px;">
      <span class="dropdown-toggle" type="button" style="border-radius:0px;color:#6a9e60;border-color:#6a9e60;padding:10px;margin-top:10px;" data-toggle="dropdown">Exportar<span class="caret"></span></span>
      <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;margin-top:9px;">
        <li>
          <div class="input-group" style="padding:5px;">
            <input class="form-control" placeholder="Nombre del archivo" ng-model="nombre_archivo" style="border-radius:0px;width:200px;border-color:#6a9e60;">
            <span class="btn input-group-addon" style="border-radius:0px;color:white;background:#6a9e60;border-color:#6a9e60;" ng-click="descargar()">Descargar</span>
          </div>
        </li>
      </ul>
    </span>      
  </div>
  <div class="navbar-header pull-left" id="myNavbar" style="margin-top:10px;margin-left:-20px;">

    <span class=" input-group" style="width:100%;">
            <span class="btn input-group-addon" style="border-radius:0px;color:white;background:#4574a9;border-color:#4574a9;height:24px;font-size:11px;" ng-click="buscar.complejo();">Buscar</span>

      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;width:300px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha Solicitud &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.fecha1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha2">
          </li>
        </ul>
      </span>
      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;">Banco</span>
      <select class="form-control" placeholder="Nombre del archivo" style="border-radius:0px;border-color:#aaa;height:25px;font-size:10px" ng-model="complejo.banco" ng-options="banco as banco.banco for banco in bancos"><option></option></select>
      
      <span class="btn input-group-addon" style="border-radius:0px;color:black;background:#fff;border-color:#aaa;height:24px;font-size:11px;" ng-click="complejo={};complejo.reportes='todos';complejo.movimiento='todos';complejo.contactado='todos';">Limpiar</span>
    </span>  
  </div>
</nav>
<div style="height:80%;overflow-y:auto;margin-top:-20px;" class="tablon">
<table ng-init="limite=20;orden='documento';" height="100px">
  <thead>
    <tr ng-repeat="campo in tabla| limitTo: 1">
      <th ng-repeat="(key, value) in campo" ng-click="ordenar(key)" id="{{key}}">{{::key}}</th>
    </tr>
  </thead>
  <tbody ng-if="volver==1" infinite-scroll="bajar()" infinite-scroll-container='".tablon"' infinite-scroll-distance="1" infinite-scroll-disabled="!tabla || limite>=tabla.length">
    <tr ng-repeat="(i, fila) in ::tabla  | orderBy: orden" ng-if="i<limite">
      <td ng-repeat="valor in fila">{{valor}}</td>
    </tr>
  </tbody>
</table>
    </div>
    <div class="input-group" style="margin-bottom:-40px;"><span class="input-group-addon">Cantidad de resultados</span><span class="form-control" style="font-size:10px;">{{tabla.length}}</span><span class="input-group-addon" ng-show="complejo.movimiento=='con'">Total en pesos</span><span ng-show="complejo.movimiento=='con'" class="form-control" style="font-size:10px;">${{total_pesos | number: 2}}</span></div>
  </body>
</html>
