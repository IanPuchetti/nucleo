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
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="gestion" ng-controller="manual">
<div class="noselect">
<span class="drag"></span><span class="close" onclick="quit=true;window.close()" ng-show="quit==true" ng-init="quit=true">×</span>
</div>


  <div style="position:fixed;top:19px;left:0px;width:100%;height:100%;background:white;border:(0px 1px 1px 1px) solid #ddd;">
    <img src="/.img/loading.gif" style="position:absolute;top:45%;left:45%;width:30px;opacity:0.3;">
  </div>
<script>
var $_GET={};var url=document.URL.split("/")[2];document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g,function(){function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
angular
  .module("gestion", ['infinite-scroll','btford.socket-io','angular.filter'])

  .controller("manual", function ($scope, $http, $timeout) {
    var _ = $scope;
    _.d=$_GET['d'];
    _.listado=[];
    _.caso={};
    _.limite=5;
    _.ver='deudor';
    _.getNumber=function(n){return new Array(n);};
    _.bajar=function(){_.limite=_.limite+1;};
    _.elegir=function (c){_.visualizar=c};
    _.tooltip= function (){$timeout(function(){$('[data-toggle="tooltip"]').tooltip();});};
    _.obtener={ telefonos:function(){$http.post('../../php/telefonos.php',{documento:_.d}).then(function(res){_.caso.telefonos=res.data;})},
               deudor:function (){$http.post('../../php/deudor-domicilios.php',{documento:_.d}).then(function(res){_.caso.deudor=res.data[0];})},
               historia:function(){$http.post('../../php/gestion.php',{documento:_.d}).then(function(res){_.refresh=1;_.caso.historia=res.data;$timeout(function(){_.refresh=0;_.tooltip();});});},
               productos:function(){$http.post('../../php/carpeta-producto.php',{documento:_.d}).then(function (res){_.caso.productos=res.data;});}
             };
    _.refrescar=function (){_.obtener.telefonos();_.obtener.deudor();_.obtener.historia();_.obtener.productos();_.tooltip()};
    _.modificar={email:function (){_.caso.deudor.modificado=0;_.caso.deudor.modificando=1;$http.post('../../php/modificar-deudor.php',_.caso.deudor).then(function(res){_.caso.deudor.modificando=0;_.caso.deudor.modificado=1;});},
                 telefono: function (n,c,i){_.caso.telefonos[i].modificado=0;_.caso.telefonos[i].modificando=1;$http.post('../../php/modificar-telefono.php',{numero:n,comentario:c}).then(function(){_.caso.telefonos[i].modificando=0;_.caso.telefonos[i].modificado=1;})}
               };
    _.agregar={
                telefono:function(){if(_.nuevo.telefono.numero.length<6){_.nuevo.telefono.alert=1;}else{_.nuevo.telefono.alert=0;_.nuevo.telefono.modificado=0;_.nuevo.telefono.modificando=1;_.nuevo.telefono['documento']=_.d;_.nuevo.telefono.numero=sacar011(_.nuevo.telefono.numero.replace(/[^0-9.]/g, ""));$http.post('../php/agregar-telefono.php',_.nuevo.telefono).then(function(){_.nuevo.telefono={modificado:1};_.obtener.telefonos();_.tooltip();});}}
    };
    _.refrescar();

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


</script>
</body>
</html>
