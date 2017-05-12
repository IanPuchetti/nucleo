var url = document.URL.split("/")[2], colorete;
var date = new Date(); 
function mover_derecha(d,c,i,f){if(window[d]==c){}else{$("."+d).animate({right:f},200);window.window[d]=0;if(!window[d]){$("."+c).animate({right:i},200);window.window[d]=c;}else{$("."+c).animate({right:f},200);}}}
function abrirVentana(nombre, url ) {window.open(url, nombre, "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=800");}
function liquidar(documento, cbanco, link){ alert(link);var banco= $("#liquidacion-banco").children(":selected").attr("id");abrirVentana('liquidacion-'+documento, link+'/?documento='+documento+'&banco='+cbanco);}
function propuesta(documento, banco){abrirVentana('nueva_propuesta'+documento, '/general/gestion-telefonica/manual/propuesta/?documento='+documento+'&banco='+banco);}
var produtos, producto;
angular.module('myApp', [
	'btford.socket-io',
	'angular.filter'
	])
.factory('socket', function (socketFactory) {
  return socketFactory({
    prefix: 'connection',
    ioSocket: io.connect('http://'+url+':3000')
  });
})
.service( 'sharedVars', function ($http) {
		var datos = {}, input = {};
		datos.deudor={};
		$http.post('php/bancos.php').then(function(res){datos.bancos=res.data;});//Obtencion de los bancos
		$http.post('php/usuarios.php').then(function(res){datos.usuarios=res.data;});//Obtencion de los usuarios
		$http.post('php/estados.php').then(function(res){datos.estados=res.data;});//Obtencion de los estados
		$http.post('php/liquidadores.php').then(function(res){datos.liquidadores=res.data;});//Obtencion de los estados
		$http.post('php/sub_estados.php').then(function(res){datos.sub_estados=res.data;});//Obtencion de los estados
		$http.post('php/tipo_gestion.php').then(function(res){datos.tipo_gestion=res.data;});//Obtencion de los tipos
		$http.post('php/calificacion-telefonos.php').then(function(res){datos.calificacion_telefonos=res.data;});//Obtencion de las calificaciones

		this.datos = datos;
		this.input = input;
})
.controller('busqueda', function($scope, sharedVars, $http) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.opciones = function () {mover_derecha ("derecha", "opciones", "0%", "-50%")};
		_.filtro = function () {mover_derecha ("derecha", "filtro", "0%", "-50%")};
		_.traer_deudor = function (dni) {
										 	_.data.deudor.documento=parseInt(dni);
		};
		_.traer_productos = function (dni) {
			$http.post('php/carpeta-producto.php',{documento:dni}).then(function (res){
				_.data.productos = res.data;
				productos = _.data.productos;
			});
		};
		_.data.seleccionar = function (id){	
										$(".deudores").css({'background':'rgba(0,0,0,0.5)'});
										$("#"+id).css({'background':'rgba(50,50,50,0.5)'});
										_.traer_deudor(id);
									 };

})
.controller('filtro', function($scope, sharedVars, $http) {
		var _=$scope;
		_.keye=function(e){if(e.ctrKey){alert('Control')};};
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.filtro = 'rapido';
		_.buscar= { rapido : function () {			_.data.loading=1;_.data.listado=[];
													$http.post('php/buscar-rapido.php', _.rapido).then(function(res){
													   _.data.listado=res.data;
													   _.data.control='Busqueda rapida completa.';
													   _.data.loading='';
													   });},
					complejo : function () { 	_.data.loading=1;_.data.listado=[];
										$http.post('php/buscar-complejo.php', _.complejo).then(function(res){
													   _.data.listado=res.data;
													   _.data.control='Busqueda compleja completa.';
													   _.data.loading='';
													   });}};
				_.enter = function (e){
					if(e==13){
						if(_.filtro =='rapido'){
							_.buscar.rapido();
					}else{
						_.buscar.complejo();
					}
				}
				};
		}
)
.controller('opciones', function ($scope, sharedVars, $http){
		var _=$scope;
		_.data=sharedVars.datos;
		_.aplicar= function (){
								if(_.cambiar=='seleccion'){
									_.alterar.seleccion();
								}else{
									if(_.cambiar=='filtro'){
										_.alterar.filtro();
									}
								}
		};
		_.modificar= function(documento, operador){
			$http.post('php/modificar.php',{documento:documento,operador:operador}).then(function(res){_.data.control=res.data;});
		};
		_.alterar={	seleccion:function(){	if(_.accion=='retirar'){var operador=0;}else{if(_.accion=='transferir'){var operador=_.operador.id;}}
												_.modificar(_.data.deudor.documento, operador);
										},
					filtro:function()	{	if(_.accion=='retirar'){var operador=0;}else{if(_.accion=='transferir'){var operador=_.operador.id;}}
											for (var i in _.data.listado){
												_.modificar(_.data.listado[i].documento, operador);
											}
											
										}
									};
		
})
.controller('control', function ($scope, sharedVars){
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.data.control='No ha hecho ningun cambio.';
});