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
 <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
	<link rel="stylesheet" href="/.css/bootstrap.min.css"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/xlsx.js"></script>
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

.butn{
  border-radius:5px;border:1px solid #ddd;padding:5px 8px 5px 8px;cursor:pointer;background: none;color:#666;
}
.butn:hover, .butn:hover > ul{
  border-color:#95e53d;
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
  width:200px !important;
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

table{
  font-size:14px;
  width:100%;
  float:right;
  cursor:pointer;
  margin-bottom: 1px;
}

td{
  border:1px solid #aaa;
  padding:0px 4px 0px 4px;
}

.busqueda{
  height: 305px;
  overflow-y:scroll;
  overflow-x:hidden;
  border-bottom:1px solid #ddd;
}

tbody tr td{
  font-size:12px;
}

thead tr td{
  background:#efd;
}

tbody tr:hover{
  background:#eafada !important;
}

.left{
  width:10%;position:absolute;top:83px;border-top:1px solid #eee;padding-top:5px;
}

.button{
  cursor:pointer;
  border:1px solid #ddd;border-radius:5px;
  padding:2px;
}
.button:hover>#change{
  background:#eafada;
}

input{
	background:none;
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

select{
  background: none;
  border:0px;
  width:175px !important;
}
select:hover, select:focus, select:active, select:checked{
  background: white !important;
}

.side-menu{
	position:fixed;left:0px;width:100px;top:41px;z-index:2;height:100%;border-right:1px solid #ddd;text-align:center;background:#fff;
}

.side-menu div{
	padding:10px;
}

.side-menu div:hover{
	background:#fafafa;
	    cursor:pointer;

}

.side-menu div a{
	text-decoration: none;
  background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

#registrar{
  position:fixed;
  bottom:5px;
  left:15px;
  z-index:2;
}

.selector{
  padding:5px;border-radius:5px;border:1px solid #ddd;text-align: center;
}

.selector a{
  padding:5px 15px 5px 15px;
  text-decoration:none;
  cursor:pointer;
  font-size:12px;
  color:#666;
}

.selector:hover{
  border-color:#abdf47;
}

.selector a:hover{
  color:#abdf47;
}

.ocultar{
  width:350px;
}

</style>
<script>
function json_tabla (id_tabla, objeto){
  var headers = Object.keys(objeto[0]);
  $("#"+id_tabla).html('');
  $("#"+id_tabla).append("<tr id='thead_"+id_tabla+"'></tr>");
  for (var i in headers){
              $("#thead_"+id_tabla).append("<td>"+headers[i]+"</td>");
  }
  for (var i in objeto){
               $("#"+id_tabla).append("<tr id='tr_"+id_tabla+i+"'></tr>");
              for (var e in headers){
                $("#tr_"+id_tabla+i).append("<td>"+objeto[i][headers[e]]+"</td>");
  }
}
}
</script>
  </head>

  <body oncontextmenu="return false;" class="noselect">
    <div class="bar drag">
    </div>
<div class="header" style="">
  <div style="position:absolute;width:600px;">
  <span class="dropdown boton">
   <a href="/" disable>Inicio</a>
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Gestión de cobranzas <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/general/gestion-de-cobranzas/manual/">Manual</a></li>
      <li><a href="/general/gestion-de-cobranzas/campania/">Campaña</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
            <span data-toggle="dropdown">Administración de Cartera <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/general/carga/comparacion" class="ventana">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/general/carga/masiva" class="ventana">Masiva</a></li>
                  <li><a tabindex="-1" href="/general/carga/manual" class="ventana">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/general/carga/enriquecer" class="ventana">Telefonos / Mails</a></li>
                  <li><a href="/general/carga/reportes" class="ventana">Datos Enriquecidos</a></li>
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
	<div style="position:absolute;left:30px;top:30px;width:250px;">
  		<h2>Carga masiva</h2>
  		<div>Ingrese el archivo .xlsx para obtener los campos <span onclick="$('#archivo').click();$('#cargar-div').css('display','block');" id="boton" class="butn" style="padding:5px 7px 5px 7px;font-size:11px;">Subir</span>
<input type="file" id="archivo" style="display:none;">
      </div>
       <div style="display:none;margin-top:10px;" id="cargar-div">
      Una vez elegido los campos
     <span class="butn"  style="font-size:11px;padding:5px 7px 5px 7px" id="cargar" onclick="$('#barra').css('display','block')">Cargar</button>
     </div>
      <div class="progress"  id="barra" style="display:none;margin-top:20px;">
        <div class="progress-bar progress-bar-danger back-gr" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="progreso"><span class="sr-only">80%</span></div>
      </div>
     <div class="satisfaction lead" style="text-align:center;"></div>
	</div>
    
<div style="width:450px;left:300px;position:absolute;top:50px;">
      <div class="selector">
        <a onclick="$('.ocultar').css('display','none');$('#carpeta').css('display','inline-block');">Carpeta</a>
        <a onclick="$('.ocultar').css('display','none');$('#deudores').css('display','inline-block');">Deudor</a>
        <a onclick="$('.ocultar').css('display','none');$('#domicilios').css('display','inline-block');">Domicilios</a>
        <a onclick="$('.ocultar').css('display','none');$('#productos').css('display','inline-block');">Productos</a>
  </div>
	<div id="carpeta" class="ocultar">
    <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Caratula" data-placement="bottom">
              <span ><img src="/.img/reporte.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="carpeta" id="caratula" class="lista"><option></option></select></span>
          </span>
    </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Comentario" data-placement="bottom">
              <span><img src="/.img/comentario.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="carpeta" id="comentario" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Sucursal" data-placement="bottom">
              <span><img src="/.img/empresa.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="carpeta" id="sucursal" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Legajo" data-placement="bottom">
              <span><img src="/.img/id-card.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="carpeta" id="legajo" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Numero de gestión" data-placement="bottom">
              <span><img src="/.img/gestor.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="carpeta" id="numero_gestion" class="lista"><option></option></select></span>
          </span>
      </div>
  </div>
	<div id="deudores" class="ocultar" style="display:none;">
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Documento" data-placement="bottom">
              <span><img src="/.img/id-card.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="deudores" id="documento" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Tipo de documento" data-placement="bottom">
              <span><img src="/.img/id-card.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="deudores" id="tipo_documento" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Apellido y nombre" data-placement="bottom">
              <span><img src="/.img/deudor.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="deudores" id="apellido" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Correo electrónico" data-placement="bottom">
              <span class="color-gr" style="padding:0px 4px 0px 4px">@</span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="deudores" id="email" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Empresa" data-placement="bottom">
              <span><img src="/.img/empresa.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="deudores" id="empresa" class="lista"><option></option></select></span>
          </span>
      </div>
  </div>
  <div id="domicilios" class="ocultar" style="display:none;">
<div style="position:absolute;left:0px;width:250px;">
<div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Dirección particular" data-placement="bottom">
              <span><img src="/.img/home.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="direccion_particular" class="lista"><option></option></select></span>
          </span>
      </div>

      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Dirección particular 2" data-placement="bottom">
              <span><img src="/.img/home.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="direccion_particular2" class="lista"><option></option></select></span>
          </span>
      </div>

      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Dirección particular 3" data-placement="bottom">
              <span><img src="/.img/home.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="direccion_particular3" class="lista"><option></option></select></span>
          </span>
      </div> 

      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Dirección laboral" data-placement="bottom">
              <span><img src="/.img/empresa.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="direccion_laboral" class="lista"><option></option></select></span>
          </span>
      </div> 
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Dirección laboral 2" data-placement="bottom">
              <span><img src="/.img/empresa.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="direccion_laboral2" class="lista"><option></option></select></span>
          </span>
      </div> 
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Provincia" data-placement="bottom" class="color-gr">
              <span><img src="/.img/ubicacion.png" style="width:15px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="provincia" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Localidad" data-placement="bottom" class="color-gr">
              <span><img src="/.img/ubicacion.png" style="width:15px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="localidad" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Codigo postal" data-placement="bottom" class="color-gr">
              <span><img src="/.img/ubicacion.png" style="width:15px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="codigo_postal" class="lista"><option></option></select></span>
          </span>
      </div>

    </div>
    <div style="position:absolute;left:250px;width:250px;margin-top:3px;">
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Telefono 1" data-placement="bottom">
              <span><img src="/.img/phone.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="telefono1" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Telefono 2" data-placement="bottom">
              <span><img src="/.img/phone.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="telefono2" class="lista"><option></option></select></span>
          </span>
      </div><div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Telefono 3" data-placement="bottom">
              <span><img src="/.img/phone.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="domicilios" id="telefono3" class="lista"><option></option></select></span>
          </span>
      </div>
</div>

  </div>

      
  <div id="productos" class="ocultar" style="display:none;">
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Numero de operación" data-placement="bottom" class="color-gr">
              <span><img src="/.img/reporte.png" style="width:13px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="productos" id="numero_operacion" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Producto" data-placement="bottom" class="color-gr">
              <span><img src="/.img/productos.png" style="width:17px;height:12px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="productos" id="producto" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Deuda en pesos" data-placement="bottom" class="color-gr" style="padding-left:5px;padding-right:5px;" id="pesos" onclick="cambiar('pesos','dolares')">$</span>
              <span span data-toggle="tooltip" title="Deuda en dolares" data-placement="bottom" class="color-gr" style="padding-left:5px;padding-right:5px;font-size:12px;display:none;" id="dolares"
 onclick="cambiar('dolares','pesos')" >U$D</span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="productos" id="deuda" class="lista"><option></option></select></span>
          </span>
          <span id="moneda" style="display:none;position:absolute;margin-top:3px;font-size:10px;margin-left:5px;" class="color-gr">¿<a href="#" onclick="cambiar('pesos','dolares')">Dólares</a> o <a href="#"  onclick="cambiar('dolares','pesos')">pesos</a>?</span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Fecha de ingreso" data-placement="bottom">
              <span class="color-gr" style="font-size:10px;"><img src="/.img/agenda.png" style="width:17px;height:15px;margin-left:2px;"> Ingreso</span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="productos" id="fecha_deuda" style="width:140px !important;" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Fecha de mora" data-placement="bottom">
              <span style="font-size:10px;" class="color-gr"><img src="/.img/agenda.png" style="width:17px;height:15px;margin-left:2px;"> Mora</span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select name="productos" id="fecha_mora" style="width:150px !important;" class="lista"><option></option></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Estado" data-placement="bottom">
              <span class="color-gr" style="font-size:10px;"><img src="/.img/estado.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select id="estado"></select></span>
          </span>
      </div>
      <div style="margin-top:10px;">
          <span class="button noselect" data-toggle="tooltip" title="Banco" data-placement="bottom">
              <span class="color-gr" style="font-size:10px;"><img src="/.img/bank.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select id="banco" ></select></span>
          </span>
      </div>
    </div>
</div>
</div>
</body>
<script>
var date = new Date(); 
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
var datos={};
$("#cargar").click(function(){
if($("#banco").val()!=''){
var i=0;
while(i<document.getElementsByName('carpeta').length){
	var campo = document.getElementsByName('carpeta')[i].id;
	carpeta[campo]=document.getElementsByName('carpeta')[i].value;  
i++;  
}
var i=0;
while(i<document.getElementsByName('deudores').length){
	var campo=document.getElementsByName('deudores')[i].id;
	deudores[campo]=document.getElementsByName('deudores')[i].value;  
i++;  
}
var i=0;
while(i<document.getElementsByName('domicilios').length){
	var campo = document.getElementsByName('domicilios')[i].id;
	domicilios[campo]=document.getElementsByName('domicilios')[i].value;  
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
						dias_adic: 0,
						legajo: excel[i][carpeta.legajo],
						numero_gestion: excel[i][carpeta.numero_gestion],
						numero_lote: 0});

datos['deudor']=JSON.stringify({			
						documento: transform_number(excel[i][deudores.documento]),
						tipo_documento: excel[i][deudores.tipo_documento],
						apellido: excel[i][deudores.apellido],
						email: excel[i][deudores.email],
						empresa: excel[i][deudores.empresa]});
			datos['domicilios']=JSON.stringify({			
						direccion_laboral: excel[i][domicilios.direccion_laboral],
						direccion_particular: excel[i][domicilios.direccion_particular],
						direccion_laboral2: excel[i][domicilios.direccion_laboral2],
						direccion_particular2: excel[i][domicilios.direccion_particular2],
						direccion_particular3: excel[i][domicilios.direccion_particular3],
						provincia: excel[i][domicilios.provincia],
						localidad: excel[i][domicilios.localidad],
						codigo_postal: excel[i][domicilios.codigo_postal],
						telefono1: sacar011(excel[i][domicilios.telefono1]),
						telefono2: sacar011(excel[i][domicilios.telefono2]),
						telefono3: sacar011(excel[i][domicilios.telefono3])});
			
			datos['productos']=JSON.stringify({	
						numero_operacion: transform_number(excel[i][productos.numero_operacion]),		
						producto: excel[i][productos.producto],
						fecha_deuda: transform_fecha (excel[i][productos.fecha_deuda]),
						fecha_mora: transform_fecha (excel[i][productos.fecha_mora]),
            deuda: transform_money(excel[i][productos.deuda]),
            dolar: dolar,
						fecha_ult_cobro: 0,
						pase_legales: 0,
						estado: $("#estado").children(":selected").attr("id"),
						sub_estado: 1,
						banco: $("#banco").children(":selected").attr("id"),
						nombre_producto: excel[i][productos.producto],
						tipo_gestion: 0});

			datos['proceso']=i;
			$.ajax({
					url:'php/agregar.php',
					type:'post',
					data:datos,
					success: function (res){//res=JSON.parse(res);
											var progress= res * 100 / excel.length; 
											$("#progreso").css('width', progress+'%');
											$(".satisfaction").html(res+'/'+excel.length);
											}			
			});
			}
    }
});
var carpeta={}, deudores={}, domicilios={}, productos={}, names, excel;

var dolar=0;
function cambiar (q,a){
	$("#"+q).css("display","none");$("#"+a).css("display","inline-block");
	if(q=='dolares'){
		dolar=0;
	}else{
		dolar=1;
	}
}
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
var exporte, mostrar, campitos;
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
      campitos = campos(mostrar.sheet1);
	for (var i in campitos){
		$(".lista").append("<option>"+campitos[i]+"</option>");
		}
    }
    reader.readAsBinaryString(f);
  }
  $.ajax({
		url:'php/bancos.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#banco").html('<option></option>');
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
                $("#estado").val('PREJUDICIALES');
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
  setTimeout(function(){asignar();});
}

document.getElementById('archivo').addEventListener('change', handleFile, false);

function asignar(){
  $("#caratula").val("CARATULA");
  $("#comentario").val("COMENTARIO");
  $("#sucursal").val("SUCURSAL");
  $("#legajo").val("LEGAJO");
  $("#numero_gestion").val("GESTION");

  $("#documento").val("DOCUMENTO");
  $("#tipo_documento").val("TIPO_DOCUMENTO");
  $("#apellido").val("APELLIDO");
  $("#email").val("EMAIL");
  $("#empresa").val("EMPRESA");

  $("#direccion_particular").val("DIR_PARTICULAR1");
  $("#direccion_particular2").val("DIR_PARTICULAR2");
  $("#direccion_particular3").val("DIR_PARTICULAR3");
  $("#direccion_laboral").val("DIR_LABORAL");
  $("#direccion_laboral2").val("DIR_LABORAL2");
  $("#provincia").val("PROVINCIA");
  $("#localidad").val("LOCALIDAD");
  $("#codigo_postal").val("CODIGO_POSTAL");
  $("#telefono1").val("TELEFONO1");
  $("#telefono2").val("TELEFONO2");
  $("#telefono3").val("TELEFONO3");

  $("#numero_operacion").val("OPERACION");
  $("#producto").val("PRODUCTO");
  $("#deuda").val("DEUDA");
  $("#fecha_deuda").val("INGRESO");
  $("#fecha_mora").val("MORA");
}

function transform_fecha (str){
    
    if(str != undefined){
    str = str.split("/");
    return str[2]+'-'+str[1]+'-'+str[0];
    }else{
    return hoy;
    }
}

function transform_money (str){
	str = str.replace(",", ".");
	return parseFloat(str);
}

function transform_number (str){
    
    if(str != undefined){
    
    str = str.replace(/[^0-9]+/g, "");
    return parseFloat(str);
    }else{
    return 0;
    }
}

function campos (array){
	var keys=[];
	for (var i in array){
 		for (var key in array[i]) {
 			if(keys.indexOf(key)==-1){
     			keys.push(key);
     }
 	}
 }
 return keys;
}

function sacar011 (string){
  if(string!=undefined){
  string=string.replace(/[^0-9.]/g, "");
  if(string[0]=='0' && string[1] == '1' && string[2] == '1'){
    string=string.slice(3);
  }
  return string;
  }

}



$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
document.addEventListener('dragover',function(event){
    event.preventDefault();
    return false;
  },false);

  document.addEventListener('drop',function(event){
    event.preventDefault();
    return false;
  },false);

  const remote = require('electron').remote;
var resize = remote.require('./main').resize;
resize(800,400);
</script>
</html>
