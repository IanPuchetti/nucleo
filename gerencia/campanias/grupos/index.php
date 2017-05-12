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
    
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#actuales').css('display','block');" style="cursor:pointer;">Actuales</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#nuevo').css('display','block');" style="cursor:pointer;">Nuevo</a></li>

      </ul>
    
     <div class="panel panel-primary ocultar" id="nuevo" style="display:none;">
	<div class="panel-heading"><h3 class="panel-title">Crear grupo</h3></div>
<div class="panel-body">
	<div class="form-group">
    	<div class="row" style="font-size:13px;">
    	<div clasS="col-md-6">
  		<label for="nombre">Nombre del grupo</label>
  		<input type="text" id="nombre" placeholder="Nombre del grupo..." class="form-control">
  		<label for="descripcion">Descripción</label>
  		<input type="text" id="descripcion" placeholder="Descripcion.." class="form-control">
  		<br>
  		<label for="operador_nueva">Operador</label>
  		<br>
  		<select id="operador_nueva" class="btn btn-info">
		</select>
		<button id="agregar_operador" class="btn btn-default">Agregar operador</button>
		<script>
		var lista_operadores = [];
		$.ajax({
					url:'php/usuarios.php',
					type:'post',
					success: function (res){
							res=JSON.parse(res);
							for (var i in res){
							
							$("#operador_nueva").append("<option id='"+res[i].id+"'>"+res[i].user+"</option>");
							}
					}
		});
		
		$("#agregar_operador").click(function () {
		if(lista_operadores.indexOf($("#operador_nueva").children(":selected").attr("id")) > -1){
		}else{
		
		lista_operadores.push($("#operador_nueva").children(":selected").attr("id"));
		$("#operadores").append('<tr id="t_'+$("#operador_nueva").children(":selected").attr("id")+'"><td>'+$("#operador_nueva").val()+'</td><td style="color:red" onclick=remover("'+$("#operador_nueva").children(":selected").attr("id")+'")>eliminar</td></tr>');
		}
		});
		
		
		function remover (elemento){
		$("#t_"+elemento).remove();
		lista_operadores.splice(lista_operadores.indexOf(elemento), 1);
		}
		</script>
  		</div>
  		<div class="col-md-6">
  		<table class="table table-condensed">
  		<thead>
  		<th>Operadores</th>
  		<tbody id="operadores">
  		</tbody>
  		</thead>
  		</table>
  		</div></div></div>
  		</div>
  		<div style="text-align:center;">
  		<button class="btn btn-primary" id="crear_grupo">Crear grupo</button><br><br>
  		<script>
  		$("#crear_grupo").click(function(){
  						var datos={ 	nombre: $("#nombre").val(),
  									descripcion: $("#descripcion").val(),
  									usuarios: JSON.stringify(lista_operadores)
  						};
  						
  						$.ajax({
  									url: 'php/crear_grupo.php',
  									data: datos,
  									type: 'post',
  									success: function (res){
  																alert(res);
                                  location.reload();
  									}
  						});
  		});
  		</script>
  		</div>
  		</div>
  		
  		
  		<div class="panel panel-primary ocultar" id="actuales">
	<div class="panel-heading"><h3 class="panel-title">Grupos actuales</h3></div>
		<div id="accordion" class="panel-group panel-body">
		
  		</div>
  		<script>
  		var seccion=0;  		
  		$.ajax({
  				url:'php/grupos.php',
  				type:'post',
  				success: function (res){
  									 res=JSON.parse(res);
  									 for (var i in res){
  									 seccion=res[i].id;
									 $("#accordion").append('<div  class="panel panel-default"><div class="panel-heading titulo" data-toggle="collapse" data-parent="#accordion" href="#collapse'+res[i].id+'" style="cursor:pointer;"><h4 class="panel-title" style="text-align:left;">'+res[i].nombre+'</h4></div><div id="collapse'+res[i].id+'" class="panel-collapse collapse"><div class="panel-body"><table class="table table-condensed" style="font-size:13px;"><thead><th>Usuario</th></thead><tbody id="grupo'+res[i].id+'" ></tbody></table></div></div></div>');
									traerinfo(seccion, documentos);
									}
									}
  				}
  		);
  		
  		function traerinfo (numero){
  											$.ajax({
											url:'php/grupos_usuarios.php',
											type:'post',
											data: {id: numero},
											success: function (response){
																	response=JSON.parse(response);
																	for(var e in response){
																	$("#grupo"+numero).append('<tr id="user'+numero+'"><td>'+response[e].user+'</td><td style="color:red;cursor:pointer;" id="eliminar_usuario'+numero+'" onclick="eliminar_usuario(this, '+response[e].id_usuario+')">Eliminar</td></tr>');
																	}
                                  $("#grupo"+numero).append('<tr><td style="text-align:center;"><select id="usuarios_'+numero+'" class="usuarios btn btn-default"></select><button class="btn btn-danger" id="agregar_'+numero+'" onclick="agregar_grupo(this)">Agregar</button></td></tr>');
                                  $("#grupo"+numero).append('<tr><td style="text-align:center;"><button class="btn btn-danger" id="eliminar_'+numero+'" onclick="eliminar_grupo(this)">Eliminar grupo</button></td></tr>');
                                  $.ajax({
          url:'php/usuarios.php',
          type:'post',
          success: function (res){
              res=JSON.parse(res);
              for (var i in res){
              
              $("#usuarios_"+numero).append("<option id='"+res[i].id+"'>"+res[i].user+"</option>");
              }
          }
    });
                      }
									});
  		}
  		
  		function eliminar_grupo (elemento){
  											var id = $(elemento).attr('id').replace('eliminar_', '');
  											$.ajax({
  													url:'php/eliminar_grupo.php',
  													type:'post',
  													data: {id : id},
  													success: function (res){alert(res);location.reload();}
  											});
  		}
  		
  		function eliminar_usuario (elemento, id_usuario){
                        var id = $(elemento).attr('id').replace('eliminar_usuario', '');
                        $.ajax({
                            url:'php/eliminar_usuario.php',
                            type:'post',
                            data: {id_usuario : id_usuario,
                                 id_grupo : id},
                            success: function (res){alert(res);$("#user"+id_usuario).remove()}
                        });
      }

      function agregar_grupo (elemento){
                        var id = $(elemento).attr('id').replace('agregar_', '');
                        var id_usuario = $("#usuarios_"+id).children(":selected").attr("id");
                        $.ajax({
                            url:'php/agregar_usuario.php',
                            type:'post',
                            data: {id_usuario : id_usuario,
                                 id_grupo : id},
                            success: function (res){alert(res);location.reload();}
                        });
      }
  		</script>
    </div>
  </body>
<script>


var documentos;

</script>
</html>
