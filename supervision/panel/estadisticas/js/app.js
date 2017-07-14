function mover_derecha(d,c,i,f){if(window[d]==c){}else{$("."+d).animate({right:f},200);window.window[d]=0;if(!window[d]){$("."+c).animate({right:i},200);window.window[d]=c;}else{$("."+c).animate({right:f},200);}}}
var resee;
angular.module('myApp', ["chart.js"])

.service( 'sharedVars', function ($http) {
		var datos = {}, input = {};
		datos.deudor={};
		$http.post('php/bancos.php').then(function(res){
													   input.bancos=res.data;
													   });
		$http.post('php/usuarios.php').then(function(res){
													   datos.usuarios=res.data;
													   });
		$http.post('php/sub-estados.php').then(function(res){
													   datos.sub_estados=res.data;
													   });
		$http.post('php/estados.php').then(function(res){
													   datos.estados=res.data;
													   });
		this.datos = datos;
		this.input = input;
})
.controller('grafico', function($scope, sharedVars, $http) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.options ={ scaleBeginAtZero: true };
		_.graficar = {sub_estados : function (){$http.post('php/contar-sub-estados.php',{banco:_.banco}).then(function (res){
											_.labels = [];
											_.data=[];
											for(var i in res.data){
												_.labels.push(res.data[i].sub_estado);
												_.data.push(res.data[i].cantidad);
												}
											});
											
											},
					  responsables : function (){$http.post('php/contar-responsables.php',{banco:_.banco}).then(function (res){
											_.labels = [];
											_.data=[];
											for(var i in res.data){
												
												_.labels.push(res.data[i].user);
												_.data.push(res.data[i].cantidad);
												}
											});
											
											},
					  estados: function (){$http.post('php/contar-estados.php',{banco:_.banco}).then(function (res){
											_.labels = [];
											_.data=[];
											console.log(res.data);
											for(var i in res.data){
												_.labels.push(res.data[i].estado);
												_.data.push(res.data[i].cantidad);
												}
											});

											},
					 telefonos: function (){$http.post('php/contar-telefonos.php',{banco:_.banco}).then(function (res){
											_.labels = [];
											_.data=[];
											for(var i in res.data){
												_.labels.push(res.data[i].titulo);
												_.data.push(res.data[i].cantidad);
												}
											});

											},
					 propuestas: function (){$http.post('php/propuestas-anticipo.php',{banco:_.banco, fecha1:_.fecha1, fecha2: _.fecha2}).then(function (res){
											_.labels1 = [];
											_.data1=[];
											_.anticipos=0;
											for(var i in res.data){
												_.labels1.push(res.data[i].fecha_propuesta);
												_.data1.push(res.data[i].monto);
												_.anticipos=_.anticipos+(parseFloat(res.data[i].monto));
												}
											});

											}
										};
		_.graficar.sub_estados();_.graficar.propuestas();
});