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
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>

<style>
.navbar-static-top{
margin-top:-40px;
}

a{
cursor:pointer;
color:#b00;
}

a:hover{
color:#700;
}

</style>


  </head>

  <body>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/inicio">Inicio</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campañas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/campanias/ver">Ver</a></li>
                <li><a href="/gerencia/campanias/generar">Generar</a></li>
                <li><a href="/gerencia/campanias/grupos">Grupos</a></li>              
              </ul></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/panel/gestiones">Gestiones</a></li>
                <li><a href="/gerencia/panel/estadisticas">Estadisticas</a></li>          
              </ul>
        </li>      
        
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/gerencia/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación Masiva</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/modificacion/productos">Productos</a></li>
                  <li><a tabindex="-1" href="/gerencia/modificacion/deudores">Deudores</a></li>
                </ul>
              </li>
              <li><a class="ventana" href="/gerencia/baja/">Cambio de Estado</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/gerencia/carga/enriquecer">Telefonos / Emails</a></li>
                  <li><a href="/gerencia/carga/reportes">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Gestión de Cobranzas<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/gestion-de-cobranzas/manual">Manual</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/campania">Campaña</a></li>
              <li><a href="#">Automática</a></li>  
              <li><a href="/gerencia/gestion-de-cobranzas/consultas">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cargar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/carga/gestiones-automaticas">Gestiones Automáticas</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Exporte<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/exportar/casos">Casos</a></li>
              <li><a href="/gerencia/exportar/telefonos">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/exportar/sms">SMS</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails">Mails</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails">IVR</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Informes</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/exportar/propuestas">Propuestas</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/cuotas_cero">Cuotas Cero</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/administracion/responsables">Responsables</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">ABMS</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/usuarios">Operadores</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/bancos">Bancos</a></li>
                  <!--<li><a tabindex="-1" href="/gerencia/administracion/abms/estados">Estados</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/sub-estados">Sub Estados</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/calificaciones">Calificaciones</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/motivos">Motivos</a></li>-->
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/liquidadores">Liquidadores</a></li>
                </ul>
              </li>
        </ul>
        </li>
      <ul class="nav navbar-nav navbar-right">
        <li id="logout"><a href="/.php/logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
<div>
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#carpeta').css('display','block');">Carpeta</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#deudores').css('display','block');">Deudor</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#domicilios').css('display','block');">Domicilios</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#productos').css('display','block');">Productos</a></li>
      </ul>

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
