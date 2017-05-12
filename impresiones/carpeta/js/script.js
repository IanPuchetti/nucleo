var $_GET = {};document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g,function(){function decode(s){return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
var url = document.URL.split("/")[2];
angular.module('myApp', [])

.controller('myCtrl', function($http, $scope) {
  var _ = $scope;
  $http.post('php/datos.php', {documento: $_GET["documento"], banco: $_GET["banco"]}).then(function(res){_.datos=res.data;
_.deudaoriginal=0;
  for(var i in _.datos){
  	_.deudaoriginal=parseFloat(_.deudaoriginal)+parseFloat(_.datos[i].deuda);
  }
  });
  $http.post('php/telefonos.php', {documento: $_GET["documento"]}).then(function(res){_.telefonos=res.data;});
  $http.post('php/llamadas.php', {documento: $_GET["documento"]}).then(function(res){_.gestion=res.data;});
  
  _.min_fecha_mora=0;
  for(var i in _.datos){
  	if(new Date(_.datos[0].fecha_mora)< new Date(_.min_fecha_mora) || _.min_fecha_mora==0){
  	_.min_fecha_mora=_.datos[0].fecha_mora;
  }
}
});
