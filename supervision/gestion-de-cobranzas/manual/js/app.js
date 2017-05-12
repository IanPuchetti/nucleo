var url = document.URL.split("/")[2], colorete='';
var date = new Date(); 
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
function mover_derecha(d,c,i,f){if(window[d]==c){}else{$("."+d).animate({right:f},200);window.window[d]=0;if(!window[d]){$("."+c).animate({right:i},200);window.window[d]=c;}else{$("."+c).animate({right:f},200);}}}
function abrirVentana(nombre, url ) {window.open(url, nombre, "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=800");}
function liquidar(documento, cbanco, link){ var banco= $("#liquidacion-banco").children(":selected").attr("id");abrirVentana('liquidacion-'+documento, link+'/?documento='+documento+'&banco='+cbanco);}
function propuesta(documento, banco){abrirVentana('nueva_propuesta'+documento, '/general/gestion-de-cobranzas/manual/propuesta/?documento='+documento+'&banco='+banco);}
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
		_.gestion = function () {mover_derecha ("derecha", "gestion", "0%", "-50%")};
		_.filtro = function () {mover_derecha ("derecha", "filtro", "0%", "-50%")};
		_.productos = function () {mover_derecha ("derecha", "productos", "0%", "-50%")};
		_.deudor = function () {mover_derecha ("derecha", "deudor", "0%", "-50%")};
		_.traer_deudor = function (dni) {
										 $http.post('php/deudor-domicilios.php', {documento:dni}).then(function(res){
										 	var deudor=res.data;
										 	_.data.deudor=deudor[0];
										 	_.data.deudor.documento=parseInt(deudor[0].documento);
										 	
										 });
										 $http.post('php/telefonos.php', {documento:dni}).then(function(res){
										 	_.data.telefonos=res.data;
										 });
		};
		_.traer_productos = function (dni) {
			$http.post('php/carpeta-producto.php',{documento:dni}).then(function (res){
				_.data.productos = res.data;
				productos = _.data.productos;
			})
		};
		_.data.seleccionar = function (id){	
										$(".deudores").css({'background':'rgba(0,0,0,0.5)'});
										$("#"+id).css({'background':'rgba(50,50,50,0.5)'});
										_.traer_deudor(id);
										if(window['derecha']=='deudor'||window['derecha']=='productos'){
										}else{
											_.deudor();
										}
										_.traer_productos (id);
									 };

})
.controller('gestion', function($scope, sharedVars, socket, $timeout, $http){
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.color='#337ab7';
		_.gestion={};
		_.gestion= {horas:0,minutos:0,segundos:0};
		_.hora = function (){_.hora_comienzo = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();};
		_.avanzar = function(){if (_.comenzar_gestion == 1){if(_.gestion.segundos==59){_.gestion.segundos=0;if(_.gestion.minutos == 59){_.gestion.minutos=0;_.gestion.horas=_.gestion.horas+1;}else{_.gestion.minutos=_.gestion.minutos+1;}}else{_.gestion.segundos=_.gestion.segundos+1;}if(_.gestion.minutos>5){$("#reloj").css("background-color", "#800000");colorete = '#800000';$("#reloj").css("color", "white");}else{if($("#tipo_gestion").val()=='ENTRANTE'){colorete = '#339933';}else{if($("#tipo_gestion").val()=='SALIENTE'){colorete='#0066cc';}}};
		socket.emit('tiempo', {usuario:usuario, apellido: _.data.deudor.apellido, documento: _.data.deudor.documento, telefono: _.gestion.telefono,  tiempo: _.gestion.horas+':'+_.gestion.minutos+':'+_.gestion.segundos , tipo_gestion : _.gestion.tipo_gestion, color: _.color });
		$timeout(_.avanzar, 1000);
		if(_.gestion.minutos==5){
			_.color="#eb4444";
		}
		}else{}};
		_.liquidar= function (){
												var link='';
												for (var i in _.data.liquidadores){
													if (_.data.liquidadores[i].id_banco==_.data.gestion.cbanco){
														link = _.data.liquidadores[i].link;
													}
												}
			liquidar(_.data.deudor.documento, _.data.gestion.cbanco, link)};
		_.propuesta= function (documento, banco){propuesta(documento, banco)};
		_.data.descargar_carpeta= function(banco){$http.post('http://'+url+':3001/carpeta',{documento:_.data.deudor.documento, banco: banco},{responseType: 'arraybuffer'}).then(function(res){var file = new Blob([ res.data ], {type: 'application/pdf'});saveAs(file, 'Carpeta-'+_.data.deudor.documento+'-'+banco+'.pdf');});};
		_.data.ver_propuesta= function(banco){abrirVentana('propuesta-'+_.data.deudor.documento+'-'+banco, '/general/gestion-de-cobranzas/manual/propuestas/?documento='+_.data.deudor.documento+'&banco='+banco)};
		_.registrar = function (){
						 _.gestion.hora=_.hora_comienzo;
						 _.gestion.operador= operador;
						 _.gestion.tiempo=_.gestion.horas+':'+_.gestion.minutos+':'+_.gestion.segundos;
						 _.gestion.documento= _.data.deudor.documento;
						 _.gestion.banco=_.data.gestion.cbanco;
						_.gestion.hoy=hoy;
						$timeout.cancel($timeout(_.avanzar, 1000));
			$http.post('php/registrar-gestion.php', _.gestion).then(function (res){
				_.data.control=_.res.data;
			});
			};

		_.sms= function (){$http.post('php/sms.php', {hoy: hoy,
													 documento: _.data.deudor.documento,
													 telefono: _.enviar.telefono,
													 banco: _.data.gestion.cbanco
													 }).then(function(res){_.data.control=res.data;});
		};
		_.ivr= function (){$http.post('php/ivr.php', {hoy: hoy,
													 documento: _.data.deudor.documento,
													 telefono: _.enviar.telefono,
													 banco: _.data.gestion.cbanco
													 }).then(function(res){_.data.control=res.data;});
		};
		_.mail= function (){$http.post('php/mail.php', {hoy: hoy,
													 documento: _.data.deudor.documento,
													 banco: _.data.gestion.cbanco
													 }).then(function(res){_.data.control=res.data;});
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
.controller('productos', function($scope, sharedVars, $filter) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.gestion = function () {mover_derecha ("derecha", "gestion", "0%", "-50%")};
		_.seleccionar= function (numero_operacion){
			$(".producto").css({'background':'none'});
			$("#"+numero_operacion).css({'background':'#aaa'});
			_.data.numero_operacion=numero_operacion;
			_.data.producto = $filter('filter')(_.data.productos, {numero_operacion: numero_operacion}, true)[0];
			_.data.producto.deuda=parseFloat(_.data.producto.deuda);
			_.data.producto.fecha_deuda = new Date (_.data.producto.fecha_deuda);
			_.data.producto.fecha_mora = new Date (_.data.producto.fecha_mora);
			_.data.producto.fecha_ult_cobro = new Date (_.data.producto.fecha_ult_cobro);
			mover_derecha ("derecha", "product", "0%", "-50%");
			producto = _.data.producto;
		}
})
.controller('deudor', function($scope, sharedVars, $http) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.deudor='Deudor';
		_.ver_gestion=function(){abrirVentana('gestion-'+_.data.deudor.documento, '/general/gestion-de-cobranzas/manual/llamadas/?documento='+_.data.deudor.documento)}
		_.modificar = function (){
			$http.post('php/modificar-deudor.php', _.data.deudor).then(function (res){
				_.data.control=res.data;
			});
		};
		_.modificar_telefono = function (n){
			var datos = _.data.telefonos[n];
			$http.post('php/modificar-telefono.php', datos).then(function (res){
				_.data.control=res.data;
			});
		};
		_.agregar_telefono = function (){
			_.data.telefono_nuevo.documento=_.data.deudor.documento;
			$http.post('php/agregar-telefono.php', _.data.telefono_nuevo).then(function (res){
				_.data.telefono_nuevo={};
				_.data.control=res.data;
				_.data.seleccionar(_.data.deudor.documento);
			});
		};
})
.controller('producto', function($scope, sharedVars, $http){
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.deudor='Deudor';
		_.modificar = function (){
			$http.post('php/modificar-deuda.php', _.data.producto).then(function (res){
				_.data.control=res.data;
			});
		};
		_.product='Carpeta';

})
.controller('control', function($scope, sharedVars){
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.data.control='No ha hecho ningun cambio.';
});