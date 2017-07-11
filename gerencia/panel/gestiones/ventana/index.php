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
header("Location: ../gerencia/");
}else{
}
}
}
}
}
else{
header("Location: /");
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nucleo</title>
  <link rel="stylesheet" href="/.css/bootstrap.min.css"/>
  <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
  <script type="text/javascript" src="/.js/jquery.min.js"></script>
  <script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/.js/angular.min.js"></script>
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
  width:30px;
  position:fixed;
  right:0px;
  top:30px;
  height: 100%;
}

.bar{
  width:30px;
  height:100%;
  position:fixed;
  right:0px;
  top:0px;
  z-index: -1;
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

.bloque{
  margin:10px;border:1px solid #ddd;border-radius:5px;padding:10px;
}
.bloque:hover{
  border-color:#a4d648;
}

.close{
  z-index:1;
  position:fixed;
  right:9px;
  top:0px;
  color:white !important;
  opacity: 1;
  font-weight: 100;
}
.close:hover{
  color:white !important;
}
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="panel" ng-controller="gestiones" class="noselect">
    <div class="noselect back-gr bar">
<span class="drag"></span>
</div>
<span class="close" onclick="window.close()">×</span>

<div style="height:340px;overflow-y:auto;width:90%;margin-top:10px;">
		<div ng-repeat="gestion in gestiones">
      <div ng-repeat="gestion in gestion | groupBy: 'usuario'" class="bloque">
        <span class="button">
          <span><img src="/.img/icon-username.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Gestor" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;">{{gestion[0].usuario}}</span>
        </span>
        <hr style="margin-top:10px;">
        <div ng-repeat="caso in gestion">
      <div style="margin-top:10px;">
        <span class="button" ng-dblclick="elegir(caso.documento)" style="font-size:11px;">
          <span><img src="/.img/reloj.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Tiempo" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;color:{{caso.color}}">{{caso.tiempo}}</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><img src="/.img/gestor.png" style="width:15px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Tipo de gestion" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;color:{{caso.color}}">{{caso.tipo_gestion.tipo}}</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><img src="/.img/deudor.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Titular" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;color:{{caso.color}};">{{caso.apellido}}</span>
          <span  style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><img src="/.img/id-card.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Documento" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;color:{{caso.color}};">{{caso.documento}}</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><img src="/.img/telefono.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Telefono" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;color:{{caso.color}};">{{caso.telefono.numero}}</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><img src="/.img/calificacion.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Calificacion" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;color:{{caso.color}};">{{caso.telefono.calificacion.titulo}}</span>
        </span>
      </div>
    </div>
      </div>
    </div>
  </div>

		
	<script>
  angular
  .module("panel", ['btford.socket-io','angular.filter'])
  .factory('socket', function (socketFactory) {
  return socketFactory({
    prefix: 'connection',
    ioSocket: io.connect('http://'+document.URL.split("/")[2]+':3002')
  });
  })
  .controller("gestiones", function ($scope, $http, $timeout, socket) {
    var _ = $scope;
    _.gestiones={};
    _.elegir=function (d){$("tr").css('background','white');
                          window.open('/gerencia/gestion-de-cobranzas/manual/datos/?d='+d, d,'height=400, width=650, left=300, top=100, resizable=no, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');
                          };
    socket.on('panel',function(data){if(!_.gestiones[data.usuario]){_.gestiones[data.usuario]={}};_.gestiones[data.usuario][data.documento]=data;});
});


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
	</script>
</body>
</html>
