<?php
session_start();
if(isset($_SESSION['user'])){

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
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
	<script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

a{
cursor:pointer;
color:#b00;
}

a:hover{
color:#700;
}
table{
width:100%;
}
</style>


  </head>

  <body ng-app="myApp">
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
        <li><a href="../">Inicio</a></li>
        <li class="active"><a href=".">Usuarios</a></li>
        <li ><a href="../bancos">Bancos</a></li>
              
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/.php/logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container" ng-controller="controller">
        <div ng-repeat="(n, liquidador) in liquidadores">
        	<label class="btn btn-default">{{liquidador.liquidador}}</label>
        	<select ng-model="banco[n]"  ng-options="banco as banco.dbanco for banco in bancos" class="btn btn-default" >
        	</select>
        	<button class="btn btn-success" ng-click="modificar(banco[n].cbanco, liquidador.liquidador)">Modificar</button>
       	</div>
    </div>
    <script>
    function search(id, array){
    for (var i in array) {
        if (array[i].cbanco == id) {
            return array[i];
        }
    }
}

    angular.module('myApp',[])
	.controller('controller', function($scope, $http) {
		$scope.banco=[];
		$scope.bancos=[];
		$http.post('php/liquidadores.php').then(function (res){
			$scope.liquidadores=res.data;
		});
		$http.post('php/bancos.php').then(function (res){
			$scope.bancos=res.data;
			for (var i in $scope.liquidadores){
						
						$scope.banco[i]=search($scope.liquidadores[i].id_banco, $scope.bancos);
				}
		});
		$scope.modificar = function (id_banco, liquidador){
			$http.post('php/modificar.php',{id_banco:id_banco, liquidador:liquidador}).then(function(res){alert(res.data);});
		}
	});
    </script>
  </body>
</html>
