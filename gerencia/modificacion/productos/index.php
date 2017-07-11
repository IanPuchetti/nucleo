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
	<link href="/.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jsontable.js"></script>
	<script src="js/xlsx.js" type="text/javascript"></script>
<style>
option, select{
font-size:13px;
max-width:150px;
}

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
<div class="row">
<div class="col-md-6">
	<div class="jumbotron text-center">
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
