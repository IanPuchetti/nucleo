<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../../../admin/");
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
<style>
.navbar-static-top{
margin-top:-40px;
}

.form-control{
font-size:12px;
height:30px;
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
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cambio de Estado</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/baja/busqueda">Filtro</a></li>
                  <li><a tabindex="-1" href="/gerencia/baja/xlsx">XLSX</a></li>
                </ul>
              </li>
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
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#rapida').css('display','block');$('#buscar_rapida').css('display','inline-block');">Rápida</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#compleja').css('display','block');$('#buscar_compleja').css('display','inline-block');">Compleja</a></li>
      </ul>
    
    <div class="panel panel-warning ocultar" id="rapida">
	<div class="panel-heading"><h3 class="panel-title">Búsqueda</h3></div>
	<div class="panel-body">
	<div class="form-group">
    	<div class="row" style="font-size:13px;">
    	<div clasS="col-md-6">
  		<label for="numero_documento_rapido">Numero de documento</label>
  		<input type="text" id="numero_documento_rapido" placeholder="Numero de documento.." class="form-control">
  		
  		<label for="apellido_rapido">Apellido</label>
  		<input type="text" id="apellido_rapido" placeholder="Apellido..." class="form-control">
  		
  		<label for="telefono_rapido">Telefono</label>
  		<input type="text" id="telefono_rapido" placeholder="Telefono..." class="form-control">
  		</div>
  		</div></div>
  		</div>
  		</div>
    
    
    	<div class="panel panel-warning ocultar" id="compleja" style="display:none;">
	<div class="panel-heading"><h3 class="panel-title">Búsqueda</h3></div>
	<div class="panel-body">
	<div class="form-group">
    	<div class="row" style="font-size:13px;">
    	<div clasS="col-md-6">
  		<label for="agenda">Agenda</label><br>
  		Desde<input type="date" id="agenda1" placeholder="Agenda..." class="form-control">
  		Hasta<input type="date" id="agenda2" placeholder="Agenda..." class="form-control">
  		<label for="numero_documento">Numero de documento</label><br>
  		Entre<input type="text" id="numero_documento1" placeholder="Numero de documento.." class="form-control">
  		Y<input type="text" id="numero_documento2" placeholder="Numero de documento.." class="form-control">
  		
  		
  		<label for="apellido">Apellido</label>
  		
  		<input type="text" id="apellido" placeholder="Apellido..." class="form-control">
  		
  		
  		<label for="banco">Banco</label>
  		
  		<select type="text" id="banco" class="form-control"></select>
  		
  		<script>
  		var documento_deudores=[];
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
  		</div>
  		
  		<div class="col-md-6">
    	
  		<label for="agenda">Tipo gestión</label>
  		
  		
  		<input type="number" id="tipo_gestion" placeholder="Tipo gestion..." class="form-control">
  		
  		
  		
  		<label for="fecha_ingreso1">Fecha ingreso</label><br>
  		Desde<input type="date" id="fecha_ingreso1" class="form-control">
  		Hasta<input type="date" id="fecha_ingreso2" class="form-control">
  		
  		
  		<label for="deuda">Monto de deuda</label><br>
  		
  		Entre <input type="number" id="deuda" placeholder="Monto de deuda..." class="form-control">
  		y <input type="number" id="deuda" placeholder="Monto de deuda..." class="form-control">
  		
  		
  		<label for="banco">Estado general</label>
  		<select type="text" id="estado_general" class="form-control"></select>
  		<script>
                $.ajax({
		url:'php/estados.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#estado_general").html('<option></option>');
								for (var i in res){
								$("#estado_general").append("<option id='"+res[i].id+"'>"+res[i].estado+"</option>");
								}
								}
						});
        </script>
  		
  		<label for="proxima_accion">Próxima acción</label>
  		
  		<select type="text" id="proxima_accion" class="form-control"></select>
  		  		<script>
                $.ajax({
		url:'php/proximas-acciones.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#proxima_accion").html('<option></option>');
								for (var i in res){
								$("#proxima_accion").append("<option id='"+res[i].id+"'>"+res[i].accion+"</option>");
								}
		}
		});
                </script>
  		</div></div></div>
  		</div>
  		</div>
  		<div style="text-align:center;"><button type="submit" class="btn btn-default ocultar" id="buscar_rapida">Buscar</button><button type="submit" class="btn btn-default ocultar" id="buscar_compleja" style="display:none;">Buscar</button></div><hr><hr>
  		<div class="panel panel-danger" id="oculto" style="display:none;">
	<div class="panel-heading"><h3 class="panel-title">Cambio de estado</h3></div>
	<div class="panel-body form-group">
		<h3>Seleccione el estado al que quiere cambiar 
		<select id="estado_nuevo" class="btn btn-primary"></select></h3>
		<script>
		        $.ajax({
		url:'php/estados.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#estado_nuevo").html('');
								for (var i in res){
								$("#estado_nuevo").append("<option id='"+res[i].id+"'>"+res[i].estado+"</option>");
								}
								}
						});
		</script><hr>
		<div>Escoja un motivo: <select id="motivo" class="btn btn-warning"><option id="1">Rotación de protocolo</option><option id="2">Por actuaciones</option></select> y deje un comentario:</div><br>
		<input class="form-control" type="text" placeholder="Comentario..." id="comentario">
		<h4>Luego, puede cambiar el estado individualmente desde la tabla o <button class="btn btn-danger" id="cambiar_todos">Cambiar todos</button></h4>
		<br>
		<label class="label label-success" id="progreso"></label>
  		</div>
  		</div>
  		<hr>
  		
  		<table class="table table-condensed" style="font-size:13px;">
  		<thead>
  			<th>Documento</th>
  			<th>Apellido</th>
  			<th>Estado</th>
  			<th>Banco</th>
  		</thead>
  		<tbody id="tabla">
  		</tbody>
  		</table>
    </div>
  </body>
<script>
var ultima_busqueda='';



var id_casos, documento_casos;
function verificar_vacio (element){
									if($(element).val()==''){
										return '%';
									}else{
										return $(element).val();
								  }
								  }


$("#buscar_compleja").click(function (){
$("#oculto").css("display", "block");
	id_casos=[];documento_casos=[];
	$("#tabla").html('');
	var datos={ agenda1: $("#agenda1").val(),
				agenda2: $("#agenda2").val(),
				documento1: $("#numero_documento1").val(),
				documento2: $("#numero_documento2").val(),
				apellido: $("#apellido").val(),
				banco: $("#banco").children(":selected").attr("id"),
				fecha_ingreso1: $("#fecha_ingreso1").val(),
				fecha_ingreso2: $("#fecha_ingreso2").val(),
				deuda1: $("#deuda1").val(),
				deuda2: $("#deuda2").val(),
				estado: $("#estado_general").children(":selected").attr("id"),
				proxima_accion: $("#proxima_accion").children(":selected").attr("id")
	};
	$.ajax({
	url:'php/buscar-complejo.php',
	type:'post',
	data:datos,
	success: function (res){res=JSON.parse(res);
							documento_deudores=[];
							for (var i in res){	documento_deudores.push(res[i].documento);
												$("#tabla").append('<tr><td>'+res[i].documento+'</td><td>'+res[i].apellido+'</td><td>'+res[i].estado+'</td><td>'+res[i].dbanco+'</td><td><button id="'+res[i].id+'-'+res[i].documento+'" class="btn btn-danger" onclick="cambiar_estado(this)">Cambiar estado</button></td></tr>');
												id_casos.push(res[i].id);
												documento_casos.push(res[i].documento);
											  }
							}
		   });
		   ultima_busqueda='compleja';
});

$("#buscar_rapida").click(function (){
$("#oculto").css("display", "block");
	id_casos=[];
	$("#tabla").html('');
	var datos={ documento: $("#numero_documento_rapido").val(),
				apellido: $("#apellido_rapido").val(),
				telefono: $("#telefono_rapido").val()
	};
	$.ajax({
	url:'php/buscar-rapido.php',
	type:'post',
	data:datos,
	success: function (res){res=JSON.parse(res);
							documento_deudores=[];
							for (var i in res){ documento_deudores.push(res[i].documento);
												$("#tabla").append('<tr><td>'+res[i].documento+'</td><td>'+res[i].apellido+'</td><td>'+res[i].estado+'</td><td>'+res[i].dbanco+'</td><td><button id="'+res[i].id+'-'+res[i].documento+'" class="btn btn-danger" onclick="cambiar_estado(this)">Cambiar estado</button></td></tr>');
												id_casos.push(res[i].id);
											  }
							}
		   });
		   ultima_busqueda='rapida';
});

$("#logout").click(function (){
$.ajax({
	url:'../../../.php/logout.php',
	type:'post',
	success:function(res){
if(res=='ok'){
$(location).attr('href', '../../../');
}
}
});
});
var fecha= new Date();
var dia= fecha.getFullYear()+'-'+fecha.getMonth()+'-'+fecha.getDate();
function cambiar_estado(elemento){
		var datos = { id : $(elemento).attr('id').split("-")[0],
					  estado_nuevo : $("#estado_nuevo").children(":selected").attr("id"),
					  progreso: 'none',
					  motivo:$("#motivo").children(":selected").attr("id"),
					  comentario:$("#comentario").val(),
					  documento_deudor: $(elemento).attr('id').split("-")[1],
					  fecha: dia
					  };
					  
		$.ajax({
					url:'php/cambiar_estado.php',
					type:'post',
					data: datos,
					success: function (res){
												alert(res);
												setTimeout(repetir, 500);
					}
		});
		
		
}
var progress=0, nro_casos=0;
$("#cambiar_todos").click(function(){
	progress=0;nro_casos=id_casos.length;
	for (var i in id_casos){
		var datos = { id : id_casos[i],
					  documento_deudor : documento_deudores[i],
					  estado_nuevo : $("#estado_nuevo").children(":selected").attr("id"),
					  progreso: progress,
					  documento_deudores: JSON.stringify(documento_deudores),
					  motivo:$("#motivo").children(":selected").attr("id"),
					  comentario:$("#comentario").val(),
					  fecha:dia
					  };
		cambiar_todos(datos);
	}
	alert('Modificados correctamente');setTimeout(repetir, 500);
	
});

function cambiar_todos(datos){
			$.ajax({
					url:'php/cambiar_estado.php',
					type:'post',
					data: datos,
					success: function (res){	
												
												setTimeout(function(){progress=progress+1;$("#progreso").html(progress+' de '+nro_casos+' modificadas');}, 100);
					}
		});
}

function repetir(){
if(ultima_busqueda=='compleja'){
	$("#buscar_compleja").click();
	}else{
	if(ultima_busqueda=='rapida'){
	$("#buscar_rapida").click();
	}
	}
}

</script>
</html>
