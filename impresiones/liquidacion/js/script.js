var $_GET = {};document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g,function(){function decode(s){return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
var url = document.URL.split("/")[2];
angular.module('myApp', [])

.controller('myCtrl', function($http, $scope) {
  var _ = $scope;
  _.datos=$_GET;
  $http.post('php/operador.php', {operador:_.datos.operador}).then(function (res){
  	_.operador = res.data[0].user;
  });
});
