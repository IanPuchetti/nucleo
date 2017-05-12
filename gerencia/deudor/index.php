<?php
/*
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: ../");
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
	<link rel="stylesheet" href="/.css/signin.css"/>
	<script src="/.js/jquery.min.js" type="text/javascript"></script>
	<script src="/.js/bootstrap.js" type="text/javascript"></script>
	<script src="/.js/script.js" type="text/javascript"></script>
	<script src="/.js/xlsx.js" type="text/javascript"></script>
	<script src="/.js/FileSaver.js" type="text/javascript"></script>
	<script src="/.js/Export2Excel.js" type="text/javascript"></script>
	<script src="/.js/jsontable.js" type="text/javascript"></script>
	<script src="js/angular.1.5.min.js" type="text/javascript"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/angular-chart.min.js"></script>
  <script src="js/app.js"></script>
<style>
body{
	background:white;
}
.btn{
  border-radius:0px;
}
.sombra{
-webkit-box-shadow: 0px 6px 34px 2px rgba(194,194,194,0.4);
-moz-box-shadow: 0px 6px 34px 2px rgba(194,194,194,0.4);
box-shadow: 0px 6px 34px 2px rgba(194,194,194,0.4);
}
</style>
  </head>

  <body  ng-app="deudor">
    <div ng-controller="panel">
      <div class="input-group" style="position:absolute;top:0px;height:15px;">
        <span class="input-group-addon btn btn-default" ng-init="ver='deudor'" ng-click="ver='deudor'">Deudor</span>
        <span class="input-group-addon btn btn-default" ng-click="ver='domicilios'">Domicilios</span>
        <span class="input-group-addon btn btn btn-default" ng-click="ver='telefonos'">Teléfonos</span>
        <span class="input-group-addon btn btn-default" ng-click="ver='productos'">Productos</span>
        <span class="input-group-addon btn btn-default" ng-click="ver='gestion'">Gestion</span>
      </div>
      <div ng-show="ver=='deudor'" class="sombra" style="margin:auto;width:70%;border:1px #ddd solid;font-size:12px;">
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Nombre y apellido: {{deudor.apellido}}</div>
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Documento: {{deudor.documento}}</div>
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Tipo de documento: {{deudor.tipo_documento}}</div>
        <div style="width:100%;padding:15px;border-bottom:1px #ddd solid;padding:15px;">Email: {{deudor.email}}</div>
        <div style="width:100%;padding:15px;">Empresa: {{deudor.empresa}}</div>
      </div>
      <div ng-show="ver=='domicilios'" class="sombra" style="margin:auto;width:70%;border:1px #ddd solid;font-size:12px;">
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Direccion particular: {{deudor.direccion_particular}}</div>
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Direccion particular 2: {{deudor.direccion_particular2}}</div>
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Direccion particular 3: {{deudor.direccion_particular3}}</div>
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Direccion laboral: {{deudor.direccion_laboral}}</div>
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Direccion laboral 2: {{deudor.direccion_laboral2}}</div>
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Provincia: {{deudor.provincia}}</div>
        <div style="width:100%;border-bottom:1px #ddd solid;padding:15px;">Localidad: {{deudor.localidad}}</div>
        <div style="width:100%;padding:15px;">Codigo postal: {{deudor.codigo_postal}}</div>
      </div>
      <div ng-show="ver=='gestion'" class="sombra" style="width:100%;border:1px #ddd solid;font-size:12px;overflow:auto;margin-top:-15px;height:90%">
        <table class="table" style="font-size:10px;">
          <thead>
            <tr ng-repeat="campo in gestion| limitTo: 1">
              <td ng-repeat="(key, value) in campo" ng-click="ordenar(key)" id="{{key}}">{{::key}}</td>
            </tr>
          </thead>
          <tbody infinite-scroll="bajar()">
            <tr ng-repeat="(i, fila) in ::gestion">
              <td ng-repeat="valor in fila">{{valor}}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div ng-show="ver=='gestion'">
        <span class="dropup">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="font-size:10px;">Exportar &#x25B4;
        </button>
            <ul class="dropdown-menu dont-go" style="margin-bottom:5px;border-radius:0px;width:300px;padding:5px;">
              <li class="input-group">
                <input type="text" class="form-control"><span class="input-group-addon btn " style="background:#6a9e60;border-color:6a9e60;color:white;">Exportar</span>
              </li>
            </ul>
        </span>
      </div>
      <div ng-show="ver=='productos'">
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
    </div>
  </body>
</html>
