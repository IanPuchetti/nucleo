<?php
session_start();
if(isset($_SESSION['user'])){

}
else{
header("Location: ../../");
}
?>
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
  <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jsontable.js"></script>
	<script src="js/xlsx.js" type="text/javascript"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

body{
}

.noselect{
  -webkit-touch-callout: none; 
    -webkit-user-select: none; 
     -khtml-user-select: none; 
       -moz-user-select: none; 
        -ms-user-select: none; 
            user-select: none;
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

.drag{
  -webkit-app-region:drag;
}

.bar{
  width:100%;
  height:15px;
  position:fixed;
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

.back-gr{
  background: -webkit-linear-gradient(#07963d, #89bd25);
  color:white;
}

body{
  border:1px solid #ccc;
  overflow:hidden;
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
    padding-top:3px;
}


input{
  border:0px;
  font-size:12px;
}

input:focus{
    outline: none;
}


.busqueda{
  height: 305px;
  overflow-y:scroll;
  overflow-x:hidden;
  border-bottom:1px solid #ddd;
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

.tooltip-inner {
  background-color: #0b3 !important;
  /*!important is not necessary if you place custom.css at the end of your css calls. For the purpose of this demo, it seems to be required in SO snippet*/
  color: #fff;
}

.tooltip.top .tooltip-arrow {
  border-top-color: #0b3;
}

.tooltip.right .tooltip-arrow {
  border-right-color: #0b3;
}

.tooltip.bottom .tooltip-arrow {
  border-bottom-color: #0b3;
}

.tooltip.left .tooltip-arrow {
  border-left-color: #0b3;
}

.titulo{
  cursor:pointer;
  background:#fff !important;
}
.titulo:hover{
  text-decoration: underline;
  background: #fafefa !important;
}

.butn{
  border-radius:5px;border:1px solid #ddd;padding:5px 8px 5px 8px;cursor:pointer;background: none;color:#666;font-size:14px;font-weight:100;
}
.butn:hover, .butn:hover > ul{
  border-color:#95e53d !important;
}



/* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 1.95em;
  cursor: pointer;
}

/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  content: '';
  position: absolute;
  left: 0; top: 0;
  width: 1.25em; height: 1.25em;
  border: 2px solid #ccc;
  background: #fff;
  border-radius: 4px;
  box-shadow: inset 0 1px 3px rgba(0,0,0,.1);
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '✔';
  position: absolute;
  top: .1em; left: .1em;
  font-size: 1.3em;
  line-height: 0.8;
  color: #95e53d;
  transition: all .2s;
}
/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #bbb;
  background-color: #ddd;
}
[type="checkbox"]:disabled:checked + label:after {
  color: #999;
}
[type="checkbox"]:disabled + label {
  color: #aaa;
}

/* hover style just for information */
label:hover:before {
  border: 2px solid #95e53d!important;
}
.noshadow {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }
.inputs{
  width:100px !important;
}
</style>
  </head>

  <body>
<div class="header">
  <div style="position:absolute;width:1000px;">
  <span class="dropdown boton">
    <a href="/">Inicio</a>
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Campañas <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/gerencia/campanias/ver">Ver</a></li>
      <li><a href="/gerencia/campanias/generar/">Generar</a></li>
      <li><a href="/gerencia/campanias/grupos/">Grupos</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Panel <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/gerencia/panel/gestiones">Gestiones</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
            <span data-toggle="dropdown">Administración de Cartera <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/carga/comparacion" class="ventana">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1" href="/gerencia/carga/masiva" class="ventana">Masiva</a></li>
                  <li><a tabindex="-1" href="/gerencia/carga/manual" class="ventana">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación masiva</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1" href="/gerencia/modificacion/productos" class="ventana">Productos</a></li>
                  <li><a tabindex="-1" href="/gerencia/modificacion/deudores" class="ventana">Deudores</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1"href="/gerencia/carga/enriquecer" class="ventana">Telefonos / Mails</a></li>
                  <li><a href="/gerencia/carga/reportes" class="ventana">Datos Enriquecidos</a></li>
                </ul>
              </li>
              <li><a href="/gerencia/baja/" class="ventana">Cambio de estado</a></li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Gestión de cobranzas <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/gestion-de-cobranzas/manual" class="ventana">Manual</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/campania" class="ventana">Campaña</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/consultas" class="ventana">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/carga/gestiones-automaticas" class="ventana">Gestiones automáticas</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Exportar <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/exportar/casos" class="ventana">Casos</a></li>
              <li><a href="/gerencia/exportar/telefonos" class="ventana">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/exportar/sms" class="ventana">SMS</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails" class="ventana">Mails</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/ivr" class="ventana">IVR</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Informes</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/exportar/propuestas" class="ventana">Propuestas</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Administración <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/administracion/responsables" class="ventana">Responsables</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">ABMS</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/usuarios" class="ventana">Operadores</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton logout">
    <a href="/.php/logout.php">Salir</a>
  </span>
</div>
</div>
    <div class="container">
<div class="row">
<div class="col-md-6">
	<div class="">
  		<h2>Modificación masiva de productos</h2>
  		<p>Ingrese el archivo .xlsx para obtener los campos <button onclick="$('#archivo').click();$('#cargar-div').css('display','block');" id="boton" class="btn btn-danger btn-lg" role="button">Subir</button>
<input type="file" id="archivo" style="display:none;">
      </div></p>

	</div>
    
<div class="col-md-6">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#carpeta').css('display','inline-block');">Carpeta</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#productos').css('display','inline-block');">Productos</a></li>
      </ul>
	<table id="carpeta" class="ocultar"></table>
	<table id="productos" class="ocultar" style="display:none;"></table>
	
</div>
</div>
      <div style="text-align:center;display:none;" class="lead" id="cargar-div">
      Una vez elegido los campos
     <button class="btn btn-danger"  style="font-size:20px;" id="cargar" onclick="$('#barra').css('display','block')">Cargar</button>
     </div>
      <div class="progress"  id="barra" style="display:none;">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="progreso"><span class="sr-only">80%</span></div>
     </div>
     <div class="satisfaction lead" style="text-align:center;"></div>
     <div id="comparacion" style="position:absolute;width:600px;margin:auto;text-align:center;"></div>
  </body>
<script>
var datos={}, carpetas={}, producto={};
$("#cargar").click(function(){
var i=0;
while(i<document.getElementsByName('carpeta').length){
	var campo = document.getElementsByName('carpeta')[i].id;
	carpeta[campo]=document.getElementsByName('carpeta')[i].value;  
i++;  
}
var i=0;
while(i<document.getElementsByName('productos').length){
	var campo = document.getElementsByName('productos')[i].id;
	productos[campo]=document.getElementsByName('productos')[i].value;  
i++;  
}

//datos={carpeta: JSON.stringify(carpeta), deudores:JSON.stringify(deudores), domicilios:JSON.stringify(domicilios), productos:JSON.stringify(productos), excel : JSON.stringify(exporte[workbook.Props.SheetNames[0]])};


excel=exporte[workbook.Props.SheetNames[0]];
for(var i in excel){
			datos['carpeta']=JSON.stringify({
						caratula: excel[i][carpeta.caratula],
						comentario: excel[i][carpeta.comentario],
						sucursal: excel[i][carpeta.sucursal],
						dias_adic: excel[i][carpeta.dias_adic],
						legajo: excel[i][carpeta.legajo],
						numero_gestion: excel[i][carpeta.numero_gestion],
						numero_lote: excel[i][carpeta.numero_lote]});
			datos['productos']=JSON.stringify({	
						numero_operacion: excel[i][productos.numero_operacion],		
						producto: excel[i][productos.producto],
						deuda: excel[i][productos.deuda],
						fecha_deuda: transform_fecha (excel[i][productos.fecha_deuda]),
						fecha_mora: transform_fecha (excel[i][productos.fecha_mora]),
						fecha_ult_cobro: transform_fecha (excel[i][productos.fecha_ult_cobro]),
						pase_legales: excel[i][productos.pase_legales],
						estado: $("#estado").children(":selected").attr("id"),
						sub_estado: $("#sub_estado").children(":selected").attr("id"),
						banco: $("#banco").children(":selected").attr("id"),
						nombre_producto: excel[i][productos.nombre_producto],
						tipo_gestion: excel[i][productos.tipo_gestion]});
			datos['proceso']=i;
			carpetas=JSON.parse(datos['carpeta']);
      		producto=JSON.parse(datos['productos']);
      		comparar(producto, carpetas, i);
			}
});
var para_modificar=[];var carpet=[];var product=[];
function comparar (producto, carpetas, i){
  $.ajax({
          url:'php/comparacion.php',
          type:'post',
          data:datos,
          success: function (res){
                      res=JSON.parse(res);
                      var actual=res[0];
                      for(keys in actual){
                        if(producto[keys]===undefined){producto[keys]='';}
                        if(carpetas[keys]===undefined){carpetas[keys]='';}
                      }
                      carpet.push(carpetas);product.push(productos);
                      para_modificar[i]= JSON.stringify({productos:producto, carpeta:carpetas});
                      if((actual.producto != producto.producto && producto.producto != '') 
                      || (actual.deuda != producto.deuda && producto.deuda !='')
                      || (actual.fecha_deuda != producto.fecha_deuda && producto.fecha_deuda !='')
                      || (actual.fecha_mora != producto.fecha_mora && producto.fecha_mora !='')
                      || (actual.fecha_ult_cobro != producto.fecha_ult_cobro && producto.fecha_ult_cobro !='')
                      || (actual.nombre_producto != producto.nombre_producto && producto.nombre_producto !='')
                      || (actual.caratula != carpetas.caratula && carpetas.caratula !='')
                      || (actual.comentario != carpetas.comentario && carpetas.comentario !='')
                      || (actual.sucursal != carpetas.sucursal && carpetas.sucursal !='')
                      || (actual.dias_adic != carpetas.dias_adic && carpetas.dias_adic !='')
                      || (actual.legajo != carpetas.legajo && carpetas.legajo !='')
                      || (actual.numero_gestion != carpetas.numero_gestion && carpetas.numero_gestion !='')
                      || (actual.numero_lote != carpetas.numero_lote && carpetas.numero_lote !='') ){
                      $("#comparacion").append('<table class="table table-condensed" style="overflow-x:scroll;font-size:12px;margin:auto;" id="'+i+'"><tr style="background:grey;color:white;"><td>Campos</td><td>Producto</td><td>Deuda</td><td>Fecha de deuda</td><td>Fecha de mora</td><td>Fecha ultimo cobro</td><td>Nombre producto</td><td>Caratula</td><td>Comentario</td><td>Sucursal</td><td>Dias adic</td><td>Legajo</td><td>Numero gestion</td><td>Numero lote</td></tr><tr style="background:white;"><td style="background:grey;color:white;">Actual</td><td>'+res[0].producto+'</td><td>'+res[0].deuda+'</td><td>'+res[0].fecha_deuda+'</td><td>'+res[0].fecha_mora+'</td><td>'+res[0].fecha_ult_cobro+'</td><td>'+res[0].nombre_producto+'</td><td>'+res[0].caratula+'</td><td>'+res[0].comentario+'</td><td>'+res[0].sucursal+'</td><td>'+res[0].dias_adic+'</td><td>'+res[0].legajo+'</td><td>'+res[0].numero_gestion+'</td><td>'+res[0].numero_lote+'</td></tr><tr><td style="color:white;background:lightgrey;"> A modificar</td><td>'+producto.producto+'</td><td>'+producto.deuda+'</td><td>'+producto.fecha_deuda+'</td><td>'+producto.fecha_mora+'</td><td>'+producto.fecha_ult_cobro+'</td><td>'+producto.nombre_producto+'</td><td>'+carpetas.caratula+'</td><td>'+carpetas.comentario+'</td><td>'+carpetas.sucursal+'</td><td>'+carpetas.dias_adic+'</td><td>'+carpetas.legajo+'</td><td>'+carpetas.numero_gestion+'</td><td>'+carpetas.numero_lote+'</td></tr><tr><td style="text-align:center" colspan="13"><div style="text-align:center;"><button class="btn btn-success" style="border-radius:5px 0px 0px 5px;" onclick="modificar('+i+')">Modificar</span><button class="btn btn-danger" style="border-radius:0px 5px 5px 0px;" onclick=$("#'+i+'").remove()>Omitir</span></div></td></tr></table>');
                      }
                      var progress= (parseInt(i)+1) * 100 / excel.length;
                      $("#progreso").css('width', progress+'%');
                      $(".satisfaction").html((parseInt(i)+1)+'/'+excel.length);
                      }     
      });
}

function modificar (a){
  var datos= {  a_modificar: para_modificar[a]
  };
  $.ajax({
          url:'php/modificar.php',
          type:'post',
          data:datos,
          success: function (res){
            alert(res);$("#"+a).remove();
          }
  });
}
</script>
<script>
var carpeta={}, deudores={}, domicilios={}, productos={}, names, excel;

$.ajax({
	url:"php/campos.php",
	data:{'tabla':'carpeta'},
	type:'post',
	success:function(res){
	res=JSON.parse(res);
	for (i in res){
	if(res[i]=='documento'  || res[i]=='numero_operacion' ){}else{
	$("#carpeta").append('<tr><td>'+res[i]+'</td><td><select class="lista btn-default" id="'+res[i]+'" name="carpeta"><option>nulo</option></select></td></tr>');}}
	}
});

$.ajax({
	url:"php/campos.php",
	data:{'tabla':'deudores'},
	type:'post',
	success:function(res){
	res=JSON.parse(res);
	for (i in res){
	$("#deudores").append('<tr><td>'+res[i]+'</td><td><select class="lista  btn-default" id="'+res[i]+'" name="deudores"><option>nulo</option></select></td></tr>');}
	}
});

$.ajax({
	url:"php/campos.php",
	data:{'tabla':'domicilios'},
	type:'post',
	success:function(res){
	res=JSON.parse(res);
	for (i in res){
	if(res[i]=='documento'){}else{
	$("#domicilios").append('<tr><td>'+res[i]+'</td><td><select class="lista  btn-default" id="'+res[i]+'" name="domicilios"><option>nulo</option></select></td></tr>');}}
	}
});

$.ajax({
	url:"php/campos.php",
	data:{'tabla':'productos'},
	type:'post',
	success:function(res){
	res=JSON.parse(res);
	for (i in res){
	if(res[i]=='documento' || res[i]=='id'){}else{
	$("#productos").append('<tr><td>'+res[i]+'</td><td><select class="lista  btn-default" id="'+res[i]+'" name="productos"><option>nulo</option></select></td></tr>');}}
	}
});


//CARGA DE EXCEL
function to_json(workbook) {
	var result = {};
	workbook.SheetNames.forEach(function(sheetName) {
		var roa = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
		if(roa.length > 0){
			result[sheetName] = roa;
		}
	});
	return result;
}
var exporte, mostrar;
function handleFile(e) {
  var files = e.target.files;
  var i,f;
  for (i = 0, f = files[i]; i != files.length; ++i) {
    var reader = new FileReader();
    var name = f.name;
    reader.onload = function(e) {
      var data = e.target.result;
      workbook = XLSX.read(data, {type: 'binary'});
      exporte= to_json(workbook);
      mostrar={'sheet1' : exporte[workbook.Props.SheetNames[0]]};
      //document.getElementById("mostrar").innerHTML= mostrar.sheet1;
	for (var i in Object.keys(mostrar.sheet1[0])){
		$(".lista").append("<option>"+Object.keys(mostrar.sheet1[0])[i]+"</option>");
		}
        }

    reader.readAsBinaryString(f);
  }
  $.ajax({
		url:'php/bancos.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#banco").html('');
								for (var i in res){
								$("#banco").append("<option id='"+res[i].cbanco+"'>"+res[i].dbanco+"</option>");
								}
		}
});

  $.ajax({
		url:'php/estados.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#estado").html('');
								for (var i in res){
								$("#estado").append("<option id='"+res[i].id+"'>"+res[i].estado+"</option>");
								}
		}
});

$.ajax({
		url:'php/sub_estados.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#sub_estado").html('');
								for (var i in res){
								$("#sub_estado").append("<option id='"+res[i].id+"'>"+res[i].sub_estado+"</option>");
								}
		}
});

$.ajax({
		url:'php/proximas_acciones.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#proxima_accion").html('');
								for (var i in res){
								$("#proxima_accion").append("<option id='"+res[i].id+"'>"+res[i].accion+"</option>");
								}
		}
});

  $("#archivo").val("");
}

document.getElementById('archivo').addEventListener('change', handleFile, false);

function transform_fecha (str){
		
		if(str != undefined){
		
		str = str.replace(/[^0-9/]/g, "");
		str = str.split("/");
		return str[2]+'-'+str[1]+'-'+str[0];
		}else{
		return '';
		}
}

</script>
</html>
