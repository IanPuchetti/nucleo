var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }
    $_GET[decode(arguments[1])] = decode(arguments[2]);
});

var url = document.URL.split("/")[2], colorete;
var date = new Date(); 
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
function abrirVentana(nombre, url ) {window.open(url, nombre, "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=800");}
var produtos, producto;


angular.module('myApp', ["chart.js"])
.controller('controller', function($scope, $http) {
		var _=$scope;
		$http.post('php/campania.php', {id: $_GET['id']}).then(function(res){_.campania=res.data[0];_.campania.fecha_finalizacion=_.campania.fecha_finalizacion.split('-')[2]+'/'+_.campania.fecha_finalizacion.split('-')[1]+'/'+_.campania.fecha_finalizacion.split('-')[0];
});//Obtencion de los estados
		_.gestionados=0;_.no_gestionados=0;
		_.fecha=new Date();
		_.cargar = function (fecha){
		fecha=fecha.getFullYear()+'-'+(fecha.getMonth()+1)+'-'+fecha.getDate();
		_.graficar_fechas = function (){$http.post('php/contar-fechas.php',{id_campania: $_GET['id'], fecha: fecha}).then(function (res){
											_.labels2 = [];
											_.data2=[];
											for(var i in res.data){
												res.data[i].fecha=res.data[i].fecha.split('-')[2]+'/'+res.data[i].fecha.split('-')[1]+'/'+res.data[i].fecha.split('-')[0];
												_.labels2.push(res.data[i].fecha+' ('+res.data[i].cantidad+')');
												_.data2.push(res.data[i].cantidad);
												}
												if(res.data[i].fecha!=_.campania.fecha_finalizacion){
												_.labels2.push(_.campania.fecha_finalizacion);
												}
												_.data2.push(0);
											});
											};


		_.graficar_operadores = function (){$http.post('php/contar-operadores.php',{id_campania: $_GET['id'], fecha:fecha}).then(function (res){
											_.labels3 = [];
											_.data3=[];
											for(var i in res.data){
												_.labels3.push(res.data[i].operador);
												_.data3.push(res.data[i].cantidad);
												}
												_.data3.push(0);
											});
											};		

$http.post('php/campanias.php',{id:$_GET['id'], fecha:fecha}).then(function (res){
			_.gestionados=0; _.no_gestionados=0;
			_.gestiones=res.data;
			for (var i in _.gestiones){
				if(_.gestiones[i].fecha){
					_.gestionados++;
				}else{
					_.no_gestionados++;
				}
			}
			_.labels1 = [];
											_.data1=[];
											_.labels1.push('gestionados');_.labels1.push('no gestionados');
											_.data1.push(_.gestionados);_.data1.push(_.no_gestionados);
			
		});
															
											_.graficar_fechas();_.graficar_operadores();
		}

		_.cargar(_.fecha);

		
		_.ver_gestion= function (documento){
			abrirVentana("llamadas"+documento,"/general/gestion-de-cobranzas/manual/llamadas/?documento="+documento);
		}
});
/*
  		var seccion=0, gestionados=0, no_gestionados=0, total=0;
  		$.ajax({
  				url:'php/campanias.php',
  				type:'post',
  				data:{id: $_GET["id"]},
  				success: function (res){
  									res=JSON.parse(res);
  									 for(var i in res){
  									 if(res[i].gestionado==0){
  									 	 $("#campania").append('<tr class=" label-warning"><td>'+res[i].apellido+'</td><td>'+res[i].documento+'</td><td>'+res[i].sub_estado+'</td><td><label class="label btn-danger" onclick=abrirVentana("llamadas'+res[i].documento+'","/general/gestion-de-cobranzas/manual/llamadas/?caso='+res[i].id+'&documento='+res[i].documento+'")>Llamadas</label><label class="label btn-primary" onclick=abrirVentana("deudor'+res[i].documento+'","/general/busqueda/deudores/?documento='+res[i].documento+'")>Deudor</label><label class="label btn-info" onclick=abrirVentana("deudas'+res[i].documento+'","/general/busqueda/deudas/?id='+res[i].id+'")>Deuda</label></td></tr>');
  									 	 no_gestionados++; 
  									 }else{
  									 	 $("#campania").append('<tr class=" label-success"><td>'+res[i].apellido+'</td><td>'+res[i].documento+'</td><td>'+res[i].sub_estado+'</td><td><label class="label btn-danger" onclick=abrirVentana("llamadas'+res[i].documento+'","/general/gestion-de-cobranzas/manual/llamadas/?documento='+res[i].documento+'")>Llamadas</label><label class="label btn-primary" onclick=abrirVentana("deudor'+res[i].documento+'","/general/busqueda/deudores/?documento='+res[i].documento+'") >Deudor</label><label class="label btn-info" onclick=abrirVentana("deudor'+res[i].documento+'","/general/busqueda/deudas/?id='+res[i].id+'")>Deuda</label></td></tr>');
  									 	 gestionados++;
  									 }
  									 total++;
  									 }
  									 $("#gestionados").html(gestionados);
  									 $("#no_gestionados").html(no_gestionados);
  									 $("#total").html(total);
									}
									});
									*/