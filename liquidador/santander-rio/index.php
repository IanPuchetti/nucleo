<?php
session_start();
echo "<script>var id_usuario = '".$_SESSION["id"]."';var operador = '".$_SESSION["id"]."';var usuario = '".$_SESSION["user"]."';</script>"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/.css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/.css/custom.css"/>
     <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
    <script src="/.js/FileSaver.js"></script>
    <script src="/.js/jquery.min.js"></script>
    <script src="/.js/angular.1.5.min.js"></script>
    <script src="/.js/moment.js"></script>
<style>
      .drag{
  -webkit-app-region:drag;
  position:absolute;
  top:30px;
  left:0px;
  width:20px;
  height:100%;
}

.bar{
  position:absolute;
  top:0px;
  left:0px;
  width:20px;
  height:100%;
}

.header{
  width:100%;
  height:40px;
  background:white;
  padding-top:12px;
  font-size:12px;
  border-bottom:1px solid #ddd;
  /*-webkit-box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  -moz-box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);*/
}

.boton, .logout, .logout a{
  padding:5px 10px 5px 10px;
  cursor:pointer;
  text-decoration: none;
  color:#666;
}

.boton:hover, .boton span:hover, .logout a:hover{
  color:#333;
}

.dropdown-menu{
  margin-top:6px;
  border-radius:0px;
  font-size:11px;
}

.no-top{
    border-top:0px;
}


@font-face {
    font-family: Product-Sans;
    src: url('/fonts/Product Sans Regular.ttf');
}

@font-face {
    font-family: Product-Sans-Bold;
    src: url('/fonts/Product Sans Bold.ttf');
}

@font-face {
    font-family: Benton-Sans-Light;
    src: url('/fonts/Benton-Sans-Light.ttf');
}

*{
  font-family: Product-Sans;
  color:#666;
}


.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: 0px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
}

.trgl{
  color:#aaa;
}


.boton-menu, .boton-menu a{
  font-size:15px;
  padding:10px;
  text-align:center;
  color:white;
  cursor:pointer;
}

.boton-menu:hover, .boton-menu a:hover{
  color:#ddd;
}

.circle {
  border-radius: 50%;
  width: 50px;
  height: 50px; 
  text-align: center;
  font-size:35px;
  background:white;
}

.circle span{
    margin-top:-5px;
    margin-left:-10px;
    position:absolute;
    background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: Product-Sans-Bold;
}

.color-gr{
  background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.alert-gr{
  background: -webkit-linear-gradient(#95c33d, #f4a600);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.back-gr{
  background: -webkit-linear-gradient(#07963d, #89bd25);
  color:white;
}

body{
  overflow:hidden;
  border:1px solid #ccc;
}

#reload:hover{
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}

#reload{
  width:22px;margin-top:4px;-webkit-transition: -webkit-transform .4s ease-in-out;transition:transform .4s ease-in-out;cursor:pointer;
}

.block{
  width:100%;
  height:40px;
  position:fixed;
  top:0px;
  left:0px;
}

.side{
  z-index:0;background:white;position:fixed;top:40px;left:150px;width:850px; height:90%;padding:10px;font-size:17px;overflow-y:auto;overflow-x:hidden;
}

.caja{
  padding:20px;
  border-radius:15px;
  border:1px solid #ddd;
  width:310px;
}

.dias{
  padding:3px;margin:1px;border-radius:5px;border:1px solid #ddd;cursor:pointer;display:inline-block;width:30px;text-align: center;
}

.dias:hover{
  background:#eee;
}

select{
  background:none;
}

.boton a{
  text-decoration: none;
  color:#777;
}

.buscador{
    margin-top:0px;
    padding-top:4px;
}
.buscador span{
  margin-top:0px;
  padding:5px 35px 5px 24px;
  background:#07963d;
  color:white;
  cursor:pointer;
}
.buscador input{
  padding-left:4px;
  margin-top:-5px;
  margin-left:-4px;
  height:25px;
  border:1px solid #ddd;
}

input:focus{
    outline: none;
}



.busqueda{
  height: 220px;
  overflow-y:scroll;
  overflow-x:hidden;
}

.left{
  width:10%;position:absolute;top:83px;border-top:1px solid #eee;padding-top:5px;
}

.button{
  border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;
  cursor:pointer;
}
.button:hover>#change{
  background:#eafada;
}

.down{
  position:absolute;
  top:285px;
  border-top:1px #ddd solid;
  width:100%;
  padding:5px;
}

.noselect {
   cursor:pointer;
   -moz-user-select: none;
   -khtml-user-select: none;
   -webkit-user-select: none;
   -ms-user-select: none;
   user-select: none;
}

.options{
  width:100%;
  position:absolute;
  padding-left:40px;
  padding-bottom:5px;
  top:20px;
  border-bottom:1px solid #ddd;
}

.content{
  width:100%;
  position:absolute;
  top:48px;
}

.tooltip-inner {
  background-color: #0b3 !important;
  /*!important is not necessary if you place custom.css at the end of your css calls. For the purpose of this demo, it seems to be required in SO snippet*/
  color: #fff;
}

.tooltip.top .tooltip-arrow {
  border-top-color: #07b63d;
}

.tooltip.right .tooltip-arrow {
  border-right-color: #07b63d;
}

.tooltip.bottom .tooltip-arrow {
  border-bottom-color: #07b63d;
}

.tooltip.left .tooltip-arrow {
  border-left-color: #07b63d;
}


select{
  border:0px;
}

.link{
  cursor: pointer;
}

.link:hover > .telefono{
  border-bottom: 1px solid;
}

.telefono{
  margin-bottom:5px;
}

.butn,.butn-blue{
  border-radius:5px;border:1px solid #ddd;padding:5px 8px 5px 8px;cursor:pointer;
}
.butn:hover, .butn:hover > ul{
  border-color:#95e53d;
}

.butn-blue:hover, .butn-blue:hover > ul{
  border-color:#953de5;
}

.noshadow {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }

.dropdown-menu{
    min-width:144px;
    width: 144px !important;
    height: 100px !important;
    text-align: center;
    margin-top:-5px;
    margin-left:-1px;
    border-radius:0px 0px 5px 5px;
    padding-top:15px;
}
</style>
</head>
<body ng-app="myApp">
  <div class="drag"></div>
  <div class="bar back-gr"></div>
  <div style="position:fixed;top:0px;left:5px;color:white;cursor:pointer;font-size:18px;" onclick="$('#alerta').css('display','block');">×</div>
  <div style="height:100%;overflow-y:auto;margin-left:20px;" ng-controller="myCtrl">
    <div style="padding:15px;border-radius:5px;border:1px solid #aaa;width:350px;margin:15px;display:inline-block;">
		<div class="borde-inferior">Banco: {{banco}}</div>
  		<div class="borde-inferior">Titular: {{titular}}</div>
  		<div class="borde-inferior">DNI: {{documento}}</div>
  		<div class="borde-inferior">Fecha de actualización: <input type="date" ng-model="fecha_actualizacion" ng-change="iniciar()"></div>
   		<div class="borde-inferior">Fecha de mora: {{fecha_mora | date: "dd/MM/yyyy"}}</div>
   		<div>Días de atraso: {{dias_atraso}}</div>
   		<div>Monto de atraso: ${{monto_atraso  | number:2}}</div>
   		</div>
   	<div style="padding:15px;border-radius:5px;border:1px solid #aaa;width:250px;margin:15px;display:inline-block;">
		<div class="borde-inferior">IVA: 21% </div>
  		<div class="borde-inferior">Tasa: {{tasa}}%</div>
  		<div class="borde-inferior" ng-show="cuota_cero==0">Porcentaje de honorarios: {{porcentaje_honorarios}}%</div>
      <div class="borde-inferior" ng-show="cuota_cero==1">Porcentaje de honorarios: <input type="text" ng-model="porcentaje_honorarios" ng-change="cambio_honorarios()">%</div>
  		<div>Gastos: ${{gastos  | number:2}}</div>
      <div class="input-group">
          <span class="input-group-addon">Es cuota cero</span>
          <button class="form-control" ng-show="cuota_cero==0" ng-click="cuota_cero=1">No</button>
          <button class="form-control" ng-show="cuota_cero==1" ng-click="cuota_cero=0;iniciar()" ng-init="cuota_cero = 0">Si</button>
      </div>
    </div>
    <div ng-show="cuota_cero==1" style="border-radius:5px;padding:15px;border:1px solid #ddd;">
    <div style="text-align:left;font-weight:200;font-size:18px;">
    <div class="borde-inferior">Capital inicial: ${{capital_inicial | number:2}}</div>
    <div class="borde-inferior">Interes: ${{interes | number:2}}</div>
      <div class="borde-inferior">IVA sobre interes: ${{iva_sobre_interes | number:2}}</div>
      <div class="borde-inferior">Sub total: ${{sub_total | number:2}}</div>
      <div class="borde-inferior">Honorarios: ${{honorarios | number:2}}</div>
      <div class="borde-inferior">IVA sobre honorarios: $ {{iva_sobre_honorarios | number:2}}</div>
      <div class="resaltado">TOTAL ACTUALIZADO: ${{total | number:2}}</div>
  </div>
</div>
    <div class="panel panel-primary" ng-show="cuota_cero==1">
    <div class="panel-heading"><h3 class="panel-title">Cuota cero</h3></div>
    <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
        <div class="input-group">
          <span class="input-group-addon">Anticipo</span><span class="input-group-addon">$</span>
          <input class="form-control" ng-model="anticipo_cuota_cero">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Cuotas banco</span>
          <input type="number" class="form-control" ng-model="plazo" max="60" min="1" step="1" ng-init="plazo=1" ng-change="total_total=((monto_cuota*plazo)+honorarios | number:2)">
          <span class="input-group-addon">Monto por cuota</span><span class="input-group-addon">$</span>
          <input class="form-control" type="number" ng-model="monto_cuota" ng-change="total_total=((monto_cuota*plazo)+honorarios | number:2)">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Cuotas honorarios</span>
          <input type="number" class="form-control" ng-model="cuotas_honorarios" ng-init="cuotas_honorarios=1" max="5" min="1" step="1" ng-change="monto_honorarios=honorarios/cuotas_honorarios;total_total=((monto_cuota*plazo)+honorarios | number:2);" ng-init="monto_honorarios=honorarios/cuotas_honorarios;total_total=((monto_cuota*plazo)+honorarios | number:2);">
          <span class="input-group-addon">Monto por cuota</span><span class="input-group-addon">$</span>
          <span class="form-control"> {{monto_honorarios | number:2}}
        </div>
        <br>
    </div>
    </div>
  	<div  style="border-radius:5px;padding:15px;border:1px solid #ddd;" ng-show="cuota_cero==0">
		<div style="text-align:left;font-weight:200;font-size:18px;">
		<div class="borde-inferior">Capital inicial: ${{capital_inicial | number:2}}</div>
		<div class="borde-inferior">Interes: ${{interes | number:2}}</div>
  		<div class="borde-inferior">IVA sobre interes: ${{iva_sobre_interes | number:2}}</div>
  		<div class="borde-inferior">Sub total: ${{sub_total | number:2}}</div>
  		<div class="borde-inferior">Honorarios: ${{honorarios | number:2}}</div>
   		<div class="borde-inferior">IVA sobre honorarios: $ {{iva_sobre_honorarios | number:2}}</div>
   		<div class="resaltado">TOTAL: ${{total | number:2}}</div>
      
   		<hr>
   		<div  style="margin:5px;max-width:500px;">
    	<div class="input-group">
        <span class="input-group-btn">
        <button ng-click="porcentaje_step=1" class="btn btn-default" ng-show="porcentaje_step==10" ng-init="porcentaje_step=10">Flexibilizar</button>
        <button ng-click="porcentaje_step=10" class="btn btn-default" ng-show="porcentaje_step==1">Volver</button>
      </span>
        <input type="number" class="form-control" ng-model='porcentaje' step="{{porcentaje_step}}" min='0' max='35' ng-init="porcentaje=10">
        <span class="input-group-addon">%</span>
      </div>
   		</div>
   		
   		<div class="borde-inferior">Anticipo: $ {{anticipo=(porcentaje/100 * total  | number:2)}} </div>
   		<div class="borde-inferior">A financiar : $ {{(100 - porcentaje)/ 100 *total   | number:2}}</div>
   	</div>
   	
	</div>
    <div style="padding:15px;border-radius:5px;border:1px solid #aaa;margin:15px;display:block;">
		<div >Quitas <span class="butn" ng-click="quitar()">Calcular</span><hr>
		<div  style="margin:5px;max-width:500px;">
		<div class="borde-inferior">Producto: 
    	<select class="form-control btn btn-info" ng-model='producto' ng-change="quitar()">
        <option>Tarjeta/Monoproducto</option>
        <option>Cuenta-Corriente/Prestamo-Personal</option>
        <option>Refinanciacion</option>
        </select>
   		</div>
   		<div class="borde-inferior">{{quita_descripcion}}</div>
   		<div class="resaltado">RESULTADO: ${{quita_final | number:2}}</div>
   	</div>
   	</div>
	</div>
	<div ng-show="cuota_cero==0" style="padding:15px;border:1px solid #ddd;margin:15px;">
		<div>Financiacion</div>
		
				<div class="borde-inferior">A financiar: $ <input type="number" ng-model="a_financiar" ng-pattern="/^[0-9]+(\.[0-9]{1,2})?$/" step="0.01"></div>
				<div class="borde-inferior">Plazo (meses): <input type="number" ng-model="plazo" ng-change="calcular_cuotas();total_total=(cuota_promedio * plazo | number:2);">
				</div>
  				<div class="borde-inferior">Fecha de anticipo: <input type="date" ng-model="fecha_anticipo" ng-change="cambio_primer_cuota();calcular_cuotas();total_total=(cuota_promedio * plazo | number:2);"></div>
  				<div class="borde-inferior">1° cuota: {{fecha_primer_cuota | date: "dd/MM/yyyy"}}</div>
  			
  				<div class="col-md-4" style="text-align:center;">
  				<button class="btn btn-primary" ng-click="calcular_cuotas();total_total=(cuota_promedio * plazo | number:2);" style="margin:50px;">CALCULAR</button>
  				</div>
  				<div class="resaltado">CUOTA PROMEDIO: $ {{cuota_promedio | number:0}} </div>
          <div class="resaltado" ng-init="total_total=(cuota_promedio * plazo | number:2)">TOTAL PROMEDIO: $ {{total_total}} </div>
   				<hr>
				<table class="table table-condensed achicar">
					<thead>
						<th>N° Cuota</th>
						<th>Saldo Inicial</th>
						<th>Amortizacion</th>
						<th>Interes</th>
						<th>IVA Interes</th>
						<th>Cuota total</th>
						<th>Saldo de deuda</th>
						<th>Fecha</th>
					</thead>
					<tbody>
						<tr ng-repeat="cuota in cuotas">
							<td>{{cuota.nro_cuota }}</td>
							<td>$ {{cuota.saldo_inicial  | number:2 }}</td>
							<td>$ {{cuota.amortizacion  | number:2 }}</td>
							<td>$ {{cuota.interes | number:2 }}</td>
							<td>$ {{cuota.iva_interes | number:2 }}</td>
							<td>$ {{cuota.cuota_total | number:2 }}</td>
							<td>$ {{cuota.saldo_deuda | number:2 }}</td>
							<td>{{cuota.mes_actual | date: "dd/MM/yyyy" }}</td>	
						</tr>
						<tr class="resaltado">
							<td>TOTAL</td>
							<td></td>
							<td>${{TOTAL_amortizacion | number:2 }}</td>
							<td>${{TOTAL_interes | number:2 }}</td>
							<td>${{TOTAL_iva_interes | number:2 }}</td>
							<td>${{TOTAL_cuota_total | number:2 }}</td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
   			</div>
   		   	<div >
      <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">Propuesta</h3></div>
      <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
        <div class="input-group">
          <span class="input-group-addon">Fecha de Propuesta</span>
          <input type="date" class="form-control" ng-model="fecha_propuesta=fecha_propuesta">
           </div>
           <div class="input-group">
            <span class="input-group-addon">Monto total</span>
              <span class="input-group-addon">$</span>
            <input class="form-control" ng-model="total_total" ng-init="total_total= (total_total | number:2)">
            <span class="input-group-addon">Monto primer pago</span>
            <span class="input-group-addon">$</span>
          <input class="form-control" ng-model="anticipo=anticipo" ng-show="cuota_cero==0">
          <input class="form-control" ng-model="anticipo_cuota_cero=anticipo_cuota_cero" ng-show="cuota_cero==1">
          </div>
          <div class="input-group">
          <span class="input-group-addon">Fecha de pago</span>
          <input type="date" class="form-control" ng-model="fecha_anticipo" >
          <span class="input-group-addon">Operador</span>
          <select type="text" class="form-control" ng-model="operador.nombre=operador.nombre" ng-init="operador.nombre=id_operador" ng-options="usuario.id as usuario.user for usuario in usuarios"></select>
          </div>
          <div class="input-group">
          <span class="input-group-addon">Banco</span>
          <input class="form-control" ng-model="banco=banco">
          <span class="input-group-addon">Email</span>
          <input class="form-control" ng-model="email">
          </div>
          <div class="input-group">
          <span class="input-group-addon">Telefono1</span>
          <input ng-model="telefono1" class="form-control">
          <span class="input-group-addon">Telefono2</span>
          <input ng-model="telefono2" class="form-control">
          <span class="input-group-addon">Telefono3</span>
          <input ng-model="telefono3" class="form-control">
          </div>

          <br>
          <div style="text-align:center;">
          <button class="btn btn-primary" style="border-radius:5px 0px 0px 5px;" ng-click="registrar()">Registrar Propuesta</span>
          <button class="btn btn-success" style="border-radius:0px 5px 5px 0px;"  ng-click="descargar()">Descargar Propuesta</span>
           </div>
        </div>
      </div>
    </div>
	</div>
    <div style="display:none;z-index:5;position:fixed;top:0px;left:20px;width:300px;height:100%;background:white;border-right:1px solid #aaa;padding:15px;font-size:16px;" id="alerta">¿Seguro desea salir? Si no registró nada, perderá los datos.<div style="text-align:center;margin-top:15px;"><span class="butn" style="border-radius:5px 0px 0px 5px;font-size:13px;" onclick="window.close()">Cerrar</span><span class="butn"  style="border-radius:0px 5px 5px 0px;font-size:13px;" onclick="$('#alerta').css('display','none')">No cerrar</span></div></div>
    <script>
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
    var     oldDate = fecha,
          momentObj = moment(oldDate);
          momentObj.add(1, 'months');
          newDate = momentObj.toDate();
          return newDate;
    };
    
    function sumar_mes_dias(fecha){
    var     oldDate = fecha,
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
      

      _.calcular_cuotas = function ()     { 
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

    </script> 
</body>
</html>
