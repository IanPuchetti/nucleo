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
  padding:5px;border-radius:5px;border:1px solid #ddd;
  margin:auto;
  width:400px;
  text-align:center;
  margin-top:10px;
}

.selector a{
  padding:5px 10px 5px 10px;
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
  display:block;
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

  <body oncontextmenu="return false;">
    <div class="bar drag">
    </div>
<div class="header noselect" style="">
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
<div class="selector noselect">
        <a onclick="$('.ocultar').css('display','none');$('#carpeta').css('display','block');">Carpeta</a>
        <a onclick="$('.ocultar').css('display','none');$('#deudores').css('display','block');">Deudor</a>
        <a onclick="$('.ocultar').css('display','none');$('#domicilios').css('display','block');">Domicilios</a>
        <a onclick="$('.ocultar').css('display','none');$('#productos').css('display','block');">Productos</a>
</div>
    <div style="height:300px;overflow-y:auto;">
<div>

	<div id="carpeta" class="ocultar">
    <div style="margin-top:25px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Caratula" data-placement="bottom"><img src="/.img/reporte.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="caratula" placeholder="Caratula..."></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Comentario" data-placement="bottom"><img src="/.img/comentario.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="comentario" placeholder="Comentario..."></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Sucursal" data-placement="bottom"><img src="/.img/empresa.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="sucursal" placeholder="Sucursal..."></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Legajo" data-placement="bottom"><img src="/.img/id-card.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="legajo" placeholder="Legajo..."></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Numero de gestión" data-placement="bottom"><img src="/.img/gestor.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="numero_gestion" placeholder="Numero de gestión..."></span>
          </span>
      </div>
</div>
	<div id="deudores" class="ocultar" style="display:none;">

			<div style="margin-top:25px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Documento" data-placement="bottom"><img src="/.img/id-card.png" style="width:14px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="documento" placeholder="Numero de documento..."></span>
        	</span>
  		</div>
  		<div style="margin-top:10px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Tipo de documento" data-placement="bottom"><img src="/.img/id-card.png" style="width:17px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="tipo_documento" placeholder="Tipo de doumento..."></span>
        	</span>
  		</div>
  		<div style="margin-top:10px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Apellido y nombre" data-placement="bottom"><img src="/.img/deudor.png" style="width:17px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="apellido" placeholder="Apellido y nombre..."></span>
        	</span>
  		</div>
  		<div style="margin-top:10px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Correo electrónico" data-placement="bottom" class="color-gr">@</span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="email" placeholder="Correo electrónico..."></span>
        	</span>
  		</div>
  		<div style="margin-top:10px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Empresa" data-placement="bottom"><img src="/.img/empresa.png" style="width:17px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="empresa" placeholder="Empresa..."></span>
        	</span>
  		</div>
	</div>
	<div id="domicilios" class="ocultar" style="display:none;">
<div style="position:absolute;left:20px;width:250px;">
<div style="margin-top:25px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Dirección particular" data-placement="bottom"><img src="/.img/home.png" style="width:14px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="direccion_particular" placeholder="Dirección particular..."></span>
        	</span>
  		</div>

  		<div style="margin-top:10px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Dirección particular 2" data-placement="bottom"><img src="/.img/home.png" style="width:14px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="direccion_particular2" placeholder="Dirección particular..."></span>
        	</span>
  		</div>

  		<div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Dirección particular 3" data-placement="bottom"><img src="/.img/home.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="direccion_particular3" placeholder="Dirección particular..."></span>
          </span>
      </div> 

      <div style="margin-top:25px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Dirección laboral" data-placement="bottom"><img src="/.img/empresa.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="direccion_laboral" placeholder="Dirección laboral..."></span>
          </span>
      </div> 

      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Dirección laboral 2" data-placement="bottom"><img src="/.img/empresa.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="direccion_laboral2" placeholder="Dirección laboral..."></span>
          </span>
      </div> 

    </div>
    <div style="position:absolute;left:250px;width:250px;margin-top:15px;">
  		<div style="margin-top:10px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Provincia" data-placement="bottom" class="color-gr"><img src="/.img/ubicacion.png" style="width:15px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="provincia" placeholder="Provincia..."></span>
        	</span>
  		</div>
  		<div style="margin-top:10px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Localidad" data-placement="bottom" class="color-gr"><img src="/.img/ubicacion.png" style="width:15px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="localidad" placeholder="Localidad..."></span>
        	</span>
  		</div>
  		<div style="margin-top:10px;text-align:center;">
        	<span class="button noselect">
          		<span data-toggle="tooltip" title="Codigo postal" data-placement="bottom" class="color-gr"><img src="/.img/ubicacion.png" style="width:15px;height:15px;margin-left:2px;"></span>
        		<span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="codigo_postal" placeholder="Código postal..."></span>
        	</span>
  		</div>
      <div style="margin-top:25px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Telefono 1" data-placement="bottom"><img src="/.img/phone.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="telefono1" placeholder="Telefono 1..."></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Telefono 2" data-placement="bottom"><img src="/.img/phone.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="telefono2" placeholder="Telefono 2..."></span>
          </span>
      </div><div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Telefono 3" data-placement="bottom"><img src="/.img/phone.png" style="width:14px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="telefono3" placeholder="Telefono 3..."></span>
          </span>
      </div>
</div>

	</div>

      
	<div id="productos" class="ocultar" style="display:none;">
	    <div style="margin-top:25px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Numero de operación" data-placement="bottom" class="color-gr"><img src="/.img/reporte.png" style="width:13px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="numero_operacion" placeholder="Numero de operacion..."></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Producto" data-placement="bottom" class="color-gr"><img src="/.img/productos.png" style="width:17px;height:12px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="producto" placeholder="Producto..."></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Deuda en pesos" data-placement="bottom" class="color-gr" style="padding-left:5px;padding-right:5px;" id="pesos" onclick="cambiar('pesos','dolares')">$</span>
              <span span data-toggle="tooltip" title="Deuda en dolares" data-placement="bottom" class="color-gr" style="padding-left:5px;padding-right:5px;font-size:12px;display:none;" id="dolares"
 onclick="cambiar('dolares','pesos')" >U$D</span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="text" id="deuda" placeholder="Monto de deuda..."></span>
          </span>
          <span id="moneda" style="display:none;position:absolute;margin-top:3px;font-size:10px;margin-left:5px;" class="color-gr">¿<a href="#" onclick="cambiar('pesos','dolares')">Dólares</a> o <a href="#"  onclick="cambiar('dolares','pesos')">pesos</a>?</span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Fecha de ingreso" data-placement="bottom" class="color-gr" style="font-size:10px;"><img src="/.img/agenda.png" style="width:17px;height:15px;margin-left:2px;"> Ingreso</span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="date" id="fecha_deuda" placeholder="Fecha de ingreso..." style="width:140px;"></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Fecha de mora" data-placement="bottom" class="color-gr" style="font-size:10px;"><img src="/.img/agenda.png" style="width:17px;height:15px;margin-left:2px;"> Mora</span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><input type="date" id="fecha_mora" placeholder="Fecha de mora..." style="width:150px;"></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Estado" data-placement="bottom" class="color-gr" style="font-size:10px;"><img src="/.img/estado.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select id="estado"></select></span>
          </span>
      </div>
      <div style="margin-top:10px;text-align:center;">
          <span class="button noselect">
              <span data-toggle="tooltip" title="Banco" data-placement="bottom" class="color-gr" style="font-size:10px;"><img src="/.img/bank.png" style="width:17px;height:15px;margin-left:2px;"></span>
            <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"><select id="banco" > </select></span>
          </span>
      </div>
                <script>

                $('#deuda').focus( function() {
  $("#moneda").css('display','inline-block');
});

$('#deuda').blur( function() {
  setTimeout(function(){$("#moneda").css('display','none')});;
});
                $.ajax({
		url:'php/estados.php',
		type:'post',
		success: function (res){			res=JSON.parse(res);
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
		success: function (res){			res=JSON.parse(res);
								$("#sub_estado").html('');
								for (var i in res){
								$("#sub_estado").append("<option id='"+res[i].id+"'>"+res[i].sub_estado+"</option>");
								}
								}
						});
                
                $.ajax({
		url:'php/bancos.php',
		type:'post',
		success: function (rese){rese=JSON.parse(rese);
								$("#banco").html('');
								for (var i in rese){
								$("#banco").append("<option id='"+rese[i].cbanco+"'>"+rese[i].dbanco+"</option>");
								}
								}
						});
                </script>
		</div>
	
	</div>
	
</div>
<br>

      <span class="butn" id="registrar">
        Registrar
      </span>
	    <div style="text-align:center"> 
			<script>
			var dolar=0;
function cambiar (q,a){
	$("#"+q).css("display","none");$("#"+a).css("display","inline-block");
	if(q=='dolares'){
		dolar=0;
	}else{
		dolar=1;
	}
}
			var datos={};
			$("#registrar").click(function(){
			datos['carpeta']=JSON.stringify({
						caratula: $("#caratula").val(),
						comentario: $("#comentario").val(),
						sucursal: $("#sucursal").val(),
						dias_adic: $("#dias_adic").val(),
						legajo: $("#legajo").val(),
						numero_gestion: $("#numero_gestion").val(),
						numero_lote: $("#numero_lote").val()});
			datos['deudor']=JSON.stringify({			
						documento: $("#documento").val(),
						tipo_documento: $("#tipo_documento").val(),
						apellido: $("#apellido").val(),
						email: $("#email").val(),
						empresa: $("#empresa").val()});
			datos['domicilios']=JSON.stringify({			
						direccion_laboral: $("#direccion_laboral").val(),
						direccion_particular: $("#direccion_particular").val(),
						direccion_laboral2: $("#direccion_laboral2").val(),
						direccion_particular2: $("#direccion_particular2").val(),
						direccion_particular3: $("#direccion_particular3").val(),
						provincia: $("#provincia").val(),
						localidad: $("#localidad").val(),
						codigo_postal: $("#codigo_postal").val(),
						telefono1: $("#telefono1").val().replace(/[^0-9.]/g, ""),
						telefono2: $("#telefono2").val().replace(/[^0-9.]/g, ""),
						telefono3: $("#telefono3").val().replace(/[^0-9.]/g, "")});
			datos['productos']=JSON.stringify({		
						numero_operacion: $("#numero_operacion").val(),	
						producto: $("#producto").val(),
						deuda: $("#deuda").val(),
						dolar: dolar,						
						fecha_deuda: $("#fecha_deuda").val(),
						fecha_mora: $("#fecha_mora").val(),
						fecha_ult_cobro: 0,	
						pase_legales: 0,
						estado: $("#estado").children(":selected").attr("id"),
						sub_estado: 1,
						banco: $("#banco").children(":selected").attr("id"),
						nombre_producto: $("#producto").val(),
						tipo_gestion: 0
						});
			$.ajax({
					url:'php/agregar.php',
					type:'post',
					data:datos,
					success: function (res){//res=JSON.parse(res);
											alert(res);
											}
										});
			
			});

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
resize(500,375);
			</script>


</div>
       </div>

    </div>

  </body>
</html>
