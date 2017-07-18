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
  <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script type="text/javascript" src="/.js/ng-infinite-scroll.js"></script>
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
    padding-top:3px;
}


input{
  border:0px;
  font-size:12px;
}

input:focus{
    outline: none;
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
  border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;
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

.tooltip-inner {
  background-color: #0b3 !important;
  /*!important is not necessary if you place custom.css at the end of your css calls. For the purpose of this demo, it seems to be required in SO snippet*/
  color: #fff;
}

.tooltip.top .tooltip-arrow {
  border-top-color: #0b3;
}

.tooltip.right .tooltip-arrow {
  border-right-color: #0b3;
}

.tooltip.bottom .tooltip-arrow {
  border-bottom-color: #0b3;
}

.tooltip.left .tooltip-arrow {
  border-left-color: #0b3;
}

.titulo{
  cursor:pointer;
  background:#fff !important;
}
.titulo:hover{
  text-decoration: underline;
  background: #fafefa !important;
}

.butn{
  border-radius:5px;border:1px solid #ddd;padding:5px 8px 5px 8px;cursor:pointer;background: none;color:#666;font-size:14px;font-weight:100;
}
.butn:hover, .butn:hover > ul{
  border-color:#95e53d !important;
}

/* What you need: */
table td , table th{
    height:18px;
    overflow: hidden;
    display: inline-block;
    white-space: nowrap;
    border-left-color:white;
  }
table tbody td{
    border-top:0px;
}

table.with-ellipsis td {   
    text-overflow:ellipsis;
  }


/* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 1.95em;
  cursor: pointer;
}

/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  content: '';
  position: absolute;
  left: 0; top: 0;
  width: 1.25em; height: 1.25em;
  border: 2px solid #ccc;
  background: #fff;
  border-radius: 4px;
  box-shadow: inset 0 1px 3px rgba(0,0,0,.1);
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '✔';
  position: absolute;
  top: .1em; left: .1em;
  font-size: 1.3em;
  line-height: 0.8;
  color: #95e53d;
  transition: all .2s;
}
/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #bbb;
  background-color: #ddd;
}
[type="checkbox"]:disabled:checked + label:after {
  color: #999;
}
[type="checkbox"]:disabled + label {
  color: #aaa;
}

/* hover style just for information */
label:hover:before {
  border: 2px solid #95e53d!important;
}
.noshadow {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }
.inputs{
  width:100px !important;
}
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="app" ng-controller="controller" class="noselect">
    <div class="bar drag">
    </div>
<div class="header">
  <div style="position:absolute;width:1000px;">
  <span class="dropdown boton">
    <a href="/">Inicio</a>
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Campañas <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/gerencia/campanias/ver">Ver</a></li>
      <li><a href="/gerencia/campanias/generar/">Generar</a></li>
      <li><a href="/gerencia/campanias/grupos/">Grupos</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Panel <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/gerencia/panel/gestiones">Gestiones</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
            <span data-toggle="dropdown">Administración de Cartera <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/carga/comparacion" class="ventana">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1" href="/gerencia/carga/masiva" class="ventana">Masiva</a></li>
                  <li><a tabindex="-1" href="/gerencia/carga/manual" class="ventana">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación masiva</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1" href="/gerencia/modificacion/productos" class="ventana">Productos</a></li>
                  <li><a tabindex="-1" href="/gerencia/modificacion/deudores" class="ventana">Deudores</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1"href="/gerencia/carga/enriquecer" class="ventana">Telefonos / Mails</a></li>
                  <li><a href="/gerencia/carga/reportes" class="ventana">Datos Enriquecidos</a></li>
                </ul>
              </li>
              <li><a href="/gerencia/baja/" class="ventana">Cambio de estado</a></li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Gestión de cobranzas <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/gestion-de-cobranzas/manual" class="ventana">Manual</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/campania" class="ventana">Campaña</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/consultas" class="ventana">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/carga/gestiones-automaticas" class="ventana">Gestiones automáticas</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Exportar <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/exportar/casos" class="ventana">Casos</a></li>
              <li><a href="/gerencia/exportar/telefonos" class="ventana">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/exportar/sms" class="ventana">SMS</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails" class="ventana">Mails</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/ivr" class="ventana">IVR</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Informes</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/exportar/propuestas" class="ventana">Propuestas</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Administración <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/administracion/responsables" class="ventana">Responsables</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">ABMS</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/usuarios" class="ventana">Operadores</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton logout">
    <a href="/.php/logout.php">Salir</a>
  </span>
</div>
</div>
<div class="header buscador" style="height:25px;width:800px;margin-left:-2px;border-bottom:0px;">
  <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" >
  <span data-toggle="tooltip" title="Nombre de campaña" data-placement="bottom"><img src="/.img/flag.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
      <input type="text" ng-model="complejo.nombre" placeholder="Nombre de campaña..."  ng-keypress="enter($event)" style="width:100px;">
  </span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Fecha de inicio" data-placement="bottom"><img src="/.img/agenda.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">Inicio&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-106px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.inicio1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.inicio2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
  </span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Fecha de finalización" data-placement="bottom"><img src="/.img/agenda.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">Finalización&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-106px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.finalizacion1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.finalizacion2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
  </span>
  <span data-toggle="tooltip" title="Grupo de campaña" data-placement="bottom" style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><img src="/.img/grupo.png" style="width:21px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
      <select ng-model="complejo.grupo" ng-keypress="enter($event)" ng-options="grupo as grupo.nombre for grupo in grupos" style="width:100px;border:0px;"><option></option></select>
  </span>
  <span data-toggle="tooltip" title="Buscar" data-placement="bottom" ng-click="buscar()" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/search.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  </span>
</div>

<div style="top:70px;position:absolute;width:100%;overflow-x:scroll;height:330px;" class="tablon">
  <div style="width:1050px;">
  <table class="with-ellipsis"  ng-init="limite=20;orden='documento';" style="z-index:1;position:absolute;width:1050px;" >
    <thead>
      <tr>
        <td ng-click="ordenar('nombre')" style="width:150px;">Nombre</td>
      <td ng-click="ordenar('comentario')"  style="width:150px;">Descripcion</td>
      <td ng-click="ordenar('fecha_inicio')"  style="width:150px;">Fecha Inicio</td>
      <td ng-click="ordenar('fecha_finalizacion')"  style="width:150px;">Fecha Finalizacion</td>
      <td ng-click="ordenar('grupo')"  style="width:150px;">Grupo</td>
      </tr>
    </thead>
    <tbody class="casos" ng-if="volver==1" infinite-scroll="bajar()" infinite-scroll-container='".tablon"' infinite-scroll-distance="1" infinite-scroll-disabled="!tabla || limite>=tabla.length">
      <tr ng-repeat="(i, campania) in ::tabla  | orderBy: orden" ng-if="i<limite" ng-dblclick="abrir(campania.id)">
      <td  style="width:150px;">{{campania.nombre}}</td>
      <td style="width:150px;">{{campania.comentario}}</td>
      <td style="width:150px;">{{campania.fecha_inicio | date: "dd/MM/yyyy"}}</td>
      <td style="width:150px;">{{campania.fecha_finalizacion | date: "dd/MM/yyyy"}}</td>
      <td style="width:150px;">{{campania.grupo}}</td>      </tr>
    </tbody>
  </table>
  <table class="with-ellipsis" style="position:absolute;z-index:0;width:1050px;">
      <thead>
      <tr>
        <td ng-repeat="s in [1,2,3,4,5,6,7]" style="width:150px;"></td>
      </tr>
    </thead>
      <tbody>
      <tr ng-repeat="q in largotabla">
        <td ng-repeat="s in [1,2,3,4,5,6,7]" style="width:150px;"></td>
      </tr>
    </tbody>
  </table>
</div>

</div>
<script>
function dateTransform(a,b){if(a===Array){a=a.split('-');a=a[2]+'/'+a[1]+'/'+a[0];}else{if(a[0][b]){for(var i in a){a[i][b]=a[i][b].split('-');a[i][b]=a[i][b][2]+'/'+a[i][b][1]+'/'+a[i][b][0];}}}return a;}
var produtos, producto;
var date = new Date();
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
angular.module('app',['infinite-scroll'])
.controller('controller', function($scope, $http, $timeout) {
  var _=$scope;
    _.mostrar='rapida';
        _.largotabla=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];

  $http.post('php/bancos.php').then(function(res){_.bancos=res.data;});//Obtencion de los bancos
    $http.post('php/usuarios.php').then(function(res){_.usuarios=res.data;});//Obtencion de los usuarios
    $http.post('php/estados.php').then(function(res){_.estados=res.data;});//Obtencion de los estados
    $http.post('php/dolar.php').then(function (res){ _.dolar = res.data;});
    $http.post('php/grupos.php').then(function(res){_.grupos=res.data;});//Obtencion de las calificaciones
    $http.post('php/sub_estados.php').then(function(res){_.sub_estados=res.data;});//Obtencion de los estados
    $http.post('php/tipo_gestion.php').then(function(res){_.tipo_gestion=res.data;});//Obtencion de los tipos
    $http.post('php/calificacion-telefonos.php').then(function(res){_.calificacion_telefonos=res.data;});//Obtencion de las calificaciones
    $http.post('php/campanias.php').then(function(res){_.campanias=res.data;});//Obtencion de las calificaciones
    
    _.buscar = function (){
      $http.post('php/buscar.php', _.complejo).then(function (res){
        console.log(res.data);
        _.tabla= res.data;
        _.volver=0;
        $timeout(function(){_.activar()});
      });
    }
    
  _.ordenar = function (a){
    _.volver=0;_.limite=20;
    $(".flechita").remove();
    if(_.orden==a){_.orden='-'+a;$("#"+a).append("<span class='flechita'>&#x25B4;</span>");}else{_.orden=a;$("#"+a).append("<span class='flechita'>&#x25BE;</span>");}
    $timeout(function (){_.activar();});
  }
  _.activar = function (){
    _.volver=1;
        _.largotabla=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];

  }
_.bajar=function(){
      _.limite=_.limite+1;
      _.largotabla.push(_.largotabla.length+1);
    };
  _.abrir= function (id){
    abrirVentana('campania'+id, '/gerencia/campanias/ver/ver/?id='+id);
  }


});

function abrirVentana(nombre ,url) {
    window.open(url, nombre, "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=700, height=400");
}


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</html>
