<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../administracion/");
}else{
if($_SESSION['puesto']=='ger'){
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

.drag{
  -webkit-app-region:drag;
  position:absolute;
  top:0px;
  right:20px;
  width:100%;
  height:20px;
}

.close{
  position:absolute;
  top:0px;
  right:0px;
  width:20px;
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

.alert-gr{
  background: -webkit-linear-gradient(#95c33d, #f4a600);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.back-gr{
  background: -webkit-linear-gradient(#07963d, #89bd25);
  color:white;
}

body{
  overflow:hidden;
  border:1px solid #ccc;
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
  width:89.9%;
  float:right;
  cursor:pointer;
  margin-bottom: 1px;
}

td{
  border:1px solid #aaa;
  padding:0px 4px 0px 4px;
}

.busqueda{
  height: 220px;
  overflow-y:scroll;
  overflow-x:hidden;
}

tbody tr td{
  font-size:12px;
}

thead tr td{
  background:#dafaca;
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

.button:hover{
  border-color:#abdf47;
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

.noselect {
   -moz-user-select: none;
   -khtml-user-select: none;
   -webkit-user-select: none;
   -ms-user-select: none;
   user-select: none;
}

.options{
  width:100%;
  position:absolute;
  padding-left:40px;
  padding-bottom:5px;
  top:20px;
  border-bottom:1px solid #ddd;
}

.content{
  width:100%;
  position:absolute;
  top:48px;
}

.tooltip-inner {
  background-color: #0b3 !important;
  /*!important is not necessary if you place custom.css at the end of your css calls. For the purpose of this demo, it seems to be required in SO snippet*/
  color: #fff;
}

.tooltip.top .tooltip-arrow {
  border-top-color: #07b63d;
}

.tooltip.right .tooltip-arrow {
  border-right-color: #07b63d;
}

.tooltip.bottom .tooltip-arrow {
  border-bottom-color: #07b63d;
}

.tooltip.left .tooltip-arrow {
  border-left-color: #07b63d;
}

/* What you need: */
table td {
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

.noshadow {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }

.dropdown-menu{
  max-width:300px !important;
  min-width: 300px !important;
  text-align: center;
}
input{
  background: none;
}
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="gestion" ng-controller="manual" class="noselect">
<div class="noselect">
<span class="drag"></span><span class="close" onclick="quit=true;window.close()" ng-show="quit==true" ng-init="quit=true">×</span>
</div>
<span style="color:#ddd;position:absolute;padding:5px;margin-left:20px;">PROPUESTA</span>
<div style="padding:20px;">
  <div style="margin-top:15px;">
  <span class="button">
  <span><img src="/.img/deudor.png" style="width:17px;height:15px;margin-left:2px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" >{{propuesta.apellido}}</span>
  <span style="border-left:1px solid #ddd;padding:2px;"><img src="/.img/id-card.png" style="width:17px;height:15px;margin-left:2px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" >{{propuesta.documento}}</span>
  </span>
  <span class="button" style="margin-left:20px;">
  <span><img src="/.img/gestor.png" style="width:17px;height:15px;margin-left:2px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" >{{propuesta.asignacion}}° Gestión</span>
  </span>
  </div>
  <div style="margin-top:15px;">
  <span class="button">
  <span><img src="/.img/estado.png" style="width:17px;height:15px;margin-left:2px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" >{{propuesta.estado}}</span>
  <span style="border-left:1px solid #ddd;padding:2px;"><img src="/.img/sub_estado.png" style="width:17px;height:15px;margin-left:2px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" >{{propuesta.sub_estado}}</span>
  </span>
  <span class="button" style="margin-left:20px;">
  <span><img src="/.img/bank.png" style="width:17px;height:15px;margin-left:2px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" >{{propuesta.banco}}</span>
  </span>
  </div>
  <hr>
  <div style="margin-top:15px;">
  <span class="button" >
  <span><img src="/.img/agenda.png" style="width:17px;height:15px;margin-left:2px;"> Fecha de generación:</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" ><input type="date" ng-model="propuesta.fecha_propuesta" style="width:120px;border:0px;font-size:12px;"></span>
  </span>
  <span class="button" style="margin-left:25px;">
  <span><img src="/.img/agenda.png" style="width:17px;height:15px;margin-left:2px;"> Fecha de pago:</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" ><input type="date" ng-model="propuesta.fecha_pago" style="width:120px;border:0px;font-size:12px;"></span>
  </span>
  </div>
  <div style="margin-top:15px;">
  <span class="button">
  <span><img src="/.img/productos.png" style="width:17px;height:15px;margin-left:2px;">Anticipo</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" >$<input type="number" style="border:0px;font-size:14px;width:90px;" ng-model="propuesta.monto_primer_pago"></span>
  <span style="border-left:1px solid #ddd;padding:2px;"><img src="/.img/productos.png" style="width:17px;height:15px;margin-left:2px;">Monto total</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" >$<input type="number" style="border:0px;font-size:14px;width:90px;" ng-model="propuesta.monto_total"></span>
  <span style="border-left:1px solid #ddd;padding:2px;"><img src="/.img/wallet.png" style="width:15px;height:13px;margin-left:2px;"><span style="margin-left:5px;">Cuotas</span></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" ><input type="number" style="border:0px;font-size:14px;width:50px;" ng-model="propuesta.cuotas" min="1"></span>
  </span>
  </div>
  <div style="margin-top:15px;">
  <span class="button">
  <span><img src="/.img/telefono.png" style="width:15px;height:15px;margin-left:2px;"></span>
  <div style="display:inline-block;border-left:1px solid #ddd;padding:2px;margin-right:-2px;width:150px;" >{{propuesta.telefono1==0?'&nbsp;': propuesta.telefono1}}</div>
  <div style="display:inline-block;border-left:1px solid #ddd;padding:2px;margin-right:-2px;width:150px;" >{{propuesta.telefono2==0?'&nbsp;': propuesta.telefono2}}</div>
  <div style="display:inline-block;border-left:1px solid #ddd;padding:2px;margin-right:-2px;width:150px;" >{{propuesta.telefono3==0?'&nbsp;': propuesta.telefono3}}</div>
  </span>
  </div>
  <div style="margin-top:15px;">
   <span class="button" >
  <span><img src="/.img/reporte.png" style="width:13px;height:15px;margin-left:2px;"> Cuota cero</span>
  <span style="border-left:1px solid #ddd;padding:5px;margin-right:-2px;" ng-show="propuesta.cuota_cero" ng-click="propuesta.cuota_cero=0" >SI</span><span style="border-left:1px solid #ddd;padding:5px;margin-right:-2px;" ng-click="propuesta.cuota_cero=1" ng-hide="propuesta.cuota_cero">NO</span>
  </span>
  <span class="button" style="margin-left:100px;">
  <span><img src="/.img/calificacion.png" style="width:13px;height:15px;margin-left:2px;"> Aprobado</span>
  <span style="border-left:1px solid #ddd;padding:5px;margin-right:-2px;" class="color-gr" ng-show="propuesta.aprobado" ng-click="propuesta.aprobado=0" >SI</span><span style="border-left:1px solid #ddd;padding:5px;margin-right:-2px;color:red;" ng-click="propuesta.aprobado=1" ng-hide="propuesta.aprobado">NO</span>
  </span>
</div>
</div>
<div style="position:fixed;right:15px;bottom:15px;padding:5px;" class="button" ng-click="modificar()">
  <img src="/.img/write.png" style="width:15px;height:15px;"><img src="/.img/loading.gif" style="width:15px;height:15px;" ng-show="modificando"><img ng-show="modificado" src="/.img/yes.png" style="width:15px;height:15px;">
</div>
  <div style="position:fixed;top:19px;left:0px;width:100%;height:100%;background:white;border:(0px 1px 1px 1px) solid #ddd;" ng-hide="propuesta">
    <img src="/.img/loading.gif" style="position:absolute;top:45%;left:45%;width:30px;opacity:0.3;">
  </div>
<script>
var $_GET={};var url=document.URL.split("/")[2];document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g,function(){function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
var p=$_GET['p'], window2, window3;
angular
  .module("gestion", ['infinite-scroll','btford.socket-io','angular.filter'])
  .factory('socket', function (socketFactory) {
  return socketFactory({
    prefix: 'connection',
    ioSocket: io.connect('http://localhost:3000')
  });
  })
  .controller("manual", function ($scope, $http, $timeout, socket) {
    var _ = $scope;
    _.traer=function(){$http.post('../php/propuesta.php',{id:p}).then(function (res){_.propuesta=res.data;_.propuesta.fecha_pago=new Date(_.propuesta.fecha_pago);_.propuesta.fecha_pago.setDate(_.propuesta.fecha_pago.getDate()+1);_.propuesta.fecha_propuesta=new Date(_.propuesta.fecha_propuesta);_.propuesta.fecha_propuesta.setDate(_.propuesta.fecha_propuesta.getDate()+1);_.propuesta.monto_total=parseFloat(_.propuesta.monto_total);_.propuesta.monto_primer_pago=parseFloat(_.propuesta.monto_primer_pago);_.propuesta.cuotas=parseFloat(_.propuesta.cuotas);});};
    _.modificar=function(){_.modificando=true;_.modificado=false;$http.post('../php/modificar.php',_.propuesta).then(function (res){_.modificando=false;_.modificado=true;});};
    _.traer();
});
var hoy = new Date(), quit=false;
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
window.onbeforeunload = function (e) { 
if(quit==false)
  return false
};

 document.addEventListener('dragover',function(event){
    event.preventDefault();
    return false;
  },false);

  document.addEventListener('drop',function(event){
    event.preventDefault();
    return false;
  },false);


  function sacar011 (string){
  if(string[0]=='0' && string[1] == '1' && string[2] == '1'){
    string=string.slice(3);
  }
  return string;
}
                        

var oldX = window.screenX,
    oldY = window.screenY;

var interval = setInterval(function(){
  if(oldX != window.screenX || oldY != window.screenY){
    window2.moveTo(window.screenX, window.screenY);
  }

  oldX = window.screenX;
  oldY = window.screenY;
}, 500);
</script>
</body>
</html>
