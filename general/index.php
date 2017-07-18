<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../administracion/");
}else{
if($_SESSION['puesto']=='ger'){
header("Location: ../gerencia/");
}else{
if($_SESSION['puesto']=='sup'){
header("Location: ../supervision/");
}else{
if($_SESSION['puesto']=='gen'){
}else{
}
}
}
}
}
else{
header("Location: /");
}

echo "<script>var id_usuario = ".$_SESSION["id"].";</script>"
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
  <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/.js/angular.min.js"></script>
  <script src="/.js/Chart.min.js"></script>
  <script src="/.js/angular-chart.min.js"></script>
  <script src="/.js/angular-es.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

body{
}

.header{
  z-index: 1;
  width:100%;
  height:40px;
  background:white;
  padding-top:12px;
  font-size:12px;
  border-bottom:1px solid #ddd;
  -webkit-box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  -moz-box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  position:relative;
}

.boton, .logout, .logout a{
  padding:5px 10px 5px 10px;
  cursor:pointer;
  text-decoration: none;
  color:#666;
}

.boton:hover, .boton span:hover, .logout a:hover{
  color:#333;
}

.dropdown-menu{
  margin-top:6px;
  border-radius:0px;
  font-size:11px;
}

.no-top{
    border-top:0px;
}

.drag{
  -webkit-app-region:drag;
  position:absolute;
  top:0px;
  right:20px;
  width:100%;
  height:20px;
}

@font-face {
    font-family: Product-Sans;
    src: url('../fonts/Product Sans Regular.ttf');
}

@font-face {
    font-family: Product-Sans-Bold;
    src: url('../fonts/Product Sans Bold.ttf');
}

@font-face {
    font-family: Benton-Sans-Light;
    src: url('../fonts/Benton-Sans-Light.ttf');
}

*{
  font-family: Product-Sans;
  color:#666;
}


.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: 0px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
}

.trgl{
  color:#aaa;
}


.boton-menu, .boton-menu a{
  font-size:15px;
  padding:10px;
  text-align:center;
  color:white;
  cursor:pointer;
}

.boton-menu:hover, .boton-menu a:hover{
  color:#ddd;
}

.circle {
  border-radius: 50%;
  width: 50px;
  height: 50px; 
  text-align: center;
  font-size:35px;
  background:white;
}

.circle span{
    margin-top:-5px;
    margin-left:-10px;
    position:absolute;
    background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: Product-Sans-Bold;
}

.color-gr{
  background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.back-gr{
  background: -webkit-linear-gradient(#07963d, #89bd25);
  color:white;
}

body{
  overflow:hidden;
}

#reload:hover{
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}

#reload{
  width:22px;margin-top:4px;-webkit-transition: -webkit-transform .4s ease-in-out;transition:transform .4s ease-in-out;cursor:pointer;
}

.block{
  width:100%;
  height:40px;
  position:fixed;
  top:0px;
  left:0px;
}


.side{
  z-index:0;background:white;position:fixed;top:40px;left:150px;width:850px; height:90%;padding:10px;font-size:17px;overflow-y:auto;overflow-x:hidden;
}

.caja{
  padding:20px;
  border-radius:15px;
  border:1px solid #ddd;
}

.dias{
  padding:3px;margin:1px;border-radius:5px;border:1px solid #ddd;cursor:pointer;display:inline-block;width:30px;text-align: center;
}

.dias:hover{
  background:#eee;
}

select{
  background:none;
}

.noselect {
   -moz-user-select: none;
   -khtml-user-select: none;
   -webkit-user-select: none;
   -ms-user-select: none;
   user-select: none;
}
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="inicio" ng-controller="inicio" class="noselect">
    <div class="noselect">
<span class="drag"></span>
</div>
<div class="header">
  <div style="position:absolute;width:600px;">
  <span class="dropdown boton">
    Inicio
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Gestión de cobranzas <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/general/gestion-de-cobranzas/manual/">Manual</a></li>
      <li><a href="/general/gestion-de-cobranzas/campania/">Campaña</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
            <span data-toggle="dropdown">Administración de Cartera <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/general/carga/comparacion" class="ventana">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/general/carga/masiva" class="ventana">Masiva</a></li>
                  <li><a tabindex="-1" href="/general/carga/manual" class="ventana">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/general/carga/enriquecer" class="ventana">Telefonos / Mails</a></li>
                  <li><a href="/general/carga/reportes" class="ventana">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton logout">
    <a href="/.php/logout.php">Salir</a>
  </span>
</div>
</div>
<div class="block" ng-if="block==true"></div> 

<div style="width:100%;height:100%;top:40px;">
  <div style="border-right:0px;background: -webkit-linear-gradient(#07963d, #89bd25);width:120px;float:left;height:100%;">
    <div  class="circle" style="margin:auto;margin-top:5px;"><span data-toggle="tooltip" title="Gestor" data-placement="bottom"><img src="/.img/gestor.png" style="width:35px;margin-top:12.5px;margin-left:-7px;"></span></div>
    <div class="boton-menu" ng-click="show='agendas'" ng-init="show='agendas'">Agendas <span ng-if="agenda.length!=0" style="color:white;">({{agenda.length}})</span></div>
    <div class="boton-menu" ng-click="show='estadisticas'">Estadisticas</div>
   <!--<div class="boton-menu" ng-click="show='campanias'">Campañas</div>
    <div class="boton-menu" ng-click="show='casos'">Mis casos</div>-->
    <div class="boton-menu"><a href="#">Ayuda</a></div>
  </div>
  <div class="side" ng-show="show=='estadisticas'">
    <h2 class="color-gr" style="margin-top:-5px;padding-left:20px;">Estadisticas</h2>
        <p>Un breve resumen de tu <select style="border:0px;border-bottom:1px solid #89bd25" ng-model="periodo" ng-change="estadisticas.graficar()" ng-options="periodo as periodo for periodo in estadisticas.periodo" ng-init="periodo='dia'"></select></p>
         <div style="width:400px">
          <canvas id="line" class="chart chart-line" chart-data="estadisticas.cont" chart-labels="estadisticas.labels" chart-series="['Gestiones']" chart-options="options" chart-colors="['#89bd25', '#ff6384', '#ff8e72']" chart-dataset-override="datasetOverride" chart-click="onClick" height="120"></canvas>
         </div>
  </div>
  <div class="side" ng-show="show=='agendas'">
    <h2 class="color-gr" style="margin-top:-5px;padding-left:20px;display:inline-block;">Agendas</h2>
        <p>Una lista con tus agendas del mes</p>
          <div class="caja"  style="width:250px;">
        <h4 style="text-transform:uppercase;">{{mes[0] | date:'MMMM'}}   {{mes[0] | date: 'yyyy'}}</h4>
        <div style="width:250px;margin-left:-10px;font-size:12px">
          <div ng-repeat="(i,dia) in mes" class="dias" id="dia{{i}}" ng-click="agendas(dia)">{{dia | date: 'dd'}}</span>
        </div>
      </div>
      </div>
      <div style="position:absolute;left:300px;width:300px;top:50px;font-size:12px;height:300px;overflow-y:auto;">
        <div ng-repeat="caso in agenda">
          <span style="color:#{{caso.gestion!=1 ? 934 : 394}};cursor:pointer;" ng-dblclick="gestionar(caso.documento, caso.id)">{{caso.apellido}} </span><img src="/.img/yes.png" style="width:15px;margin-top:-3px;" ng-if="caso.gestion!=0">
        </div>
      </div>
  </div>
  <div style="float:right;width:60%;">
        
  </div>
</div>
  <div class="side" ng-show="show=='campanias'">
    <h2 class="color-gr" style="margin-top:-5px;padding-left:20px;">Campañas</h2>
        <p></p>
  </div>
  <div class="side" ng-show="show=='casos'">
    <h2 class="color-gr" style="margin-top:-5px;padding-left:20px;">Casos</h2>
        <p></p>
  </div>
  <div class="side" ng-hide="show">
  </div>
</div> 
<div style="width:30px;height:30px;border-radius:50%;background: -webkit-linear-gradient(#07963d, #89bd25);position:fixed;bottom:0px;right:0px;margin:5px;text-align:center;"><a href="."><img src="/.img/reload.png" id="reload"></a></div>
<script>

angular
  .module("inicio", ["chart.js"])
  .controller("inicio", function ($scope, $http, $timeout) {
  var _=$scope;
  _.block=false;
  _.mes = getDaysInMonth(hoy.getMonth(), hoy.getFullYear());
  _.hoy = hoy.getDate();

  $scope.datasetOverride = [{ yAxisID: 'y-axis-1' }];
  $scope.options = {
    scales: {
      yAxes: [
        {
          id: 'y-axis-1',
          type: 'linear',
          display: true,
          position: 'left'
        }
      ]
    }
  };
  _.estadisticas = { datos : null,
                     labels:[],
                     cont:[],
                     periodo : ['dia','semana','mes'],
                     graficar : function (){
                            $http.post('php/estadisticas.php',{operador:id_usuario, periodo:_.periodo})
                            .then(function(res){
                              _.estadisticas.datos = res.data;
                              if(_.periodo=='dia'){
                               _.estadisticas.labels=arreglarlabel(_.estadisticas.datos,'horas');
                               _.estadisticas.cont=arreglardata(_.estadisticas.datos, 'gestiones');
                              }else{
                                if(_.periodo=='semana'){
                               _.estadisticas.labels=arreglarlabel(_.estadisticas.datos,'fecha');
                               _.estadisticas.cont=arreglardata(_.estadisticas.datos, 'gestiones');
                              }else{
                                if(_.periodo=='mes'){
                               _.estadisticas.labels=arreglarlabel(_.estadisticas.datos,'fecha');
                               _.estadisticas.cont=arreglardata(_.estadisticas.datos, 'gestiones');
                              }
                              }
                              }

                            });
                    }};
  _.gestionar=function (d, i){
                                window.open('gestion-de-cobranzas/agenda/datos/?d='+d+'&i='+i, d,'height=400, width=650, left=300, top=100, resizable=no, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');
                              };
  _.agendas=function (d){
    _.d=d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate();
    $(".dias").css({color:"#666", 'border-color':'#ddd'});
    $(".dias#dia"+(d.getDate()-1)).css({color:"#07963d", 'border-color':'#07963d'});
    $http.post('php/agendas.php', {fecha:_.d}).then(function(res){
      _.agenda=res.data;
    });
  };
  _.agendas(hoy);
  $timeout(function () {
    $(".dias#dia"+(hoy.getDate()-1)).css({color:"#07963d", 'border-color':'#07963d'});
   _.estadisticas.graficar();
  });

});
var hoy = new Date();
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

function arreglardata (o, p){a=[[]];for(var i in o){a[0].push(o[i][p])}return a;}
function arreglarlabel (o, p){a=[];for(var i in o){a.push(o[i][p])}return a;}
function getDaysInMonth(month, year){
         // Since no month has fewer than 28 days
         var date = new Date(year, month, 1);
         var days = [];
         console.log('month', month, 'date.getMonth()', date.getMonth())
         while (date.getMonth() === month) {
            days.push(new Date(date));
            date.setDate(date.getDate() + 1);
         }
         return days;
    }

  global.shared={close:null, server:null}
  const remote = require('electron').remote;
  var resize = remote.require('./main').resize;
  resize(800,400);

</script>
</body>
</html>