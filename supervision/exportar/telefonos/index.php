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
  <script src="js/Chart.min.js"></script>
  <script src="js/angular-chart.min.js"></script>
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
            <span data-toggle="dropdown">Administración de Cartera <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/carga/comparacion" class="ventana">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1" href="/supervision/carga/masiva" class="ventana">Masiva</a></li>
                  <li><a tabindex="-1" href="/supervision/carga/manual" class="ventana">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación masiva</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1" href="/supervision/modificacion/productos" class="ventana">Productos</a></li>
                  <li><a tabindex="-1" href="/supervision/modificacion/deudores" class="ventana">Deudores</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1"href="/supervision/carga/enriquecer" class="ventana">Telefonos / Mails</a></li>
                  <li><a href="/supervision/carga/reportes" class="ventana">Datos Enriquecidos</a></li>
                </ul>
              </li>
              <li><a href="/supervision/baja/" class="ventana">Cambio de estado</a></li>
            </ul>
    </span>
    <span class="dropdown boton">
        <span data-toggle="dropdown">Gestión de cobranzas <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/gestion-de-cobranzas/manual" class="ventana">Manual</a></li>
              <li><a href="/supervision/gestion-de-cobranzas/campania" class="ventana">Campaña</a></li>
              <li><a href="/supervision/gestion-de-cobranzas/consultas" class="ventana">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/supervision/carga/gestiones-automaticas" class="ventana">Gestiones automáticas</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Exportar <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/exportar/casos" class="ventana">Casos</a></li>
              <li><a href="/supervision/exportar/telefonos" class="ventana">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/supervision/exportar/sms" class="ventana">SMS</a></li>
                  <li><a tabindex="-1" href="/supervision/exportar/mails" class="ventana">Mails</a></li>
                  <li><a tabindex="-1" href="/supervision/exportar/ivr" class="ventana">IVR</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Informes</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/supervision/exportar/propuestas" class="ventana">Propuestas</a></li>
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
  <select ng-model="complejo.banco" ng-options="banco as banco.banco for banco in bancos" style="width:130px;border:none;"><option></option></select>
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
    </span>
    </div>
      <div class="header buscador" style="height:25px;width:800px;margin-left:-2px;border-bottom:0px;margin-top:-15px;">
  <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" >

  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Contactado" data-placement="bottom"><img src="/.img/comentario.png" style="width:13px;height:15px;margin-left:2px;margin-top:-3px;"></span>
      <span ng-show="complejo.contactado=='todos'" ng-init="complejo.contactado='todos'" ng-click="complejo.contactado='con'">Con o sin contacto</span>
      <span ng-show="complejo.contactado=='con'" ng-click="complejo.contactado='sin'">
Contactados
      </span>
      <span ng-show="complejo.contactado=='sin'" ng-click="complejo.contactado='todos'">
        Sin contacto
      </span>

      <span data-toggle="tooltip" title="Calificacion telefono" data-placement="bottom" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/phone.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <select  ng-model="complejo.calificacion" ng-options="calificacion as calificacion.titulo for calificacion in calificacion_telefonos" style="width:100px;border:none;"><option></option></select>
  </span>
  <span style="padding:2px;margin-right:-2px;"  data-toggle="tooltip" title="Fecha gestión" data-placement="bottom"><img src="/.img/agenda.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="padding:2px;margin-right:-2px;">
  <span class="dropdown">
        <span class="dropdown-toggle" data-toggle="dropdown">Gestion&#x25BE;</span>
        <ul class="dropdown-menu noshadow dont-go inputs" style="position:absolute;left:-20px;margin-top:2px;">
            <div style="margin-top:5px;">
            <span class="button" style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Desde</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.fecha_gestion1" style="width:95px;font-size:10px;background:none;"></span>
            </span>  
          </div>
            <div style="margin-top:5px;">
            <span class="button"  style="margin:5px;">
              <span style="padding:2px;color:#aaa;">Hasta</span>
              <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;"><input type="date"  ng-model="complejo.fecha_gestion2"  style="width:97px;font-size:10px;background:none;"></span>
            </span>  
          </div>
   </ul>
      </span>
    </span>
        <span data-toggle="tooltip" title="Borrar" data-placement="bottom"  ng-click="complejo={};complejo.reportes='todos';complejo.movimiento='todos'" style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><img src="/.img/borrar.png" style="width:13px;height:13px;margin-left:2px;margin-top:-3px;"></span>
    </span> 
  </span>
</div>

<div style="top:115px;position:absolute;width:100%;overflow-x:scroll;height:250px;" class="tablon">
  <div style="width:1100px;">
  <table class="with-ellipsis"  ng-init="limite=20;orden='documento';" style="z-index:1;position:absolute;width:1100px;" >
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
  <table class="with-ellipsis" style="position:absolute;z-index:0;width:1100px;">
      <thead>
      <tr>
        <td ng-repeat="s in [1,2,3,4,5,6,7,8,9,10,11]" style="width:100px;"></td>
      </tr>
    </thead>
      <tbody>
      <tr ng-repeat="q in largotabla">
        <td ng-repeat="s in [1,2,3,4,5,6,7,8,9,10,11]" style="width:100px;"></td>
      </tr>
    </tbody>
  </table>
</div>
<!--
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
      <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;margin-top:9px;height:500px;overflow-y:auto;width:200px;">
        <li>
          <button class="btn btn-default" onclick="$('.css-checkbox').click()" style="width:100%;font-size:10px;color:#4574a9;padding:2px;">Todos</button>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.deudor.documento" ng-init="campo.deudor.documento=true" class="css-checkbox" id="check1"><label class="css-label" for="check1" style="font-size:12px;font-weight:normal;">Numero de documento</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.deudor.apellido" ng-init="campo.deudor.apellido=true" class="css-checkbox" id="check2"><label class="css-label" for="check2" style="font-size:12px;font-weight:normal;">Apellido</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.deudor.mail" ng-init="campo.deudor.mail=true" class="css-checkbox" id="check3"><label class="css-label" for="check3" style="font-size:12px;font-weight:normal;">Mail</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.deudor.responsable" ng-init="campo.deudor.responsable=true" class="css-checkbox" id="check4"><label class="css-label" for="check4" style="font-size:12px;font-weight:normal;">Responsable</label></div>

          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.producto.deuda_total" ng-init="campo.producto.deuda_total=true" class="css-checkbox" id="check17"><label class="css-label" for="check17" style="font-size:12px;font-weight:normal;">Deuda total</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.producto.estado" ng-init="campo.producto.estado=true" class="css-checkbox" id="check5"><label class="css-label" for="check5" style="font-size:12px;font-weight:normal;">Estado</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.producto.sub_estado" ng-init="campo.producto.sub_estado=true" class="css-checkbox" id="check6"><label class="css-label" for="check6" style="font-size:12px;font-weight:normal;">Sub estado</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.producto.banco" ng-init="campo.producto.banco=true" class="css-checkbox" id="check7"><label class="css-label" for="check7" style="font-size:12px;font-weight:normal;">Banco</label></div>

          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.telefono.telefono" ng-init="campo.telefono.telefono=true" class="css-checkbox" id="check8"><label class="css-label" for="check8" style="font-size:12px;font-weight:normal;">Telefono</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.telefono.calificacion" ng-init="campo.telefono.calificacion=true" class="css-checkbox" id="check16"><label class="css-label" for="check16" style="font-size:12px;font-weight:normal;">Calificacion telefono</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.telefono.comentario" ng-init="campo.telefono.comentario=true" class="css-checkbox" id="check9"><label class="css-label" for="check9" style="font-size:12px;font-weight:normal;">Descripcion</label></div>
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
      <input type="text" ng-model="complejo.apellido" placeholder="Apellido..." ng-keypress="enter($event.keyCode)" class="form-control" style="border-color:#aaa;height:25px;font-size:10px;border-right:0px;">
      <span class="input-group-addon dropdown" style="border:0px;border-top:1px solid #aaa;border-bottom:1px solid #aaa;height:24px;font-size:11px;background:white;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">&#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="text" placeholder="A..." class="form-control" ng-model="complejo.apellido1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="text"  placeholder="Z..." class="form-control" style="border-radius:0px;" ng-model="complejo.apellido2">
          </li>
        </ul>
      </span>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Documento &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Entre</span>
            <input type="number" class="form-control" ng-model="complejo.documento1" ng-keypress="enter($event.keyCode)">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">y</span>
            <input type="number" class="form-control" style="border-radius:0px;" ng-model="complejo.documento2" ng-keypress="enter($event.keyCode)">
          </li>
        </ul>
      </span>
      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;">Banco</span>
      <select class="form-control" placeholder="Nombre del archivo" style="border-radius:0px;border-color:#aaa;height:25px;font-size:10px" ng-model="complejo.banco" ng-options="banco as banco.banco for banco in bancos"><option></option></select>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Agenda &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.agenda1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.agenda2">
          </li>
        </ul>
      </span>
    <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;">Responsable</span>
      <select class="form-control" placeholder="Nombre del archivo" style="border-radius:0px;border-color:#aaa;height:25px;font-size:10px" ng-model="complejo.responsable" ng-options="responsable as responsable.user for responsable in usuarios"><option></option></select>
      <span class="btn input-group-addon" style="border-radius:0px;color:black;background:#fff;border-color:#aaa;height:24px;font-size:11px;" ng-click="complejo={};complejo.reportes='todos';complejo.movimiento='todos';complejo.contactado='todos';">Limpiar</span>
    </span>  

  </div>
  <div class="navbar-header pull-left" id="myNavbar" style="margin-left:-20px;">
    <span class=" input-group" style="width:100%;">
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de ingreso &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-left dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_ingreso1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_ingreso2">
          </li>
        </ul>
      </span>  
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de mora &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-left dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_mora1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_mora2">
          </li>
        </ul>
      </span> 
       <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Monto de deuda &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Entre</span>
            <input type="number" class="form-control" ng-model="complejo.deuda1" ng-keypress="enter($event.keyCode)">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">y</span>
            <input type="number" class="form-control" style="border-radius:0px;" ng-model="complejo.deuda2" ng-keypress="enter($event.keyCode)">
          </li>
        </ul>
      </span>
      
      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.reportes=='todos'" ng-init="complejo.reportes='todos'" ng-click="complejo.reportes='con'">Con o sin datos enriquecidos</span>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.reportes=='con'" ng-dblclick="complejo.reportes='sin'">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Con datos enriquecidos &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Pedidos entre</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_reporte1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">y</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_reporte2">
          </li>
        </ul>
      </span>
      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.reportes=='sin'" ng-click="complejo.reportes='todos'">Sin datos enriquecidos</span>

      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.movimiento=='todos'" ng-init="complejo.movimiento='todos'" ng-click="complejo.movimiento='con'">Con o sin movimiento</span>
      <span class="input-group-addon btn" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.movimiento=='con'" ng-click="complejo.movimiento='sin'">
Con movimiento
      </span>
      <span class="input-group-addon btn" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.movimiento=='sin'" ng-click="complejo.movimiento='todos'">
       Sin movimiento
    </span>  

  </div>
  <div class="navbar-header pull-left" id="myNavbar" style="margin-left:-20px;">
    <span class=" input-group" style="width:100%;">
      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;">Estado</span>
      <select class="form-control" placeholder="Nombre del archivo" style="border-radius:0px;border-color:#aaa;height:25px;font-size:10px" ng-model="complejo.estado" ng-options="estado as estado.estado for estado in estados" ><option></option></select>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de estado &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_estado1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_estado2">
          </li>
        </ul>
      </span>
      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;">Sub estado</span>
      <select class="form-control" placeholder="Nombre del archivo" style="border-radius:0px;border-color:#aaa;height:25px;font-size:10px" ng-model="complejo.sub_estado" ng-options="sub_estado as sub_estado.sub_estado for sub_estado in sub_estados" ><option></option></select>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de sub estado &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_sub_estado1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_sub_estado2">
          </li>
        </ul>
      </span>
    </span>
  </div>
    <div class="navbar-header pull-left input-group" id="myNavbar" style="margin-left:-20px;">
     <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.contactado=='todos'" ng-init="complejo.contactado='todos'" ng-click="complejo.contactado='con'">Con o sin contacto</span>
      <span class="input-group-addon" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.contactado=='con'" ng-click="complejo.contactado='sin'">
Contactados
      </span>
      <span class="input-group-addon btn" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.contactado=='sin'" ng-click="complejo.contactado='todos'">
        Sin contacto
      </span>
      <span class="btn input-group-addon btn" style="border-radius:0px;height:24px;font-size:11px;">Calificacion telefono</span>
      <select class="form-control" placeholder="Nombre del archivo" style="border-radius:0px;border-color:#aaa;height:25px;font-size:10px" ng-model="complejo.calificacion" ng-options="calificacion as calificacion.titulo for calificacion in calificacion_telefonos" ><option></option></select>
      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;">Tipo de gestión</span>
      <select class="form-control" placeholder="Nombre del archivo" style="border-radius:0px;border-color:#aaa;height:25px;font-size:10px" ng-model="complejo.tipo_gestion" ng-options="tipo_gestion as tipo_gestion.tipo for tipo_gestion in tipo_gestion" ><option></option></select>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha gestion &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Entre</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_gestion1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">y</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_gestion2">
          </li>
        </ul>
      </span>
    </span>  
  </div>
  <!--
  <div class="navbar-header pull-left" id="myNavbar" style="margin-left:-20px;">
    <span class=" input-group" style="width:100%;">
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de convenio &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-left dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_convenio1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_convenio2">
          </li>
        </ul>
      </span>  
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Monto de acuerdo &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-left dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Entre</span>
            <input type="number" class="form-control" ng-model="complejo.monto_acuerdo1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">y</span>
            <input type="number" class="form-control" style="border-radius:0px;" ng-model="complejo.monto_acuerdo2">
          </li>
        </ul>
      </span>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de ultimo pago &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-left dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_ult_pago1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_ult_pago2">
          </li>
        </ul>
      </span> 
       <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Fecha de vencimiento de cuota &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-left dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Desde</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_vencimiento_cuota1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">Hasta</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_vencimiento_cuota2">
          </li>
        </ul>
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
  -->
</div>
  <div style="position:absolute;;bottom:5px;text-align:right;font-size:12px">
        
        
    <span class="dropup">
          <span class="button dropdown-toggle" data-toggle="dropdown" style="margin-right:5px;">
          <span><img src="/.img/campos.png" style="width:17px;height:20px;margin-left:2px;margin-top:-3px" data-toggle="tooltip" title="Campos" data-placement="top"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;">Campos</span>
        </span>      <ul class="noshadow dropdown-menu dropdown-menu-right dont-go" style="margin-top:-10px;position:absolute;left:3px;height:320px;width:250px;border-radius:5px;border-color:#ddd;">
        <li>
          <span class="butn" onclick="$('.css-checkbox').click()" style="font-size:12px;font-weight:100;padding:5px;position:absolute;bottom:5px;right:5px;"> Todos</span>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.deudor.documento" ng-init="campo.deudor.documento=true" class="css-checkbox" id="check1"><label class="css-label" for="check1" style="font-size:12px;font-weight:normal;">Numero de documento</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.deudor.apellido" ng-init="campo.deudor.apellido=true" class="css-checkbox" id="check2"><label class="css-label" for="check2" style="font-size:12px;font-weight:normal;">Apellido</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.deudor.mail" ng-init="campo.deudor.mail=true" class="css-checkbox" id="check3"><label class="css-label" for="check3" style="font-size:12px;font-weight:normal;">Mail</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.deudor.responsable" ng-init="campo.deudor.responsable=true" class="css-checkbox" id="check4"><label class="css-label" for="check4" style="font-size:12px;font-weight:normal;">Responsable</label></div>

          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.producto.deuda_total" ng-init="campo.producto.deuda_total=true" class="css-checkbox" id="check17"><label class="css-label" for="check17" style="font-size:12px;font-weight:normal;">Deuda total</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.producto.estado" ng-init="campo.producto.estado=true" class="css-checkbox" id="check5"><label class="css-label" for="check5" style="font-size:12px;font-weight:normal;">Estado</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.producto.sub_estado" ng-init="campo.producto.sub_estado=true" class="css-checkbox" id="check6"><label class="css-label" for="check6" style="font-size:12px;font-weight:normal;">Sub estado</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.producto.banco" ng-init="campo.producto.banco=true" class="css-checkbox" id="check7"><label class="css-label" for="check7" style="font-size:12px;font-weight:normal;">Banco</label></div>

          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.telefono.telefono" ng-init="campo.telefono.telefono=true" class="css-checkbox" id="check8"><label class="css-label" for="check8" style="font-size:12px;font-weight:normal;">Telefono</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.telefono.calificacion" ng-init="campo.telefono.calificacion=true" class="css-checkbox" id="check16"><label class="css-label" for="check16" style="font-size:12px;font-weight:normal;">Calificacion telefono</label></div>
          <div style="padding:5px 0px 0px 5px;"><input type="checkbox" ng-model="campo.telefono.comentario" ng-init="campo.telefono.comentario=true" class="css-checkbox" id="check9"><label class="css-label" for="check9" style="font-size:12px;font-weight:normal;">Descripcion</label></div>
          
        </li>
      </ul>
    </span>
          <span class="button" ng-click="descargar()">
          <span style="padding:8px;"><img src="/.img/xlsx.png" style="width:15px;height:15px;margin-left:-8px;margin-top:1px;position:absolute;" data-toggle="tooltip" title="Exportar" data-placement="top"></span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;">Exportar</span>
        </span> 
        <span class="button">
          <span style="padding:8px;">Resultados</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;">{{tabla.length}}</span>
        </span> 
        <span class="button" span ng-show="complejo.movimiento=='con'">
          <span style="padding:8px;">Total en pesos</span>
          <span style="border-left:1px solid #ddd;padding:2px 5px 2px 5px;margin-right:-2px;">${{total_pesos | number:2}}</span>
        </span> 
  </div>
  <script>
    function dateTransform(a,b){if(a===Array){a=a.split('-');a=a[2]+'/'+a[1]+'/'+a[0];}else{if(a[0][b]){for(var i in a){a[i][b]=a[i][b].split('-');a[i][b]=a[i][b][2]+'/'+a[i][b][1]+'/'+a[i][b][0];}}}return a;}
var produtos, producto;var counted;
angular.module('exporte',['infinite-scroll',"chart.js"])
.controller('filtro', function($scope, $http, $timeout) {
  var _=$scope;
    _.mostrar='rapida';
        _.largotabla=[1,2,3,4,5,6,7,8,9,10,11,12,13];

  $http.post('php/bancos.php').then(function(res){_.bancos=res.data;});//Obtencion de los bancos
    $http.post('php/usuarios.php').then(function(res){_.usuarios=res.data;});//Obtencion de los usuarios
    $http.post('php/proximas-acciones.php').then(function(res){_.proximas_acciones=res.data;});//Obtencion de las proximas acciones
    $http.post('php/estados.php').then(function(res){_.estados=res.data;});//Obtencion de los estados
    $http.post('php/sub_estados.php').then(function(res){_.sub_estados=res.data;});//Obtencion de los estados
    $http.post('php/tipo_gestion.php').then(function(res){_.tipo_gestion=res.data;});//Obtencion de los tipos
    $http.post('php/calificacion-telefonos.php').then(function(res){_.calificacion_telefonos=res.data;});//Obtencion de las calificaciones
    _.bajar=function(){
      _.limite=_.limite+1;
      _.largotabla.push(_.largotabla.length+1);
      _.largotabla.slice(1,_.limite-3);
    };
    _.enter = function (e){
          if(e.keyCode==13){
            _.buscar.complejo();
          }
        
        };
  _.buscar={  rapido: function (){
          $http.post('php/buscar-rapido.php', {campos : _.campo, filtro:_.rapido}).then(function(res){
            _.tabla=res.data;
            dateTransform(_.tabla, 'fecha_mora');
            dateTransform(_.tabla, 'fecha_deuda');
            dateTransform(_.tabla, 'fecha_ult_cobro');
            
          });
        },
        complejo: function (){
          $http.post('php/buscar-complejo.php', {campos : _.campo, filtro:_.complejo}).then(function(res){
          _.limite=0;
          _.volver=0;
            _.tabla=res.data;
            dateTransform(_.tabla, 'fecha_mora');
            dateTransform(_.tabla, 'fecha_deuda');
            dateTransform(_.tabla, 'fecha_ult_cobro');
            dateTransform(_.tabla, 'agenda');
            $timeout(function (){_.activar();});
            _.total_pesos=0;
            _.grafico={};
            _.grafico.sub_estados=[];
            for (var i in _.tabla){
            _.total_pesos = parseFloat(_.total_pesos)+parseFloat(_.tabla[i].deuda_total);
            _.grafico.sub_estados.push(_.tabla[i].Sub_estado);
          }

                      _.labels = [];
                      _.data=[];
                      _.Sub_estados =contar_array(_.grafico.sub_estados);
                      for(var key in _.Sub_estados){
                        if(key=='null'){}else{
                        _.labels.push(key);
                        _.data.push(_.Sub_estados[key]);
                      }
                    } 
                      
          });
        }
  };

    _.elegir=function (d){$("tr").css('background','white');
                            $("#"+d).css('background','#dfc');
                                window.open('../../gestion-de-cobranzas/manual/datos/?d='+d, d,'height=400, width=650, left=300, top=100, resizable=no, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');
                          };
              
  _.descargar = function (){
    for (var i in _.tabla){
      delete _.tabla[i]['$$hashKey']
    }
    exportar(_.tabla, 'telefonos_exportados.xlsx')
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
});


function contar_array(array){
  var counts = {};
    array.forEach(function(x) { counts[x] = (counts[x] || 0)+1; });
    return counts;
}

$(document).on('click', '.dont-go', function (e) {
  e.stopPropagation();
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

  const remote = require('electron').remote;
var resize = remote.require('./main').resize;
resize(800,400);
  </script>
  </body>
</html>
