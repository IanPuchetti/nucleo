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
	<link href="css/signin.css" rel="stylesheet"/>
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
      <a class="navbar-brand" href="#">Nucleo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/inicio">Inicio</a></li>
        <li><a href="/gerencia/busqueda">Búsqueda</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campañas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/campanias/ver">Ver</a></li>
                <li><a href="/gerencia/campanias/generar">Generar</a></li>
                <li><a href="/gerencia/campanias/grupos">Grupos</a></li>              
              </ul></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/panel/gestiones">Gestiones</a></li>
                <li><a href="/gerencia/panel/graficos">Gráficos</a></li>            
              </ul>
        </li>      
        
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carga<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/carga/comparacion">Comparación</a></li>
                <li><a href="/gerencia/carga/masiva">Masiva</a></li>
                <li><a href="/gerencia/carga/manual">Manual</a></li>
                <li><a href="/gerencia/carga/enriquecer">Enriquecer</a></li>
                <li><a href="/gerencia/carga/reportes">Reportes</a></li>                 
              </ul></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modificación<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/modificacion/productos">Prodcutos</a></li>
                <li><a href="/gerencia/modificacion/deudores">Deudores</a></li>               
              </ul></li>      
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Baja<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/baja/busqueda">Búsqueda</a></li>
                <li><a href="/gerencia/baja/xlsx">Xlsx</a></li>
                           
              </ul></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión Telefónica<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/gestion-telefonica/manual">Manual</a></li>
                <li><a href="/gerencia/gestion-telefonica/campania">Campaña</a></li>  
                <li><a href="/gerencia/gestion-telefonica/consultas">Consultas</a></li>              
              </ul></li>
        
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exportar<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/exportar/casos">Casos</a></li>
                <li><a href="/gerencia/exportar/telefonos">Telefonos</a></li>             
              </ul></li>
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
  			</select><br>

  			<label>Responsable</label><br>
  			<select class="form-control btn btn-default" id="responsable">
  				<option></option>
  				<option ng-repeat="usuario in data.usuarios" id="{{usuario.id}}">{{usuario.user}}</option>
  			</select><br>

  			<label>Numero Gestion</label>
  			<input type="text" ng-model="input.complejo.numero_gestion" placeholder="Numero gestión..." class="form-control">
        <br>
  			<label>Fecha ingreso</label><br>
			<span class="comp">Desde</span>
  			<input type="date" ng-model="input.complejo.fecha_ingreso1" class="form-control">
  			<span class="comp">Hasta</span>
  			<input type="date" ng-model="input.complejo.fecha_ingreso2" class="form-control">

  			<label>Monto de deuda</label><br>
			<span class="comp">Entre</span>
  			<input type="number" ng-model="input.complejo.deuda1" placeholder="Monto de deuda..." class="form-control">
  			<span class="comp">Y</span>
  			<input type="number" ng-model="input.complejo.deuda2" placeholder="Monto de deuda..." class="form-control">

  			<label>Estado</label><br>
  			<select class="form-control btn btn-default" id="estado">
  				<option></option>
  				<option ng-repeat="estado in data.estados" id="{{estado.id}}">{{estado.estado}}</option>
  			</select>
        <br>
  			<label>Proxima accion</label><br>
  			<select class="form-control btn btn-default" id="proxima_accion">
  				<option></option>
  				<option ng-repeat="accion in data.proximas_acciones" id="{{accion.id}}">{{accion.accion}}</option>
  			</select>



  		<br><br><button class="btn btn-default form-control" ng-click="buscar_complejo()">Buscar</button>

  		</div>
  		</div>
	</div>
	<div ng-controller="gestion" class="gestion derecha">
    <div class="tabla">
		<div class="encabezado">Gestionando a {{data.deudor.apellido}} por su dedua con {{data.gestion.banco}}</div>
    <div ng-show="gestion.minutos>5" style="width:100%;background:#f33;color:white;">{{gestion.horas}}:{{gestion.minutos}}:{{gestion.segundos}}</div>
    <div ng-show="gestion.minutos<=5" style="width:100%;background:#33f;color:white;">{{gestion.horas}}:{{gestion.minutos}}:{{gestion.segundos}}</div>
    <div ng-show="!comenzar_gestion">
        <button class="btn btn-default form-control" ng-click="comenzar_gestion=1;hora();gestion= {horas:0,minutos:0,segundos:0};avanzar();">Comenzar gestión</button>
    </div>
    <div ng-show="comenzar_gestion" class="gestion">
		    <label>Tipo de gestión</label><br>
        <select class="btn btn-default form-control" id="tipo_gestion">
          <option ng-repeat="tipo in data.tipo_gestion" id="{{tipo.id}}">{{tipo.tipo}}</option>
        </select><br>
        <label>Teléfono</label><br>
        <select class="btn btn-default form-control" id="telefonos">
          <option ng-repeat="telefono in data.telefonos">{{telefono.numero}}</option>
        </select>
        <br>
        <label>Comentario</label><br>
        <input type="text" class="form-control" placeholder="Comentario..." ng-model="comentario"><br>
        <label>Proxima accion</label><br>
        <select class="form-control btn btn-default" id="gestion_proxima_accion">
          <option></option>
          <option ng-repeat="accion in data.proximas_acciones" id="{{accion.id}}">{{accion.accion}}</option>
        </select><br>
        <label>Calificar teléfono</label><br>
        <select class="form-control btn btn-default" id="calificacion_telefono">
          <option></option>
          <option ng-repeat="titulo in data.calificacion_telefonos" id="{{titulo.id}}">{{titulo.titulo}}</option>
        </select><br>
        <label>Agenda</label><br>
        <input type="date" class="form-control" ng-model="agenda"><br>
        <button class="btn btn-success form-control" ng-click="propuesta(data.deudor.documento, data.gestion.cbanco)">Propuesta</button><br><br>
        
          <select class="form-control" id="liquidacion-banco">
        <option id="cencosud">CENCOSUD</option>
        <option id="credicoop">CREDICOOP</option>
        <option id="hsbc">HSBC</option>
        <option id="icbc">ICBC</option>
        <option id="icbc-campania">ICBC CAMPAÑA</option>
        <option id="patagonia">PATAGONIA</option>
        <option id="santander-rio">SANTANDER RIO</option>
        <option id="santander-rio-campania">SANTANDER RIO CAMPAÑA</option>
        </select>
        <button class="btn btn-primary form-control" ng-click="liquidar(data.deudor.documento, data.gestion.cbanco)">Liquidación</button>
        
    <br><br>
    <button class="btn btn-default form-control" ng-click="comenzar_gestion=0;registrar()">Registrar</button>
    </div>
  </div>
	  </div>
	<div ng-controller="productos" class="productos derecha">
    <table class="table table-condensed" ng-repeat="banco in data.productos | groupBy: 'banco'">
      <tr class="table-head"><td colspan="3">{{banco[0].dbanco}} <a href="#" ng-click="gestion();data.gestion.banco = banco[0].dbanco; data.gestion.cbanco = banco[0].banco">Gestionar</a> - <a href="#" ng-click="data.descargar_carpeta(banco[0].banco);">Descargar carpeta</a>- <a href="#" ng-click="data.ver_propuesta(banco[0].banco);">Propuesta</a></td></tr>
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
      <label>Caratula</label>
      <input type="text" ng-model="data.producto.caratula" class="form-control">
      <label>Comentario</label>
      <input type="text" ng-model="data.producto.comentario" class="form-control">
      <label>Sucursal</label>
      <input type="text" ng-model="data.producto.sucursal" class="form-control">
      <label>Dias adic</label>
      <input type="text" ng-model="data.producto.dias_adic" class="form-control">
      <label>Legajo</label>
      <input type="text" ng-model="data.producto.legajo" class="form-control">
      <label>Número de gestion</label>
      <input type="text" ng-model="data.producto.numero_gestion" class="form-control">
      <label>Número de lote</label>
      <input type="text" ng-model="data.producto.numero_lote" class="form-control">
    </div>
    <div ng-show="product=='Producto'" class="tabla">
      <label>Producto</label>
      <input type="text" ng-model="data.producto.producto" class="form-control">
      <label>Deuda</label>
      <input type="number" ng-model="data.producto.deuda" class="form-control">
      <label>Fecha Deuda</label>
      <input type="date" ng-model="data.producto.fecha_deuda" class="form-control">
      <label>Fecha Mora</label>
      <input type="date" ng-model="data.producto.fecha_mora" class="form-control">
      <label>Fecha ultimo cobro</label>
      <input type="date" ng-model="data.producto.fecha_ult_cobro" class="form-control">
      <label>Pase legales</label>
      <input type="text" ng-model="data.producto.pase_legales" class="form-control">
      <label>Estado</label><br>
        <select class="form-control btn btn-default" id="producto_estado" value="{{data.producto.estado}}" ng-model="data.producto.estado">
        <option ng-repeat="estado in data.estados" id="{{estado.id}}">{{estado.estado}}</option>
      </select><br>
      <label>Sub Estado</label><br>
        <select class="form-control btn btn-default" id="producto_sub_estado" ng-model="data.producto.sub_estado">
        <option ng-repeat="sub_estado in data.sub_estados" id="{{sub_estado.id}}">{{sub_estado.sub_estado}}</option>
      </select><br>

        <label>Proxima accion</label><br>
        <select class="form-control btn btn-default" id="producto_proxima_accion" ng-model="data.producto.accion" value="{{data.producto.accion}}">
          <option ng-repeat="accion in data.proximas_acciones" id="{{accion.id}}">{{accion.accion}}</option>
        </select><br>
       <label>Banco</label><br>
        <select class="form-control btn btn-default" id="producto_banco" ng-model="data.producto.dbanco">
          <option ng-repeat="banco in data.bancos" id="{{banco.cbanco}}">{{banco.dbanco}}</option>
        </select> 
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
        <li role="presentation" ng-show="data.listado.link"><a target="_blank" href="{{data.listado.link}}" class="accion">Reporte</a></li>
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
