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
	<link href="css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/angular.1.5.min.js"></script>
	<script type="text/javascript" src="js/tooltip-viewport.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}
</style>
	<script src="js/app.js"></script>
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
   Bajas
	</div>
	<div class="tabla">
		<table class="table table-condensed">
			<tr>
				<td>Apellido</td>
				<td>Documento</td>
				<td>Estado</td>
				<td>Banco</td>
			</tr>
			<tr ng-repeat="deudor in data.listado" ng-click="data.seleccionar(deudor.documento)" id="{{deudor.documento}}" class="deudores" title="Nombre:{{deudor.apellido}}&#10;Documento:{{deudor.documento}}&#10;Estado:{{deudor.estado}}&#10;Banco:{{deudor.dbanco}}">
				<td>{{deudor.apellido}}</td>
				<td>{{deudor.documento}}</td>
				<td>{{deudor.estado}}</td>
				<td>{{deudor.dbanco}}</td>
			</tr>
		</table>
	</div>
	</div>
	<div ng-controller="filtro" class="filtro derecha-fixed">
		<div class="borde-abajo">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a ng-click="filtro='rapido'">Rápido</a></li>
        <li role="presentation"><a ng-click="filtro='complejo'">Complejo</a></li>
      </ul>
    </div>
		<div ng-show="filtro=='rapido'">
			<label>Documento</label>
  			<input type="number" ng-model="input.rapido.documento" placeholder="Documento..." class="form-control">
  			<label>Apellido</label>
  			<input type="text" ng-model="input.rapido.apellido" placeholder="Apellido..." class="form-control">
  			<label>Telefono</label>
  			<input type="number" ng-model="input.rapido.telefono" placeholder="Telefono..." class="form-control">
  			<br>
  			<button class="btn btn-default form-control" ng-click="buscar_rapido()">Buscar</button>
		</div>
		<div ng-show="filtro=='complejo'">
		<div class="tabla">
			<label>Agenda</label><br>
			<span class="comp">Desde</span>
  			<input type="date" ng-model="input.complejo.agenda1" class="form-control">
  			<span class="comp">Hasta</span>
  			<input type="date" ng-model="input.complejo.agenda2" class="form-control">

  			<label>Documento</label><br>
			<span class="comp">Entre</span>
  			<input type="number" ng-model="input.complejo.documento1" placeholder="Numero de documento..." class="form-control">
  			<span class="comp">Y</span>
  			<input type="number" ng-model="input.complejo.documento2" placeholder="Numero de documento..." class="form-control">

  			<label>Apellido</label>
  			<input type="text" ng-model="input.complejo.apellido" placeholder="Apellido..." class="form-control">

  			<label>Banco</label><br>
  			<select class="form-control btn btn-default" id="banco">
  				<option></option>
  				<option ng-repeat="banco in data.bancos" id="{{banco.cbanco}}">{{banco.dbanco}}</option>
  			</select>

  			<label>Responsable</label>
  			<select class="form-control btn btn-default" id="responsable">
  				<option></option>
  				<option ng-repeat="usuario in data.usuarios" id="{{usuario.id}}">{{usuario.user}}</option>
  			</select>

  			<label>Numero Gestion</label>
  			<input type="text" ng-model="input.complejo.numero_gestion" placeholder="Numero gestión..." class="form-control">

  			<label>Fecha ingreso</label><br>
			<span class="comp">Desde</span>
  			<input type="date" ng-model="input.complejo.fecha_ingreso1" class="form-control">
  			<span class="comp">Hasta</span>
  			<input type="date" ng-model="input.complejo.fecha_ingreso2" class="form-control">

  			<label>Monto de deuda</label><br>
			<span class="comp">Entre</span>
  			<input type="number" ng-model="input.complejo.monto_deuda1" placeholder="Monto de deuda..." class="form-control">
  			<span class="comp">Y</span>
  			<input type="number" ng-model="input.complejo.monto_deuda2" placeholder="Monto de deuda..." class="form-control">

  			<label>Estado</label><br>
  			<select class="form-control btn btn-default" id="estado">
  				<option></option>
  				<option ng-repeat="estado in data.estados" id="{{estado.id}}">{{estado.estado}}</option>
  			</select>

  			<label>Proxima accion</label><br>
  			<select class="form-control btn btn-default" id="proxima_accion">
  				<option></option>
  				<option ng-repeat="accion in data.proximas_acciones" id="{{accion.id}}">{{accion.accion}}</option>
  			</select>



  		<br><br><button class="btn btn-default form-control" ng-click="buscar_complejo()">Buscar</button>

  		</div>
  		</div>
	</div>
	<div ng-controller="llamar" class="llamar derecha">
		<div>Llamar: {{input.rapido.agenda}} </div>
		<button></button>
	</div>
	<div ng-controller="productos" class="productos derecha">
    <table class="table table-condensed">
      <tr>
        <td>Documento</td>
        <td>Banco</td>
      </tr>
      <tr ng-repeat="producto in data.productos">
        <td>{{producto.documento}}</td>
        <td>{{producto.dbanco}}</td>
      </tr>
    </table>
	</div>
	<div ng-controller="deudor" class="deudor derecha">
		<div class="borde-abajo"> 
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a ng-click="deudor='Deudor'">Deudor</a></li>
        <li role="presentation"><a ng-click="deudor='Domicilios'">Domicilios</a></li>
        <li role="presentation"><a ng-click="deudor='Telefonos'">Telefonos</a></li>
        <li role="presentation"><a ng-click="modificar()" class="accion">Modificar</a></li>
      </ul>
		</div>
		<div ng-show="deudor=='Deudor'">
      <label>Documento</label>
      <input type="number" ng-model="data.deudor.documento" class="form-control">
      <label>Tipo documento</label>
      <input type="text" ng-model="data.deudor.tipo_documento" class="form-control">
      <label>Apellido</label>
      <input type="text" ng-model="data.deudor.apellido" class="form-control">
      <label>Email</label>
      <input type="text" ng-model="data.deudor.email" class="form-control">
      <label>Empresa</label>
      <input type="text" ng-model="data.deudor.empresa" class="form-control">
    </div>
		<div ng-show="deudor=='Domicilios'" class="tabla">
      <label>Direccion laboral 1</label>
      <input type="text" ng-model="data.deudor.direccion_laboral" class="form-control">
      <label>Direccion laboral 2</label>
      <input type="text" ng-model="data.deudor.direccion_laboral2" class="form-control">
      <label>Direccion particular 1</label>
      <input type="text" ng-model="data.deudor.direccion_particular" class="form-control">
      <label>Direccion particular 2</label>
      <input type="text" ng-model="data.deudor.direccion_particular2" class="form-control">
      <label>Direccion particular 3</label>
      <input type="text" ng-model="data.deudor.direccion_particular1" class="form-control">
      <label>Provincia</label>
      <input type="text" ng-model="data.deudor.provincia" class="form-control">
      <label>Localidad</label>
      <input type="text" ng-model="data.deudor.localidad" class="form-control">
      <label>Codigo Postal</label>
      <input type="text" ng-model="data.deudor.codigo_postal" class="form-control">
    </div>
		<div ng-show="deudor=='Telefonos'" class="tabla">
      <div ng-repeat="(n,telefono) in data.telefonos">
        <label>Telefono{{n+1}}</label><br>
        <label class="comp">Numero</label>
        <input type="text" value="{{telefono.numero}}" class="form-control" id="numero{{telefono.numero}}">
        <label class="comp">Comentario</label>
        <input type="text" value="{{telefono.comentario}}" class="form-control" id="comentario{{telefono.numero}}">
        <br><button class="btn btn-default" ng-click="modificar_telefono(telefono.numero)">Modificar</button>
      </div>
      <div>
        <label>Agregar telefono</label>
        <input type="number" ng-model="data.telefono_nuevo.numero" placeholder="Nuevo telefono..." class="form-control">
        <input type="text" ng-model="data.telefono_nuevo.comentario" placeholder="Comentario..."  class="form-control">
        <br>
        <button class="btn btn-default" ng-click="agregar_telefono()">Agregar</btn>
      </div>
    </div>
	</div>
  <div class="control" ng-controller="control">
  {{data.control}}
</div>
</div>
</body>

</html>
