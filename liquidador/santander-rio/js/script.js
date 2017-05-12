var $_GET = {};
var url = document.URL.split("/")[2];
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});
     
     function calcularDate(fechaInicial, fechaFinal){
    	var fecha1 = moment(fechaInicial.getFullYear()+'-'+(parseInt(fechaInicial.getMonth())+1)+'-'+fechaInicial.getDate());
		var fecha2 = moment(fechaFinal);
		return fecha1.diff(fecha2, 'days');
    }

    function calcularDias(fechaInicial, fechaFinal)
    {
		
		var resultado="";
			inicial=fechaInicial.split("-");
			final=fechaFinal.split("-");
			// obtenemos las fechas en milisegundos
			var dateStart=new Date(inicial[0],(inicial[1]-1),inicial[2]);
            var dateEnd=new Date(final[0],(final[1]-1),final[2]);
            if(dateStart<dateEnd)
            {
				// la diferencia entre las dos fechas, la dividimos entre 86400 segundos
				// que tiene un dia, y posteriormente entre 1000 ya que estamos
				// trabajando con milisegundos.
				return parseInt(((dateEnd-dateStart)/86400)/1000);
			}else{
				return parseInt(((dateStart-dateEnd)/86400)/1000);
			}
    }
    
     function calcularDiasDate(fechaInicial, fechaFinal)
    {
		fechaInicial= fechaInicial.getFullYear()+'-'+fechaInicial.getMonth()+'-'+fechaInicial.getDate();
		fechaFinal= fechaFinal.getFullYear()+'-'+fechaFinal.getMonth()+'-'+fechaFinal.getDate();
		var resultado="";
			inicial=fechaInicial.split("-");
			final=fechaFinal.split("-");
			// obtenemos las fechas en milisegundos
			var dateStart=new Date(inicial[0],(inicial[1]-1),inicial[2]);
            var dateEnd=new Date(final[0],(final[1]-1),final[2]);
            if(dateStart<dateEnd)
            {
				// la diferencia entre las dos fechas, la dividimos entre 86400 segundos
				// que tiene un dia, y posteriormente entre 1000 ya que estamos
				// trabajando con milisegundos.
				return parseInt(((dateEnd-dateStart)/86400)/1000);
			}else{
				return parseInt(((dateStart-dateEnd)/86400)/1000);
			}
    }

     function calcularDiasDate2(fechaInicial, fechaFinal)
    {
		fechaInicial= fechaInicial.getFullYear()+'-'+fechaInicial.getMonth()+'-'+fechaInicial.getDate();
		var resultado="";
			inicial=fechaInicial.split("-");
			final=fechaFinal.split("-");
			// obtenemos las fechas en milisegundos
			var dateStart=new Date(inicial[0],(inicial[1]-1),inicial[2]);
            var dateEnd=new Date(final[0],(final[1]-1),final[2]);
            if(dateStart<dateEnd)
            {
				// la diferencia entre las dos fechas, la dividimos entre 86400 segundos
				// que tiene un dia, y posteriormente entre 1000 ya que estamos
				// trabajando con milisegundos.
				return parseInt(((dateEnd-dateStart)/86400)/1000);
			}else{
				return parseInt(((dateStart-dateEnd)/86400)/1000);
			}
    }
    var cuotas;
    function sumar_mes(fecha){
    var 		oldDate = fecha,
    			momentObj = moment(oldDate);
    			momentObj.add(1, 'months');
    			newDate = momentObj.toDate();
    			return newDate;
    };
    
    function sumar_mes_dias(fecha){
    var 		oldDate = fecha,
    			momentObj = moment(oldDate);
    			momentObj.add(30, 'days');
    			newDate = momentObj.toDate();
    			return newDate;
    };

    function dolar_a_peso (deuda, moneda, dolar){
    	if(moneda==1){
    		return parseFloat(deuda)*parseFloat(dolar);
    	}else{
    		return parseFloat(deuda);
    	}
    }
    
var cuotas;
var app = angular.module('myApp', []);
app.controller('myCtrl', function($http, $scope) {
			var _=$scope, anterior, diferencia_dias, interes, iva_interes, cuota_total, amortizacion; 
			var data={"numero_operacion" : $_GET['numero_operacion']};
			var datos={"documento" : $_GET['documento'], "banco" : $_GET['banco']};
			_.id_operador= operador;_.fecha_propuesta=new Date();
			$http.post('php/usuarios.php').then(function(res){_.usuarios=res.data;});//Obtencion de los usuarios
			$http.post('php/dolar.php').then(function (res){ _.dolar = res.data;});
			$http.post('php/telefonos.php', {documento:$_GET['documento']}).then(function(res){
										 	_.telefonos=res.data;
										 });
			$http.post('php/productos.php', datos).then(function(res){
													_.productos=res.data;
													productos=res.data;
													_.estado=productos[0].estado;
													_.capital_inicial=0;
													for (var i in productos){
														_.capital_inicial=parseFloat(_.capital_inicial)+dolar_a_peso(productos[i].deuda, productos[i].dolar, _.dolar);
													}
												});
			_.cambio_primer_cuota = function () {
													_.fecha_primer_cuota = sumar_mes(_.fecha_anticipo);
												};
			

			_.calcular_cuotas = function ()	    {	
													_.TOTAL_cuota_total=0;
													_.TOTAL_amortizacion=0;
													_.TOTAL_interes=0;
													_.TOTAL_iva_interes=0;
													var tasa= _.tasa_frances / 100;
													_.cuotas = [];														
													for(var i=0;i<_.plazo;i++){
														if(_.cuotas.length == 0){
														saldo_inicial = _.a_financiar;
														diferencia_dias = tasa * calcularDiasDate(_.fecha_anticipo, _.fecha_primer_cuota) / 365;
														interes = saldo_inicial * ( diferencia_dias);
														iva_interes = 0.21 * interes;
														cuota_total = ( _.a_financiar * (( diferencia_dias * (Math.pow( (1+ diferencia_dias) , _.plazo )))/((Math.pow( (1+ diferencia_dias) , _.plazo )) -1 )));
														amortizacion = cuota_total - iva_interes - interes;
														saldo_deuda = saldo_inicial - amortizacion ;
														
														_.cuotas.push({
																		nro_cuota : 1,
																		mes_actual : _.fecha_primer_cuota,
																		mes_anterior : _.fecha_anticipo,
																		diferencia_dias : diferencia_dias,
																		interes : interes,
																		iva_interes : iva_interes,
																		saldo_inicial : saldo_inicial,
																		cuota_total : cuota_total,
																		amortizacion : amortizacion, 
																		saldo_deuda : saldo_deuda 
																		
																	});
														cuotas= _.cuotas;
														}else{
														anterior = _.cuotas[i-1];
														saldo_inicial = anterior.saldo_deuda;
														diferencia_dias = tasa * 30 / 365;
														interes = saldo_inicial * ( diferencia_dias);
														iva_interes = 0.21 * interes;
														cuota_total = ( _.a_financiar * (( diferencia_dias * (Math.pow( (1+ diferencia_dias) , _.plazo )))/((Math.pow( (1+ diferencia_dias) , _.plazo )) -1 )));
														amortizacion = cuota_total - iva_interes - interes;
														saldo_deuda = saldo_inicial - amortizacion ;
														
														_.cuotas.push({
																		nro_cuota : anterior.nro_cuota + 1,
																		mes_actual : sumar_mes_dias(anterior.mes_actual),
																		mes_anterior : anterior.mes_actual,
																		diferencia_dias : diferencia_dias,
																		interes : interes,
																		iva_interes : iva_interes,
																		saldo_inicial : saldo_inicial,
																		cuota_total : cuota_total,
																		amortizacion : amortizacion, 
																		saldo_deuda : saldo_deuda
																	});
														 _.ultimo_saldo_deuda= saldo_deuda;
														}
													_.TOTAL_cuota_total=_.TOTAL_cuota_total+cuota_total;
													_.TOTAL_amortizacion=_.TOTAL_amortizacion+amortizacion;
													_.TOTAL_interes=_.TOTAL_interes+interes;
													_.TOTAL_iva_interes=_.TOTAL_iva_interes+iva_interes;
													}
													cuotas= _.cuotas;
													_.cuota_promedio = (_.TOTAL_cuota_total + _.ultimo_saldo_deuda) / _.plazo;
												};
			
			_.quitar = function () {    
										if(_.numero_gestion == 1){
										if (_.producto == 'Tarjeta/Monoproducto'){
											
												if (_.capital_inicial < 5000){
												_.quita_descripcion = 'Deuda menor de $5000. Descuento del 30%.';
												_.quita_final = _.total - (_.total * (30/100));
												}else{
													if (_.capital_inicial >= 5000 && _.capital_inicial < 10000){
														_.quita_descripcion = 'Deuda entre $5000 y $10000. Descuento del 25%.';
														_.quita_final = _.total - (_.total * (25/100));
														}else{
														if (_.capital_inicial >= 10000 && _.capital_inicial < 50000){
															_.quita_descripcion = 'Deuda entre $10000 y $50000. Descuento del 20%.';
															_.quita_final = _.capital_inicial - (_.capital_inicial * (20/100));
														}
												}
											}
										}else{
										if (_.producto == 'Cuenta-Corriente/Prestamo-Personal'){
												if (_.capital_inicial < 5000){
												_.quita_descripcion = 'Deuda menor de $5000. Descuento del 20%.';
												_.quita_final = _.capital_inicial - (_.capital_inicial * (20/100));
												}else{
													if (_.capital_inicial >= 5000 && _.capital_inicial < 10000){
														_.quita_descripcion = 'Deuda entre $5000 y $10000. Descuento del 15%.';
														_.quita_final = _.capital_inicial - (_.capital_inicial * (15/100));
														}else{
														if (_.total >= 10000 && _.total < 50000){
															_.quita_descripcion = 'Deuda entre $10000 y $50000. Descuento del 10%.';
															_.quita_final = _.capital_inicial - (_.capital_inicial * (10/100));
														}
												}
											}
										}else{
										if (_.producto == 'Refinanciacion'){
												if (_.capital_inicial < 5000){
												_.quita_descripcion = 'Deuda menor de $5000. Descuento del 30%.';
												_.quita_final = _.capital_inicial - (_.capital_inicial * (30/100));
												}else{
													if (_.total >= 5000 && _.capital_inicial < 50000){
														_.quita_descripcion = 'Deuda entre $5000 y $50000. Descuento del 20%.';
														_.quita_final = _.capital_inicial - (_.capital_inicial * (20/100));
														}
												}
											}
										}
										}
										_.quita_descripcion+=' (1° Gestion).'
										}else{
										
										if(_.numero_gestion == 2){
										if (_.producto == 'Tarjeta/Monoproducto'){
											
												if (_.capital_inicial < 5000){
												_.quita_descripcion = 'Deuda menor de $5000. Descuento del 40%.';
												_.quita_final = _.capital_inicial - (_.capital_inicial * (40/100));
												}else{
													if (_.capital_inicial >= 5000 && _.capital_inicial < 10000){
														_.quita_descripcion = 'Deuda entre $5000 y $10000. Descuento del 35%.';
														_.quita_final = _.capital_inicial - (_.capital_inicial * (35/100));
														}else{
														if (_.capital_inicial >= 10000 && _.capital_inicial < 50000){
															_.quita_descripcion = 'Deuda entre $10000 y $50000. Descuento del 30%.';
															_.quita_final = _.capital_inicial - (_.capital_inicial * (30/100));
														}
												}
											}
										}else{
										if (_.producto == 'Cuenta-Corriente/Prestamo-Personal'){
												if (_.capital_inicial < 5000){
												_.quita_descripcion = 'Deuda menor de $5000. Descuento del 30%.';
												_.quita_final = _.capital_inicial - (_.capital_inicial * (30/100));
												}else{
													if (_.capital_inicial >= 5000 && _.capital_inicial < 10000){
														_.quita_descripcion = 'Deuda entre $5000 y $10000. Descuento del 25%.';
														_.quita_final = _.capital_inicial - (_.capital_inicial * (25/100));
														}else{
														if (_.total >= 10000 && _.total < 50000){
															_.quita_descripcion = 'Deuda entre $10000 y $50000. Descuento del 20%.';
															_.quita_final = _.capital_inicial - (_.capital_inicial * (20/100));
														}
												}
											}
										}else{
										if (_.producto == 'Refinanciacion'){
												if (_.capital_inicial < 5000){
												_.quita_descripcion = 'Deuda menor de $5000. Descuento del 40%.';
												_.quita_final = _.capital_inicial - (_.capital_inicial * (40/100));
												}else{
													if (_.total >= 5000 && _.capital_inicial < 50000){
														_.quita_descripcion = 'Deuda entre $5000 y $50000. Descuento del 30%.';
														_.quita_final = _.capital_inicial - (_.capital_inicial * (30/100));
														}
												}
											}
										}
										}
										_.quita_descripcion+=' (2° Gestion).'
										}
										}
										};
			
			_.iniciar=function (){
			$http.post('php/datos.php', datos)
					   .then(function(res){
					   					  
										   res=res.data[0];
										   _.email=res.email;
  										   _.banco=res.banco;
  										   _.titular=res.titular;
  										   _.documento=res.documento;
  										   _.numero_gestion = res.numero_gestion;
  										   _.fecha_actualizacion=sumar_mes(new Date);
  										   _.fecha_mora=res.fecha_mora;
  										   _.tasa=res.tasa;
  										   _.tasa_frances=res.tasa_frances;
  										   _.porcentaje_honorarios=res.porcentaje_honorarios;
  										   _.gastos=res.gastos; // CENCOSUD VARIA POR PRE Y JUD
  										   _.dias_atraso=calcularDate(_.fecha_actualizacion, _.fecha_mora);
  										   _.monto_atraso=_.dias_atraso/30;
  										   _.interes=(_.tasa/100)*_.capital_inicial*_.monto_atraso;
  										   _.iva_sobre_interes=_.interes*0.21;
  										   _.sub_total=parseInt(_.capital_inicial)+parseFloat(_.interes)+parseFloat(_.iva_sobre_interes)+parseFloat(_.gastos);
  										   _.honorarios=_.sub_total*(_.porcentaje_honorarios/100);
  										   _.iva_sobre_honorarios=_.honorarios*0.21;
  										   _.total=parseFloat(_.sub_total)+parseFloat(_.honorarios)+parseFloat(_.iva_sobre_honorarios);
  										   _.a_financiar = parseFloat(parseFloat((100 - _.porcentaje)/ 100 *_.total).toFixed(2));
  											});
			}
			_.cambio_honorarios=function (){
				$http.post('php/datos.php', datos)
					   .then(function(res){
					   					  
										   res=res.data[0];
  										   _.banco=res.banco;
  										   _.titular=res.titular;
  										   _.documento=res.documento;
  										   _.numero_gestion = res.numero_gestion;
  										   _.fecha_actualizacion=sumar_mes(new Date);
  										   _.fecha_mora=res.fecha_mora;
  										   _.tasa=res.tasa;
  										   _.tasa_frances=res.tasa_frances;
  										   _.gastos=res.gastos; // CENCOSUD VARIA POR PRE Y JUD
  										   _.dias_atraso=calcularDate(_.fecha_actualizacion, _.fecha_mora);
  										   _.monto_atraso=_.dias_atraso/30;
  										   _.interes=(_.tasa/100)*_.capital_inicial*_.monto_atraso;
  										   _.iva_sobre_interes=_.interes*0.21;
  										   _.sub_total=parseInt(_.capital_inicial)+parseFloat(_.interes)+parseFloat(_.iva_sobre_interes)+parseFloat(_.gastos);
  										   _.honorarios=_.sub_total*(_.porcentaje_honorarios/100);
  										   _.iva_sobre_honorarios=_.honorarios*0.21;
  										   _.total=parseFloat(_.sub_total)+parseFloat(_.honorarios)+parseFloat(_.iva_sobre_honorarios);
  										   _.a_financiar = parseFloat(parseFloat((100 - _.porcentaje)/ 100 *_.total).toFixed(2));
  											});
			};
			
  			_.plazo=1; _.porcentaje='30%'; _.quitas=''; _.producto="Tarjeta/Monoproducto"; _.fecha_anticipo = sumar_mes(new Date()); _.cambio_primer_cuota(); _.calcular_cuotas; _.quitar();
			_.descargar = function (){
  				$http.post('http://'+url+':3001/liquidacion-santander',{
  															cuota_cero: _.cuota_cero,
  															anticipo_cuota_cero: _.anticipo_cuota_cero,
  															cuotas_banco: _.cuotas_banco,
  															monto_cuota: _.monto_cuota,
  															cuotas_honorarios: _.cuotas_honorarios,
  															monto_honorarios: _.monto_honorarios,
  															banco:_.banco,
  														  	documento: _.documento,
  															titular : _.titular,
  															fecha_actualizacion: _.fecha_actualizacion,
  															fecha_mora:_.fecha_mora,
  															dias_atraso:_.dias_atraso,
  															anticipo: _.anticipo,
  															iva: '21%',
  															tasa: _.tasa,
  															porcentaje_honorarios:_.porcentaje_honorarios,
  															gastos: _.gastos,
  															estado: _.estado,
  															capital_inicial: _.capital_inicial,
  															interes: _.interes,
  															operador: _.operador.nombre,
  															iva_sobre_interes: _.iva_sobre_interes,
  															sub_total: _.sub_total,
  															iva_sobre_honorarios: _.iva_sobre_honorarios,
  															cuota_promedio: _.cuota_promedio,
  															total_promedio: _.cuota_promedio * _.plazo,
  															pagos: _.plazo,
  															numero_gestion: _.numero_gestion,
  															quita_descripcion: _.quita_descripcion,
  															quita_final: _.quita_final,
  															telefono1: _.telefono1,
  															telefono2: _.telefono2,
  															telefono3: _.telefono3,
  															fecha_pago: _.fecha_anticipo,
  															total_total: _.total_total,
  															fecha_propuesta: _.fecha_propuesta
  															},{responseType: 'arraybuffer'}).then(function(res){var file = new Blob([ res.data ], {type: 'application/pdf'});saveAs(file, 'Liquidacion-'+_.documento+'-'+_.banco+'.pdf');});
};
	_.registrar = function () {
		if(_.cuota_cero==0){
		$http.post('php/registrar.php',{
										fecha_propuesta: _.fecha_propuesta,
										total: parseFloat(_.total_total.replace(',','')),
										anticipo: parseFloat(_.anticipo.replace(',','')),
										cuotas: _.plazo,
										fecha_anticipo: _.fecha_anticipo,
										operador: _.operador.nombre,
										deudor: _.documento,
										banco: $_GET['banco'],
										telefono1: _.telefono1,
										telefono2: _.telefono2,
										telefono3: _.telefono3,
										email:_.email,
										cuota_cero: _.cuota_cero,
										asignacion: _.numero_gestion
		}).then(function(res){
			alert(res.data);
		});
	}else{
		$http.post('php/registrar.php',{
										fecha_propuesta: _.fecha_propuesta,
										total: parseFloat(_.total_total.replace(',','')),
										anticipo: parseFloat(_.anticipo_cuota_cero.replace(',','')),
										cuotas: _.plazo,
										fecha_anticipo: _.fecha_anticipo,
										operador: _.operador.nombre,
										deudor: _.documento,
										banco: $_GET['banco'],
										telefono1: _.telefono1,
										telefono2: _.telefono2,
										telefono3: _.telefono3,
										cuota_cero: _.cuota_cero,
										asignacion: _.numero_gestion
		}).then(function(res){
			alert(res.data);
		});
	}
	}
	_.iniciar();	
});
