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
		  <div>Banco: {{banco}}</div>
  		<div >Titular: {{titular}}</div>
  		<div >DNI: {{documento}}</div>
      <div >Gestión: {{numero_gestion}}°</div>
  		<div >Fecha de actualización: <input type="date" ng-model="fecha_actualizacion" ng-change="reload();fecha_anticipo=fecha_actualizacion;"></div>
   		<div >Fecha de mora: {{fecha_mora | date: "dd/MM/yyyy"}}</div>
   		<div>Días de atraso: {{dias_atraso}}</div>
   		<div>Monto de atraso: ${{monto_atraso  | number:2}}</div>
   	</div>
  		<div style="padding:15px;border-radius:5px;border:1px solid #aaa;width:250px;margin:15px;display:inline-block;">
		  <div >IVA: 21% </div>
  		<div >Tasa: {{tasa}}%</div>
  		<div >Porcentaje de honorarios: {{porcentaje_honorarios}}%</div>
  		<div>Gastos: ${{gastos  | number:2}} ({{estado}})</div>
   		</div>
  	
		<div style="padding:15px;border-radius:5px;border:1px solid #aaa;margin:15px;display:block;">
    <div style="display:inline-block;">
		<div >Capital inicial: ${{capital_inicial | number:2}}</div>
		<div >Interes: ${{interes | number:2}}</div>
  		<div >IVA sobre interes: ${{iva_sobre_interes | number:2}}</div>
  		<div >Sub total: ${{sub_total | number:2}}</div>
  		<div >Honorarios: ${{honorarios | number:2}}</div>
   		<div >IVA sobre honorarios: $ {{iva_sobre_honorarios | number:2}}</div>
   		<div class="resaltado">TOTAL: ${{total | number:2}}</div>
   		</div>
   		<div style="display:inline-block;width:350px;padding-left:50px;">
    	
      <div class="input-group">
        <span class="input-group-btn">
        <button ng-click="porcentaje_step=1" class="btn btn-default" ng-show="porcentaje_step==10" ng-init="porcentaje_step=10">Flexibilizar</button>
        <button ng-click="porcentaje_step=10" class="btn btn-default" ng-show="porcentaje_step==1">Volver</button>
      </span>
        <input type="number" class="form-control" ng-model='porcentaje' ng-change="anticipo=(porcentaje/100 * total).toFixed(2);a_financiar1 =( total - anticipo | number:2).replace(',','');" step="{{porcentaje_step}}" min='10' max='39' ng-init="porcentaje=10">
        <span class="input-group-addon">%</span>
      
   		</div>
   		<div style="margin-top:10px;">Anticipo : $ <input type="text" ng-model="anticipo" ng-change="a_financiar1 =( total - anticipo | number:2).replace(',','')"></div>
   		<div >A financiar : $ {{ a_financiar1 }}</div>
   	  </div>
    </div>
      <div style="padding:15px;border-radius:5px;border:1px solid #aaa;margin:15px;display:block;">
	   <div>Quitas <span class="butn" ng-click="quitar()">Calcular</span></div><hr>
		<div  style="margin:5px;max-width:500px;">
		<div >Pagos: 
    	<select class="butn" ng-model='quitas' ng-change="quitar()">
        <option>1</option>
        <option>Menor o igual a 12</option>
        <option>Mas de 12</option>
        </select>
   		</div>
   		<div >{{quita_descripcion}}</div>
   		<div class="resaltado">RESULTADO: ${{quita_final | number:2}}</div>
   	</div>
   	</div>
	<div style="padding:15px;border-radius:5px;border:1px solid #aaa;margin:15px;display:block;">
    <div>Financiación</div><hr>
        <div style="display:inline-block;width:300px;">
				<div >A financiar: $ <input type="number" ng-model="a_financiar" ng-pattern="/^[0-9]+(\.[0-9]{1,2})?$/" step="0.01"></div>
				<div >Plazo (meses): <input type="number" ng-model="plazo" ng-change="calcular_cuotas()">
				</div>
  				<div >Fecha de anticipo: <input type="date" ng-model="fecha_anticipo" ng-change="cambio_primer_cuota();calcular_cuotas()"></div>
  				<div >1° cuota: {{fecha_primer_cuota | date: "dd/MM/yyyy"}}</div>
  				</div>
          <div style="width:250px;display:inline-block; ">
  				<span class="butn" ng-click="calcular_cuotas()" style="margin:50px;">CALCULAR</span>
  				</div>
  				<div class="resaltado">CUOTA PROMEDIO: $ {{cuota_promedio | number:0}} </div>
  				<div class="resaltado">TOTAL: $ {{total_total = (cuota_promedio * plazo | number:2)}} </div>
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
      <div  style="padding:15px;border-radius:5px;border:1px solid #aaa;margin:15px;display:block;">
      <div>Propuesta</div><hr>
      <div>
        <div class="input-group">
          <span class="input-group-addon">Fecha de Propuesta</span>
          <input type="date" class="form-control" ng-model="fecha_propuesta=fecha_propuesta">
           </div>
           <div class="input-group">
          <span class="input-group-addon">Monto total</span>
              <span class="input-group-addon">$</span>
          <input class="form-control" ng-model="total_total=total_total">
          <span class="input-group-addon">Monto primer pago</span>
              <span class="input-group-addon">$</span>
          <input class="form-control" ng-model="anticipo=anticipo">
          </div>
          <div class="input-group">
          <span class="input-group-addon">Fecha de pago</span>
          <input type="date" class="form-control" ng-model="fecha_anticipo=fecha_anticipo">
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
          <span class="butn-blue" style="border-radius:5px 0px 0px 5px;" ng-click="registrar()">Registrar Propuesta</span>
          <span class="butn" style="border-radius:0px 5px 5px 0px;margin-left:-5px;"  ng-click="descargar()">Descargar Propuesta</span>
          </div>
        </div>
      </div>
    </div>
   	  <div style="display:none;position:fixed;top:0px;left:20px;width:300px;height:100%;background:white;border-right:1px solid #aaa;padding:15px;font-size:16px;" id="alerta">¿Seguro desea salir? Si no registró nada, perderá los datos.<div style="text-align:center;margin-top:15px;"><span class="butn" style="border-radius:5px 0px 0px 5px;font-size:13px;" onclick="window.close()">Cerrar</span><span class="butn"  style="border-radius:0px 5px 5px 0px;font-size:13px;" onclick="$('#alerta').css('display','none')">No cerrar</span></div></div>

    <script src="js/appp.js"></script> 
</body>
</html>
