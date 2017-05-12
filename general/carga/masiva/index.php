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
<nav class="navbar  navbar-static-top navbar-default">
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
        <li class="active"><a href="/inicio">Inicio</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Cobranzas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/general/gestion-de-cobranzas/manual">Manual</a></li>
                <li><a href="/general/gestion-de-cobranzas/campania">Campaña</a></li>   
                <li><a href="/general/gestion-de-cobranzas/consultas">Consultas</a></li>              
              </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/general/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/general/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/general/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/general/carga/enriquecer">Telefonos / Mails</a></li>
                  <li><a href="/general/carga/reportes">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exportar<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/general/exportar/casos">Casos</a></li> 
                <li><a href="/general/exportar/telefonos">Telefonos</a></li> 
              </ul>
              </li>      
        <li id="logout"><a href="/.php/logout.php">Salir</a></li>
      
    </div>
  </div>
</nav>

    <div class="container">
<div class="row">
<div class="col-md-6">
	<div class="jumbotron text-center">
  		<h2>Carga masiva</h2>
  		<p>Ingrese el archivo .xlsx para obtener los campos <button onclick="$('#archivo').click();$('#cargar-div').css('display','block');" id="boton" class="btn btn-danger btn-lg" role="button">Subir</button>
<input type="file" id="archivo" style="display:none;">
      </div></p>

	</div>
    
<div class="col-md-6">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#carpeta').css('display','inline-block');">Carpeta</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#deudores').css('display','inline-block');">Deudor</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#domicilios').css('display','inline-block');">Domicilios</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#productos').css('display','inline-block');">Productos</a></li>
      </ul>
	<table id="carpeta" class="ocultar"></table>
	<table id="deudores" class="ocultar" style="display:none;"></table>
	<table id="domicilios" class="ocultar" style="display:none;"></table>
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
  </body>
<script>
var date = new Date(); 
var hoy = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
var datos={};
$("#cargar").click(function(){
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
	var campo=document.getElementsByName('domicilios')[i].id;
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
						dias_adic: excel[i][carpeta.dias_adic],
						legajo: excel[i][carpeta.legajo],
						numero_gestion: excel[i][carpeta.numero_gestion],
						numero_lote: excel[i][carpeta.numero_lote]});

datos['deudor']=JSON.stringify({			
						documento: transform_number (excel[i][deudores.documento]),
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
						fecha_ult_cobro: transform_fecha (excel[i][productos.fecha_ult_cobro]),
						pase_legales: excel[i][productos.pase_legales],
						estado: $("#estado").children(":selected").attr("id"),
						sub_estado: $("#sub_estado").children(":selected").attr("id"),
						banco: $("#banco").children(":selected").attr("id"),
						nombre_producto: excel[i][productos.nombre_producto],
						tipo_gestion: excel[i][productos.tipo_gestion]});
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
});
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
	$("#domicilios").append('<tr><td>telefono1</td><td><select class="lista  btn-default" id="telefono1" name="domicilios"><option>nulo</option></select></td></tr>');
	$("#domicilios").append('<tr><td>telefono2</td><td><select class="lista  btn-default" id="telefono2" name="domicilios"><option>nulo</option></select></td></tr>');
	$("#domicilios").append('<tr><td>telefono3</td><td><select class="lista  btn-default" id="telefono3" name="domicilios"><option>nulo</option></select></td></tr>');
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
	$("#productos").append('<tr><td colspan="2"><button class="btn btn-default form-control" id="pesos" style="font-size:10px;" onclick="cambiar(\'pesos\',\'dolares\')">Deuda en pesos</button><button id="dolares" class="btn btn-default form-control" onclick="cambiar(\'dolares\',\'pesos\')" style="display:none;font-size:10px;" >Deuda en dolares</button></td></tr>');
	}
});
var dolar=0;
function cambiar (q,a){
	$("#"+q).css("display","none");$("#"+a).css("display","block");
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

</script>
</html>
