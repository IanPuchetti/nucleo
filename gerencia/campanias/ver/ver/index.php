
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
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
  <script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/angular-chart.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

.btn{
font-size:10px;
}
</style>
  </head>
  <body ng-app="myApp"  ng-controller="controller">
  <div class="container">
    <div class="row" style="margin-top:150px;">
    <div class="col-xs-5">
     <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
        <div class="panel-heading">Estado de la campaña</div>
        <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
        <div style="width:200px;margin:auto;">
          <canvas id="pie" class="chart chart-pie" chart-data="data1" chart-labels="labels1" chart-options="options"></canvas> 
        </div>
        <div style="font-size:12px;width:100%;">Total: {{gestiones.length}}</div>
          <div style="font-size:12px;width:100%;border-top:1px solid #ddd">Gestionados: {{gestionados}}</div>
          <div style="font-size:12px;width:100%;border-top:1px solid #ddd">No gestionados: {{no_gestionados}}</div>
        </div>
      </div>
    </div>
    <div class="col-xs-7">
      <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
          <div class="panel-heading">Gestiones de operadores</div>
          <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
            
              <canvas id="bar" class="chart chart-bar ng-isolate-scope" chart-data="data3" chart-labels="labels3" chart-series="series" chart-options="options"></canvas>
            
          </div>
    </div>
    </div>
    </div>
    <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
          <div class="panel-heading">Estado de la campaña</div>
          <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
            <canvas id="line" class="chart chart-line" chart-data="data2" chart-labels="labels2" chart-series="series" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick" height="100"></canvas>
          </div>
      </div>
    <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
            <div class="panel-heading">Gestiones</div>
            <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
            <div>
            <div class="input-group">
            <span class="input-group-addon">Operador</span>
            <input type="text" class="form-control" ng-model="search.operador" placeholder="Operador...">
            <span class="input-group-addon">Sub estado</span>
            <input type="text" class="form-control" ng-model="search.sub_estado" placeholder="Sub estado...">
            </div>
            </div>
            <table class="table-condensed table" style="font-size:13px;">
        <tr ng-repeat="gestion in gestiones | filter: search" style="color:{{gestion.gestionado!=0 ? 'green' : 'red'}}"><td>{{gestion.apellido}}</td><td>{{gestion.documento}}</td><td>{{gestion.sub_estado}}</td><td>{{gestion.operador}}</td><td>{{gestion.fecha | date:'dd/MM/yyyy'}}</td><td><button class="btn btn-default" ng-click="ver_gestion(gestion.documento)">Gestion</label></td></tr>
      </table>            </div>
    </div>
</div>
</div>
	</div>
    </div>
    <div style="position:fixed;width:100%;top:0px;padding:25px;background:white;-webkit-box-shadow: 1px 4px 24px 9px rgba(153,153,153,0.56);
-moz-box-shadow: 1px 4px 24px 9px rgba(153,153,153,0.56);
box-shadow: 1px 4px 24px 9px rgba(153,153,153,0.56);">
      <div class="row">
        <div class="col-xs-6">
          <p>Campaña: {{campania.nombre}} </p>
          <p>Generación: {{campania.fecha_generacion | date: "dd/MM/yyyy"}}  </p>
          <p>    Finalización: {{campania.fecha_finalizacion}}</p>

        </div>
        <div class="col-xs-6">
          <div class="input-group">
            <span class="input-group-addon">Fecha de referencia</span><input type="date" class="form-control" ng-model="fecha" ng-change="cargar(fecha)">
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
