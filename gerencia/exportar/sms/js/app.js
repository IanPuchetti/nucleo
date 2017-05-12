function dateTransform(a,b){if(a===Array){a=a.split('-');a=a[2]+'/'+a[1]+'/'+a[0];}else{if(a[0][b]){for(var i in a){a[i][b]=a[i][b].split('-');a[i][b]=a[i][b][2]+'/'+a[i][b][1]+'/'+a[i][b][0];}}}return a;}
var produtos, producto;var counted;
var date= new Date();
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
angular.module('exporte',['infinite-scroll',"chart.js"])
.controller('filtro', function($scope, $http, $timeout) {
	var _=$scope;
		_.mostrar='rapida';
	$http.post('php/bancos.php').then(function(res){_.bancos=res.data;});//Obtencion de los bancos
		$http.post('php/usuarios.php').then(function(res){_.usuarios=res.data;});//Obtencion de los usuarios
		$http.post('php/proximas-acciones.php').then(function(res){_.proximas_acciones=res.data;});//Obtencion de las proximas acciones
		$http.post('php/estados.php').then(function(res){_.estados=res.data;});//Obtencion de los estados
		$http.post('php/sub_estados.php').then(function(res){_.sub_estados=res.data;});//Obtencion de los estados
		$http.post('php/tipo_gestion.php').then(function(res){_.tipo_gestion=res.data;});//Obtencion de los tipos
		$http.post('php/calificacion-telefonos.php').then(function(res){_.calificacion_telefonos=res.data;});//Obtencion de las calificaciones
		_.bajar=function(){
			_.limite=_.limite+1;
		};
		_.enter = function (e){
					if(e==13){
						_.buscar.complejo();
					}
				
				};
	_.buscar={	rapido: function (){
					$http.post('php/buscar-rapido.php', {campos : _.campo, filtro:_.rapido}).then(function(res){
						_.tabla=res.data;
						dateTransform(_.tabla, 'fecha_mora');
						dateTransform(_.tabla, 'fecha_deuda');
						dateTransform(_.tabla, 'fecha_ult_cobro');
						
					});
				},
				complejo: function (){
					$http.post('php/buscar-complejo.php', {campos : _.campo, filtro:_.complejo}).then(function(res){
					_.limite=0;
					_.volver=0;
						_.tabla=res.data;
						dateTransform(_.tabla, 'fecha_mora');
						dateTransform(_.tabla, 'fecha_deuda');
						dateTransform(_.tabla, 'fecha_ult_cobro');
						dateTransform(_.tabla, 'agenda');
						$timeout(function (){_.activar();});
						_.total_pesos=0;
						_.grafico={};
						_.grafico.sub_estados=[];
						for (var i in _.tabla){
						_.total_pesos = parseFloat(_.total_pesos)+parseFloat(_.tabla[i].deuda_total);
						_.grafico.sub_estados.push(_.tabla[i].Sub_estado);
					}

											_.labels = [];
											_.data=[];
											_.Sub_estados =contar_array(_.grafico.sub_estados);
											for(var key in _.Sub_estados){
												if(key=='null'){}else{
												_.labels.push(key);
												_.data.push(_.Sub_estados[key]);
											}
										}	
											
					});
				}
	};
	_.descargar = function (){
		for (var i in _.tabla){
			delete _.tabla[i]['$$hashKey']
		}
		exportar(_.tabla, _.nombre_archivo);
		$http.post('php/registrar.php', {tabla: _.tabla , hoy : hoy}).then(function (res){
					_.volver=0;
					_.tabla=[];
					$timeout(function (){_.activar();});
					notificar('SMS exportados!',res.data, '/.img/ok.png');
		});
	}
	_.ordenar = function (a){
		_.volver=0;_.limite=20;
		$(".flechita").remove();
		if(_.orden==a){_.orden='-'+a;$("#"+a).append("<span class='flechita'>&#x25B4;</span>");}else{_.orden=a;$("#"+a).append("<span class='flechita'>&#x25BE;</span>");}
		$timeout(function (){_.activar();});
	}
	_.activar = function (){
		_.volver=1;
	}
});


function contar_array(array){
	var counts = {};
    array.forEach(function(x) { counts[x] = (counts[x] || 0)+1; });
    return counts;
}


Notification.requestPermission();
function notificar(title, body, icon) {
      if(Notification.permission !== "granted"){
        Notification.requestPermission();
      }else {
      var notification = new Notification(title, {
      icon: icon,
      body: body,
    });

    notification.onclick = function () {  
    notification.close();  
    };
  }
}