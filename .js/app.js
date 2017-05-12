var url = document.URL.split("/")[2], colorete;
var date = new Date(); 
function mover_derecha(d,c,i,f){if(window[d]==c){}else{$("."+d).animate({right:f},200);window.window[d]=0;if(!window[d]){$("."+c).animate({right:i},200);window.window[d]=c;}else{$("."+c).animate({right:f},200);}}}
function abrirVentana(nombre, url ) {window.open(url, nombre, "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=800");}
function liquidar(documento, cbanco){var banco= $("#liquidacion-banco").children(":selected").attr("id");abrirVentana('liquidacion-'+documento, '/general/liquidador/'+banco+'/?documento='+documento+'&banco='+cbanco);}
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
		$http.post('php/proximas-acciones.php').then(function(res){datos.proximas_acciones=res.data;});//Obtencion de las proximas acciones
		$http.post('php/estados.php').then(function(res){datos.estados=res.data;});//Obtencion de los estados
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
										$(".deudores").css({'background':'#fff'});
										$("#"+id).css({'background':'#aaa'});
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
		_.gestion={};
		_.gestion= {horas:0,minutos:0,segundos:0};
		_.hora = function (){_.hora_comienzo = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();};
		_.avanzar = function(){if (_.comenzar_gestion == 1){if(_.gestion.segundos==59){_.gestion.segundos=0;if(_.gestion.minutos == 59){_.gestion.minutos=0;_.gestion.horas=_.gestion.horas+1;}else{_.gestion.minutos=_.gestion.minutos+1;}}else{_.gestion.segundos=_.gestion.segundos+1;}if(_.gestion.minutos>5){$("#reloj").css("background-color", "#800000");colorete = '#800000';$("#reloj").css("color", "white");}else{if($("#tipo_gestion").val()=='ENTRANTE'){colorete = '#339933';}else{if($("#tipo_gestion").val()=='SALIENTE'){colorete='#0066cc';}}};
		socket.emit('tiempo', {usuario:usuario, apellido: _.data.deudor.apellido, documento: _.data.deudor.documento, telefono: $("#telefonos").val(),  tiempo: _.gestion.horas+':'+_.gestion.minutos+':'+_.gestion.segundos , tipo_gestion : $("#tipo_gestion").val(), color: colorete });
		$timeout(_.avanzar, 1000);
		}else{}};
		_.liquidar= function (documento, banco){liquidar(documento, banco)};
		_.propuesta= function (documento, banco){propuesta(documento, banco)};
		_.data.descargar_carpeta= function(banco){$http.post('http://'+url+':3001/carpeta',{documento:_.data.deudor.documento, banco: banco},{responseType: 'arraybuffer'}).then(function(res){var file = new Blob([ res.data ], {type: 'application/pdf'});saveAs(file, 'Carpeta-'+_.data.deudor.documento+'-'+banco+'.pdf');});};
		_.data.ver_propuesta= function(banco){abrirVentana('propuesta-'+_.data.deudor.documento+'-'+banco, '/general/busqueda/propuestas/?documento='+_.data.deudor.documento+'&banco='+banco)};
		_.registrar = function (){
			var datos = {tipo_gestion : $("#tipo_gestion").children(":selected").attr("id"),
						 telefono: $("#telefonos").val(),
						 comentario: _.comentario,
						 proxima_accion: $("#gestion_proxima_accion").children(":selected").attr("id"),
						 calificacion: $("#calificacion_telefono").children(":selected").attr("id"),
						 agenda:_.agenda,
						 hora:_.hora_comienzo,
						 tiempo:_.gestion.horas+':'+_.gestion.minutos+'-'+_.gestion.segundos
						};
						$timeout.cancel($timeout(_.avanzar, 1000));
			$http.post('php/registrar-gestion.php', datos).then(function (){});
			
		};
})
.controller('filtro', function($scope, sharedVars, $http) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.filtro = 'rapido';
		_.buscar_rapido = function () {	$http.post('php/buscar-rapido.php', _.input.rapido).then(function(res){
													   _.data.listado=res.data;
													   _.data.control='Busqueda rapida completa.';
													   });};
		_.buscar_complejo = function () { var datos= {	agenda1: _.input.complejo.agenda1,
														agenda2: _.input.complejo.agenda2,
														documento1: _.input.complejo.documento1,
														documento2: _.input.complejo.documento2,
														apellido: _.input.complejo.apellido,
														banco: $("#banco").children(":selected").attr("id"),
														responsable: $("#responsable").children(":selected").attr("id"),
														numero_gestion: _.input.complejo.numero_gestion,
														fecha_ingreso1: _.input.complejo.fecha_ingreso1,
														fecha_ingreso2: _.input.complejo.fecha_ingreso2,
														deuda1: _.input.complejo.deuda1,
														deuda2: _.input.complejo.deuda2,
														estado: $("#estado").children(":selected").attr("id"),
														proxima_accion: $("#proxima_accion").children(":selected").attr("id")
														};
										$http.post('php/buscar-complejo.php', datos).then(function(res){
													   _.data.listado=res.data;
													   _.data.control='Busqueda compleja completa.';
													   });};
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
		_.modificar = function (){
			$http.post('php/modificar-deudor.php', _.data.deudor).then(function (res){
				_.data.control=res.data;
			});
		};
		_.modificar_telefono = function (numero){
			var datos = {numero: numero,
						 nuevo_numero: $("#numero"+numero).val(),
						 comentario: $("#comentario"+numero).val()
						 };
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
.controller('producto', function($scope, sharedVars, $http) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.deudor='Deudor';
		_.modificar = function (){
			_.data.producto.estado= $("#producto_estado").children(":selected").attr("id");
			_.data.producto.proxima_accion= $("#producto_proxima_accion").children(":selected").attr("id");
			_.data.producto.banco= $("#producto_banco").children(":selected").attr("id");
			_.data.producto.sub_estado= $("#producto_sub_estado").children(":selected").attr("id");
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