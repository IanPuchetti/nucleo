<?php
/*
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: /");
}
*/
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
	<script type="text/javascript" src="/.js/icg-json-to-xlsx.js"></script>
  <script type="text/javascript" src="/.js/jszip.min.js"></script>
  <script type="text/javascript" src="/.js/xlsx.min.js"></script>
  <script type="text/javascript" src="/.js/lodash.min.js"></script>
  <script type="text/javascript" src="/.js/FileSaver.js"></script>
  <script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script type="text/javascript" src="/.js/ng-infinite-scroll.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
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

  <body oncontextmenu="return false;" ng-app="exporte" ng-controller="filtro" class="noselect">
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
  <div class="header buscador" style="height:25px;width:900px;margin-left:-2px;border-bottom:0px;">
  <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" >
  <span data-toggle="tooltip" title="Titular" data-placement="bottom"><img src="/.img/deudor.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
      <input type="text" ng-model="complejo.apellido" placeholder="Apellido y nombre..."  ng-keypress="enter($event)" style="width:100px;">
      <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-105px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:10px;">
              <span style="padding:8px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input placeholder="A..."  ng-model="complejo.apellido1" style="width:70px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:10px;">
              <span style="padding:8px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input placeholder="Z..."  ng-model="complejo.apellido2"  style="width:72px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
  </span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Documento" data-placement="bottom"><img src="/.img/id-card.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <input type="number" ng-model="complejo.documento" placeholder="Documento..."  ng-keypress="enter($event)" style="width:100px;">
  <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-106px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:10px;">
              <span style="padding:8px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="number" placeholder="0..."  ng-model="complejo.documento1" style="width:70px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:10px;">
              <span style="padding:8px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="number"  placeholder="50000000..."  ng-model="complejo.documento2"  style="width:72px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
  </span>
  <span data-toggle="tooltip" title="Banco" data-placement="bottom" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/bank.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <select ng-model="complejo.banco" ng-options="banco as banco.banco for banco in bancos" style="width:148px;border:none;"><option></option></select>
  </span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Deuda" data-placement="bottom"><img src="/.img/productos.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">Deuda&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-106px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="number" placeholder="$0..."  ng-model="complejo.deuda1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="number"  placeholder="$999999..."  ng-model="complejo.deuda2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
  </span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Fecha de ingreso" data-placement="bottom"><img src="/.img/agenda.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">Ingreso&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-106px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.fecha_ingreso1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.fecha_ingreso2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
  </span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Fecha de mora" data-placement="bottom"><img src="/.img/agenda.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">Mora&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-106px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.fecha_mora1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.fecha_mora2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
  </span>
  <span data-toggle="tooltip" title="Responsable" data-placement="bottom" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/gestor.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <select ng-model="complejo.responsable" ng-options="responsable as responsable.user for responsable in usuarios" style="width:100px;border:none;"><option></option></select>
  </span>
  <span data-toggle="tooltip" title="Buscar" data-placement="bottom" ng-click="buscar.complejo()" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/search.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  </span>
</div>
<div class="header buscador" style="margin-left:-2px;border-bottom:0px;">
    <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" >
<span style="padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Agenda" data-placement="bottom"><img src="/.img/agenda.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="padding:2px;margin-right:-2px;">
  <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">Agenda&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-20px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.agenda1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.agenda2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
    </span>
    <span data-toggle="tooltip" title="Estado" data-placement="bottom" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/estado.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <select ng-model="complejo.estado" ng-options="estado as estado.estado for estado in estados" style="width:100px;border:none;"><option></option></select>
  </span>
  <span data-toggle="tooltip" title="Sub estado" data-placement="bottom" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/sub_estado.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <select ng-model="complejo.sub_estado" ng-options="sub_estado as sub_estado.sub_estado for sub_estado in sub_estados" style="width:100px;border:none;"><option></option></select>
  </span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Reporte" data-placement="bottom"><img src="/.img/reporte.png" style="width:13px;height:15px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
        <span ng-show="complejo.reportes=='sin'" ng-click="complejo.reportes='todos'">Sin reportes</span>
        <span ng-show="complejo.reportes=='todos'" ng-init="complejo.reportes='todos'" ng-click="complejo.reportes='con'">Con o sin reportes</span>
      <span class=" dropdown" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.reportes=='con'" ng-dblclick="complejo.reportes='sin'">
        <span class="dropdown-toggle" data-toggle="dropdown">Con reportes &#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-106px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.agenda1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.agenda2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
    </span>
    <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Movimiento" data-placement="bottom"><img src="/.img/change.png" style="width:15px;height:15px;margin-left:2px;margin-top:-3px;"></span>
     <span ng-show="complejo.movimiento=='todos'" ng-init="complejo.movimiento='todos'" ng-click="complejo.movimiento='con'">Con o sin movimiento</span>
      <span class="dropdown" ng-show="complejo.movimiento=='con'" ng-dblclick="complejo.movimiento='sin'">
        <span class="dropdown-toggle" data-toggle="dropdown">Con movimiento &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.movimiento1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.movimiento2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
        </ul>
      </span>
      <span class=" dropdown" ng-show="complejo.movimiento=='sin'" ng-dblclick="complejo.movimiento='todos'">
        <span class="dropdown-toggle" data-toggle="dropdown">Sin movimiento &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.movimiento1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.movimiento2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
        </ul>
      </span>
        <span data-toggle="tooltip" title="Borrar" data-placement="bottom"  ng-click="complejo={};complejo.reportes='todos';complejo.movimiento='todos'" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/borrar.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
    </span> 
  </span>
</div>

<div style="top:95px;position:absolute;width:100%;overflow-x:scroll;height:275px;" class="tablon">
  <div style="width:3300px;">
  <table class="with-ellipsis"  ng-init="limite=20;orden='documento';" style="z-index:1;position:absolute;width:3300px;" >
    <thead>
      <tr ng-repeat="campo in tabla| limitTo: 1">
        <td style="width:100px;" ng-repeat="(key, value) in campo" ng-click="ordenar(key)" id="{{key}}">{{::key}}</td>
      </tr>
    </thead>
    <tbody class="casos" ng-if="volver==1" infinite-scroll="bajar()" infinite-scroll-container='".tablon"' infinite-scroll-distance="1" infinite-scroll-disabled="!tabla || limite>=tabla.length">
      <tr ng-repeat="(i, fila) in ::tabla  | orderBy: orden" ng-if="i<limite" ng-dblclick="elegir(fila.documento)">
        <td ng-repeat="valor in fila" style="width:100px;">{{valor}}</td>
      </tr>
    </tbody>
  </table>
  <table class="with-ellipsis" style="position:absolute;z-index:0;width:3300px;">
      <thead>
      <tr>
        <td ng-repeat="s in [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33]" style="width:100px;"></td>
      </tr>
    </thead>
      <tbody>
      <tr ng-repeat="q in largotabla">
        <td ng-repeat="s in [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33]" style="width:100px;"></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div style="position:fixed;bottom:5px;left:5px;z-index:2;">
      <span class="dropup">
          <span class="button dropdown-toggle" data-toggle="dropdown" style="margin-right:5px;">
          <span><img src="/.img/campos.png" style="width:17px;height:20px;margin-left:2px;margin-top:-3px" data-toggle="tooltip" title="Campos" data-placement="top"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;">Campos</span>
        </span>      <ul class="noshadow dropdown-menu dropdown-menu-right dont-go" style="margin-top:-10px;position:absolute;left:3px;height:320px;width:500px;border-radius:5px;border-color:#ddd;">
        <li>
          <span class="butn" onclick="$('.css-checkbox').click()" style="font-size:12px;font-weight:100;padding:5px;position:absolute;bottom:5px;right:5px;"> Todos</span>
          <div style="position:absolute;left:5px;">
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.deudor.documento" ng-init="campo.deudor.documento=true" class="css-checkbox" id="check1"><label class="css-label" for="check1" style="font-size:12px;font-weight:normal;">Numero de documento</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.deudor.tipo_documento" ng-init="campo.deudor.tipo_documento=true" class="css-checkbox" id="check2"><label class="css-label" for="check2" style="font-size:12px;font-weight:normal;">Tipo de documento</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.deudor.apellido" ng-init="campo.deudor.apellido=true" class="css-checkbox" id="check3"><label class="css-label" for="check3" style="font-size:12px;font-weight:normal;">Apellido</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.deudor.mail" ng-init="campo.deudor.mail=true" class="css-checkbox" id="check4"><label class="css-label" for="check4" style="font-size:12px;font-weight:normal;">Mail</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.deudor.empresa" ng-init="campo.deudor.empresa=true" class="css-checkbox" id="check5"><label class="css-label" for="check5" style="font-size:12px;font-weight:normal;">Empresa</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.deudor.responsable" ng-init="campo.deudor.responsable=true" class="css-checkbox" id="check6"><label class="css-label" for="check6" style="font-size:12px;font-weight:normal;">Responsable</label></div>

          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.estado" ng-init="campo.producto.estado=true" class="css-checkbox" id="check7"><label class="css-label" for="check7" style="font-size:12px;font-weight:normal;">Estado</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.sub_estado" ng-init="campo.producto.sub_estado=true" class="css-checkbox" id="check9"><label class="css-label" for="check9" style="font-size:12px;font-weight:normal;">Sub estado</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.banco" ng-init="campo.producto.banco=true" class="css-checkbox" id="check10"><label class="css-label" for="check10" style="font-size:12px;font-weight:normal;">Banco</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.producto" ng-init="campo.producto.producto=true" class="css-checkbox" id="check11"><label class="css-label" for="check11" style="font-size:12px;font-weight:normal;">Producto</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.numero_operacion" ng-init="campo.producto.numero_operacion=true" class="css-checkbox" id="check12"><label class="css-label" for="check12" style="font-size:12px;font-weight:normal;">Numero operacion</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.nombre_producto" ng-init="campo.producto.nombre_producto=true" class="css-checkbox" id="check13"><label class="css-label" for="check13" style="font-size:12px;font-weight:normal;">Nombre producto</label></div>
          </div>
          <div  style="position:absolute;right:200px;">
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.deuda" ng-init="campo.producto.deuda=true" class="css-checkbox" id="check14"><label class="css-label" for="check14" style="font-size:12px;font-weight:normal;">Deuda</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.moneda" ng-init="campo.producto.moneda=true" class="css-checkbox" id="check15"><label class="css-label" for="check15" style="font-size:12px;font-weight:normal;">Moneda</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.fecha_deuda" ng-init="campo.producto.fecha_deuda=true" class="css-checkbox" id="check16"><label class="css-label" for="check16" style="font-size:12px;font-weight:normal;">Fecha ingreso</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.fecha_mora" ng-init="campo.producto.fecha_mora=true" class="css-checkbox" id="check17"><label class="css-label" for="check17" style="font-size:12px;font-weight:normal;">Fecha mora</label></div>
          
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.fecha_ult_cobro" ng-init="campo.producto.fecha_ult_cobro=true" class="css-checkbox" id="check18"><label class="css-label" for="check18" style="font-size:12px;font-weight:normal;">Fecha ult. cobro</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.tipo_gestion" ng-init="campo.producto.tipo_gestion=true" class="css-checkbox" id="check19"><label class="css-label" for="check19" style="font-size:12px;font-weight:normal;">Tipo gestion</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.producto.agenda" ng-init="campo.producto.agenda=true" class="css-checkbox" id="check20"><label class="css-label" for="check20" style="font-size:12px;font-weight:normal;">Agenda</label></div>

          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.carpeta.caratula" ng-init="campo.carpeta.caratula=true" class="css-checkbox" id="check21"><label class="css-label" for="check21" style="font-size:12px;font-weight:normal;">Caratula</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.carpeta.comentario" ng-init="campo.carpeta.comentario=true" class="css-checkbox" id="check22"><label class="css-label" for="check22" style="font-size:12px;font-weight:normal;">Comentario</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.carpeta.sucursal" ng-init="campo.carpeta.sucursal=true" class="css-checkbox" id="check23"><label class="css-label" for="check23" style="font-size:12px;font-weight:normal;">Sucursal</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.carpeta.legajo" ng-init="campo.carpeta.legajo=true" class="css-checkbox" id="check24"><label class="css-label" for="check24" style="font-size:12px;font-weight:normal;">Legajo</label></div>
          </div>
          <div  style="position:absolute;right:5px;">

          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.carpeta.numero_gestion" ng-init="campo.carpeta.numero_gestion=true" class="css-checkbox" id="check25"><label class="css-label" for="check25" style="font-size:12px;font-weight:normal;">Numero de gestión</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.carpeta.numero_lote" ng-init="campo.carpeta.numero_lote=true" class="css-checkbox" id="check26"><label class="css-label" for="check26" style="font-size:12px;font-weight:normal;">Numero de lote</label></div>

          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.domicilios.direccion_laboral" ng-init="campo.domicilios.direccion_laboral=true" class="css-checkbox" id="check27"><label class="css-label" for="check27" style="font-size:12px;font-weight:normal;">Direccion laboral</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.domicilios.direccion_laboral2" ng-init="campo.domicilios.direccion_laboral2=true" class="css-checkbox" id="check28"><label class="css-label" for="check28" style="font-size:12px;font-weight:normal;">Direccion laboral 2</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.domicilios.direccion_particular" ng-init="campo.domicilios.direccion_particular=true" class="css-checkbox" id="check29"><label class="css-label" for="check29" style="font-size:12px;font-weight:normal;">Direccion particular</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.domicilios.direccion_particular2" ng-init="campo.domicilios.direccion_particular2=true" class="css-checkbox" id="check30"><label class="css-label" for="check30" style="font-size:12px;font-weight:normal;">Direccion particular 2</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.domicilios.direccion_particular3" ng-init="campo.domicilios.direccion_particular3=true" class="css-checkbox" id="check31"><label class="css-label" for="check31" style="font-size:12px;font-weight:normal;">Direccion particular 3</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.domicilios.provincia" ng-init="campo.domicilios.provincia=true" class="css-checkbox" id="check32"><label class="css-label" for="check32" style="font-size:12px;font-weight:normal;">Provincia</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.domicilios.localidad" ng-init="campo.domicilios.localidad=true" class="css-checkbox" id="check33"><label class="css-label" for="check33" style="font-size:12px;font-weight:normal;">Localidad</label></div>
          <div style="padding:2px 0px 0px 2px;"><input type="checkbox" ng-model="campo.domicilios.codigo_postal" ng-init="campo.domicilios.codigo_postal=true" class="css-checkbox" id="check34"><label class="css-label" for="check34" style="font-size:12px;font-weight:normal;">Código postal</label></div>
        </li>
      </ul>
    </span>
       
      <span class="button">
          <span style="padding:8px;"  onclick="$('#xlsx').click()">Importar XLSX</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"  onclick="$('#xlsx').click()"><img src="/.img/xlsx.png" style="width:13px;height:15px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"  ng-click="leer_excel()">&#x25B4;</span>
          <input type="file" style="display:none" id="xlsx" ng-model="excel" ng-change="leer_excel()">
        </span> 
      <span class="button dropup" >
          <span style="padding:8px;"  class="dropdown-toggle" data-toggle="dropdown" >Agregar a campaña &#x25B4;</span>
          <ul class="dropdown-menu dropdown-menu-right dont-go noshadow" style="border-radius:0px;padding:20px;padding-top:50px;width:200px;">
            <div style="margin-top:-30.5px;text-align:center;">
            <div class="button" style="height:20px;">
              <span >Campaña</span><select style="font-size:10px;border:0px;width:100px;" ng-options="campania as campania.nombre for campania in campanias"  ng-model="agregar.campania" ></select>
            </div>
            <div style="margin-top:10px;">
              <span class="butn" style="font-size:10px;padding-left:45px;padding-right:45px;" ng-click="accion.agregar()">Agregar</span>          </div>
            </div>
        </ul>
      </span>
      <span class="button dropup" >
          <span style="padding:8px;"  class="dropdown-toggle" data-toggle="dropdown" >Generar campaña &#x25B4;</span>
          <ul class=" noshadow dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;padding:20px;padding-top:70px;width:250px;">
            <div style="margin-top:-60px;">
            <input placeholder="Nombre de la campaña..."   ng-model="generar.nombre" style="display:block;">
            <input  placeholder="Descripcion de la campaña..."   ng-model="generar.comentario"  style="display:block;">
            <div>Finalizacion: <input type="date" ng-model="generar.fecha_finalizacion"></div>
            <div style="padding-bottom:10px;">Grupo: <select ng-model="generar.grupo"  ng-options="grupo as grupo.nombre for grupo in grupos"></select></div>
                          <span class="butn" style="padding:0px;font-size:12px;padding-left:40px;padding-right:40px;" ng-click="accion.generar()">Generar  </span> <img src="/.img/loading.gif" style="width:15px" ng-show="generando"><img src="/.img/yes.png" style="width:15px" ng-show="generado">

            </div>
        </ul>
      </span>
      <span class="button">
          <span style="padding:8px;">Resultados</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;">{{tabla.length}}</span>
        </span>
  </div>
    <!--
      <span class="input-group-addon dropup" style="border-radius:0px;height:24px;font-size:11px;border:1px solid #ccc;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Agregar a campaña &#x25B4;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;padding:20px;padding-top:70px">
          <li>
            <div style="margin-top:-47.5px;">
            <div class="input-group" style="height:20px;">
              <span class="input-group-addon">Campaña</span><select style="font-size:9px;" class="form-control" ng-options="campania as campania.nombre for campania in campanias"  ng-model="agregar.campania" style="font-size:9px;"></select>
            </div>
              <span class="form-control btn btn-primary" style="font-size:10px;" ng-click="accion.agregar()">Agregar</span>          </div>
          </li>
        </ul>
      </span>
      <span class="input-group-addon dropup" style="border-radius:0px;height:24px;font-size:11px;border:1px solid #ccc;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Generar campaña &#x25B4;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;padding:20px;padding-top:150px">
          <li>
            <div style="margin-top:-127.5px;">
            <input class="form-control" placeholder="Nombre de la campaña..."   ng-model="generar.nombre" >
            <input class="form-control" placeholder="Descripcion de la campaña..."   ng-model="generar.comentario" >
            <div class="input-group" style="height:20px;"  >
              <span class="input-group-addon"  >Finalizacion</span><input type="date" ng-model="generar.fecha_finalizacion" class="form-control">
            </div>
            <div class="input-group" style="height:20px;">
              <span class="input-group-addon">Grupo</span><select style="font-size:9px;" class="form-control" ng-model="generar.grupo"  ng-options="grupo as grupo.nombre for grupo in grupos"></select>
            </div>
              <span class="form-control btn btn-primary" style="font-size:10px;" ng-click="accion.generar()">Generar</span>          </div>
          </li>
        </ul>
      </span>
      
    </div>
  </div>-->
  <script>
  function dateTransform(a,b){if(a===Array){a=a.split('-');a=a[2]+'/'+a[1]+'/'+a[0];}else{if(a[0][b]){for(var i in a){a[i][b]=a[i][b].split('-');a[i][b]=a[i][b][2]+'/'+a[i][b][1]+'/'+a[i][b][0];}}}return a;}
var produtos, producto;
var date = new Date();
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
angular.module('exporte',['infinite-scroll'])
.controller('filtro', function($scope, $http, $timeout) {
  var _=$scope;
    _.mostrar='rapida';
    _.largotabla=[1,2,3,4,5,6,7,8,9,10,11,12,13];    
    _.recargar = function (){
    $http.post('php/bancos.php').then(function(res){_.bancos=res.data;});//Obtencion de los bancos
    $http.post('php/usuarios.php').then(function(res){_.usuarios=res.data;});//Obtencion de los usuarios
    $http.post('php/proximas-acciones.php').then(function(res){_.proximas_acciones=res.data;});//Obtencion de las proximas acciones
    $http.post('php/estados.php').then(function(res){_.estados=res.data;});//Obtencion de los estados
    $http.post('php/dolar.php').then(function (res){ _.dolar = res.data;});
    $http.post('php/grupos.php').then(function(res){_.grupos=res.data;});//Obtencion de las calificaciones
    $http.post('php/sub_estados.php').then(function(res){_.sub_estados=res.data;});//Obtencion de los estados
    $http.post('php/tipo_gestion.php').then(function(res){_.tipo_gestion=res.data;});//Obtencion de los tipos
    $http.post('php/calificacion-telefonos.php').then(function(res){_.calificacion_telefonos=res.data;});//Obtencion de las calificaciones
    $http.post('php/campanias.php').then(function(res){_.campanias=res.data;});//Obtencion de las calificaciones
  }
  _.recargar();
    _.bajar=function(){
      _.limite=_.limite+1;
    };
    _.enter = function (e){
          if(e==13){
            _.buscar.complejo();
          }
        
        };

  _.accion={generar:function (){
            _.generando=true;
            _.generar.id_casos=_.id_casos;
            _.generar.fecha=hoy;
            $http.post('php/nuevo.php', _.generar).then(function (res){
              notificar('Campaña generada!','La campaña se ha generado correctamente.', '/.img/ok.png');
               _.generado=true; _.generando=false;
              _.recargar();
            });},
         agregar:function (){
           _.agregar.id_casos=_.id_casos;
           $http.post('php/agregar_a_campania.php', _.agregar).then(function (res){
              notificar('Agregados a campaña!','Los casos se han agregado correctamente.', '/.img/ok.png');
            });
    },
         agendar:function (){
           _.agendar.id_casos=_.id_casos;
           $http.post('php/agregar_a_agenda.php', _.agendar).then(function (res){
              notificar('Agregados a la agenda!','Los casos se han agregado correctamente a la agenda de '+_.agendar.operador.user+'.', '/.img/ok.png');
            });
        }
  };

  _.buscar={  
        rapido: function (){
          $http.post('php/buscar-rapido.php', {campos : _.campo, filtro:_.rapido}).then(function(res){
            _.tabla=res.data;
            dateTransform(_.tabla, 'fecha_mora');
            dateTransform(_.tabla, 'fecha_deuda');
            dateTransform(_.tabla, 'fecha_ult_cobro');
          });
        },
        complejo: function (){
          _.limite=0;
          _.volver=0;
          $http.post('php/buscar-complejo.php', {campos : _.campo, filtro:_.complejo}).then(function(res){
            _.tabla=res.data;
            dateTransform(_.tabla, 'fecha_mora');
            dateTransform(_.tabla, 'fecha_deuda');
            dateTransform(_.tabla, 'fecha_ult_cobro');
            dateTransform(_.tabla, 'agenda');
            _.volver=1;
            _.total_pesos=0;
            _.id_casos=[];
            for (var i in _.tabla){
            _.id_casos.push(_.tabla[i].documento);
            if(_.tabla[i].dolar=='1'){
            _.total_pesos = parseFloat(_.total_pesos)+(parseFloat(_.tabla[i].deuda)* parseFloat(_.dolar)); 
            }else{
            _.total_pesos = parseFloat(_.total_pesos)+parseFloat(_.tabla[i].deuda); 
          }
          }
          });
        }
  };
  _.descargar = function (){
    for (var i in _.tabla){
      delete _.tabla[i]['$$hashKey']
    }
    exportar(_.tabla, _.nombre_archivo)
  }
  _.ordenar = function (a){
    _.volver=0;_.limite=20;
    $(".flechita").remove();
    if(_.orden==a){_.orden='-'+a;$("#"+a).append("<span class='flechita'>&#x25B4;</span>");}else{_.orden=a;$("#"+a).append("<span class='flechita'>&#x25BE;</span>");}
    $timeout(function (){_.activar();});
  }
  _.activar = function (){
    _.volver=1;
        _.largotabla=[1,2,3,4,5,6,7,8,9,10,11,12,13];
  }

  _.leer_excel =function (){
    $timeout(function (){_.tabla = excel;_.activar();});
  }

});

Notification.requestPermission();
function notificar(title, body, icon) {
      if(Notification.permission !== "granted"){
        Notification.requestPermission();
      }else {
      var notification = new Notification(title, {
      icon: icon,
      body: body,
    });

    notification.onclick = function () {  
    notification.close();  
    };
  }
}



var mostrar;
function to_json(workbook) {
  var result = {};
  workbook.SheetNames.forEach(function(sheetName) {
    var roa = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
    if(roa.length > 0){
      result[sheetName] = roa;
    }
  });
  return result;
}
function handleFile(e) {
  console.log(e);
  var files = e.target.files;
  var i,f;
  for (i = 0, f = files[i]; i != files.length; ++i) {
    var reader = new FileReader();
    var name = f.name;
    reader.onload = function(e) {
      var data = e.target.result;
      workbook = XLSX.read(data, {type: 'binary'});
      exporte= to_json(workbook);
      excel= exporte[workbook.Props.SheetNames[0]];
      //document.getElementById("mostrar").innerHTML= mostrar.sheet1;
      }
    reader.readAsBinaryString(f);
  }
}

document.getElementById('xlsx').addEventListener('change', handleFile, false);

$(document).on('click', '.dont-go', function (e) {
  e.stopPropagation();
});
  </script>
  </body>
</html>
