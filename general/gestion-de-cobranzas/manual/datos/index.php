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
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="gestion" ng-controller="manual">
<div class="noselect">
<span class="drag"></span><span class="close" onclick="quit=true;window.close()" ng-show="quit==true" ng-init="quit=true">×</span>
</div>
<div class="options noselect">
<span class="button" ng-click="ver='deudor'">
  <span><img src="/.img/deudor.png" style="width:17px;height:15px;margin-left:2px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change">Deudor</span>
</span>

<span class="button" ng-click="ver='historia'">
  <span><img src="/.img/historia.png" style="width:20px;height:17px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change">Historia</span>
</span>
<span class="button" ng-click="ver='telefonos'">
  <span><img src="/.img/telefono.png" style="width:17px;height:17px;margin:1px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change">Telefonos</span>
</span>
<span class="button" ng-click="ver='productos'">
  <span><img src="/.img/productos.png" style="width:20px;height:15px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change">Productos</span>
</span>
<span class="button" ng-click="ver='propuesta'">
  <span><img src="/.img/propuesta.png" style="width:20px;height:15px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change">Propuesta</span>
</span>
<span class="button" ng-show="caso.deudor.link" ng-click="reporte()">
  <span><img src="/.img/reporte.png" style="width:12px;height:15px;margin:4px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change">Reporte</span>
</span>
  </div>
  <div class="content">
    <div ng-show="ver=='deudor'" style="padding:20px;">
      <div>
        <span class="button">
          <span data-toggle="tooltip" title="Titular" data-placement="bottom"><img src="/.img/deudor.png" style="width:17px;height:15px;margin-left:2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{caso.deudor.apellido}}</span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span class="button">
          <span><img src="/.img/id-card.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Documento" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{caso.deudor.tipo_documento}}</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;">{{caso.deudor.documento}}</span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span class="button noselect">
          <span class="color-gr " style="font-size:15px;padding:4px;" data-toggle="tooltip" title="Correo electronico" data-placement="bottom">@</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input style="border:0px;font-size:13px;" ng-model="caso.deudor.email" placeholder="Correo electronico..."></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-click="modificar.email()"  data-toggle="tooltip" title="Modificar" data-placement="bottom"><img src="/.img/write.png" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-click="enviar.email()"  data-toggle="tooltip" title="Enviar Email" data-placement="bottom"><img src="/.img/mail.png" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-show="caso.deudor.modificando==1"  data-toggle="tooltip" title="Modificando..." data-placement="bottom"><img src="/.img/loading.gif" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-show="caso.deudor.modificado==1"  data-toggle="tooltip" title="Modificado correctamente." data-placement="bottom"><img src="/.img/yes.png" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span class="button">
          <span><img src="/.img/home.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Direccion particular 1" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input style="border:0px;font-size:13px;" ng-model="caso.deudor.direccion_particular" placeholder="Direccion particular..."></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span class="button">
          <span><img src="/.img/home.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Direccion particular 2" data-placement="bottom"></span>
<span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input style="border:0px;font-size:13px;" ng-model="caso.deudor.direccion_particular2" placeholder="Direccion particular..."></span>        </span>
      </div>
      <div style="margin-top:10px;">
        <span class="button">
          <span><img src="/.img/home.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Direccion particular 3" data-placement="bottom"></span>
<span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input style="border:0px;font-size:13px;" ng-model="caso.deudor.direccion_particular3" placeholder="Direccion particular..."></span>        </span>
      </div>
      <div style="margin-top:10px;">
        <span class="button">
          <span><img src="/.img/empresa.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Direccion laboral 1" data-placement="bottom"></span>
<span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input style="border:0px;font-size:13px;" ng-model="caso.deudor.direccion_laboral" placeholder="Direccion laboral..."></span>        </span>
      </div>
      <div style="margin-top:10px;">
        <span class="button">
          <span><img src="/.img/empresa.png" style="width:17px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Direccion laboral 2" data-placement="bottom"></span>
<span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input style="border:0px;font-size:13px;" ng-model="caso.deudor.direccion_laboral2" placeholder="Direccion laboral..."></span>        </span>
      </div>
  </div>

  <div ng-show="ver=='historia'">
  <div style="height:205px;overflow-y:scroll;overflow-x:hidden;border-bottom:1px solid #ddd;">
    <table style="width:636px;margin-left:1px;" class="width-ellipsis">
    <tbody ng-if="refresh==0" ng-init="refresh=0;" class="casos" id="myTable">
      <tr>
        <td style="width:70px"></td>
        <td style="width:55px"></td>
        <td style="width:80px"></td>
        <td style="width:250px"></td>
        <td style="width:85px"></td>
        <td style="width:94px"></td>
      </tr>
      <tr ng-repeat="(i, gestion) in ::caso.historia" class="caso" id="{{gestion.documento}}" ng-click="elegir(gestion)">
        <td style="width:70px;">{{gestion.fecha | date:'dd/MM/yyyy'}}{{gestion.fecha.length > 25 ? "..." : ""}}</td>
        <td style="width:55px;">{{gestion.hora |limitTo: 27}}{{gestion.hora.length > 25 ? "..." : ""}}</td>
        <td style="width:80px;">{{gestion.telefono}}{{gestion.fecha.length > 25 ? "..." : ""}}</td>
        <td style="width:250px;" ><span style="width:100%;" data-toggle="tooltip" title="{{gestion.comentario}}" data-placement="bottom">{{gestion.comentario |limitTo: 50}}{{gestion.comentario.length > 25 ? "..." : ""}}</span></td>
        <td style="width:85px;" >{{gestion.tipo_gestion |limitTo: 30}}{{gestion.tipo_gestion.length > 25 ? "..." : ""}}</td>
        <td style="width:94px;" >{{gestion.operador |limitTo: 30}}{{gestion.operador.length > 25 ? "..." : ""}}</td>
      </tr>
      <tr infinite-scroll="bajar()" infinite-scroll-container='".caso"' infinite-scroll-distance="5" infinite-scroll-disabled="!listado || limite>=listado.length"></tr>
    </tbody>
    <tbody>
      <tr ng-if="caso.historia.length==0">
        <td style="width:70px"></td>
        <td style="width:55px"></td>
        <td style="width:80px"></td>
        <td style="width:250px"></td>
        <td style="width:85px"></td>
        <td style="width:94px"></td>
      </tr>
      <tr ng-if="caso.historia.length<i" ng-repeat="i in [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]">
        <td style="width:70px"></td>
        <td style="width:55px"></td>
        <td style="width:80px"></td>
        <td style="width:250px"></td>
        <td style="width:85px"></td>
        <td style="width:94px"></td>
      </tr>
    </tbody>
  </table>
  <table style="right:15px;position:absolute;width:636px;" class="width-ellipsis">
      <thead>
        <tr>
          <td style="width:70px">Fecha</td>
          <td style="width:55px">Hora</td>
          <td style="width:80px">Teléfono</td>
          <td style="width:250px">Descripcion</td>
          <td style="width:85px">Tipo</td>
          <td style="width:94px">Operador</td>
        </tr>
    </table>
  </div>
  <div style="margin:15px;height:100px;overflow-y:auto;border-radius:5px;border:1px solid #ddd;background:#fafafa">
    <div style="padding:10px;">{{visualizar.comentario}}</div>
    <div style="padding:10px;float:right;color:#aaa;">{{visualizar.telefono}} - {{visualizar.fecha | date:'dd/MM/yyyy'}} - {{visualizar.hora | date: 'HH:mm'}}</div>
  </div>
</div>
  <div style="bottom:5px;left:5px;position:fixed;">
  <span class="dropup">
    <span class="dropdown-toggle  button noselect" data-toggle="dropdown"> <span><img src="/.img/gestor.png" style="width:14px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Gestionar" data-placement="top"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">Gestionar</span></span>
    <ul class="dropdown-menu noshadow" style="border-radius:5px;padding:10px;">
      <li >Gestionar por su deuda con</li>
      <li style="margin-top:10px;" ng-repeat="banco in caso.productos  | groupBy: 'banco'"  ng-click="gestionar(banco[0].banco)"><span class="button noselect"><span><img src="/.img/bank.png" style="width:14px;height:15px;margin-left:2px;" data-toggle="tooltip" title="Gestionar" data-placement="bottom"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{banco[0].dbanco}}</span></span></li>
    </ul>
  </span>
  <span class="button noselect"><span style="padding:1px 5px 1px 5px;"><img src="/.img/sub_estado.png" style="width:15px;">Subestado</span><span style="border-left:1px solid #ddd;padding:1px 5px 1px 5px;">{{caso.productos[0].subestado}}</span></span>
  </div>
  <div ng-show="ver=='telefonos'" style="padding:20px;">
      <div style="text-align:center;">
        <span class="button noselect">
          <span class="color-gr " style="font-size:15px;padding:4px;" data-toggle="tooltip" title="Nuevo numero" data-placement="bottom"><img src="/.img/phone.png" style="width:15px;height:15px;margin-left:2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input style="border:0px;font-size:13px;color:#666;width:150px;" ng-model="nuevo.telefono.numero" placeholder="Nuevo numero..."></span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input style="border:0px;font-size:13px;color:#666;width:170px;" ng-model="nuevo.telefono.comentario" placeholder="Comentario..."></span>
        <span style="border-left:1px solid #ddd;padding:0px 5px 2px 5px;font-size:17px;" class="color-gr" ng-click="agregar.telefono()"  data-toggle="tooltip" title="Agregar" data-placement="bottom"><b>+</b></span>
        <span style="border-left:1px solid #ddd;padding:2px;" class="color-gr" ng-show="nuevo.telefono.modificando==1"  data-toggle="tooltip" title="Agregando..." data-placement="bottom"><img src="/.img/loading.gif" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-show="nuevo.telefono.modificado==1"  data-toggle="tooltip" title="Agregado correctamente." data-placement="bottom"><img src="/.img/yes.png" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        </span>
      </div>
      <div style="text-align:center;padding:6px;margin-top:10px;" class="alert-gr">
        <span ng-show="nuevo.telefono.alert"><img src="/.img/alert.png" style="width:12px;margin-top:-4px;">&nbsp; La cantidad de dígitos no es suficiente para ser un telefono.</span>
      </div>
      <div style="height:240px;overflow-y:auto;width:103%;border-top:1px solid #ddd;">
      <div style="margin-top:10px;" ng-repeat="(i, telefono) in caso.telefonos">
        <span class="button noselect">
          <span class="color-gr " style="font-size:15px;padding:4px;" data-toggle="tooltip" title="Telefono {{i+1}}" data-placement="bottom"><img src="/.img/phone.png" style="width:15px;height:15px;margin-left:2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px 10px 2px 10px;margin-right:-2px;">{{telefono.numero}}</span>
        <span style="border-left:1px solid #ddd;padding:2px 2px 2px 10px;margin-right:-2px;"><input style="border:0px;font-size:13px;color:#666;" ng-model="telefono.comentario" placeholder="Comentario..."></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-click="modificar.telefono(telefono.numero, telefono.comentario, i)"  data-toggle="tooltip" title="Modificar" data-placement="bottom"><img src="/.img/write.png" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-click="enviar.sms(telefono.numero)"  data-toggle="tooltip" title="Enviar SMS" data-placement="bottom"><img src="/.img/mail.png" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-click="enviar.ivr(telefono.numero)"  data-toggle="tooltip" title="Enviar IVR" data-placement="bottom"><img src="/.img/ivr.png" style="width:17px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-show="caso.telefonos[i].modificando==1"  data-toggle="tooltip" title="Modificando..." data-placement="bottom"><img src="/.img/loading.gif" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        <span style="border-left:1px solid #ddd;padding:2px;" ng-show="caso.telefonos[i].modificado==1"  data-toggle="tooltip" title="Modificado correctamente." data-placement="bottom"><img src="/.img/yes.png" style="width:15px;height:15px;margin-left:2px;margin-top:-2px;"></span>
        </span>
      </div>
</div>
      </div>
      <div ng-show="ver=='productos'">
        <div style="padding:2px;">
          <span class="button" style="margin-left::5px;">
            <span><img src="/.img/bank.png" style="width:15px;height:15px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select ng-model="productos_banco" ng-options="banco[0].dbanco as banco[0].dbanco for banco in caso.productos | groupBy: 'banco'" style="border:none;"></select></span>
          </span>
        </div>
        <div style="width:100%;overflow-x:auto;height:150px;">
        <table style="width:700px;float:left;margin-top:-2px;">
          <thead>
          <tr style="background:white;font-size:12px;">
            <td style="width:100px">Sub estado</td>
            <td style="width:100px">Legajo</td>
            <td style="width:100px">N° Gestión</td>
            <td style="width:100px">Producto</td>
            <td style="width:100px">Deuda</td>
            <td style="width:100px">Fecha de ingreso</td>
            <td style="width:100px">Fecha de mora</td>
          </thead>
          <tbody class="noselect">
      <tr ng-if="productos_banco" ng-repeat="producto in caso.productos | filter: {dbanco:productos_banco}" class="table-body" ng-click="visualizar_producto(producto)" id="{{producto.numero_operacion}}" style="font-size:10px;padding:5px;cursor:pointer;">
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Producto" data-placement="bottom">{{producto.subestado}}</td>
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Producto" data-placement="bottom">{{producto.legajo}}</td>
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Producto" data-placement="bottom">{{producto.numero_gestion}}°</td>
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Producto" data-placement="bottom">{{producto.producto}}</td>
        <td ng-if="producto.dolar==0" style="height:18px;width:100px;" data-toggle="tooltip" title="Deuda en pesos" data-placement="bottom">${{producto.deuda}}</td>
        <td  style="height:18px;width:100px;" data-toggle="tooltip" title="Deuda en dolares" data-placement="bottom" ng-if="producto.dolar==1">US${{producto.deuda}}</td>
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Fecha de ingreso" data-placement="bottom">{{producto.fecha_deuda | date: "dd/MM/yyyy"}}</td>
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Fecha de mora" data-placement="bottom">{{producto.fecha_mora | date: "dd/MM/yyyy"}}</td>
      </tr>
          </tbody>
          <tbody style="z-index:-1;width:700px;">
      <tr>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
      </tr>
      <tr ng-repeat="i in [1,2,3,4,5,6,7,8,9,10,11,12,13,14]">
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
      </tr>
    </tbody>
    </table>
  </div>
  <div ng-if="modificar_producto">
  <div style="padding:10px;">
  <span class="button">
  <span><img src="/.img/sub_estado.png" style="width:17px;height:15px;margin-left:2px;">Subestado</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_producto.subestado}}</span>
</span>
<span class="button">
  <span><img src="/.img/id-card.png" style="width:17px;height:15px;margin-left:2px;">Legajo</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_producto.legajo}}</span>
</span>
<span class="button">
  <span><img src="/.img/reporte.png" style="width:17px;height:15px;margin-left:2px;">Asignacion</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_producto.numero_gestion}}°</span>
</span>
</div>
<div style="padding:10px;">
  <span class="button">
  <span><img src="/.img/reporte.png" style="width:17px;height:15px;margin-left:2px;">Asignacion</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_producto.producto}}</span>
</span>
  </div>
  <div style="padding:10px;">
  <span class="button">
  <span><img src="/.img/productos.png" style="width:17px;height:15px;margin-left:2px;">Deuda</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><span ng-if="modificar_producto.dolar==1">US$</span><span ng-if="modificar_producto.dolar==0">$</span><input style="font-size:12px;border:0px;width:70px;" ng-model="modificar_producto.deuda" type="text"></span>
</span>
<span class="button">
  <span><img src="/.img/agenda.png" style="width:17px;height:15px;margin-left:2px;">ingreso</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_producto.fecha_deuda | date:'dd/MM/yyyy'}}</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">Mora</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_producto.fecha_mora | date:'dd/MM/yyyy'}}</span>
</span>
</div>
  </div>
      </div>
      <div ng-show="ver=='propuesta'">
        <div style="padding:5px;">
          <span class="button" style="margin-left::5px;">
            <span><img src="/.img/bank.png" style="width:15px;height:15px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select ng-model="productos_banco" ng-options="banco[0].dbanco as banco[0].dbanco for banco in caso.productos | groupBy: 'banco'" style="border:none;"></select></span>
          </span>
        </div>
        <div style="width:100%;height:150px;overflow-y:auto;overflow-x:hidden;padding-top:2px;border-bottom:1px solid #ddd;">
        <table style="width:650px;float:left;margin-top:-2px;">
          <thead>
          <tr style="background:white;font-size:12px;">
            <td style="width:130px">Fecha de generación</td>
            <td style="width:100px">Monto</td>
            <td style="width:100px">Anticipo</td>
            <td style="width:58px">Cuotas</td>
            <td style="width:100px">Fecha de pago</td>
            <td style="width:80px">Aprobado</td>
            <td style="width:80px">Cuota cero</td>
          </thead>
          <tbody>
      <tr ng-if="productos_banco" ng-repeat="propuesta in caso.propuestas | filter: {banco:productos_banco}" class="table-body noselect" ng-click="visualizar_propuesta(propuesta)"   ng-dblclick="aprobar(propuesta.id)" id="{{producto.numero_operacion}}" style="font-size:10px;padding:5px;cursor:pointer;">
        <td style="height:18px;width:130px;" data-toggle="tooltip" title="Producto" data-placement="bottom">{{propuesta.fecha_propuesta | date: 'dd/MM/yyyy'}}</td>
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Producto" data-placement="bottom">${{propuesta.monto}}</td>
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Producto" data-placement="bottom">${{propuesta.anticipo}}</td>
        <td style="height:18px;width:58px;" data-toggle="tooltip" title="Producto" data-placement="bottom">{{propuesta.cuotas}}</td>
        <td style="height:18px;width:100px;" data-toggle="tooltip" title="Deuda en pesos" data-placement="bottom">{{propuesta.fecha_pago | date: 'dd/MM/yyyy'}}</td>
        <td style="height:18px;width:80px;" data-toggle="tooltip" title="Fecha de ingreso" data-placement="bottom">{{propuesta.aprobado==0 ? 'NO' : 'SI'}}</td>
        <td style="height:18px;width:80px;" data-toggle="tooltip" title="Fecha de mora" data-placement="bottom">{{propuesta.cuota_cero==0 ? 'NO' : 'SI'}}</td>
      </tr>
          </tbody>
          <tbody style="z-index:-1;width:650px;">
      <tr>
        <td style="width:130px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:58px"></td>
        <td style="width:100px"></td>
        <td style="width:80px"></td>
        <td style="width:80px"></td>
      </tr>
      <tr ng-repeat="i in [1,2,3,4,5,6,7]">
        <td style="width:130px"></td>
        <td style="width:100px"></td>
        <td style="width:100px"></td>
        <td style="width:58px"></td>
        <td style="width:100px"></td>
        <td style="width:80px"></td>
        <td style="width:80px"></td>
      </tr>
    </tbody>
    </table>
  </div>
  <div ng-if="modificar_propuesta">
  <div style="padding:10px;">
  <span class="button">
  <span><img src="/.img/agenda.png" style="width:17px;height:15px;margin-left:2px;">Fecha generacion</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_propuesta.fecha_propuesta | date:'dd/MM/yyyy'}}</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">pago</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_propuesta.fecha_pago | date:'dd/MM/yyyy'}}</span>
</span>
</div>
  <div style="padding:10px;">
  <span class="button">
  <span><img src="/.img/productos.png" style="width:17px;height:15px;margin-left:2px;">Total</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">${{modificar_propuesta.monto}}</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">Anticipo</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">${{modificar_propuesta.anticipo}}</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">Cuotas</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_propuesta.cuotas}}</span>
</span>
<span class="button">
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">Cuota cero</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_propuesta.cuota_cero==0 ? 'NO' : 'SI'}}</span>
</span>
<span class="button">
  <span><img src="/.img/calificacion.png" style="width:17px;height:15px;margin-left:2px;">Aprobado</span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">{{modificar_propuesta.aprobado==0 ? 'NO' : 'SI'}}</span>
</span>

</div>
  </div>
      </div>
  </div>


  <div style="position:fixed;top:19px;left:0px;width:100%;height:100%;background:white;border:(0px 1px 1px 1px) solid #ddd;" ng-hide="caso">
    <img src="/.img/loading.gif" style="position:absolute;top:45%;left:45%;width:30px;opacity:0.3;">
  </div>
<script>
var $_GET={};var url=document.URL.split("/")[2];document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g,function(){function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
var d=$_GET['d'], window2, window3;
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
    _.d=d;
    _.listado=[];
    _.caso={};
    _.limite=5;
    _.ver='deudor';
    _.getNumber=function(n){return new Array(n);};
    _.gestionar= function (b){
    window2=window.open('gestion/?d='+d+'&b='+b, 'call'+d,'height=330, width=300, left=400, top=0, resizable=no, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');
    };
    _.reporte=function(){window3 = window.open('reporte/?u='+_.caso.deudor.link, 'reporte'+d,'height=600, width=400, left=100, top=0, resizable=yes, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');
};
    _.bajar=function(){_.limite=_.limite+1;};
    _.elegir=function (c){_.visualizar=c};
    _.tooltip= function (){$timeout(function(){$('[data-toggle="tooltip"]').tooltip();});};
    _.obtener={ telefonos:function(){$http.post('../php/telefonos.php',{documento:_.d}).then(function(res){_.caso.telefonos=res.data;})},
               deudor:function (){$http.post('../php/deudor-domicilios.php',{documento:_.d}).then(function(res){_.caso.deudor=res.data[0];})},
               historia:function(){$http.post('../php/gestion.php',{documento:_.d}).then(function(res){_.caso.historia=res.data;$timeout(function(){_.refresh=0;_.tooltip();});});},
               productos:function(){$http.post('../php/carpeta-producto.php',{documento:_.d}).then(function (res){_.caso.productos=res.data;});},
               propuestas:function(){$http.post('../php/propuestas.php',{documento:_.d}).then(function (res){_.caso.propuestas=res.data;});}
             };
    _.refrescar=function (){_.obtener.telefonos();_.obtener.deudor();_.obtener.historia();_.obtener.productos();_.obtener.propuestas();_.tooltip()};
    _.agregar={telefono:function(){if(_.nuevo.telefono.numero.length<6){_.nuevo.telefono.alert=1;}else{_.nuevo.telefono.alert=0;_.nuevo.telefono.modificado=0;_.nuevo.telefono.modificando=1;_.nuevo.telefono['documento']=_.d;_.nuevo.telefono.numero=sacar011(_.nuevo.telefono.numero.replace(/[^0-9.]/g, ""));$http.post('../php/agregar-telefono.php',_.nuevo.telefono).then(function(){_.nuevo.telefono={modificado:1};_.obtener.telefonos();_.tooltip();socket.emit('telefonos');});}}};
    _.refrescar();
    _.modificar={email:function (){_.caso.deudor.modificado=0;_.caso.deudor.modificando=1;$http.post('../php/modificar-deudor.php',_.caso.deudor).then(function(res){_.caso.deudor.modificando=0;_.caso.deudor.modificado=1;});},
                 telefono: function (n,c,i){_.caso.telefonos[i].modificado=0;_.caso.telefonos[i].modificando=1;$http.post('../php/modificar-telefono.php',{numero:n,comentario:c}).then(function(){_.caso.telefonos[i].modificando=0;_.caso.telefonos[i].modificado=1;})}
               };
    _.enviar={
      sms:function(t){$http.post("../php/sms.php", {documento:_.d, telefono:t}).then(function(res){alert(res.data)});},
      email:function(){$http.post("../php/mail.php", {documento:_.d}).then(function(res){alert(res.data)});},
      ivr:function(t){$http.post("../php/ivr.php", {documento:_.d, telefono:t}).then(function(res){alert(res.data)});}
    };
    _.visualizar_producto=function(d){_.modificar_producto=d;};
    _.visualizar_propuesta=function(d){_.modificar_propuesta=d;};
    socket.on('abrir-gestion',function(){_.quit=false;});
    socket.on('cerrar-gestion',function(){_.quit=true;_.obtener.productos();});
    socket.on('gestionado',function(){_.refresh=1;_.obtener.historia();});
    socket.on('telefonos',function(){_.obtener.telefonos();});
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
