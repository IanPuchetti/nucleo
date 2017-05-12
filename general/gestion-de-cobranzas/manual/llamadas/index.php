<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: ../");
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
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
	<script type="text/javascript" src="/.js/script.js"></script>
	<script src="/.js/xlsx.js" type="text/javascript"></script>
	<script src="/.js/FileSaver.js" type="text/javascript"></script>
	<script src="/.js/Export2Excel.js" type="text/javascript"></script>
	<script src="/.js/jsontable.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/angular.1.5.min.js"></script>
  	<script src="js/Chart.min.js"></script>
  	<script src="js/angular-chart.min.js"></script>
  	<script src="js/app.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

body{
	background:white;
}
</style>
<script>
var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});
</script>

  </head>

  <body  ng-app="myApp">
  
    <div style="background:white;position:absolute;top:0px;width:100%;height:100%;">
  		<div class="alert-success" role="alert" style="width:100%;text-align:center;padding-top:15px;padding-bottom:15px;">
  		<input type="text" id="nombre_excel" placeholder="Nombre del excel..." class="btn" style="text-align:left;"><button class="btn btn-success" id="descargar_excel">Descargar</button></div>
		<table class="table table-condensed" id="tabla">
			
		</table>
	<div ng-controller="grafico">
	<!--<div class="panel panel-default" style="background:rgba(255,255,255,0.5);">
        <div class="panel-heading">Estados</div>
        <div class="panel-body" style="text-align:left;font-weight:200;font-size:12px;">
  			<canvas id="line" class="chart chart-line" chart-data="data1" chart-labels="labels1" chart-series="series" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick" height="150"></canvas>
        </div>
        </div>

        <div class="panel panel-default" style="background:rgba(255,255,255,0.5);">
        <div class="panel-heading">Sub estados</div>
        <div class="panel-body" style="text-align:left;font-weight:200;font-size:12px;">
  			<canvas id="line" class="chart chart-line" chart-data="data2" chart-labels="labels2" chart-series="series" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick" height="150"></canvas>
        </div>
        </div>-->
    <div class="panel panel-default" style="background:rgba(255,255,255,0.5);">
        <div class="panel-heading">Cambio de estado</div>
        <div class="panel-body" style="text-align:left;font-weight:200;font-size:12px;">
        	<table class="table table-condensed">
        		<tr ng-repeat="estado in estados"><td>{{estado.fecha}}</td><td>{{estado.estado}}</td></tr>
        	</table>
        </div>
     </div>
     <div class="panel panel-default" style="background:rgba(255,255,255,0.5);">
        <div class="panel-heading">Cambio de sub estados</div>
        <div class="panel-body" style="text-align:left;font-weight:200;font-size:12px;">
        	<table class="table table-condensed">
        		<tr ng-repeat="sub_estado in sub_estados"><td>{{sub_estado.fecha}}</td><td>{{sub_estado.sub_estado}}</td></tr>
        	</table>
        </div>
     </div>
    </div>
    </div>
    
  </body>
<script>var response;
var datos={
				documento: $_GET["documento"]
	};
	$.ajax({
	url:'php/llamadas.php',
	type:'post',
	data:datos,
	success: function (res){res=JSON.parse(res);
							json_tabla('tabla', res);
							$("#ocultar").css("display", "block");
							}
		   });


$("#descargar_excel").click(function(){
if( $("#nombre_excel").val() == ""){alert("Debe ponerle un nombre al archivo que descargará.");}else{
export_table_to_excel('tabla', $("#nombre_excel").val());
}
});
	
</script>
</html>
