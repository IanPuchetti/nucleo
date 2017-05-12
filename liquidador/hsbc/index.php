<?php
session_start();
echo "<script>var id_usuario = ".$_SESSION["id"].";var operador = '".$_SESSION["id"]."';var usuario = '".$_SESSION["user"]."';</script>"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/.css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/.css/custom.css"/>
    <script src="/.js/FileSaver.js"></script>
    <script src="/.js/angular.1.5.min.js"></script>
    <script src="/.js/moment.js"></script>

</head>
<body style="background:#eee;" ng-app="myApp">
	<div class="container" style="text-align:center;" ng-controller="myCtrl">
	<h2 class="lead">Liquidacion</h2>
		<div class="row">
		<div class="col-md-6">
		<div class="panel panel-success">
		<div class="panel-heading"><h3 class="panel-title">Información</h3></div>
		<div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
		<div class="borde-inferior">Banco: {{banco}}</div>
  		<div class="borde-inferior">Titular: {{titular}}</div>
  		<div class="borde-inferior">DNI: {{documento}}</div>
  		<div class="borde-inferior">Fecha de actualización: <input type='date' ng-model="fecha_actualizacion" ng-change="recargar();fecha_anticipo=fecha_actualizacion;"></div>
   		<div class="borde-inferior">Fecha de mora: {{fecha_mora | date: "dd/MM/yyyy"}}</div>
   		<div>Días de atraso: {{dias_atraso}}</div>
   		<div>Monto de atraso: ${{monto_atraso  | number:2}}</div>
   		</div>
   		</div>
   		</div>
   		<div class="col-md-6">
  		<div class="panel panel-danger">
		<div class="panel-heading"><h3 class="panel-title">Variables</h3></div>
		<div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
		<div class="borde-inferior">IVA: 21% </div>
  		<div class="borde-inferior">Tasa: {{tasa}}%</div>
  		<div class="borde-inferior">Porcentaje de honorarios: {{porcentaje_honorarios}}%</div>
  		<div>Gastos: ${{gastos  | number:2}} ({{estado}})</div>
   		</div>
   		</div>
  	</div>
  	</div>
  	<div class="row">
  	<div class="col-md-6">
  	<div class="panel panel-primary">
		<div class="panel-heading"><h3 class="panel-title">Operaciones</h3></div>
		<div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
		<div class="borde-inferior">Capital inicial: ${{capital_inicial | number:2}}</div>
		<div class="borde-inferior">Interes: ${{interes | number:2}}</div>
  		<div class="borde-inferior">IVA sobre interes: ${{iva_sobre_interes | number:2}}</div>
  		<div class="borde-inferior">Sub total: ${{sub_total | number:2}}</div>
  		<div class="borde-inferior">Honorarios: ${{honorarios | number:2}}</div>
   		<div class="borde-inferior">IVA sobre honorarios: $ {{iva_sobre_honorarios | number:2}}</div>
      <div class="resaltado" style="color:red;">DEUDA REAL: ${{supuesto_total | number:2}}</div>
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
   		
   		<div class="borde-inferior">Anticipo : $ {{anticipo=(porcentaje/100 * total  | number:2)}} </div>
   		<div class="borde-inferior">A financiar : $ {{(100 - porcentaje)/ 100 *total   | number:2}}</div>
   	</div>
   	
	</div>
	</div>
	<div class="col-md-6">
	<div class="panel panel-info">
		<div class="panel-heading"><h3 class="panel-title">Quitas <button class="btn btn-info" ng-click="quitar()">Calcular</button></h3></div>
		<div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
		<div  style="margin:5px;max-width:500px;">
		<div class="borde-inferior">Pagos: 
    	<select class="form-control btn btn-info" ng-model='quitas' ng-change="quitar()">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>6</option>
        <option>9</option>
        <option>12</option>
        <option>18</option>
        <option>24</option>
        <option>36</option>
        </select>
   		</div>
   		<div class="borde-inferior">N° de gestión : {{numero_gestion}}</div>
   		<div class="borde-inferior">Tasa del {{quita_tasa}} %</div>
   		<div class="borde-inferior">Descuento del {{quita_descuento}} %</div>
   		<div class="resaltado">RESULTADO: ${{quita_final | number:2}}</div>
   	</div>
   	</div>
	</div>
	</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading"><h3 class="panel-title">Frances</h3></div>
		<div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
		
			<div class="row">
				<div class="col-md-8">
				<div class="borde-inferior">A financiar: $  <input type="number" ng-model="a_financiar" ng-pattern="/^[0-9]+(\.[0-9]{1,2})?$/" step="0.01"></div>
				<div class="borde-inferior">Plazo (meses): <input type="number" ng-model="plazo" ng-change="calcular_cuotas()">
				</div>
  				<div class="borde-inferior">Fecha de anticipo: <input type="date" ng-model="fecha_anticipo=fecha_actualizacion" ng-change="cambio_primer_cuota();calcular_cuotas()"></div>
  				<div class="borde-inferior">1° cuota: {{fecha_primer_cuota | date: "dd/MM/yyyy"}}</div>
  				</div>
  				<div class="col-md-4" style="text-align:center;">
  				<button class="btn btn-primary" ng-click="calcular_cuotas()" style="margin:50px;">CALCULAR</button>
  				</div>
  			</div>
  				<div class="resaltado">CUOTA PROMEDIO: $ {{cuota_promedio | number:0}} </div>
          <div class="resaltado">TOTAL PROMEDIO: $ {{total_total = (cuota_promedio * plazo | number:2)}} </div>
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
   	</div>
    <div class="jumbotron">
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
          <input class="form-control" ng-model="total_total">
          <span class="input-group-addon">Monto primer pago</span>
              <span class="input-group-addon">$</span>
          <input class="form-control" ng-model="anticipo">
          </div>
          <div class="input-group">
          <span class="input-group-addon">Fecha de pago</span>
          <input type="date" class="form-control" ng-model="fecha_anticipo=fecha_actualizacion">
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
    <script src="js/scrip.js"></script> 
</body>
</html>
