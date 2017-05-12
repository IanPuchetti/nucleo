function mover_derecha(d,c,i,f){if(window[d]==c){}else{$("."+d).animate({right:f},200);window.window[d]=0;if(!window[d]){$("."+c).animate({right:i},200);window.window[d]=c;}else{$("."+c).animate({right:f},200);}}}
var resee;
angular.module('myApp', ["chart.js"])

.service( 'sharedVars', function ($http) {
		var datos = {}, input = {};
		datos.deudor={};
		this.datos = datos;
		this.input = input;
})
.controller('grafico', function($scope, sharedVars, $http) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.options ={ scaleBeginAtZero: true };
		$http.post('php/contar-estados.php',{documento:$_GET['documento']}).then(function (res){
											_.estados=res.data;
											_.labels1 = [];
											_.data1=[];
											for(var i in res.data){
												_.labels1.push(res.data[i].fecha);
												_.data1.push(res.data[i].estado);
												}
											});
		$http.post('php/contar-sub-estados.php',{documento:$_GET['documento']}).then(function (res){
											_.sub_estados=res.data;
											_.labels2= [];
											_.data2=[];
											for(var i in res.data){
												_.labels2.push(res.data[i].fecha);
												_.data2.push(res.data[i].sub_estado);
												}
											});
									
});