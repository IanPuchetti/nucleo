function dateTransform(a,b){if(a===Array){a=a.split('-');a=a[2]+'/'+a[1]+'/'+a[0];}else{if(a[0][b]){for(var i in a){a[i][b]=a[i][b].split('-');a[i][b]=a[i][b][2]+'/'+a[i][b][1]+'/'+a[i][b][0];}}}return a;}
var produtos, producto;
var date = new Date();
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
angular.module('app',['infinite-scroll'])
.controller('controller', function($scope, $http, $timeout) {
	var _=$scope;
		_.mostrar='rapida';
	$http.post('php/bancos.php').then(function(res){_.bancos=res.data;});//Obtencion de los bancos
		$http.post('php/usuarios.php').then(function(res){_.usuarios=res.data;});//Obtencion de los usuarios
		$http.post('php/estados.php').then(function(res){_.estados=res.data;});//Obtencion de los estados
		$http.post('php/dolar.php').then(function (res){ _.dolar = res.data;});
		$http.post('php/grupos.php').then(function(res){_.grupos=res.data;});//Obtencion de las calificaciones
		$http.post('php/sub_estados.php').then(function(res){_.sub_estados=res.data;});//Obtencion de los estados
		$http.post('php/tipo_gestion.php').then(function(res){_.tipo_gestion=res.data;});//Obtencion de los tipos
		$http.post('php/calificacion-telefonos.php').then(function(res){_.calificacion_telefonos=res.data;});//Obtencion de las calificaciones
		$http.post('php/campanias.php').then(function(res){_.campanias=res.data;});//Obtencion de las calificaciones
		
		_.buscar = function (){
			$http.post('php/buscar.php', _.complejo).then(function (res){
				console.log(res.data);
				_.tabla= res.data;
				_.volver=0;
				$timeout(function(){_.activar()});
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

	_.abrir= function (id){
		abrirVentana('campania'+id, '/gerencia/campanias/ver/ver/?id='+id);
	}


});

function abrirVentana(nombre ,url) {
    window.open(url, nombre, "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=400");
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
