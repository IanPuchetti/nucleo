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
	<link rel="stylesheet" href="/.css/signin.css"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
	<script type="text/javascript" src="/.js/icg-json-to-xlsx.js"></script>
  <script type="text/javascript" src="/.js/jszip.min.js"></script>
  <script type="text/javascript" src="/.js/xlsx.min.js"></script>
  <script type="text/javascript" src="/.js/lodash.min.js"></script>
  <script type="text/javascript" src="/.js/FileSaver.js"></script>
  <script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script type="text/javascript" src="/.js/ng-infinite-scroll.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
<style>
body{
  background:#fff;
}


table thead tr th{
  font-weight:400;
  border-right:1px solid #fff;
  padding:5px;
  font-size:12px;
  cursor:pointer;
}
table tbody tr{
      background:rgba(100,100,100,0.9); 

}
table tbody tr:hover{
  background:rgba(100,100,100,0.7);
}

table td{
    border:1px solid #aaa;
    color:white;
    padding:5px;
    font-size:10px;

}

table{
width:100%;
max-height:300px;

}

.flechita{
  color:#666;
}

.btn, .input-group-addon, .form-control{
  border-radius:0px;
}
</style>
</head>
<body ng-app="exporte" ng-controller="filtro">
<nav class="navbar  navbar-static-top navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/inicio" class="ventana">Inicio</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Cobranzas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/general/gestion-de-cobranzas/manual" class="ventana">Manual</a></li>
                <li><a href="/general/gestion-de-cobranzas/campania" class="ventana">Campaña</a></li>   
                <li><a href="/general/gestion-de-cobranzas/consultas" class="ventana">Consultas</a></li>              
              </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
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
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exportar<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/general/exportar/casos" class="ventana">Casos</a></li> 
                <li><a href="/general/exportar/telefonos" class="ventana">Telefonos</a></li> 
              </ul>
              </li>      
        <li id="logout"><a href="/.php/logout.php">Salir</a></li>
      
    </div>
  </div>
</nav>
<nav class="navbar  nav2 navbar-default" style="border-bottom:#ddd 1px solid;margin-top:-45px;">
  <div class="navbar-header pull-right" id="myNavbar">
    <span class="dropdown" >
      <span class="dropdown-toggle" type="button" style="border-radius:0px;color:#4574a9;border:0px;padding:10px;cursor:pointer;" data-toggle="dropdown">Campos<span class="caret"></span></span>
      <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;margin-top:9px;height:500px;overflow-y:auto;width:200px;">
        <li>
          <button class="btn btn-default" onclick="$('.css-checkbox').click()" style="width:100%;font-size:10px;color:#4574a9;padding:2px;">Todos</button>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.documento" ng-init="campo.deudor.documento=true" class="css-checkbox" id="check1"><label class="css-label" for="check1" style="font-size:12px;font-weight:normal;">Numero de documento</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.tipo_documento" ng-init="campo.deudor.tipo_documento=true" class="css-checkbox" id="check2"><label class="css-label" for="check2" style="font-size:12px;font-weight:normal;">Tipo de documento</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.apellido" ng-init="campo.deudor.apellido=true" class="css-checkbox" id="check3"><label class="css-label" for="check3" style="font-size:12px;font-weight:normal;">Apellido</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.mail" ng-init="campo.deudor.mail=true" class="css-checkbox" id="check4"><label class="css-label" for="check4" style="font-size:12px;font-weight:normal;">Mail</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.empresa" ng-init="campo.deudor.empresa=true" class="css-checkbox" id="check5"><label class="css-label" for="check5" style="font-size:12px;font-weight:normal;">Empresa</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.deudor.responsable" ng-init="campo.deudor.responsable=true" class="css-checkbox" id="check6"><label class="css-label" for="check6" style="font-size:12px;font-weight:normal;">Responsable</label></div>

          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.sub_estado" ng-init="campo.producto.sub_estado=true" class="css-checkbox" id="check9"><label class="css-label" for="check9" style="font-size:12px;font-weight:normal;">Sub estado</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.banco" ng-init="campo.producto.banco=true" class="css-checkbox" id="check10"><label class="css-label" for="check10" style="font-size:12px;font-weight:normal;">Banco</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.producto" ng-init="campo.producto.producto=true" class="css-checkbox" id="check11"><label class="css-label" for="check11" style="font-size:12px;font-weight:normal;">Producto</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.numero_operacion" ng-init="campo.producto.numero_operacion=true" class="css-checkbox" id="check12"><label class="css-label" for="check12" style="font-size:12px;font-weight:normal;">Numero operacion</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.nombre_producto" ng-init="campo.producto.nombre_producto=true" class="css-checkbox" id="check13"><label class="css-label" for="check13" style="font-size:12px;font-weight:normal;">Nombre producto</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.deuda" ng-init="campo.producto.deuda=true" class="css-checkbox" id="check14"><label class="css-label" for="check14" style="font-size:12px;font-weight:normal;">Deuda</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.moneda" ng-init="campo.producto.moneda=true" class="css-checkbox" id="check15"><label class="css-label" for="check15" style="font-size:12px;font-weight:normal;">Moneda</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.fecha_deuda" ng-init="campo.producto.fecha_deuda=true" class="css-checkbox" id="check16"><label class="css-label" for="check16" style="font-size:12px;font-weight:normal;">Fecha ingreso</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.fecha_mora" ng-init="campo.producto.fecha_mora=true" class="css-checkbox" id="check17"><label class="css-label" for="check17" style="font-size:12px;font-weight:normal;">Fecha mora</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.fecha_ult_cobro" ng-init="campo.producto.fecha_ult_cobro=true" class="css-checkbox" id="check18"><label class="css-label" for="check18" style="font-size:12px;font-weight:normal;">Fecha ult. cobro</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.tipo_gestion" ng-init="campo.producto.tipo_gestion=true" class="css-checkbox" id="check19"><label class="css-label" for="check19" style="font-size:12px;font-weight:normal;">Tipo gestion</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.producto.agenda" ng-init="campo.producto.agenda=true" class="css-checkbox" id="check20"><label class="css-label" for="check20" style="font-size:12px;font-weight:normal;">Agenda</label></div>

          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.carpeta.caratula" ng-init="campo.carpeta.caratula=true" class="css-checkbox" id="check21"><label class="css-label" for="check21" style="font-size:12px;font-weight:normal;">Caratula</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.carpeta.comentario" ng-init="campo.carpeta.comentario=true" class="css-checkbox" id="check22"><label class="css-label" for="check22" style="font-size:12px;font-weight:normal;">Comentario</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.carpeta.sucursal" ng-init="campo.carpeta.sucursal=true" class="css-checkbox" id="check23"><label class="css-label" for="check23" style="font-size:12px;font-weight:normal;">Sucursal</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.carpeta.legajo" ng-init="campo.carpeta.legajo=true" class="css-checkbox" id="check24"><label class="css-label" for="check24" style="font-size:12px;font-weight:normal;">Legajo</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.carpeta.numero_gestion" ng-init="campo.carpeta.numero_gestion=true" class="css-checkbox" id="check25"><label class="css-label" for="check25" style="font-size:12px;font-weight:normal;">Numero de gestión</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.carpeta.numero_lote" ng-init="campo.carpeta.numero_lote=true" class="css-checkbox" id="check26"><label class="css-label" for="check26" style="font-size:12px;font-weight:normal;">Numero de lote</label></div>

          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.domicilios.direccion_laboral" ng-init="campo.domicilios.direccion_laboral=true" class="css-checkbox" id="check27"><label class="css-label" for="check27" style="font-size:12px;font-weight:normal;">Direccion laboral</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.domicilios.direccion_laboral2" ng-init="campo.domicilios.direccion_laboral2=true" class="css-checkbox" id="check28"><label class="css-label" for="check28" style="font-size:12px;font-weight:normal;">Direccion laboral 2</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.domicilios.direccion_particular" ng-init="campo.domicilios.direccion_particular=true" class="css-checkbox" id="check29"><label class="css-label" for="check29" style="font-size:12px;font-weight:normal;">Direccion particular</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.domicilios.direccion_particular2" ng-init="campo.domicilios.direccion_particular2=true" class="css-checkbox" id="check30"><label class="css-label" for="check30" style="font-size:12px;font-weight:normal;">Direccion particular 2</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.domicilios.direccion_particular3" ng-init="campo.domicilios.direccion_particular3=true" class="css-checkbox" id="check31"><label class="css-label" for="check31" style="font-size:12px;font-weight:normal;">Direccion particular 3</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.domicilios.provincia" ng-init="campo.domicilios.provincia=true" class="css-checkbox" id="check32"><label class="css-label" for="check32" style="font-size:12px;font-weight:normal;">Provincia</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.domicilios.localidad" ng-init="campo.domicilios.localidad=true" class="css-checkbox" id="check33"><label class="css-label" for="check33" style="font-size:12px;font-weight:normal;">Localidad</label></div>
          <div style="padding:5px 0px 0px 5px;border-bottom:1px #ddd solid;"><input type="checkbox" ng-model="campo.domicilios.codigo_postal" ng-init="campo.domicilios.codigo_postal=true" class="css-checkbox" id="check34"><label class="css-label" for="check34" style="font-size:12px;font-weight:normal;">Código postal</label></div>
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
      <span class="btn input-group-addon" style="border-radius:0px;color:black;background:#fff;border-color:#aaa;height:24px;font-size:11px;" ng-click="complejo={};complejo.reportes='todos';complejo.movimiento='todos'">Limpiar</span>
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
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.movimiento=='con'" ng-dblclick="complejo.movimiento='sin'">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Con movimiento &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Entre</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_movimiento1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">y</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_movimiento2">
          </li>
        </ul>
      </span>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;" ng-show="complejo.movimiento=='sin'" ng-dblclick="complejo.movimiento='todos'">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Sin movimiento &#x25BE;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px">
          <li>
            <span class="form-control btn btn-default" style="border-radius:0px;height:24px;font-size:11px;margin-top:-5px;">Entre</span>
            <input type="date" class="form-control" ng-model="complejo.fecha_movimiento1">
            <span class="form-control btn btn-default"  style="border-radius:0px;height:24px;font-size:11px;">y</span>
            <input type="date" class="form-control" style="border-radius:0px;" ng-model="complejo.fecha_movimiento2">
          </li>
        </ul>
      </span>
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
    <div class="input-group" style="margin-bottom:-40px;"><span class="input-group-addon">Cantidad de resultados</span><span class="form-control" style="font-size:10px;">{{tabla.length}}</span><span class="input-group-addon">Total en pesos</span><span class="form-control" style="font-size:10px;">${{total_pesos | number:2}}</span></div>
  </body>
</html>
