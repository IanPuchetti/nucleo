var $_GET = {};document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
function mover_derecha(d,c,i,f){if(window[d]==c){}else{$("."+d).animate({right:f},200);window.window[d]=0;if(!window[d]){$("."+c).animate({right:i},200);window.window[d]=c;}else{$("."+c).animate({right:f},200);}}}

angular.module('deudor', ["chart.js"])
.controller('panel', function($scope, $http) {
			var _ = $scope;
			$http.post('php/deudor-domicilios.php', {documento:$_GET['documento']}).then(function(res){var deudor=res.data;_.deudor=deudor[0];_.deudor.documento=parseInt(deudor[0].documento);});
			$http.post('php/telefonos.php', {documento:$_GET['documento']}).then(function(res){_.telefonos=res.data;});
			$http.post('php/carpeta-producto.php',{documento:$_GET['documento']}).then(function (res){_.data.productos = res.data;_.productos = _.data.productos;})						
			$http.post('php/gestion.php', {documento:$_GET['documento']}).then(function(res){_.gestion=res.data;});
});