<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: /");
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
	<script type="text/javascript" src="/.js/script.js"></script>
	<script src="/.js/xlsx.js" type="text/javascript"></script>
	<script src="/.js/FileSaver.js" type="text/javascript"></script>
	<script src="/.js/Export2Excel.js" type="text/javascript"></script>
	<script src="/.js/jsontable.js" type="text/javascript"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}
body{
  background:#fff;
}
*, label, .btn{
  font-weight: 100;
}

.izquierda{
  position:absolute;
  left:0px;
  width:60%;
  margin-top:-20px;
  border-right:1px #eee solid;
}
.derecha{
  position:absolute;
  right:0px;
  width:40%;
  background: #fff;
  margin-top:-20px;
  border-left:1px #eee solid;
}

.derecha-fixed{
  position:absolute;
  width:50%;
  right:0px;
  z-index: -1;
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
  <div class="derecha">
	 <div class="form-group" style="width:90%;margin:auto;">
  		<label for="agenda">Agenda</label>
  		<input type="date" id="agenda" placeholder="Agenda..." class="form-control">
  		<label for="numero_documento">Numero de documento</label>
  		<input type="text" id="numero_documento" placeholder="Numero de documento.." class="form-control">
  		
  		<label for="apellido">Apellido</label>
  		
  		<input type="text" id="apellido" placeholder="Apellido..." class="form-control">
  		
  		
  		<label for="banco">Banco</label>
  		
  		<select type="text" id="banco" class="form-control"></select>
  		
  		<script>
                $.ajax({
		url:'php/bancos.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#banco").html('<option id="0"></option>');
								for (var i in res){
								$("#banco").append("<option id='"+res[i].cbanco+"'>"+res[i].dbanco+"</option>");
								}
		}
});
                </script>
  		<label for="responsable">Responsable</label>
  		
  		<input type="text" id="responsable" placeholder="Responsable..." class="form-control">
  	
    	
  		<label for="agenda">Tipo gestión</label>
  		
  		
  		<input type="number" id="tipo_gestion" placeholder="Tipo gestion..." class="form-control">
  		
  		
  		
  		<label for="fecha_ingreso">Fecha ingreso</label>
  		<input type="date" id="fecha_ingreso" class="form-control">
  		
  		
  		<label for="monto_deuda">Monto de deuda</label>
  		
  		<input type="number" id="monto_deuda" placeholder="Monto de deuda..." class="form-control">
  		
  		
  		<label for="banco">Estado general</label>
  		<select type="text" id="estado_general" class="form-control"></select>
  		<script>
                $.ajax({
		url:'php/estados.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#estado_general").html('');
								for (var i in res){
								$("#estado_general").append("<option id='"+res[i].id+"'>"+res[i].estado+"</option>");
								}
								}
						});
        </script>
  		
  		</div>
      <br>
      <div style="text-align:center;"><button type="submit" class="btn btn-default" id="buscar">Buscar</button></div>
  		</div>
      <div class="izquierda">
  		<div class="alert-success" role="alert" style="width:100%;height:50px;padding-top:10px;text-align:center;display:none;" id="ocultar">
      <input type="text" id="nombre_excel" placeholder="Nombre del excel..." class="btn" style="text-align:left;"><button class="btn btn-success" id="descargar_excel">Descargar</button></div>
      <div style="max-width:100%;height:500px;overflow:auto;">
      <table class="table table-condensed" style="font-size:13px;" id="tabla">      
      </table></div>
    </div>
  </div>
  </body>
<script>
function verificar_vacio (element){
									if($(element).val()==''){
										return '%';
									}else{
										return $(element).val();
								  } 
								  }

$("#buscar").click(function (){
	var datos={
				documento: $("#numero_documento").val(),
				apellido: $("#apellido").val(),
				banco: $("#banco").children(":selected").attr("id")
	};
	$.ajax({
	url:'php/buscar.php',
	type:'post',
	data:datos,
	success: function (res){res=JSON.parse(res);
							
							json_tabla('tabla', res);
							$("#ocultar").css("display", "block");
							}
		   });
});



function verdeudas (elemento){
		var _documento=$(elemento).attr('id');
		abrirVentana('deudas/?documento='+_documento);
}

function abrirVentana(url) {
    window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=400");
}

$("#descargar_excel").click(function(){
if( $("#nombre_excel").val() == ""){alert("Debe ponerle un nombre al archivo que descargará.");}else{
export_table_to_excel('tabla', $("#nombre_excel").val());
}
});

</script>
</html>
