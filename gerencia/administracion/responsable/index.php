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
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cambio de Estado</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/baja/busqueda">Filtro</a></li>
                  <li><a tabindex="-1" href="/gerencia/baja/xlsx">XLSX</a></li>
                </ul>
              </li>
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
        <li role="presentation"><a ng-click="opciones()">Cambios</a></li>
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
		</table>

    <div style="text-align:center;"><img src="/.img/loading.gif" ng-show="data.loading"></div>
    <table style="position:fixed;bottom:15px;" ng-show="data.listado">
      <tr>
        <td>Resultados</td>
        <td>Prejudiciales</td>
        <td>Judiciales</td>
        <td>Dados de Baja</td>
        <td>Reactivados</td>
      </tr>
      <tr>
        <td>{{data.listado.length}}</td>
        <td>{{(data.listado.estado|filter: 'PREJUDICIALES').length}}</td>
        <td>{{(data.listado.estado|filter: 'JUDICIALES').length}}</td>
        <td>{{(data.listado.estado|filter: 'DADO DE BAJA').length}}</td>
        <td>{{(data.listado.estado|filter: 'REACTIVADO').length}}</td>
      </tr>
    </table>
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
  <div class="form-group" ng-show="filtro=='complejo'" style="width:90%;margin:auto;">
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
        <label for="complejo-banco" class="btn btn-left boton-s" type="button">Banco</label><select type="text" ng-model="complejo.banco" ng-options="banco as banco.dbanco for banco in data.bancos" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
      </div>
      <div class="margen-top">
        <label for="complejo-responsable" class="btn btn-left boton-s" type="button">Responsable</label><select type="text" ng-model="complejo.responsable" ng-options="responsable as responsable.user for responsable in data.usuarios" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"><option></option></select>
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
          <label class="btn btn-center boton-s">Desde</label><input type="date" class="btn btn-center input-date-s" ng-model="complejo.fecha_mora1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input type="date"  class="btn btn-center input-date-s" ng-model="complejo.fecha_mora2" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
        <label for="complejo-banco" class="btn btn-left boton-s" type="button">Estado</label><select type="text" ng-model="complejo.fecha_estado" ng-options="estado as estado.estado for estado in data.estados" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
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
          <label class="btn btn-center boton-s">Desde</label><input type="date" class="btn btn-center input-date-s" ng-model="complejo.fecha_mora1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input type="date"  class="btn btn-center input-date-s" ng-model="complejo.fecha_mora2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Monto de acuerdo</div>
        <div>
          <label class="btn btn-center boton-c">Desde</label><label class="btn btn-center symbol">$</label><input class="btn btn-center input-c" type="number" ng-model="complejo.deuda1" placeholder="Monto..." ng-keypress="enter($event.keyCode)">
        </div>
        <div>
          <label class="btn btn-left boton-c">Hasta</label><label class="btn btn-center symbol">$</label><input class="btn btn-right input-c" type="number" ng-model="complejo.deuda2" placeholder="Monto..." ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Fecha de ultimo pago</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input type="date" class="btn btn-center input-date-s" ng-model="complejo.fecha_mora1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input type="date"  class="btn btn-center input-date-s" ng-model="complejo.fecha_mora2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">Fecha de vencimiento de cuota</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input type="date" class="btn btn-center input-date-s" ng-model="complejo.fecha_mora1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input type="date"  class="btn btn-center input-date-s" ng-model="complejo.fecha_mora2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="grupo" style="margin-top:20px;">
        <div class="encabezado">
          <button class="btn btn-default" ng-show="reportes=='todos'" ng-init="reportes='todos'" ng-click="reportes='con'">Con o sin</button>
          <button class="btn btn-default" ng-show="reportes=='con'" ng-click="reportes='sin'">Con</button>
          <button class="btn btn-default" ng-show="reportes=='sin'" ng-click="reportes='todos'">Sin</button>
           Reporte</div>
        <div>
          <label class="btn btn-center boton-s">Desde</label><input class="btn btn-center input-date-s" ng-model="complejo.fecha_mora1" ng-keypress="enter($event.keyCode)">
        </div>
        <div>
         <label class="btn btn-center boton-s">Hasta</label><input class="btn btn-center input-date-s" ng-model="complejo.fecha_mora2" ng-keypress="enter($event.keyCode)">
        </div>
      </div>
      <br>
      <div class="margen-top">
        <label for="complejo-banco" class="btn btn-left boton-s" type="button">Estado</label><select type="text" ng-model="complejo.estado" ng-options="estado as estado.estado for estado in data.estados" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
      </div>
      <div class="margen-top">
        <label for="complejo-banco" class="btn btn-left boton-s" type="button">Sub estado</label><select type="text" ng-model="complejo.sub_estado" ng-options="sub_estado as sub_estado.sub_estado for sub_estado in data.sub_estados" class="btn btn-right input-s" ng-keypress="enter($event.keyCode)"></select>
      </div>
  </div>
  <div ng-controller="opciones" class="opciones derecha">
    <div style="width:90%;margin:auto;margin-top:15px;">
      <div>
       <label class="btn btn-left boton-s">Cambiar a </label><button class="btn btn-default btn-right input-s" ng-click="cambiar='seleccion'" ng-init="cambiar='filtro'" ng-show="cambiar=='filtro'">Filtro</button><button class="btn btn-default btn-right input-s" ng-show="cambiar=='seleccion'" ng-click="cambiar='filtro'">Selección</button>
      </div>
      <div>
       <label class="btn btn-center boton-s">Acción </label><button class="btn btn-default btn-right input-s" ng-show="accion=='retirar'" ng-click="accion='transferir'" ng-init="accion='retirar'">Retirar responsable</button><button class="btn btn-default btn-right input-s" ng-show="accion=='transferir'" ng-click="accion='retirar'">Asignar a operador</button>
      </div>
      <div ng-show="accion=='transferir'">
       <label class="btn btn-center boton-s" style="background:#fff;color:#000;border:1px solid #ddd;">Operador </label><select class="btn btn-default btn-right input-s" ng-model="operador" ng-options="responsable as responsable.user for responsable in data.usuarios" ng-show="accion=='transferir'"></select>
      </div>
      <div>
        <label class="btn btn-down btn-primary" ng-click="aplicar()">Aplicar</label>
      </div>
    </div>
  </div>
  <div class="control" ng-controller="control">
  {{data.control}} </div>
</div>
</body>
</html>