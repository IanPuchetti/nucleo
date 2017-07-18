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
  <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
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

.panel, .panel-heading{
  background: #fff !important;
  border-color:#ddd !important;
  color:#666 !important;
}



.inp{border:0px;border-bottom:1px solid #ddd;font-size:12px;margin:5px;}
.inp:focus{border-bottom:1px solid #496;}

.plus{cursor: pointer;}
.plus:hover{
  background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

table{font-size:12px;}
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="exporte" ng-controller="filtro" class="noselect">
    <div class="bar drag">
    </div>
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
    <div >
    
    <div style="position:absolute;left:0px;width:100px;height:400px;text-align:center;font-weight:100;" class="back-gr">
        <div style="padding:10px;color:white;cursor:pointer;" onclick="$('.ocultar').css('display','none');$('#actuales').css('display','block');" style="cursor:pointer;">Actuales</div>
        <div style="padding:10px;color:white;cursor:pointer;" onclick="$('.ocultar').css('display','none');$('#nuevo').css('display','block');" style="cursor:pointer;">Nuevo</div>
      </div>
    <div style="position:absolute;left:100px;width:600px;overflow-y:auto;height:400px;">
     <div class="panel panel-primary ocultar" id="nuevo" style="display:none;margin:25px;">
	<div class="panel-heading"><h3 class="panel-title">Crear grupo</h3></div>
<div class="panel-body">
	<div class="form-group">
    	<div class="row" style="font-size:13px;">
    	<div clasS="col-md-6">
        <div>
  		<input type="text" id="nombre" placeholder="Nombre del grupo..." class="inp">
    </div>
    <div>
  		<input type="text" id="descripcion" placeholder="Descripcion.." class="inp">
    </div>
    <div style="padding:50px 25px 25px 25px;">
      <button class="butn" id="crear_grupo" style="position:absolute;left:25px;">Crear grupo</button>
    </div>
    <div style="position:absolute;left:300px;top:0px;">
  		<span for="operador_nueva">Agregar operador</span>: <select id="operador_nueva" style="border:0px;">
		</select>
		<span id="agregar_operador" style="font-size:18px;" class="plus">+</span>
  
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
  		<div style="height:130px;overflow-y:auto;">
  		<table class="table table-condensed">
  		<tbody id="operadores">
  		</tbody>
  		</thead>
  		</table>
  		</div>
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
    </div></div></div></div>
  		<div class="panel panel-primary ocultar" id="actuales" style="margin:25px;">
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
									 $("#accordion").append('<div  class="panel panel-default"><div class="panel-heading titulo" data-toggle="collapse" data-parent="#accordion" href="#collapse'+res[i].id+'" style="cursor:pointer;"><h4 class="panel-title" style="text-align:left;">'+res[i].nombre+'</h4></div><div id="collapse'+res[i].id+'" class="panel-collapse collapse"><div class="panel-body" id="body'+res[i].id+'"><table class="table table-condensed" style="font-size:12px;width:50%;float:left;"><tbody id="grupo'+res[i].id+'" ></tbody></table></div></div></div>');
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
                                  $("#body"+numero).append('<div style="float:right;margin-top:-20px;width:49%;"><div style="margin:20px;">Agregar operador: <select id="usuarios_'+numero+'"  style="border:0px;"></select><span class="plus" id="agregar_'+numero+'" onclick="agregar_grupo(this)" style="font-size:18px;">+</span></div><div style="text-align:center;"><span class="butn" id="eliminar_'+numero+'" onclick="eliminar_grupo(this)">Eliminar grupo</button></div></div>');
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
  </div>
  </body>
<script>


var documentos;

</script>
</html>
