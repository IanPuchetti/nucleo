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
<h1>Liquidación</h1>
</div>
<table class="table">
	<tr class="table-header">
		<td colspan="2" style="text-align:center;">DEUDOR</td>
	</tr>
	<tr>
		<td>Nombre y apellido: {{datos.titular}}</td>
		<td colspan=2>Numero de documento: {{datos.documento}}</td>
	</tr>
	<tr>
		<td>Banco: {{datos.banco}}</td>
		<td colspan=2>Fecha actualizacion: {{datos.fecha_actualizacion | date: "dd/MM/yyyy"}}</td>
	</tr>
	<tr>
		<td>Estado: {{productos[0].estado}}</td>
		<td>Numero de gestión: {{datos.numero_gestion}}°</td>
		<td>Operador: {{datos.operador}}°</td>
	</tr>
</table>
<table class="table">
	<tr class="table-header">
		<td colspan="4" style="text-align:center;">VARIABLES</td>
	</tr>
	<tr>
		<td>IVA: {{datos.iva}}</td>
		<td>Tasa: {{datos.tasa}}%</td>
		<td>Porcentaje de honorarios: {{datos.porcentaje_honorarios}}%</td>
		
	</tr>
</table>
<div class="table-header" style="text-align:center;">PRODUCTOS</div>
<table class="table">
	<tr><td>Tipo</td><td ng-repeat="producto in productos">{{producto.tipo}}</td></tr>
	<tr><td>Deuda</td><td ng-repeat="producto in productos">${{producto.deuda}}</td></tr>
	<tr><td>Fecha de mora</td><td ng-repeat="producto in productos">{{producto.fecha_mora | date: "dd/MM/yyyy"}}</td></tr>
	<tr><td>Dias de atraso</td><td ng-repeat="producto in productos">{{producto.dias_atraso}}</td></tr>
	<tr><td>Interes</td><td ng-repeat="producto in productos">${{producto.interes | number : 2 }}</td></tr>
	<tr><td>Total</td><td ng-repeat="producto in productos">${{producto.suma | number : 2 }}</td></tr>
</table>
<table class="table">
	<tr class="table-header">
	<td colspan="2" style="text-align:center;">OPERACIONES</td>
	</tr>
	<tr><td>Gastos </td><td> ${{datos.gastos}}</td></tr>
	<tr><td>Sub total </td><td> ${{datos.sub_total | number: 2}}</td></tr>
	<tr><td>IVA sobre honorarios </td><td> ${{datos.iva_sobre_honorarios | number: 2}}</td></tr>
	<!--<tr><td>Quita: {{datos.quita_descripcion}} </td><td> ${{datos.quita_final | number: 2}}</td></tr>-->
	<tr><td>Pagos </td><td> {{datos.pagos}}</td></tr>
	<tr><td>Cuota promedio </td><td> ${{datos.cuota_promedio | number: 0}}</td></tr>
	<tr><td>Total promedio </td><td> ${{datos.total_promedio | number: 0}}</td></tr>
</table>
<table class="table">
	<tr class="table-header">
		<td style="text-align:center;">MONTO DE CANCELACIÓN</td>
	</tr>
	<tr><td><br><br><hr><br><br></td></tr>
</table>
<table class="table">
	<tr class="table-header">
		<td style="text-align:center;">PLAN DE PAGO</td>
	</tr>
	<tr><td><br><br><hr><br><br></td></tr>
</table>
</div>
</body>
</html>