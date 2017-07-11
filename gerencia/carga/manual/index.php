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

select{
  background: none;
  border:0px;
  width:100px;
}
select:hover, select:focus, select:active, select:checked{
  background: white !important;
}

.selector{
  padding:5px;border-radius:5px;border:1px solid #ddd;
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
<div>
      <div class="selector">
        <a onclick="$('.ocultar').css('display','none');$('#carpeta').css('display','inline-block');">Carpeta</a>
        <a onclick="$('.ocultar').css('display','none');$('#deudores').css('display','inline-block');">Deudor</a>
        <a onclick="$('.ocultar').css('display','none');$('#domicilios').css('display','inline-block');">Domicilios</a>
        <a onclick="$('.ocultar').css('display','none');$('#productos').css('display','inline-block');">Productos</a>
      </div>

	<div id="carpeta" class="ocultar">
		<div class="row">
			<div class="col-md-6">
<div class="form-group">
                <label for="caratula">Caratula</label>
                <input type="text" class="form-control" id="caratula" placeholder="Caratula...">	
	</div>
<div class="form-group">
                <label for="comentario">Comentario</label>
                <input type="text" class="form-control" id="comentario" placeholder="Comentario...">	
	</div>
	<div class="form-group">
                <label for="sucursal">Sucursal</label>
                <input type="text" class="form-control" id="sucursal" placeholder="Sucursal...">	
	</div>
	<div class="form-group">
                <label for="dias_adic">Días adicionales</label>
                <input type="text" class="form-control" id="dias_adic" placeholder="Días adicionales...">	
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
                <label for="legajo">Legajo</label>
                <input type="number" class="form-control" id="legajo" placeholder="Legajo...">	
   	</div>
	<div class="form-group">
                <label for="numero_gestion">Número de gestión</label>
                <input type="number" class="form-control" id="numero_gestion" placeholder="Número de gestión...">	
                	</div>         
	<div class="form-group">
                <label for="numero_lote">Número de lote</label>
                <input type="number" class="form-control" id="numero_lote" placeholder="Número de lote...">	

	</div>
		</div>
		</div>
	
</div>
	<div id="deudores" class="ocultar" style="display:none;">
            <div class="row">
			<div class="col-md-6">
<div class="form-group">
                <label for="documento">Documento</label>
                <input type="number" class="form-control" id="documento" placeholder="Documento...">	
	</div>
<div class="form-group">
                <label for="tipo_documento">Tipo de documento</label>
                <input type="text" class="form-control" id="tipo_documento" placeholder="Tipo de documento...">	
	</div>
	<div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido...">	
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email...">	
   	</div>
	<div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" class="form-control" id="empresa" placeholder="Empresa...">	
    </div>
		</div>
		</div>
	</div>
	<div id="domicilios" class="ocultar" style="display:none;">
	            <div class="row">
			<div class="col-md-6">
<div class="form-group">
                <label for="direccion_laboral1">Dirección Laboral 1</label>
                <input type="text" class="form-control" id="direccion_laboral" placeholder="Dirección laboral 1...">	
	</div>
	<div class="form-group">
                <label for="direccion_laboral2">Dirección Laboral 2</label>
                <input type="text" class="form-control" id="direccion_laboral2" placeholder="Dirección laboral 1...">	
	</div><hr>
	<div class="form-group">
                <label for="direccion_particular1">Dirección Particular 1</label>
                <input type="text" class="form-control" id="direccion_particular" placeholder="Dirección particular 1...">	
	</div>
	<div class="form-group">
                <label for="direccion_particular2">Dirección Particular 2</label>
                <input type="text" class="form-control" id="direccion_particular2" placeholder="Dirección particular 2...">	
	</div>
	<div class="form-group">
                <label for="direccion_particular3">Dirección Particular 3</label>
                <input type="text" class="form-control" id="direccion_particular3" placeholder="Dirección particular 2...">	
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
                <label for="provincia">Provincia</label>
                <input type="text" class="form-control" id="provincia" placeholder="Provincia...">	
   	</div>
	<div class="form-group">
                <label for="localidad">Localidad</label>
                <input type="text" class="form-control" id="localidad" placeholder="Localidad...">	
    </div>
    	<div class="form-group">
                <label for="codigo_postal">Código postal</label>
                <input type="number" class="form-control" id="codigo_postal" placeholder="Código postal...">	
    </div><hr>
    	<div class="form-group">
                <label for="telefono1">Telefono 1</label>
                <input type="number" class="form-control" id="telefono1" placeholder="Teléfono 1...">	
    </div>
        	<div class="form-group">
                <label for="telefono2">Telefono 2</label>
                <input type="number" class="form-control" id="telefono2" placeholder="Teléfono 2...">	
    </div>
        	<div class="form-group">
                <label for="telefono3">Telefono 3</label>
                <input type="number" class="form-control" id="telefono3" placeholder="Teléfono 3...">	
    </div>
    
		</div>
		</div>
	</div>
	<div id="productos" class="ocultar" style="display:none;">
	
	<div class="row">
			<div class="col-md-6">
			
			
			<div class="form-group">
                <label for="numero_operacion">Numero de operacion</label>
                <input type="text" class="form-control" id="numero_operacion" placeholder="Numero de operacion...">	
			</div>
			
<div class="form-group">
                <label for="producto">Producto</label>
                <input type="text" class="form-control" id="producto" placeholder="Producto...">	
	</div>
	
	<div class="form-group">
                <label for="deuda">Deuda</label>
                <input type="number" class="form-control" id="deuda" placeholder="Deuda...">	
	</div>
<div class="form-group">
                <label for="fecha_deuda">Fecha de deuda</label>
                <input type="date" class="form-control" id="fecha_deuda" placeholder="Fecha de deuda...">	
	</div>
	<div class="form-group">
                <label for="fecha_mora">Fecha de mora</label>
                <input type="date" class="form-control" id="fecha_mora" placeholder="Fecha de mora...">	
	</div>
	<div class="form-group">
                <label for="fecha_ult_cobro">Fecha ultimo cobro</label>
                <input type="date" class="form-control" id="fecha_ult_cobro" placeholder="Fecha ultimo cobro...">	
	</div>
	</div>
	<div class="col-md-6">

	<div class="form-group">
                <label for="estado">Estado</label>
                <select type="text" class="form-control" id="estado"></select>	
                <script>
                $.ajax({
		url:'php/estados.php',
		type:'post',
		success: function (res){			res=JSON.parse(res);
								$("#estado").html('');
								for (var i in res){
								$("#estado").append("<option id='"+res[i].id+"'>"+res[i].estado+"</option>");
								}
								}
						});
                </script>
    </div>
    	<div class="form-group">
                <label for="estado">Sub estado</label>
                <select type="text" class="form-control" id="sub_estado"></select>	
                <script>
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
                </script>
    </div>
    	<div class="form-group">
                <label for="banco">Banco</label>
                <select class="form-control" id="banco" >	</select>
                <script>
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
   	<div class="form-group">
                <label for="nombre_producto">Nombre del producto</label>
                <input type="text" class="form-control" id="nombre_producto" placeholder="Nombre del producto...">
   	</div>
   	<div class="form-group">
                <label for="tipo_gestion">Tipo de gestión</label>
                <input type="number" class="form-control" id="tipo_gestion" placeholder="Tipo de gestión...">
   	</div>
		</div>
		</div>
	
	</div>
	
</div>
<br>
	    <div style="text-align:center"> 
            <button class="btn btn-danger" id="registrar">Registrar</button>
			<script>
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
						telefono1: $("#telefono1").val(),
						telefono2: $("#telefono2").val(),
						telefono3: $("#telefono3").val()});
			datos['productos']=JSON.stringify({		
						numero_operacion: $("#numero_operacion").val(),	
						producto: $("#producto").val(),
						deuda: $("#deuda").val(),						
						fecha_deuda: $("#fecha_deuda").val(),
						fecha_mora: $("#fecha_mora").val(),
						fecha_ult_cobro: $("#fecha_ult_cobro").val(),	
						pase_legales: $("#pase_legales").val(),
						estado: $("#estado").children(":selected").attr("id"),
						sub_estado: $("#sub_estado").children(":selected").attr("id"),
						banco: $("#banco").children(":selected").attr("id"),
						nombre_producto: $("#nombre_producto").val(),
						tipo_gestion: $("#tipo_gestion").val()
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
			</script>
</div>
       </div>

    </div>
  </body>
</html>
