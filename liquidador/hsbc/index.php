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
  		<div>Titular: {{titular}}</div>
      <div >N° de gestión : {{numero_gestion}}°</div>
  		<div>DNI: {{documento}}</div>
  		<div>Fecha de actualización: <input type='date' ng-model="fecha_actualizacion" ng-change="recargar();fecha_anticipo=fecha_actualizacion;" style="border:0px;color:#478dff;"></div>
   		<div>Fecha de mora: {{fecha_mora | date: "dd/MM/yyyy"}}</div>
   		<div>Días de atraso: {{dias_atraso}}</div>
   		<div>Monto de atraso: ${{monto_atraso  | number:2}}</div>
   		</div>
      <div style="padding:15px;border-radius:5px;border:1px solid #aaa;width:250px;margin:15px;display:inline-block;">
		  <div>IVA: 21% </div>
  		<div >Porcentaje de honorarios: {{porcentaje_honorarios}}%</div>
  		<div>Gastos: ${{gastos  | number:2}} ({{estado}})</div>
   		</div>

    <div style="padding:15px;border-radius:5px;border:1px solid #aaa;margin:15px;display:inline-block;width:220px;">
      <div style="display:inline-block;">
		  <div>Capital inicial: ${{capital_inicial | number:2}}</div>
		  <!--<div>Interes: ${{interes | number:2}}</div>
  		<div>IVA sobre interes: ${{iva_sobre_interes | number:2}}</div>-->
  		<div >Sub total: ${{sub_total | number:2}}</div>
  		<div >Honorarios: ${{honorarios | number:2}}</div>
   		<div >IVA sobre honorarios: $ {{iva_sobre_honorarios | number:2}}</div>
      <div class="resaltado" style="color:red;">DEUDA REAL: ${{supuesto_total | number:2}}</div>
   		<div class="resaltado">TOTAL: ${{total | number:2}}</div>
      <hr>
   		<div>
      <span style="padding-bottom:5px;">
      Anticipo: $<input placeholder="Anticipo..." type="number" style="border:0px;padding-left:3px;width:100px;" ng-model="anticipo" ng-init="anticipo=0" ng-change="quitar_y_cuotas()">
      </span>
      </div>
      <div>
      <span style="padding-bottom:5px;">
      Cuotas: <input placeholder="Cuotas..." type="number" ng-model="pagos" style="border:0px;padding-left:3px;width:100px;" ng-change="quitar_y_cuotas()"  ng-init="pagos=1;quitar_y_cuotas()">
      </span>
      </div>
      <div style="padding-bottom:5px;">
      Descuento: $ <input type="number" style="border:0px;width:100px;" ng-model="descuento" placeholder="Descuento" ng-change="calcular_cuotas()" max="{{descuento_m}}">
      </div>
      </div>
   		</div>
      <div style="display:inline-block;">
        <div style="font-size:23px;color:#478dff;" ng-show="pagos&&importexcuota">Total final: ${{total_total}}</div>
        <div style="font-size:23px;color:#478dff;" ng-show="pagos&&importexcuota">{{pagos}} cuotas de ${{importexcuota}}</div><hr>
        <div style="font-size:18px;color:#74c44c;" ng-show="pagos&&importexcuota"> HONORARIOS: ${{total_total - total_total/1.121 | number:2}}</div>
        <div style="font-size:18px;color:#c43131;" ng-show="pagos&&importexcuota"> BANCO: ${{ total_total/1.121 | number:2}}</div>
      </div>
      <div  style="padding:15px;border-radius:5px;border:1px solid #aaa;margin:15px;display:block;">
      <div>Propuesta</div><hr>
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
          <select class="form-control" ng-model="operador.nombre=operador.nombre" ng-init="operador.nombre=id_operador" ng-options="usuario.id as usuario.user for usuario in usuarios"></select>
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
	</div>
      <div style="display:none;position:fixed;top:0px;left:20px;width:300px;height:100%;background:white;border-right:1px solid #aaa;padding:15px;font-size:16px;z-index:5;" id="alerta">¿Seguro desea salir? Si no registró nada, perderá los datos.<div style="text-align:center;margin-top:15px;"><span class="butn" style="border-radius:5px 0px 0px 5px;font-size:13px;" onclick="window.close()">Cerrar</span><span class="butn"  style="border-radius:0px 5px 5px 0px;font-size:13px;" onclick="$('#alerta').css('display','none')">No cerrar</span></div></div>
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
      _.id_operador= operador;_.fecha_propuesta=new Date();
      var data={"numero_operacion" : $_GET['numero_operacion']};
      var datos={"documento" : $_GET['documento'], "banco" : $_GET['banco']};
      $http.post('php/quitas.php', datos).then(function(res){_.quitas_hsbc=res.data;});
      $http.post('php/amortizacion.php', datos).then(function(res){_.amortizacion=res.data;});
      $http.post('php/dolar.php').then(function (res){ _.dolar = res.data;});
      $http.post('php/usuarios.php').then(function(res){_.usuarios=res.data;});//Obtencion de los usuarios
      $http.post('php/telefonos.php', {documento:$_GET['documento']}).then(function(res){_.telefonos=res.data;});
      $http.post('php/productos.php', datos).then(function(res){
                          _.productos=res.data;
                          productos=res.data;
                          _.capital_inicial=0;
                          for (var i in productos){
                            _.capital_inicial=parseFloat(_.capital_inicial)+dolar_a_peso(productos[i].deuda, productos[i].dolar, _.dolar);
                          }
                        });
      _.cambio_primer_cuota = function () {
                          _.fecha_primer_cuota = sumar_mes(_.fecha_anticipo);
                        };
      
                          // PAGO(A1 ; B1 ; C1) = (A1*(1+A1)^B1)*C1/(((1+A1)^B1)-1)*-1  A1=TASA ; B1 = N° PERIODOS ; C1 = CAPITAL INICIAL ; 
      _.calcular_cuotas = function (){ 
                          for(var i in _.amortizacion){
                            if(_.amortizacion[i].cuotas==_.pagos){
                              _.tna=parseFloat(_.amortizacion[i].tasa);
                            }
                          }
                          _.tem=_.tna*0.0821917808219178/100;
                          _.tea=(Math.pow((1+_.tem),(365/30)))-1;
                          _.capital=_.capital_inicial-_.descuento;
                          _.anticipo_frances=_.anticipo/1.121;
                          _.tot_refi=Math.round(_.capital-_.anticipo_frances);
                          _.importexcuota_banco=pago(_.tem,_.pagos,_.tot_refi);
                          _.importexcuota=Math.round(pago(_.tem,_.pagos,_.tot_refi)*1.121);
                          _.total_total=_.importexcuota*_.pagos;
                        };
      
      _.quitar = function () {
                  for (var i in _.quitas_hsbc){
                  if(_.numero_gestion == _.quitas_hsbc[i].numero_gestion){
                    if(_.pagos ==  _.quitas_hsbc[i].cuotas){
                      if(parseFloat((_.quitas_hsbc[i].descuento)/100*parseFloat(_.capital_inicial))<parseFloat(_.quitas_hsbc[i].maximo))
                        {_.descuento=Math.round(parseFloat((_.quitas_hsbc[i].descuento)/100*parseFloat(_.capital_inicial)));_.descuento_m=_.descuento;}
                      else
                        {_.descuento=parseFloat(_.quitas_hsbc[i].maximo);_.descuento_m=_.descuento;}
                    }
                    }
                  }
      };

      _.quitar_y_cuotas=function(){_.quitar();_.calcular_cuotas();};


      _.recargar = function (){
      $http.post('php/datos.php', datos)
             .then(function(res){
                       res=res.data[0];
                       _.email=res.email;
                         _.banco=res.banco;
                         _.titular=res.titular;
                         _.documento=res.documento;
                         _.numero_gestion = res.numero_gestion;
                         _.fecha_mora=res.fecha_mora;
                         _.tasa=res.tasa;
                         _.tasa_frances=res.tasa_frances;
                         _.porcentaje_honorarios=res.porcentaje_honorarios;
                         _.gastos=res.gastos; // CENCOSUD VARIA POR PRE Y JUD
                         _.dias_atraso=calcularDate(_.fecha_actualizacion, _.fecha_mora);
                         _.estado=res.estado;
                         //_.capital_inicial=res.capital_inicial;
                         _.monto_atraso=_.dias_atraso/30;
                         //_.interes=(_.tasa/100)*_.capital_inicial*_.monto_atraso;
                         //_.iva_sobre_interes=_.interes*0.21;
                         _.supuesto_sub_total=parseFloat(_.capital_inicial)+parseFloat(_.interes)+parseFloat(_.iva_sobre_interes);
                         _.sub_total=parseFloat(_.capital_inicial);
                         _.honorarios=_.sub_total*(_.porcentaje_honorarios/100);
                         _.iva_sobre_honorarios=_.honorarios*0.21;
                         _.supuesto_honorarios=_.sub_total*0.121;
                         _.supuesto_iva_sobre_honorarios=_.honorarios*0.21;
                         _.total=parseFloat(_.sub_total)+parseFloat(_.honorarios)+parseFloat(_.iva_sobre_honorarios);
                         _.supuesto_total=parseFloat(_.supuesto_sub_total)+parseFloat(_.supuesto_honorarios)+parseFloat(_.supuesto_iva_sobre_honorarios);
                         _.a_financiar = parseFloat(parseFloat((100 - _.porcentaje)/ 100 *_.total).toFixed(2));
                        });
};

      $http.post('php/datos.php', datos)
             .then(function(res){
                       res=res.data[0];
                       _.email=res.email;
                         _.banco=res.banco;
                         _.titular=res.titular;
                         _.documento=res.documento;
                         _.numero_gestion = res.numero_gestion;
                         _.fecha_actualizacion=sumar_mes(new Date);
                         _.fecha_anticipo=_.fecha_actualizacion;
                         _.fecha_mora=res.fecha_mora;
                         _.tasa=res.tasa;
                         _.tasa_frances=res.tasa_frances;
                         _.porcentaje_honorarios=res.porcentaje_honorarios;
                         _.gastos=res.gastos; // CENCOSUD VARIA POR PRE Y JUD
                         _.dias_atraso=calcularDate(_.fecha_actualizacion, _.fecha_mora);
                         _.estado=res.estado;
                         //_.capital_inicial=res.capital_inicial;
                         _.monto_atraso=_.dias_atraso/30;
                         //_.interes=(_.tasa/100)*_.capital_inicial*_.monto_atraso;
                         //_.iva_sobre_interes=_.interes*0.21;
                         _.supuesto_sub_total=parseFloat(_.capital_inicial)+parseFloat(_.interes)+parseFloat(_.iva_sobre_interes);
                         _.sub_total=parseFloat(_.capital_inicial);
                         _.honorarios=_.sub_total*(_.porcentaje_honorarios/100);
                         _.iva_sobre_honorarios=_.honorarios*0.21;
                         _.supuesto_honorarios=_.supuesto_sub_total*0.121;
                         _.supuesto_iva_sobre_honorarios=_.honorarios*0.21;
                         _.total=parseFloat(_.sub_total)+parseFloat(_.honorarios)+parseFloat(_.iva_sobre_honorarios);
                         _.supuesto_total=_.total*1.4;
                         _.a_financiar = parseFloat(parseFloat((100 - _.porcentaje)/ 100 *_.total).toFixed(2));
                        });
        _.plazo=1; _.porcentaje=10; _.quitas='1'; _.cambio_primer_cuota(); _.calcular_cuotas(); _.quitar();

        _.descargar = function (){
          $http.post('http://'+url+':3001/liquidacion',{  
                    banco:_.banco,
                    documento: _.documento,
                    titular : _.titular,
                    fecha_actualizacion: _.fecha_actualizacion,
                    fecha_mora:_.fecha_mora,
                    dias_atraso:_.dias_atraso,
                    iva: '21%',
                    tasa: _.tasa,
                    porcentaje_honorarios:_.porcentaje_honorarios,
                    gastos: _.gastos,
                    estado: _.estado,
                    capital_inicial: _.capital_inicial,
                    interes: _.interes,
                    iva_sobre_interes: _.iva_sobre_interes,
                    sub_total: _.sub_total,
                    iva_sobre_honorarios: _.iva_sobre_honorarios,
                    cuota_promedio: _.cuota_promedio,
                    total_promedio: _.cuota_promedio * _.plazo,
                    pagos: _.plazo,
                    numero_gestion: _.numero_gestion,
                    quita_descripcion: _.quita_descripcion,
                    quita_final: _.quita_final,
                    fecha_propuesta: _.fecha_propuesta,
                    total: parseFloat(_.total_total.replace(',','')),
                    anticipo: parseFloat(_.anticipo.replace(',','')),
                    cuotas: _.plazo,
                    fecha_anticipo: _.fecha_anticipo,
                    operador: _.operador.nombre,
                    deudor: _.documento,
                    telefono1: _.telefono1,
                    telefono2: _.telefono2,
                    telefono3: _.telefono3,
                    cuota_cero: 0,
                    asignacion: _.numero_gestion
                                },{responseType: 'arraybuffer'}).then(function(res){var file = new Blob([ res.data ], {type: 'application/pdf'});saveAs(file, 'Liquidacion-'+_.documento+'-'+_.banco+'.pdf');});
  };
  _.registrar = function () {
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
                    cuota_cero: 0,
                    asignacion: _.numero_gestion
    }).then(function(res){
      alert(res.data);
    });
  } 
});

function pago(a,b,c){a=parseFloat(a);b=parseFloat(b);c=parseFloat(c);return Math.round((((a*(1+a)**b)*c/(((1+a)**b)-1)))); }
    </script> 
</body>
</html>
