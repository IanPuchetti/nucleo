<!Doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/angular.min.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/styles.css"/>
</head>
<body ng-app="myApp">
<div ng-controller="myCtrl" class="container">
<div style="text-align:center;">
<h4>Estudio Jurídico</h4>
<h2>Dr. Edgardo Ramirez & Asoc.</h2>
</div>
<table class="table">
	<tr class="table-header">
		<td colspan="2" style="text-align:center;">DEUDOR</td>
	</tr>
	<tr>
		<td>Nombre y apellido: {{datos[0].apellido}}</td>
		<td>Numero de documento: {{datos[0].documento}}</td>
	</tr>
</table>
<table class="table">
	<tr class="table-header">
		<td colspan="4" style="text-align:center;">DOMICILIO</td>
	</tr>
	<tr>
		<td>Dirección particular: {{datos[0].direccion_particular}}</td>
		<td>Provincia: {{datos[0].provincia}}</td>
		<td>Localidad: {{datos[0].localidad}}</td>
		<td>Código Postal: {{datos[0].codigo_postal}}</td>
	</tr>
</table>
<table class="table table-condensed">
	<tr class="table-header">
		<td colspan="4" style="text-align:center;">TELEFONOS</td>
	</tr>
	<tr class="table-header">
		<td>NUMERO</td>
		<td>DESCRIPCION</td>
		<td>CALIFICACION</td>
	</tr>
	<tr ng-repeat="telefono in telefonos">
		<td>{{telefono.numero}}</td>
		<td>{{telefono.comentario}}</td>
		<td>{{telefono.calificacion}}</td>
	</tr>
</table>
<table class="table">
	<tr class="table-header">
		<td colspan="3" style="text-align:center;">DATOS DE LA CARPETA</td>
	</tr>
	<tr>
		<td>Banco: {{datos[0].dbanco}}</td>
		<td>Legajo: {{datos[0].legajo}}</td>
		<td>Gestión: {{datos[0].numero_gestion}}°</td>
	</tr>
	<tr>
		<td>Caratula: {{datos[0].caratula}}</td>
		<td>Estado: {{datos[0].estado}}</td>
		<td>Fecha de ingreso: {{datos[0].fecha_ingreso}}</td>
	</tr>
	<tr>
		<td>Fecha de mora: {{min_fecha_mora}}</td>
		<td>Deuda original: ${{deudaoriginal}}</td>
		<td></td>
	</tr>
</table>
<table class="table table-condensed">
	<tr class="table-header">
		<td colspan="4" style="text-align:center;">PRODUCTOS</td>
	</tr>
	<tr class="table-header">
		<td>PRODUCTO</td>
		<td>NUMERO</td>
		<td>FECHA DE MORA</td>
		<td>DEUDA</td>
	</tr>
	<tr ng-repeat="producto in datos">
		<td>{{producto.producto}}</td>
		<td>{{producto.numero_operacion}}</td>
		<td>{{producto.fecha_mora | date:"dd/MM/yyyy"}}</td>
		<td>${{producto.deuda}}</td>
	</tr>
</table>
<table class="table table-condensed">
	<tr class="table-header">
		<td colspan="6" style="text-align:center;">GESTIÓN</td>
	</tr>
	<tr class="table-header">
		<td>FECHA</td>
		<td>TIPO</td>
		<td>TELEFONO</td>
		<td>PROXIMA ACCION</td>
		<td>DESCRIPCION</td>
		<td>OPERADOR</td>
	</tr>
	<tr ng-repeat="gestion in gestion">
		<td>{{gestion.fecha | date:"dd/MM/yyyy"}}</td>
		<td>{{gestion.tipo}}</td>
		<td>{{gestion.telefono }}</td>
		<td>{{gestion.accion}}</td>
		<td>{{gestion.comentario}}</td>
		<td>{{gestion.operador}}</td>
	</tr>
</table>
</div>
</body>
</html>