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
}

input{
  border:0px;
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
   cursor:pointer;
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

select{
  border:0px;
}

.link{
  cursor: pointer;
}

.link:hover > .telefono{
  border-bottom: 1px solid;
}

.telefono{
  margin-bottom:5px;
}

.butn{
  border-radius:5px;border:1px solid #ddd;padding:5px 8px 5px 8px;cursor:pointer;
}
.butn:hover, .butn:hover > ul{
  border-color:#95e53d;
}

.noshadow {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }

.dropdown-menu{
    min-width:144px;
    width: 144px !important;
    height: 100px !important;
    text-align: center;
    margin-top:-5px;
    margin-left:-1px;
    border-radius:0px 0px 5px 5px;
    padding-top:15px;
}


</style>
  </head>

  <body oncontextmenu="return false;" ng-app="gestion" ng-controller="manual" ng-click="named=true;">
<div class="noselect">
<span class="drag"></span>
</div>

  <div style="margin-top:10px;text-align:center;">
        <span class="button noselect">
          <span data-toggle="tooltip" title="Titular" data-placement="bottom"><img src="/.img/deudor.png" style="width:17px;height:15px;margin-left:2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{caso.deudor.apellido}}</span>
        </span>
  </div>
  <div ng-show="gestionando==true" ng-init="gestionando=true">
  <div style="margin-top:7px;" class="noselect">
        <span class="button noselect">
          <span data-toggle="tooltip" title="Tipo gestion" data-placement="bottom"><img src="/.img/gestor.png" style="width:14px;height:15px;margin-left:2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select ng-model="gestion.tipo_gestion" ng-options="tipo as tipo.tipo for tipo in tipo_gestion"></select></span>
        <span ng-show="!gestion.tipo_gestion"><img src="/.img/alert.png" style="width:10px;margin-top:-4px;"></span>
        </span>
         <span style="padding:2px;margin-right:-2px;font-size:11px;"  ng-show="!gestion.tipo_gestion" class="alert-gr">Tipo de gestión necesario.</span>
  </div>
  <hr style="margin-top:5px;">
  <div ng-show="gestion.tipo_gestion.tipo">
  <div ng-hide="gestion.tipo_gestion.tipo == 'COMENTARIO'">
  <div style="margin-top:-15px;text-align:center;">
        <span class="button noselect">
          <span class="color-gr " style="font-size:15px;padding:4px;" data-toggle="tooltip" title="Numero telefonico" data-placement="bottom"><img src="/.img/phone.png" style="width:15px;height:15px;margin-left:2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
        <input style="border:0px;font-size:13px;color:#666;width:150px;" ng-model="gestion.telefono.numero" ng-click="named=false;" ng-keypress="named=false" ng-change="verificar.telefono()" ng-init="named=true;"><span ng-click="unname()">&#x25BE;</span>
        <div ng-show="!named " style="max-height:100px;overflow-y:auto;position:fixed;top:92px;left:72px;width:164px;text-align:left;border:1px solid #ddd;border-top:0px;">
    <div class="link" ng-if="telefono.numero!=gestion.telefono.numero" style="border:0px 1px 1px 1px solid #ddd;background:#fff;width:100%;padding-left:5px;" ng-click="set(telefono.numero)" ng-repeat="telefono in caso.telefonos | filter: gestion.telefono.numero ">
      <span style="color:{{(telefono.calificacion==0 || telefono.calificacion==9)?'grey':telefono.calificacion==5?'#c37':'#95c33d'}};border-bottom-color:{{(telefono.calificacion==0 || telefono.calificacion==9)?'grey':telefono.calificacion==5?'#c37':'#95c33d'}};" class="telefono">{{telefono.numero}}</span>
    </div>
    </div>
        </span>
        <span style="border-left:1px solid #ddd;padding:0px 5px 2px 5px;font-size:17px;" class="color-gr" ng-click="agregar.telefono()"  data-toggle="tooltip" title="Agregar" data-placement="bottom"><b>+</b></span>
        <span style="border-left:1px solid #ddd;padding:2px;" class="color-gr" ng-show="nuevo.telefono.modificando==1"  data-toggle="tooltip" title="Agregando..." data-placement="bottom"><img src="/.img/loading.gif" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-show="nuevo.telefono.modificado==1"  data-toggle="tooltip" title="Agregado correctamente." data-placement="bottom"><img src="/.img/yes.png" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        </span>
  </div>
  <div style="margin-top:10px;text-align:center;margin:10px;" ng-show="gestion.telefono.numero && gestion.existe">
        <span class="button noselect">
          <span data-toggle="tooltip" title="Calificacion" data-placement="bottom"><img src="/.img/calificacion.png" style="width:15px;height:15px;margin-left:2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select ng-model="gestion.telefono.calificacion"  ng-options="calificacion as calificacion.titulo for calificacion in calificacion_telefonos" ng-if="gestion.telefono.calificacion!=0" disabled></select><select ng-model="gestion.calificacion"  ng-options="calificacion as calificacion.titulo for calificacion in calificacion_telefonos" ng-if="gestion.telefono.calificacion==0"></select></span>
        </span>
  </div>
  <div ng-show="!gestion.existe" ng-init="gestion.existe=true" style="text-align:center;font-size:12px;margin-top:5px;" class="alert-gr noselect">El telefono no esta cargado.</div>

<hr style="margin-top:10px;">
</div>
<div style="margin-top:-10px;text-align:center;">
  <textarea ng-model="gestion.descripcion" placeholder="Descripción..." style="max-height:90px;height:90px;max-width:95%;width:95%;border-radius:5px;border:1px solid #ddd;background:#fefefe;font-size:11px;">
  </textarea>
</div>
  <div style="margin-top:10px;text-align:center;" class="noselect">
  <span class="butn" ng-click="registrar_gestion()" ng-show="(gestion.tipo_gestion.tipo=='COMENTARIO'&&gestion.descripcion)||(gestion.tipo_gestion.tipo=='SALIENTE'&&gestion.descripcion&&gestion.telefono.numero&&gestion.existe&&gestion.calificacion)||(gestion.tipo_gestion.tipo=='ENTRANTE'&&gestion.descripcion&&gestion.telefono.numero&&gestion.existe&&gestion.calificacion)">Registrar</span>
  <span class="butn" ng-hide="(gestion.tipo_gestion.tipo=='COMENTARIO'&&gestion.descripcion)||(gestion.tipo_gestion.tipo=='SALIENTE'&&gestion.descripcion&&gestion.telefono.numero&&gestion.existe&&gestion.calificacion)||(gestion.tipo_gestion.tipo=='ENTRANTE'&&gestion.descripcion&&gestion.telefono.numero&&gestion.existe&&gestion.calificacion)">Registrar</span>
  </div>
  </div>
</div>
<div ng-show="gestionando==false">
  <div style="margin-top:25px;text-align:center;">
    <span class="butn" ng-click="gestionando=true;refrescar();tiempo.reiniciar()">Seguir gestionando</span>
  </div>
  <div style="margin-top:15px;text-align:center;" class="noselect">
    <span class="butn dropdown">
            <span data-toggle="dropdown">Abandonar gestión <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top noshadow" role="menu" aria-labelledby="dropdownMenu">
        <li >
        <div style="text-align:center;">
          <span class="button noselect">
          <span data-toggle="tooltip" title="Sub estado" data-placement="bottom"><img src="/.img/sub_estado.png" style="width:15px;height:15px;margin-left:2px;margin-top:-1px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select style="width:90px;font-size:9px;" ng-model="registrar.sub_estado" ng-options="sub_estado.id as sub_estado.sub_estado for sub_estado in sub_estados"  ng-if="caso.sub_estado!=2&&caso.sub_estado!=3&&caso.sub_estado!=8"></select><select style="width:90px;font-size:9px;" ng-model="registrar.sub_estado" ng-options="sub_estado.id as sub_estado.sub_estado for sub_estado in pocos_sub_estados" ng-if="caso.sub_estado==2||caso.sub_estado==3||caso.sub_estado==8"></select></span>
          </span>
        </div>
              </li>
              <li style="margin-top:10px;"> 
        <div style="text-align:center;">
          <span class="button noselect">
          <span data-toggle="tooltip" title="Agenda" data-placement="bottom"><img src="/.img/agenda.png" style="width:15px;height:13px;margin-left:2px;margin-top:-1px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="date" style="width:90px;font-size:9px;" ng-model="registrar.agenda"></span>
          </span>
        </div>
        </li>
              <li style="margin-top:10px;"><span class="butn" style="font-size:10px;" ng-click="abandonar_gestion()"  ng-if="registrar.sub_estado!=2&&registrar.sub_estado!=3&&registrar.sub_estado!=8">Abandonar</span>
                                          <span class="butn" style="font-size:10px;" ng-click="abandonar_gestion()"  ng-if="(registrar.sub_estado==2||registrar.sub_estado==3||registrar.sub_estado==8)&&registrar.agenda">Abandonar</span>
                                          <span class="butn" style="font-size:10px;" ng-if="(registrar.sub_estado==2||registrar.sub_estado==3||registrar.sub_estado==8)&&!registrar.agenda">Abandonar</span></li>
            </ul>
    </span>
  </div>
</div>
  <div style="margin-top:10px;text-align:center;">
  </div>
  <div style="text-align:center;color:{{tiempo.minutos<=4 ? '#07963d' : '#903'}};position:absolute;bottom:5px;width:100%;" class="noselect" ng-init="color='#07963d'">
    {{tiempo.horas<=9 ? '0'+tiempo.horas : tiempo.horas}}:{{tiempo.minutos<=9 ? '0'+tiempo.minutos : tiempo.minutos}}:{{tiempo.segundos<=9 ? '0'+tiempo.segundos : tiempo.segundos}}
  </div>

  <span class="butn" data-toggle="tooltip" title="Liquidación" ng-click="liquidar()" data-placement="top" style="position:fixed;bottom:5px;left:5px;padding:2px;"><img src="/.img/productos.png" style="width:18px;height:14px;"></span>
<script>
var $_GET={};var url=document.URL.split("/")[2];document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g,function(){function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
var date = new Date(); 
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
angular
  .module("gestion", ['infinite-scroll','btford.socket-io','angular.filter'])
  .factory('socket', function (socketFactory) {
  return socketFactory({
    prefix: 'connection',
    ioSocket: io.connect('http://localhost:3000')
  });
  })
  .factory('time', function (socketFactory) {
  return socketFactory({
    prefix: 'connection',
    ioSocket: io.connect('http://'+document.URL.split("/")[2]+':3002')
  });
  })
  .controller("manual", function ($scope, $http, $timeout, socket, time) {
    var _ = $scope;
    socket.emit('abrir-gestion');
    _.d=$_GET['d'];
    _.listado=[];
    _.caso={};
    _.gestion={telefono:{}};
    _.limite=5;
    _.ver='deudor';
    _.registrar={};
    _.tiempo={reiniciar:function(){_.tiempo.horas=0;_.tiempo.minutos=0;_.tiempo.segundos=0;}};
    _.nuevo={telefono:{modificado:false}};
    _.tiempo.reiniciar();
    _.getNumber=function(n){return new Array(n);};
    _.bajar=function(){_.limite=_.limite+1;};
    _.elegir=function (c){_.visualizar=c};
    _.cerrar=function (){socket.emit('cerrar-gestion');cerrar();};
    _.unname=function(){$timeout(function(){_.named=false;_.gestion.telefono.numero='';});};
    _.set=function(a){_.gestion.telefono.numero=a;_.named=true;_.gestion.existe=true;_.verificar.telefono();}
    _.tooltip= function (){$timeout(function(){$('[data-toggle="tooltip"]').tooltip();});};
    _.obtener={ telefonos:function(){$http.post('../../php/telefonos.php',{documento:_.d}).then(function(res){_.caso.telefonos=res.data;})},
               deudor:function (){$http.post('../../php/deudor-domicilios.php',{documento:_.d}).then(function(res){_.caso.deudor=res.data[0];})},
               historia:function(){_.refresh=1;$http.post('../../php/gestion.php',{documento:_.d}).then(function(res){_.caso.historia=res.data;$timeout(function(){_.refresh=0;_.tooltip();});});},
               productos:function(){$http.post('../../php/carpeta-producto.php',{documento:_.d}).then(function (res){_.caso.productos=res.data;_.caso.sub_estado=_.caso.productos[0].sub_estado;});},
               bancos: function(){$http.post('../../php/bancos.php').then(function(res){_.bancos=res.data;});},
               usuarios: function() {$http.post('../../php/usuarios.php').then(function(res){_.usuarios=res.data;for (var i in res.data){if(res.data[i].id == id_usuario){_.usuario=res.data[i].user; break;}}});},
               estados:  function() {$http.post('../../php/estados.php').then(function(res){_.estados=res.data;});},
               liquidadores:  function() { $http.post('../../php/liquidadores.php').then(function(res){_.liquidadores=res.data;});},
               sub_estados:  function() { $http.post('../../php/sub_estados.php').then(function(res){_.sub_estados=res.data;_.todos_sub_estados=res.data;_.pocos_sub_estados=[];for (var i in _.todos_sub_estados){if(_.todos_sub_estados[i].sub_estado=='NEGOCIACION' || _.todos_sub_estados[i].sub_estado=='INFORMO PAGO' || _.todos_sub_estados[i].sub_estado=='PROMETE PAGAR'){_.pocos_sub_estados.push(_.todos_sub_estados[i])}}});},
               tipo_gestion:  function() { $http.post('../../php/tipo_gestion.php').then(function(res){_.tipo_gestion=res.data;});},
               calificacion_telefonos:  function() { $http.post('../../php/calificacion-telefonos.php').then(function(res){_.calificacion_telefonos=res.data;_.calificacion_telefonos.push({titulo:'PENDIENTE'})});},
               hora:function (){var date=new Date();var hora = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();return hora;}

             };
    _.obtener.usuarios();_.obtener.liquidadores();
    _.liquidar= function (){
                        var link='';
                        for (var i in _.liquidadores){
                          if (_.liquidadores[i].id_banco==$_GET['b']){
                            link = _.liquidadores[i].link;
                          }
                        }
      if(link!=''){
      liquidar($_GET['d'], $_GET['b'], link);}
    };
    _.verificar={telefono:function(){ var a,b,c,d;
                                      for(var i in _.caso.telefonos){
                                      if(_.gestion.telefono.numero==_.caso.telefonos[i].numero){
                                        a=true;b=i;break;
                                        }
                                      }
                                      if(a==true){_.gestion.existe=a;_.gestion.telefono.calificacion=_.caso.telefonos[b].calificacion;}else{_.gestion.existe=false;_.gestion.calificacion=false;}
                                      for(var i in _.calificacion_telefonos){
                                      if(_.gestion.telefono.calificacion==_.calificacion_telefonos[i].id){
                                        c=true;d=i;break;
                                        }
                                      }
                                      if(c==true){_.gestion.telefono.calificacion=_.calificacion_telefonos[d];_.gestion.calificacion=_.gestion.telefono.calificacion;}else{_.gestion.calificacion=false;}
                                    }
                };
    _.refrescar=function (){_.gestion={telefono:{}, existe:true};_.obtener.telefonos();_.obtener.calificacion_telefonos();_.obtener.deudor();_.obtener.historia();_.obtener.productos();_.obtener.sub_estados();_.tooltip()};
    _.agregar={telefono:function(){if(_.gestion.telefono.numero.length<6){_.gestion.telefono.alert=1;}else{_.nuevo.telefono.alert=0;_.nuevo.telefono.modificado=0;_.nuevo.telefono.modificando=1;_.gestion.telefono['documento']=_.d;_.gestion.telefono.numero=sacar011(_.gestion.telefono.numero.replace(/[^0-9.]/g, ""));$http.post('../../php/agregar-telefono.php',_.gestion.telefono).then(function(){_.nuevo.telefono={modificado:1};_.obtener.telefonos();_.tooltip();socket.emit('telefonos');});}}};
    
    _.registrar_gestion=function(){
                           $http.post('../../php/registrar-gestion.php',
                            {hora: _.obtener.hora(),
                             documento:$_GET['d'],
                             telefono:_.gestion.telefono.numero,
                             comentario:_.gestion.descripcion,
                             calificacion:_.gestion.calificacion,
                             tiempo:_.tiempo.horas+':'+_.tiempo.minutos+':'+_.tiempo.segundos,
                             operador:id_usuario,
                             tipo_gestion:_.gestion.tipo_gestion,
                             banco:$_GET['b'],
                             sub_estado:_.caso.productos[0].sub_estado,
                             hoy:hoy})
                           .then(function(){socket.emit('gestionado');_.gestionando=false;_.color='#07963d';
                           _.registrar.sub_estado=_.caso.sub_estado;_.refrescar();});
                         };
    _.abandonar_gestion=function(){
                           $http.post('../../php/abandonar-gestion.php',
                            {
                             agenda:_.registrar.agenda,
                             documento:$_GET['d'],
                             operador:id_usuario,
                             sub_estado:_.registrar.sub_estado,
                             fecha:hoy
                           })
                           .then(function(){_.cerrar()});
                         };
    _.refrescar();_.obtener.tipo_gestion();
    socket.on('telefonos',function(){_.obtener.telefonos();});
    _.avanzar = function(){if (_.gestionando == true){if(_.tiempo.segundos==59){_.tiempo.segundos=0;if(_.tiempo.minutos == 59){_.tiempo.minutos=0;_.tiempo.horas=_.tiempo.horas+1;}else{_.tiempo.minutos=_.tiempo.minutos+1;}}else{_.tiempo.segundos=_.tiempo.segundos+1;}
    time.emit('tiempo', {usuario:_.usuario, apellido: _.caso.deudor.apellido, documento: _.caso.deudor.documento, telefono: _.gestion.telefono,  tiempo: _.tiempo.horas+':'+_.tiempo.minutos+':'+_.tiempo.segundos , tipo_gestion : _.gestion.tipo_gestion, color: _.color });
    if(_.tiempo.minutos==5){
      _.color="#903";
    }
    }
    $timeout(_.avanzar, 1000);
  };
    _.avanzar();
});
var quit=false;
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
window.onbeforeunload = function (e) { 
if(quit==false)
  return false;
};

function cerrar (){
  quit=true;window.close()
}

function liquidar(d, b, l){
      window.open(l+'/?documento='+d+'&banco='+b, 'liquidacion-'+d,'height=400, width=720, left=400, top=0, resizable=no, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');
}

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

function recargar(){
  quit=true;window.location='.?d='+$_GET['d'];
}

$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});
</script>
</body>
</html>