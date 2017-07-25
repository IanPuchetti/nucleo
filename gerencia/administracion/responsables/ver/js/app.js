function mover_derecha(d,c,i,f){if(window[d]==c){}else{$("."+d).animate({right:f},200);window.window[d]=0;if(!window[d]){$("."+c).animate({right:i},200);window.window[d]=c;}else{$("."+c).animate({right:f},200);}}}
var resee;
angular.module('myApp', [])

.service( 'sharedVars', function ($http) {
		var datos = {}, input = {};
		datos.deudor={};
		$http.post('php/bancos.php').then(function(res){
													   datos.bancos=res.data;
													   });
		$http.post('php/usuarios.php').then(function(res){
													   datos.usuarios=res.data;
													   });
		$http.post('php/proximas-acciones.php').then(function(res){
													   datos.proximas_acciones=res.data;
													   });
		$http.post('php/estados.php').then(function(res){
													   datos.estados=res.data;
													   });
		this.datos = datos;
		this.input = input;
})

.controller('busqueda', function($scope, sharedVars, $http) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.llamar = function () {mover_derecha ("derecha", "llamar", "0%", "-40%")};
		_.filtro = function () {mover_derecha ("derecha", "filtro", "0%", "-40%")};
		_.productos = function () {mover_derecha ("derecha", "productos", "0%", "-40%")};
		_.deudor = function () {mover_derecha ("derecha", "deudor", "0%", "-40%")};
		_.traer_deudor = function (dni) {
										 $http.post('php/deudor-domicilios.php', {documento:dni}).then(function(res){
										 	var deudor=res.data;
										 	_.data.deudor.documento=parseInt(deudor[0].documento);
										 	_.data.deudor.tipo_documento=deudor[0].tipo_documento;
										 	_.data.deudor.apellido=deudor[0].apellido;
										 	_.data.deudor.email=deudor[0].email;
										 	_.data.deudor.empresa=deudor[0].empresa;
										 	_.data.deudor.direccion_laboral=deudor[0].direccion_laboral;
										 	_.data.deudor.direccion_laboral2=deudor[0].direccion_laboral2;
										 	_.data.deudor.direccion_particular=deudor[0].direccion_particular;
										 	_.data.deudor.direccion_particular2=deudor[0].direccion_particular2;
										 	_.data.deudor.direccion_particular3=deudor[0].direccion_particular3;
										 	_.data.deudor.provincia=deudor[0].provincia;
										 	_.data.deudor.localidad=deudor[0].localidad;
										 	_.data.deudor.codigo_postal=deudor[0].codigo_postal;
										 });
										 $http.post('php/telefonos.php', {documento:dni}).then(function(res){
										 	_.data.telefonos=res.data;
										 });
		};
		_.traer_productos = function (dni) {
			$http.post('php/carpeta-producto.php',{documento:dni}).then(function (res){
				_.data.productos = res.data;
			})
		};
		_.data.seleccionar = function (id){	
										$(".deudores").css({'background':'#fff'});
										$("#"+id).css({'background':'#aaa'});
										_.traer_deudor(id);
										_.deudor();
										_.traer_productos (id);
									 };
})

.controller('llamar', function($scope, sharedVars) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
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
														monto_deuda1: _.input.complejo.monto_deuda1,
														monto_deuda2: _.input.complejo.monto_deuda2,
														estado: $("#estado").children(":selected").attr("id"),
														proxima_accion: $("#proxima_accion").children(":selected").attr("id")

														};
										$http.post('php/buscar-complejo.php', datos).then(function(res){
													   _.data.listado=res.data;
													   _.data.control='Busqueda compleja completa.';
													   });};
}
)
.controller('productos', function($scope, sharedVars) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
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
.controller('control', function($scope, sharedVars) {
		var _=$scope;
		_.data=sharedVars.datos;
		_.input=sharedVars.input;
		_.data.control='No ha hecho ningun cambio.';
})
;

