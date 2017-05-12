<?php
session_start();
$operador= $_SESSION['id'];
$usuario = $_SESSION['user'];
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: ../");
}
$date = getdate();
?>
<!DOCTYPE html>
<html lang="es">

  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="css/tooltip-view.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="/.css/signin.css"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/.js/FileSaver.min.js"></script>
	<script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script type="text/javascript" src="/.js/angular-filter.min.js"></script>
  <script type="text/javascript" src="/.js/socket.io.js"></script>
  <script type="text/javascript" src="/.js/ngsocket.io.js"></script>
	<script type="text/javascript" src="/.js/tooltip-viewport.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

table tr td{
  text-align: left;
  margin:5px;
}
</style>
	<script src="js/app.js"></script>
  <?php echo "<script> var usuario = '$usuario' , operador = '$operador'</script>"; ?>
  </head>

<body>
<nav class="navbar navbar-default navbar-static-top">
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
        <li><a href="/inicio">Inicio</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campañas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/campanias/ver">Ver</a></li>
                <li><a href="/gerencia/campanias/generar">Generar</a></li>
                <li><a href="/gerencia/campanias/grupos">Grupos</a></li>              
              </ul></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/panel/gestiones">Gestiones</a></li>
                <li><a href="/gerencia/panel/estadisticas">Estadisticas</a></li>          
              </ul>
        </li>      
        
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/gerencia/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación Masiva</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/modificacion/productos">Productos</a></li>
                  <li><a tabindex="-1" href="/gerencia/modificacion/deudores">Deudores</a></li>
                </ul>
              </li>
              <li><a class="ventana" href="/gerencia/baja/">Cambio de Estado</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/gerencia/carga/enriquecer">Telefonos / Emails</a></li>
                  <li><a href="/gerencia/carga/reportes">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Gestión de Cobranzas<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/gestion-de-cobranzas/manual">Manual</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/campania">Campaña</a></li>
              <li><a href="#">Automática</a></li>  
              <li><a href="/gerencia/gestion-de-cobranzas/consultas">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cargar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/carga/gestiones-automaticas">Gestiones Automáticas</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Exporte<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/exportar/casos">Casos</a></li>
              <li><a href="/gerencia/exportar/telefonos">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/exportar/sms">SMS</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails">Mails</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails">IVR</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Informes</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/exportar/propuestas">Propuestas</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/cuotas_cero">Cuotas Cero</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/administracion/responsables">Responsables</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">ABMS</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/usuarios">Operadores</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/bancos">Bancos</a></li>
                  <!--<li><a tabindex="-1" href="/gerencia/administracion/abms/estados">Estados</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/sub-estados">Sub Estados</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/calificaciones">Calificaciones</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/motivos">Motivos</a></li>-->
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/liquidadores">Liquidadores</a></li>
                </ul>
              </li>
        </ul>
        </li>
      <ul class="nav navbar-nav navbar-right">
        <li id="logout"><a href="/.php/logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" ng-app="myApp"> 
	<div ng-controller="busqueda" class="izquierda">
	<div class="borde-abajo">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a ng-click="filtro()">Filtro</a></li>
        <li role="presentation"><a ng-click="deudor()">Deudor</a></li>
        <li role="presentation"><a ng-click="productos()">Productos</a></li>
        <li role="presentation"><a ng-click="gestion()">Gestión</a></li>
      </ul>
	</div>
	<div class="tabla">
		<table class="table table-condensed">
			<tr>
				<td>Apellido</td>
				<td>Documento</td>
				<td>Estado</td>
			</tr>
			<tr ng-repeat="deudor in data.listado" ng-click="data.seleccionar(deudor.documento)" id="{{deudor.documento}}" class="deudores" title="Nombre:{{deudor.apellido}}&#10;Documento:{{deudor.documento}}&#10;Estado:{{deudor.estado}}&#10;Banco:{{deudor.dbanco}}">
				<td>{{deudor.apellido}}</td>
				<td>{{deudor.documento}}</td>
				<td>{{deudor.estado}}</td>
			</tr>
      <tr><td>Casos:</td><td>{{data.listado.length}}</td></tr>
		</table>
    <div style="text-align:center;"><img src="/.img/loading.gif" ng-show="data.loading"></div>
	</div>
	</div>
	<div ng-controller="filtro" class="filtro derecha-fixed">
		<div class="borde-abajo">
      <ul class="nav nav-tabs" role="tablist">
        <li><label ng-click="buscar.rapido()" class="btn btn-primary btn-left nb-right" ng-show="filtro=='rapido'">Buscar</label></li>
        <li><label ng-click="buscar.complejo()" class="btn btn-primary btn-left nb-right" ng-show="filtro=='complejo'">Buscar</label></li>
        <li role="presentation"><label ng-click="filtro='rapido'" class="btn btn-default btn-center nb-both">Rápido</label></li>
        <li role="presentation"><label ng-click="filtro='complejo'" class="btn btn-default btn-right nb-left">Complejo</label></li>
      </ul>
    </div>
  <div class="tabla">
		<div class="form-group" ng-show="filtro=='rapido'" style="width:90%; margin:auto;">
    <div style="margin-top:35px;">
      <div>
        <label for="rapido-documento" class="btn btn-left boton-s">Documento</label><input type="number" class="btn btn-right input-s" id="rapido-documento" placeholder="Documento..." ng-model="rapido.documento" ng-keypress="enter($event.keyCode)">
      </div>
      <div>
        <label for="rapido-apellido" class="btn btn-left boton-s">Apellido</label><input type="text" class="btn btn-right input-s" id="rapido-apellido" placeholder="Apellido..." ng-model="rapido.apellido" ng-keypress="enter($event.keyCode)">
      </div>
      <div>
        <label for="rapido-telefono" class="btn btn-left boton-s">Telefono</label><input type="text" class="btn btn-right input-s" id="rapido-telefono" placeholder="Teléfono..." ng-model="rapido.telefono" ng-keypress="enter($event.keyCode)">
      </div>
  </div>
  </div>
  <div class="form-group" ng-show="filtro=='complejo'" style="width:90%;margin:auto;" >
  <div class="grupo" style="margin-top:20px;">
  <div class="encabezado">Agenda</div>
  <div>
  <label class="btn btn-center boton-s">Desde</label><input class="btn btn-center input-date-s" type="date"  ng-model="complejo.agenda1" ng-keypress="enter($event.keyCode)">
  </div>
  <div>
  <label class="btn btn-center boton-s">Hasta</label><input class="btn btn-center input-date-s" type="date"  ng-model="complejo.agenda2" ng-keypress="enter($event.keyCode)">
  </div>
  </div>
  <br>
  <div class="grupo" style="margin-top:20px;">
  <div class="encabezado">Documento</div>
  <div class="margen-top">
  <label class="btn btn-center boton-s">Desde</label><input class="btn btn-center input-date-s" type="number" ng-model="complejo.documento1" placeholder="Documento..." ng-keypress="enter($event.keyCode)">
  </div>
  <div class="margen-top">
  <label class="btn btn-center boton-s">Hasta</label><input class="btn btn-center input-date-s" type="number" ng-model="complejo.documento2" placeholder="Documento..." ng-keypress="enter($event.keyCode)">
  </div>
  </div>
  <br>
      <div class="margen-top">
      <label for="complejo-apellido" class="btn btn-left boton-s">Apellido</label><input type="text" class="btn btn-right input-s" id="complejo-apellido" ng-model="complejo.apellido" placeholder="Apellido..." ng-keypress="enter($event.keyCode)">
      </div>
      <div class="margen-top">
        <label for="complejo-banco" class="btn btn-left boton-s" type="button">Banco</label><select ng-model="complejo.banco" ng-options="banco as banco.dbanco for banco in data.bancos" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
      </div>
      <div class="margen-top">
        <label for="complejo-responsable" class="btn btn-left boton-s" type="button">Responsable</label><select type="text" ng-model="complejo.responsable" ng-options="responsable as responsable.user for responsable in data.usuarios" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
      </div>
      <div class="margen-top">
        <label for="complejo-apellido" class="btn btn-left boton-s">Número gestión</label><input type="text" class="btn btn-right input-s" id="complejo-apellido" ng-model="complejo.numero_gestion" placeholder="Gestión..." ng-keypress="enter($event.keyCode)">
      </div>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Fecha de ingreso</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input class="btn btn-center input-date-s" type="date" ng-model="complejo.fecha_ingreso1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input class="btn btn-center input-date-s" type="date" ng-model="complejo.fecha_ingreso2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Fecha de mora</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input class="btn btn-center input-date-s" ng-model="complejo.fecha_mora1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input class="btn btn-center input-date-s" ng-model="complejo.fecha_mora2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Monto de deuda</div>
        <div>
          <label class="btn btn-center boton-c">Desde</label><label class="btn btn-center symbol">$</label><input class="btn btn-center input-c" type="number" ng-model="complejo.deuda1" placeholder="Monto..." ng-keypress="enter($event.keyCode)">
        </div>
        <div>
          <label class="btn btn-left boton-c">Hasta</label><label class="btn btn-center symbol">$</label><input class="btn btn-right input-c" type="number" ng-model="complejo.deuda2" placeholder="Monto..." ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Fecha de estado</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input type="date" class="btn btn-center input-date-s" ng-model="complejo.fecha_estado1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input type="date"  class="btn btn-center input-date-s" ng-model="complejo.fecha_estado2" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
        <label for="complejo-banco" class="btn btn-left boton-s" type="button">Estado</label><select type="text" ng-model="complejo.estado" ng-options="estado as estado.estado for estado in data.estados" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">
          <button class="btn btn-default" ng-show="movimiento=='con'" ng-init="movimiento='con'" ng-click="movimiento='sin'">Con</button>
          <button class="btn btn-default" ng-show="movimiento=='sin'" ng-click="movimiento='con'">Sin</button>
           Movimiento</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input class="btn btn-center input-date-s" ng-model="complejo.fecha_mora1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input class="btn btn-center input-date-s" ng-model="complejo.fecha_mora2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Fecha de convenio</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input type="date" class="btn btn-center input-date-s" ng-model="complejo.fecha_convenio1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input type="date"  class="btn btn-center input-date-s" ng-model="complejo.fecha_convenio2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Monto de acuerdo</div>
        <div>
          <label class="btn btn-center boton-c">Desde</label><label class="btn btn-center symbol">$</label><input class="btn btn-center input-c" type="number" ng-model="complejo.acuerdo1" placeholder="Monto..." ng-keypress="enter($event.keyCode)">
        </div>
        <div>
          <label class="btn btn-left boton-c">Hasta</label><label class="btn btn-center symbol">$</label><input class="btn btn-right input-c" type="number" ng-model="complejo.acuerdo2" placeholder="Monto..." ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Fecha de ultimo pago</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input type="date" class="btn btn-center input-date-s" ng-model="complejo.fecha_ultimo_pago1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input type="date"  class="btn btn-center input-date-s" ng-model="complejo.fecha_ultimo_pago2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Fecha de vencimiento de cuota</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input type="date" class="btn btn-center input-date-s" ng-model="complejo.fecha_vencimiento_cuota1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input type="date"  class="btn btn-center input-date-s" ng-model="complejo.fecha_vencimiento_cuota2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">
          <button class="btn btn-default" ng-show="complejo.reportes=='todos'" ng-init="complejo.reportes='todos'" ng-click="complejo.reportes='con'">Con o sin</button>
          <button class="btn btn-default" ng-show="complejo.reportes=='con'" ng-click="complejo.reportes='sin'">Con</button>
          <button class="btn btn-default" ng-show="complejo.reportes=='sin'" ng-click="complejo.reportes='todos'">Sin</button>
           Datos Enriquecidos</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input class="btn btn-center input-date-s" ng-model="complejo.fecha_reporte1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input class="btn btn-center input-date-s" ng-model="complejo.fecha_reporte2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="margen-top">
        <label for="complejo-banco" class="btn btn-left boton-s" type="button">Estado</label><select ng-model="complejo.estado" ng-options="estado as estado.estado for estado in data.estados" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
      </div>
      <div class="margen-top">
        <label for="complejo-banco" class="btn btn-left boton-s" type="button">Sub estado</label><select ng-model="complejo.sub_estado" ng-options="sub_estado as sub_estado.sub_estado for sub_estado in data.sub_estados" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
      </div>
  </div>
	<div ng-controller="gestion" class="gestion derecha">
    <div class="tabla">
    <div style="width:90%;margin:auto;">
    <div>
    <label class="btn encabezado" style="width:100%;color:white;background:{{color}};">{{gestion.horas}}:{{gestion.minutos}}:{{gestion.segundos}}</label>
    </div>
    <div class="margen-top">
    <label class="btn btn-izquierda boton-s" style="background:{{color}};border-radius:5px 0px 0px 0px;">Deudor</label><label class="btn btn-derecha input-s" style="border:0px;">&nbsp;{{data.deudor.apellido}}</label>
    </div>
    <div>
      <label class="btn btn-izquierda boton-s" style="background:{{color}};border-radius:0px 0px 0px 5px;margin-top:-5px;">Banco</label><label class="btn btn-derecha input-s" style="border:0px;">&nbsp;{{data.gestion.banco}}</label>
    </div>
    <div ng-show="!comenzar_gestion">
        <label class="btn btn-primary btn-down" ng-click="comenzar_gestion=1;hora();gestion= {horas:0,minutos:0,segundos:0};avanzar();" ng-show="data.gestion.banco">Comenzar gestión</label>
    </div>
    <div ng-show="comenzar_gestion" class="gestion">
		    <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}};">Tipo de gestión</label><select class="btn btn-right input-s"  ng-model="gestion.tipo_gestion" ng-options="tipo as tipo.tipo for tipo in data.tipo_gestion" id="tipo_gestion"></select>
      </div>
        <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Teléfono</label><select class="btn btn-right input-s" id="telefonos" ng-model="gestion.telefono" ng-options="telefono as telefono.numero for telefono in data.telefonos" ng-change="gestion.calificacion=gestion.telefono.calificacion"></select>
        </div>
        <div class="margen-top">
        <label class="btn btn-left boton-s"  style="background:{{color}}">Comentario</label><input type="text" class="btn btn-right input-s" placeholder="Comentario..." ng-model="gestion.comentario"><br>
        </div>
        <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Sub estado</label><select type="text" ng-model="gestion.sub_estado" ng-options="sub_estado as sub_estado.sub_estado for sub_estado in data.sub_estados" class="btn btn-right input-s"></select>
        </div>
        
      <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Calificar teléfono</label><select class="btn btn-right input-s" ng-model="gestion.calificacion" ng-options="calificacion.id as calificacion.titulo for calificacion in data.calificacion_telefonos" ng-show="gestion.telefono.calificacion==0"></select><select class="btn btn-right input-s" ng-model="gestion.calificacion" ng-options="calificacion.id as calificacion.titulo for calificacion in data.calificacion_telefonos" ng-show="gestion.telefono.calificacion!=0" disabled>
        </select>
      </div>
      <div style="font-size:14px;" class="alert alert-danger" role="alert" ng-show="(!gestion.calificacion || gestion.calificacion==0)">
          La calificacion del telefono es obligatoria. {{banco}}
      </div>
      <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Agenda</label><input type="date" class="btn btn-right input-date-s" ng-model="gestion.agenda"><br>
      </div> 
      <div style="font-size:14px;" class="alert alert-danger" role="alert" ng-show="(gestion.sub_estado.sub_estado=='NEGOCIACION' || gestion.sub_estado.sub_estado=='PROMETE PAGAR' || gestion.sub_estado.sub_estado=='INFORMO PAGO') && !gestion.agenda">
          <strong>¡Atención!</strong> la agenda es obligatoria.
      </div>
      <div class="margen-top">
        <label class="btn btn-down btn-primary" ng-click="liquidar()" style="background:{{color}};border:0px;">Liquidación</button>
      </div>
    <br>
    <label class="btn btn-default" ng-hide="(gestion.sub_estado.sub_estado=='NEGOCIACION' || gestion.sub_estado.sub_estado=='PROMETE PAGAR' || gestion.sub_estado.sub_estado=='INFORMO PAGO') && !gestion.agenda" style="width:100%;" ng-click="comenzar_gestion=0;registrar();color='#337ab7';">Registrar</label>
    </div>
    <br>
    <div  ng-show="data.gestion.banco">
      <label class="btn btn-success" style="border-radius:0px 0px 0px 0px;width:100%;" ng-click="mail()" ng-show="data.deudor.email">Enviar Mail</label><label class="btn btn-success" style="border-radius:0px 0px 0px 0px;width:100%;" ng-hide="data.deudor.email" disabled>Enviar Mail</label>
      <div class="alert alert-danger" ng-hide="data.deudor.email">El deudor no tiene email registrado.</div>
    </div>
    <div ng-show="data.gestion.banco">
      <label class="btn btn-primary" style="border-radius:0px 0px 0px 0px;width:50%;" ng-show="enviar.telefono" ng-click="sms()">Enviar SMS</label><label ng-hide="enviar.telefono" class="btn btn-primary" style="border-radius:0px 0px 0px 0px;width:50%;" disabled>Enviar SMS</label>
      <label class="btn btn-warning" style="border-radius:0px 0px 0px 0px;width:50%;margin-left:-6px;" ng-show="enviar.telefono" ng-click="ivr()">Enviar IVR</label> <label class="btn btn-warning" style="border-radius:0px 0px 0px 0px;width:50%;margin-left:-6px;" ng-hide="enviar.telefono" disabled>Enviar IVR</label>      
    </div>
    <div ng-show="data.gestion.banco">
      <select class="btn btn-default" style="border-radius:0px 0px 0px 5px;width:50%;" ng-model="enviar.telefono" ng-options="telefono as telefono.numero for telefono in data.telefonos" ng-change="enviar.calificacion=enviar.telefono.calificacion"></select> 
      <select class="btn btn-default" ng-model="enviar.calificacion" ng-options="calificacion.id as calificacion.titulo for calificacion in data.calificacion_telefonos" style="border-radius:0px 0px 5px 0px;width:50%;margin-left:-6px;" disabled></select>      
    </div>

  </div>
  </div>
	  </div>
	<div ng-controller="productos" class="productos derecha">
    <table class="table table-condensed" ng-repeat="banco in data.productos | groupBy: 'banco'">
      <tr class="table-head"><td colspan="3">{{banco[0].dbanco}} <a href="#" ng-click="gestion();data.gestion.banco = banco[0].dbanco; data.gestion.cbanco = banco[0].banco">Gestionar</a> - <a href="#" ng-click="data.descargar_carpeta(banco[0].banco);">Descargar carpeta</a>- <a href="#" ng-click="data.ver_propuesta(banco[0].banco);">Propuesta</a></span>
    </div>
      <tr ng-repeat="producto in banco" class="table-body producto" ng-click="seleccionar(producto.numero_operacion)" id="{{producto.numero_operacion}}">
        <td>{{producto.producto}}</td>
        <td>${{producto.deuda}}</td>
        <td>{{producto.fecha_deuda | date: "dd/MM/yyyy"}}</td>
      </tr>
    </table>
  </div>
    <div ng-controller="producto" class="derecha product">
      <div class="borde-abajo"> 
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"><a ng-click="product='Carpeta'">Carpeta</a></li>
          <li role="presentation"><a ng-click="product='Producto'">Producto</a></li>
          <li role="presentation"><a ng-click="modificar()" class="accion">Modificar</a></li>
        </ul>
      </div>
    <div ng-show="product=='Carpeta'" class="tabla">
    <div>
        <label class="btn btn-left boton-s">Caratula</label><input class="btn btn-right input-s" ng-model="data.producto.caratula">
    </div>
    <div>
        <label class="btn btn-left boton-s">Comentario</label><input class="btn btn-right input-s" ng-model="data.producto.comentario">
    </div>
    <div>
        <label class="btn btn-left boton-s">Sucursal</label><input class="btn btn-right input-s" ng-model="data.producto.sucursal">
    </div>
    <div>
        <label class="btn btn-left boton-s">Dias adic</label><input class="btn btn-right input-s" ng-model="data.producto.dias_adic">
    </div>
    <div>
        <label class="btn btn-left boton-s">Legajo</label><input class="btn btn-right input-s" ng-model="data.producto.legajo">
    </div>
    <div>
        <label class="btn btn-left boton-s">Número de gestion</label><input class="btn btn-right input-s" ng-model="data.producto.numero_gestion">
    </div>
    <div>
        <label class="btn btn-left boton-s">Número de lote</label><input class="btn btn-right input-s" ng-model="data.producto.numero_lote">
    </div>
    </div>
    <div ng-show="product=='Producto'" class="tabla">
      
    <div>
        <label class="btn btn-left boton-s">Producto</label><input class="btn btn-right input-s" ng-model="data.producto.producto">
    </div>
    <div>
        <label class="btn btn-left boton-s">Nombre de producto</label><input class="btn btn-right input-s" ng-model="data.producto.nombre_producto">
    </div>
      <div>
        <label class="btn btn-left boton-c">Deuda</label><label class="btn btn-center symbol">$</label><input class="btn btn-right input-c" ng-model="data.producto.deuda">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha Deuda</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_deuda">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha Mora</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_mora">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha ultimo cobro</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_ult_cobro">
    </div>
      <div>
        <label class="btn btn-left boton-s">Pase legales</label><input class="btn btn-right input-s" ng-model="data.producto.pase_legales">
    </div>
      <div>
        <label class="btn btn-left boton-s">Estado</label><select class="btn btn-right input-s" ng-model="data.producto.estado" ng-options="estado.id as estado.estado for estado in data.estados"></select>
    </div>
      <div>
        <label class="btn btn-left boton-s">Sub Estado</label><select class="btn btn-right input-s" ng-model="data.producto.sub_estado" ng-options="sub_estado.id as sub_estado.sub_estado for sub_estado in data.sub_estados"></select>
    </div>
      <div>
        <label class="btn btn-left boton-s">Banco</label><select class="btn btn-right input-s" ng-model="data.producto.banco" ng-options="banco.cbanco as banco.dbanco for banco in data.bancos"></select>
    </div>
    </div>
  </div>
	<div ng-controller="deudor" class="deudor derecha">
		<div class="borde-abajo"> 
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a ng-click="deudor='Deudor'">Deudor</a></li>
        <li role="presentation"><a ng-click="deudor='Domicilios'">Domicilios</a></li>
        <li role="presentation"><a ng-click="deudor='Telefonos'">Telefonos</a></li>
        <li role="presentation"><a ng-click="modificar()" class="accion">Modificar</a></li>
        <li role="presentation"><a ng-click="ver_gestion()" class="accion">Gestion</a></li>
        <li role="presentation" ng-show="data.deudor.link"><a target="_blank" href="{{data.deudor.link}}" class="accion">Reporte</a></li>
      </ul>
		</div>
		<div ng-show="deudor=='Deudor'">
      <div>
        <label class="btn btn-left boton-s">Documento</label><input class="btn btn-right input-s" ng-model="data.deudor.documento">
    </div>
      <div>
        <label class="btn btn-left boton-s">Tipo documento</label><input class="btn btn-right input-s" ng-model="data.deudor.tipo_documento">
    </div>
      <div>
        <label class="btn btn-left boton-s">Apellido</label><input class="btn btn-right input-s" ng-model="data.deudor.apellido">
    </div>
    <div>
        <label class="btn btn-left boton-s">Email</label><input class="btn btn-right input-s" ng-model="data.deudor.email">
    </div>
    <div>
        <label class="btn btn-left boton-s">Empresa</label><input class="btn btn-right input-s" ng-model="data.deudor.empresa">
    </div>
    </div>
		<div ng-show="deudor=='Domicilios'" class="tabla">
    <div>
        <label class="btn btn-left boton-s">Direccion laboral 1</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_laboral">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion laboral 2</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_laboral2">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 1</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 2</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular2">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 3</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular1">
    </div>
      <div>
        <label class="btn btn-left boton-s">Provincia</label><input class="btn btn-right input-s" ng-model="data.deudor.provincia">
    </div>
      <div>
        <label class="btn btn-left boton-s">Localidad</label><input class="btn btn-right input-s" ng-model="data.deudor.localidad">
    </div>
    <div>
        <label class="btn btn-left boton-s">Codigo Postal</label><input class="btn btn-right input-s" ng-model="data.deudor.codigo_postal">
    </div>
    </div>
		<div ng-show="deudor=='Telefonos'" class="tabla">
      <div class="grupo" style="margin-top:15px;">
        <div class="encabezado">Agregar telefono</div>
        <div class="margen-top">
          <label class="btn btn-left boton-s">Numero</label><input type="number" ng-model="data.telefono_nuevo.numero" placeholder="Nuevo numero..." class="btn btn-right input-s">
        </div>
        <div class="margen-top">
          <label class="btn btn-left boton-s">Comentario</label><input type="text" ng-model="data.telefono_nuevo.comentario" placeholder="Comentario..."  class="btn btn-right input-s">
        </div>
        <div class="margen-top">
          <label class="btn btn-primary btn-down" ng-click="agregar_telefono()">Agregar</label>
        </div>
      </div>
      <div ng-repeat="(n,telefono) in data.telefonos" class="grupo" style="margin-top:20px;">
        <div class="encabezado">Telefono {{n+1}}</div>
        <div class="margen-top">
          <label class="btn btn-center boton-s">Numero</label><input class="btn btn-center input-date-s" ng-model="telefono.numero">
        </div>
        <div class="margen-top">
          <label class="btn btn-center boton-s">Comentario</label><input class="btn btn-left input-date-s" ng-model="data.telefonos[n].comentario">

        </div>
      <div class="margen-top">
        <label class="btn btn-primary btn-down" ng-click="modificar_telefono(n)">Modificar</label>
      </div>
      </div>
    </div>
	</div>
  <div class="control" ng-controller="control">
  {{data.control}} </div>
</div>
</body>
</html>