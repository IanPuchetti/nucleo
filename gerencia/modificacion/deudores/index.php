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
<div class="row">
<div class="col-md-6">
	<div class="jumbotron text-center">
  		<h2>Modificación masiva de deudores</h2>
  		<p>Ingrese el archivo .xlsx para obtener los campos <button onclick="$('#archivo').click();$('#cargar-div').css('display','block');" id="boton" class="btn btn-danger btn-lg" role="button">Subir</button>
<input type="file" id="archivo" style="display:none;">
      </div></p>

	</div>
    
<div class="col-md-6">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#deudores').css('display','inline-block');">Deudor</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#domicilios').css('display','inline-block');">Domicilios</a></li>
      </ul>
	<table id="deudores" class="ocultar"></table>
	<table id="domicilios" class="ocultar" style="display:none;"></table>
	
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
var datos={}, domicilio={}
$("#cargar").click(function(){
var i=0;

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


//datos={carpeta: JSON.stringify(carpeta), deudores:JSON.stringify(deudores), domicilios:JSON.stringify(domicilios), productos:JSON.stringify(productos), excel : JSON.stringify(exporte[workbook.Props.SheetNames[0]])};


excel=exporte[workbook.Props.SheetNames[0]];
var deudor={};
for(var i in excel){

datos['deudor']=JSON.stringify({			
						documento: excel[i][deudores.documento],
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
						telefono1: excel[i][domicilios.telefono1],
						telefono2: excel[i][domicilios.telefono2],
						telefono3: excel[i][domicilios.telefono3]});
      deudor=JSON.parse(datos['deudor']);
      domicilio=JSON.parse(datos['domicilios']);
			datos['proceso']=i;
			comparar(deudor, i);
			}
});
var para_modificar=[];
function comparar (deudor, i){
  $.ajax({
          url:'php/comparacion.php',
          type:'post',
          data:datos,
          success: function (res){
                      res=JSON.parse(res);
                      var actual=res[0];
                      for(keys in actual){
                        if(deudor[keys]===undefined){deudor[keys]='';}
                        if(domicilio[keys]===undefined){domicilio[keys]='';}
                      }
                      para_modificar[i]= JSON.stringify({deudor:deudor, domicilio:domicilio});
                      if((actual.tipo_documento != deudor.tipo_documento && deudor.tipo_documento != '')
                      || (actual.apellido != deudor.apellido && deudor.apellido !='') 
                      || (actual.email != deudor.email && deudor.email != '')
                      || (actual.empresa != deudor.empresa && deudor.empresa != '') 
                      || (actual.direccion_laboral != domicilio.direccion_laboral && domicilio.direccion_laboral !='')
                      || (actual.direccion_laboral2 != domicilio.direccion_laboral2 && domicilio.direccion_laboral2 !='') 
                      || (actual.direccion_particular != domicilio.direccion_particular && domicilio.direccion_particular !='')
                      || (actual.direccion_particular2 != domicilio.direccion_particular2 && domicilio.direccion_particular2 !='')
                      || (actual.direccion_particular3 != domicilio.direccion_particular3 && domicilio.direccion_particular3 !='') 
                      || (actual.provincia != domicilio.provincia && domicilio.provincia != '') 
                      || (actual.localidad != domicilio.localidad && domicilio.localidad !='') 
                      || (actual.codigo_postal != domicilio.codigo_postal && domicilio.codigo_postal != '')
                      ){
                      $("#comparacion").append('<table class="table table-condensed" style="overflow-x:scroll;font-size:12px;margin:auto;" id="'+i+'"><tr style="background:grey;color:white;"><td>Campos</td><td>Tipo documento</td><td>Apellido y nombre</td><td>Email</td><td>Empresa</td><td>Direccion laboral</td><td>Direccion particular</td><td>Direccion laboral 2</td><td>Direccion particular 2</td><td>Direccion particular 3</td><td>Provincia</td><td>Localidad</td><td>Código postal</td></tr><tr style="background:white;"><td style="background:grey;color:white;">Actual</td><td>'+res[0].tipo_documento+'</td><td>'+res[0].apellido+'</td><td>'+res[0].email+'</td><td>'+res[0].empresa+'</td><td>'+res[0].direccion_laboral+'</td><td>'+res[0].direccion_particular+'</td><td>'+res[0].direccion_laboral2+'</td><td>'+res[0].direccion_particular2+'</td><td>'+res[0].direccion_particular3+'</td><td>'+res[0].provincia+'</td><td>'+res[0].localidad+'</td><td>'+res[0].codigo_postal+'</td></tr><tr><td style="color:white;background:lightgrey;"> A modificar</td><td>'+deudor.tipo_documento+'</td><td>'+deudor.apellido+'</td><td>'+deudor.email+'</td><td>'+deudor.empresa+'</td><td>'+domicilio.direccion_laboral+'</td><td>'+domicilio.direccion_particular+'</td><td>'+domicilio.direccion_laboral2+'</td><td>'+domicilio.direccion_particular2+'</td><td>'+domicilio.direccion_particular3+'</td><td>'+domicilio.provincia+'</td><td>'+domicilio.localidad+'</td><td>'+domicilio.codigo_postal+'</td></tr><tr><td style="text-align:center" colspan="13"><div style="text-align:center;"><button class="btn btn-success" style="border-radius:5px 0px 0px 5px;" onclick="modificar('+deudor.documento+','+i+')">Modificar</span><button class="btn btn-danger" style="border-radius:0px 5px 5px 0px;" onclick=$("#'+i+'").remove()>Omitir</span></div></td></tr></table>');
                      }
                      var progress= (parseInt(i)+1) * 100 / excel.length;
                      $("#progreso").css('width', progress+'%');
                      $(".satisfaction").html((parseInt(i)+1)+'/'+excel.length);
                      }     
      });
}

function modificar (documento, a){
  var datos= {  documento: documento,
                a_modificar: para_modificar[a]
  };
  $.ajax({
          url:'php/modificar.php',
          type:'post',
          data:datos,
          success: function (res){
            alert(res);
          }
  });
}
</script>
<script>
var carpeta={}, deudores={}, domicilios={}, productos={}, names, excel;

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
  

  $("#archivo").val("");
}

document.getElementById('archivo').addEventListener('change', handleFile, false);

function transform_fecha (str){
		
		if(str != undefined){
		
		str = str.replace(/[^0-9/]/g, "");
		str = str.split("/");
		return str[2]+'-'+str[1]+'-'+str[0];
		}else{
		return 0;
		}
}

</script>
</html>
