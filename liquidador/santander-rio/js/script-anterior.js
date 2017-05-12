var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});
     
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
				return (((dateEnd-dateStart)/86400)/1000);
			}else{
				return (((dateStart-dateEnd)/86400)/1000);
			}
    }
    
    function calcularDiasDate(fechaInicial, fechaFinal)
    {
		fechaInicial= fechaInicial.getYear()+'-'+fechaInicial.getMonth()+'-'+fechaInicial.getDay();
		fechaFinal= fechaFinal.getYear()+'-'+fechaFinal.getMonth()+'-'+fechaFinal.getDay();
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
				return (((dateEnd-dateStart)/86400)/1000);
			}else{
				return (((dateStart-dateEnd)/86400)/1000);
			}
    }
    
    function sumar_mes(fecha){
    var 		oldDate = fecha,
    			momentObj = moment(oldDate);
    			momentObj.add(1, 'months');
    			newDate = momentObj.toDate();
    			return newDate;
    };

var app = angular.module('myApp', []);
app.controller('myCtrl', function($http, $scope) {
			var _=$scope;
			var data={"numero_operacion" : $_GET['numero_operacion']};
			
			_.cambio_primer_cuota = function () {
													_.fecha_primer_cuota = sumar_mes(_.fecha_anticipo);
												};
			
			
			_.calcular_cuotas = function ()	    {	var tasa = _.tasa /100;
													_.cuotas = [];														
													for(var i=0;i<_.plazo;i++){
														if(_.cuotas.length == 0){
														var
														diferencia_dias = calcularDiasDate(_.fecha_anticipo, _.fecha_primer_cuota) / 365,
														interes = (_.capital_inicial * (tasa * (diferencia_dias))),
														iva_interes = (21/100) * interes,
														cuota_total = (_.capital_inicial*(((1+(tasa*diferencia_dias))**_.plazo)*(tasa*diferencia_dias))/(((1+(tasa*diferencia_dias))**_.plazo)-1))+iva_interes,
														amortizacion = (cuota_total - iva_interes - interes);
														_.cuotas.push({
															nro_cuota: 1,
															mes_actual: _.fecha_primer_cuota,
															mes_anterior: _.fecha_anticipo,
															diferencia_dias: diferencia_dias ,
															interes: interes,
															iva_interes: iva_interes,
															saldo_inicial: _.capital_inicial,
															cuota_total: cuota_total,
															amortizacion : amortizacion,
															saldo_deuda: (_.capital_inicial - amortizacion)		
														});
														}else{
														var
														anterior = _.cuotas[i-1],
														diferencia_dias = calcularDiasDate(anterior.mes_actual, sumar_mes(anterior.mes_actual)),
														interes = (anterior.saldo_deuda * (tasa * (diferencia_dias))),
														iva_interes = (21/100) * interes,
														cuota_total = (anterior.saldo_deuda*(((1+(tasa*diferencia_dias))**_.plazo)*(tasa*diferencia_dias))/(((1+(_.tasa*diferencia_dias))**_.plazo)-1))+iva_interes,
														amortizacion = (cuota_total - iva_interes - interes);
														_.cuotas.push({
															nro_cuota: (_.cuotas[i-1].nro_cuota + 1) ,
															mes_actual: sumar_mes(_.cuotas[i-1].mes_actual),
															mes_anterior: _.cuotas[i-1].mes_actual,
															diferencia_dias: diferencia_dias,
															interes: interes,
															iva_interes: iva_interes,
															saldo_inicial: _.capital_inicial,
															cuota_total: cuota_total,
															amortizacion : amortizacion,
															saldo_deuda: (anterior.saldo_deuda - amortizacion)		
														});		
														}												
													}
												};
			
			$http.post('php/datos.php', data)
					   .then(function(res){
					   					  
										   res=res.data[0];
										   if(res.estado == '2'){
										    _.estado='JUDICIALES';
										    _.gastos=1000;
										   }else{
										   		if (res.estado=='3'){
										   			_.estado='PREJUDICIALES';
										   			_.gastos=100;
										   		}
										   }
  										   _.banco=res.banco;
  										   _.titular=res.titular;
  										   _.documento=res.documento;
  										   _.fecha_actualizacion=res.fecha_actualizacion;
  										   _.fecha_mora=res.fecha_mora;
  										   _.tasa=res.tasa;
  										   _.porcentaje_honorarios=res.porcentaje_honorarios;
  										  // _.gastos=res.gastos; CENCOSUD VARIA POR PRE Y JUD
  										   _.dias_atraso=calcularDias(_.fecha_actualizacion, _.fecha_mora);
  										   _.capital_inicial=res.capital_inicial;
  										   _.monto_atraso=_.dias_atraso/30;
  										   _.interes=(_.tasa/100)*_.capital_inicial*_.monto_atraso;
  										   _.iva_sobre_interes=_.interes*0.21;
  										   _.sub_total=parseInt(_.capital_inicial)+parseFloat(_.interes)+parseFloat(_.iva_sobre_interes)+parseFloat(_.gastos);
  										   _.honorarios=_.sub_total*(_.porcentaje_honorarios/100);
  										   _.iva_sobre_honorarios=_.honorarios*0.21;
  										   _.total=parseFloat(_.sub_total)+parseFloat(_.honorarios)+parseFloat(_.iva_sobre_honorarios);
  										   
  											});
  			_.plazo=1; _.porcentaje='30%'; _.fecha_anticipo = new Date(); _.cambio_primer_cuota(); _.calcular_cuotas();
			
});
