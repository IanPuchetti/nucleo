function dateTransform(a,b){if(a===Array){a=a.split('-');a=a[2]+'/'+a[1]+'/'+a[0];}else{if(a[0][b]){for(var i in a){a[i][b]=a[i][b].split('-');a[i][b]=a[i][b][2]+'/'+a[i][b][1]+'/'+a[i][b][0];}}}return a;}
var produtos, producto;
var date = new Date();
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
angular.module('exporte',['infinite-scroll'])
.controller('filtro', function($scope, $http, $timeout) {
	var _=$scope;
		_.mostrar='rapida';
	$http.post('php/bancos.php').then(function(res){_.bancos=res.data;});//Obtencion de los bancos
		$http.post('php/usuarios.php').then(function(res){_.usuarios=res.data;});//Obtencion de los usuarios
		$http.post('php/proximas-acciones.php').then(function(res){_.proximas_acciones=res.data;});//Obtencion de las proximas acciones
		$http.post('php/estados.php').then(function(res){_.estados=res.data;});//Obtencion de los estados
		$http.post('php/dolar.php').then(function (res){ _.dolar = res.data;});
		$http.post('php/grupos.php').then(function(res){_.grupos=res.data;});//Obtencion de las calificaciones
		$http.post('php/sub_estados.php').then(function(res){_.sub_estados=res.data;});//Obtencion de los estados
		$http.post('php/tipo_gestion.php').then(function(res){_.tipo_gestion=res.data;});//Obtencion de los tipos
		$http.post('php/calificacion-telefonos.php').then(function(res){_.calificacion_telefonos=res.data;});//Obtencion de las calificaciones
		$http.post('php/campanias.php').then(function(res){_.campanias=res.data;});//Obtencion de las calificaciones
		_.bajar=function(){
			_.limite=_.limite+1;
		};
		_.enter = function (e){
					if(e==13){
						_.buscar.complejo();
					}
				
				};

	_.accion={generar:function (){
						_.generar.id_casos=_.id_casos;
						_.generar.fecha=hoy;
						$http.post('php/nuevo.php', _.generar).then(function (res){
							notificar('Campaña generada!','La campaña se ha generado correctamente.', '/.img/ok.png');
						});},
				 agregar:function (){
				   _.agregar.id_casos=_.id_casos;
				   $http.post('php/agregar_a_campania.php', _.agregar).then(function (res){
							notificar('Agregados a campaña!','Los casos se han agregado correctamente.', '/.img/ok.png');
						});
		}};

	_.buscar={	
				rapido: function (){
					$http.post('php/buscar-rapido.php', {campos : _.campo, filtro:_.rapido}).then(function(res){
						_.tabla=res.data;
						dateTransform(_.tabla, 'fecha_mora');
						dateTransform(_.tabla, 'fecha_deuda');
						dateTransform(_.tabla, 'fecha_ult_cobro');
					});
				},
				complejo: function (){
					_.limite=0;
					_.volver=0;
					$http.post('php/buscar-complejo.php', {campos : _.campo, filtro:_.complejo}).then(function(res){
						_.tabla=res.data;
						dateTransform(_.tabla, 'fecha_mora');
						dateTransform(_.tabla, 'fecha_deuda');
						dateTransform(_.tabla, 'fecha_ult_cobro');
						dateTransform(_.tabla, 'agenda');
						_.volver=1;
						_.total_pesos=0;
						_.id_casos=[];
						for (var i in _.tabla){
						_.id_casos.push(_.tabla[i].documento);
						if(_.tabla[i].dolar=='1'){
						_.total_pesos = parseFloat(_.total_pesos)+(parseFloat(_.tabla[i].deuda)* parseFloat(_.dolar)); 
						}else{
						_.total_pesos = parseFloat(_.total_pesos)+parseFloat(_.tabla[i].deuda); 
					}
					}
					});
				}
	};
	_.descargar = function (){
		for (var i in _.tabla){
			delete _.tabla[i]['$$hashKey']
		}
		exportar(_.tabla, _.nombre_archivo)
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

	_.leer_excel =function (){
		$timeout(function (){_.tabla = excel;_.activar();});
	}

});

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
