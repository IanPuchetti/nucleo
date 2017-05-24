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

echo "<script>var id_usuario = ".$_SESSION["id"]."</script>"
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
  <script type="text/javascript" src="/.js/ng-infinite-scroll.js"></script>
  <script type="text/javascript" src="/.js/angular-filter.min.js"></script>
  <script type="text/javascript" src="/.js/socket.io.js"></script>
  <script type="text/javascript" src="/.js/ngsocket.io.js"></script>
  <script src="/.js/angular-es.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

body{
}

.noselect{
  -webkit-touch-callout: none; 
    -webkit-user-select: none; 
     -khtml-user-select: none; 
       -moz-user-select: none; 
        -ms-user-select: none; 
            user-select: none;
}
.header{
  width:100%;
  height:40px;
  background:white;
  padding-top:12px;
  font-size:12px;
  border-bottom:1px solid #ddd;
  /*-webkit-box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  -moz-box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);*/
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


@font-face {
    font-family: Product-Sans;
    src: url('/fonts/Product Sans Regular.ttf');
}

@font-face {
    font-family: Product-Sans-Bold;
    src: url('/fonts/Product Sans Bold.ttf');
}

@font-face {
    font-family: Benton-Sans-Light;
    src: url('/fonts/Benton-Sans-Light.ttf');
}

*{
  font-family: Product-Sans;
  color:#666;
}

.drag{
  -webkit-app-region:drag;
}

.bar{
  width:100%;
  height:15px;
  position:fixed;
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
  border:1px solid #ccc;
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
  width:310px;
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

.boton a{
  text-decoration: none;
  color:#777;
}

.buscador{
    margin-top:0px;
    padding-top:4px;
}
.buscador span{
  margin-top:0px;
  padding:5px 35px 5px 24px;
  background:#07963d;
  color:white;
  cursor:pointer;
}
.buscador input{
  padding-left:4px;
  margin-top:-5px;
  margin-left:-4px;
  height:25px;
  border:1px solid #ddd;
}

input:focus{
    outline: none;
    border:1px solid #abdf47;
}

table{
  font-size:14px;
  width:100%;
  float:right;
  cursor:pointer;
  margin-bottom: 1px;
}

td{
  border:1px solid #aaa;
  padding:0px 4px 0px 4px;
}

.busqueda{
  height: 305px;
  overflow-y:scroll;
  overflow-x:hidden;
  border-bottom:1px solid #ddd;
}

tbody tr td{
  font-size:12px;
}

thead tr td{
  background:#efd;
}

tbody tr:hover{
  background:#eafada !important;
}

.left{
  width:10%;position:absolute;top:83px;border-top:1px solid #eee;padding-top:5px;
}

.button{
  cursor:pointer;
}
.button:hover>#change{
  background:#eafada;
}

.down{
  position:absolute;
  top:285px;
  border-top:1px #ddd solid;
  width:100%;
  padding:5px;
}
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="gestion" ng-controller="manual" class="noselect">
    <div class="bar drag">
    </div>
<div class="header" style="">
  <div style="position:absolute;width:600px;">
  <span class="dropdown boton">
   <a href="/" disable>Inicio</a>
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
<div class="header buscador" style="height:25px;">
  <span ng-click="buscar()"><img src="/.img/buscar.png" style="width:15px;margin-top:-5px;margin-left:-20px;margin-right:15px;">Buscar</span>
  <input type="text" ng-model="busqueda.apellido" placeholder="Apellido y nombre..." ng-keypress="enter($event)">
  <input type="number" ng-model="busqueda.documento" placeholder="Numero de documento..."  ng-keypress="enter($event)">
  <input type="text" ng-model="busqueda.telefono" placeholder="Numero de telefono..."  ng-keypress="enter($event)">
    <span ng-click="busqueda={}" style="margin-left:-5px;background:#fafafa;color:#666;border:1px solid #aaa;padding:-1px;">Borrar</span>

</div>
<div class="busqueda">
  <table style="position:absolute;right:15px;width:98.2%">
    <thead>
      <tr>
        <td style="width:25%">DOCUMENTO</td>
        <td style="width:25%">APELLIDO</td>
        <td style="width:25%">ESTADO</td>
        <td style="width:25%">BANCO</td>
      </tr>
    <thead>
    </table>
    <table>
    <tbody ng-if="refresh==0" ng-init="refresh=0;" class="casos" id="myTable">
      <tr>
        <td style="height:18px"></td>
      </tr>
      <tr  ng-if="i<limite" ng-repeat="(i, caso) in ::listado" class="caso" id="{{caso.documento}}" ng-click="elegir.click(caso.documento)" ng-dblclick="elegir.dblclick(caso.documento)">
        <td style="width:25%">{{caso.documento |limitTo: 30}}{{caso.documento.length > 25 ? "..." : ""}}</td>
        <td style="width:25%">{{caso.apellido |limitTo: 27}}{{caso.apellido.length > 25 ? "..." : ""}}</td>
        <td style="width:25%">{{caso.estado |limitTo: 30}}{{caso.estado.length > 25 ? "..." : ""}}</td>
        <td style="width:25%" >{{caso.banco |limitTo: 30}}{{caso.banco.length > 25 ? "..." : ""}}</td>
      </tr>
      <tr infinite-scroll="bajar()" infinite-scroll-container='".casos"' infinite-scroll-distance="5" infinite-scroll-disabled="!listado || limite>=listado.length"></tr>
    </tbody>
    <tbody>
      <tr ng-if="listado.length==0">
        <td style="height:18px"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr ng-if="listado.length<i-1" ng-repeat="i in [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]">
        <td style="height:15px"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
<div style="padding:4px;width:100%;border-bottom:1px solid #aaa;">
<span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" ng-click="ver='deudor'">
  <span><img src="/.img/deudor.png" style="width:17px;height:15px;margin-left:2px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change">{{caso.deudor ? caso.deudor.apellido : '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'}}</span>
</span>
</div>
<div style="position:fixed;top:19px;left:0px;width:100%;height:100%;background:white;border:(0px 1px 1px 1px) solid #ddd;" ng-hide="caso">
    <img src="/.img/loading.gif" style="position:absolute;top:40%;left:49%;width:30px;opacity:0.3;">
  </div>
<script>
const remote = require('electron').remote;
var resize = remote.require('./main').resize;
resize(900,400);


angular
  .module("gestion", ['infinite-scroll','btford.socket-io','angular.filter'])

  .controller("manual", function ($scope, $http, $timeout) {
    var _ = $scope;
    _.listado=[];
    _.caso={};
    _.limite=5;
    _.enter =function(e){if(e.which === 13){_.buscar();}};
    _.buscar=function(){_.refresh=1;_.listado=[];$http.post('php/buscar-rapido.php', _.busqueda).then(function(res){_.limite=5;_.listado=res.data;$timeout(function(){_.refresh=0;_.deudor=0;});});}
    _.bajar=function(){_.limite=_.limite+1;};
    _.elegir={click:function (d){$("tr").css('background','white');
                            $("#"+d).css('background','#dfc');
                            $http.post('php/deudor-domicilios.php',{documento:d}).then(function(res){_.caso.deudor=res.data[0];});
                          },
              dblclick:function (d){$("tr").css('background','white');
                            $("#"+d).css('background','#dfc');
                                window.open('datos/?d='+d, d,'height=400, width=650, left=300, top=100, resizable=no, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');
$http.post('php/gestion.php',{documento:d}).then(function(res){_.caso.gestiones=res.data;});
                          }
              };


});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
document.addEventListener('dragover',function(event){
    event.preventDefault();
    return false;
  },false);

  document.addEventListener('drop',function(event){
    event.preventDefault();
    return false;
  },false);
</script>
</body>
</html>
