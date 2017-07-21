
<html lang="es">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="/.css/bootstrap.min.css"/>
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
  <script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/angular-chart.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
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
  <body ng-app="myApp"  ng-controller="controller">
  <div class="drag"></div>
  <div class="bar back-gr"></div>
  <div style="position:fixed;top:0px;left:5px;color:white;cursor:pointer;font-size:18px;" onclick="window.close()">×</div>
  <div style="width:680px;position:absolute;height:100%;overflow-y:auto;overflow-x:hidden;left:20px;top:0px;">
    <div class="row" style="margin-top:150px;">
    <div class="col-xs-5">
     <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
        <div class="panel-heading">Estado de la campaña</div>
        <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
        <div style="width:200px;margin:auto;">
          <canvas id="pie" class="chart chart-pie" chart-data="data1" chart-labels="labels1" chart-options="options"></canvas> 
        </div>
        <div style="font-size:12px;width:100%;">Total: {{gestiones.length}}</div>
          <div style="font-size:12px;width:100%;border-top:1px solid #ddd">Gestionados: {{gestionados}}</div>
          <div style="font-size:12px;width:100%;border-top:1px solid #ddd">No gestionados: {{no_gestionados}}</div>
        </div>
      </div>
    </div>
    <div class="col-xs-7">
      <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
          <div class="panel-heading">Gestiones de operadores</div>
          <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
            
              <canvas id="bar" class="chart chart-bar ng-isolate-scope" chart-data="data3" chart-labels="labels3" chart-series="series" chart-options="options"></canvas>
            
          </div>
    </div>
    </div>
    </div>
    <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
          <div class="panel-heading">Estado de la campaña</div>
          <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
            <canvas id="line" class="chart chart-line" chart-data="data2" chart-labels="labels2" chart-series="series" chart-options="options" chart-dataset-override="datasetOverride" chart-click="onClick" height="100"></canvas>
          </div>
      </div>
    <div class="panel panel-default"  style="background:rgba(255,255,255,0.5);">
            <div class="panel-heading">Gestiones</div>
            <div class="panel-body" style="text-align:left;font-weight:200;font-size:18px;">
            <div>
            <div class="input-group">
            <span class="input-group-addon">Operador</span>
            <input type="text" class="form-control" ng-model="search.operador" placeholder="Operador...">
            <span class="input-group-addon">Sub estado</span>
            <input type="text" class="form-control" ng-model="search.sub_estado" placeholder="Sub estado...">
            </div>
            </div>
            <table class="table-condensed table" style="font-size:13px;">
        <tr ng-repeat="gestion in gestiones | filter: search" style="color:{{gestion.gestionado!=0 ? 'green' : 'red'}}"><td>{{gestion.apellido}}</td><td>{{gestion.documento}}</td><td>{{gestion.sub_estado}}</td><td>{{gestion.operador}}</td><td>{{gestion.fecha | date:'dd/MM/yyyy'}}</td><td><button class="btn btn-default" ng-click="ver_gestion(gestion.documento)">Gestion</label></td></tr>
      </table>            </div>
    </div>
</div>
</div>
	</div>
    </div>
    <div style="position:fixed;left:20px;width:665px;border:1px solid #ddd;top:0px;padding:25px;background:white;z-index:5;">
      <div class="row">
        <div class="col-xs-6">
          <p>Campaña: {{campania.nombre}} </p>
          <p>Generación: {{campania.fecha_generacion | date: "dd/MM/yyyy"}}  </p>
          <p>    Finalización: {{campania.fecha_finalizacion}}</p>

        </div>
        <div class="col-xs-6">
          <div class="input-group">
            <span class="input-group-addon">Fecha de referencia</span><input type="date" class="form-control" ng-model="fecha" ng-change="cargar(fecha)">
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
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

    
    _.ver_gestion= function (d){
                                window.open('/gerencia/gestion-de-cobranzas/manual/datos/?d='+d, d,'height=400, width=650, left=300, top=100, resizable=no, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');
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
    </script>
  </body>
</html>
