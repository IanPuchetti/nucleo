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
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/xlsx.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/FileSaver.js"></script>
	<script src="js/Export2Excel.js" type="text/javascript"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

a{
cursor:pointer;
color:#5a5;
}

a:hover{
color:#272;
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
        
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/supervision/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/supervision/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación Masiva</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/supervision/modificacion/productos">Productos</a></li>
                  <li><a tabindex="-1" href="/supervision/modificacion/deudores">Deudores</a></li>
                </ul>
              </li>
              <li><a class="ventana" href="/gerencia/baja/">Cambio de Estado</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/supervision/carga/enriquecer">Telefonos / Emails</a></li>
                  <li><a href="/supervision/carga/reportes">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Gestión de Cobranzas<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/gestion-de-cobranzas/manual">Manual</a></li>
              <li><a href="/supervision/gestion-de-cobranzas/campania">Campaña</a></li>
              <li><a href="#">Automática</a></li>  
              <li><a href="/supervision/gestion-de-cobranzas/consultas">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cargar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/supervision/carga/gestiones-automaticas">Gestiones Automáticas</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Exporte<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/supervision/exportar/casos">Casos</a></li>
              <li><a href="/supervision/exportar/telefonos">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/supervision/exportar/sms">SMS</a></li>
                  <li><a tabindex="-1" href="/supervision/exportar/mails">Mails</a></li>
                  <li><a tabindex="-1" href="/supervision/exportar/mails">IVR</a></li>
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
  		<h2>Comparación</h2>
  		<p>Ingrese el archivo .xlsx para obtener los campos <button onclick="$('#archivo').click();$('#comparar').css('display','inline-block');$('#barra').css('display','block');" id="boton" class="btn btn-success btn-lg" role="button">Subir</button>
<input type="file" id="archivo" style="display:none;">
      
      <button id="comparar" style="display:none;" class="btn btn-success btn-lg">Comparar</button><br>
      </p>
      </div>
	</div>
    
<div class="col-md-6">
    <p class="alert alert-success">Una vez cargado el archivo XLSX escoja el campo correspondiente al documento del deudor y el banco.</p>
	<table id="deudores" class="ocultar"><tr><td>documento</td><td><select class="lista  btn-default" id="documento" name="deudores"><option>nulo</option></select></td></tr><tr><td>banco</td><td><select class="lista  btn-default" id="banco"></select></td></tr></table>
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
</div>
</div>

	<div style="text-align:center;" ><label id="satisfaction" class="label label-success"></label></div>
     <div class="row">
     <div class="col-md-4 lead">Coincidentes: <label class="label label-success"  id="coincidentes"></label><br><button style="display:none;" class="btn btn-success descargas" id="d_coincidentes">Descargar</button><table style="display:none" id="t_coincidentes"></table></div>
     <div class="col-md-4 lead">No coincidentes: <label class="label label-success"  id="no_coincidentes"></label><br><button style="display:none;" class="btn btn-success descargas" id="d_no_coincidentes">Descargar</button><table style="display:none" id="t_no_coincidentes"></table></div>
     <div class="col-md-4 lead">No se encuentran: <label class="label label-success"  id="not_found"></label><br><button style="display:none;" class="btn btn-success descargas" id="d_not_found">Descargar</button><table style="display:none" id="t_not_found"></table></div>
     </div>
  </body>
<script>

var datos={}, vueltines, lookup;
$("#comparar").click(function(){
var i=0;
while(i<document.getElementsByName('deudores').length){
	var campo=document.getElementsByName('deudores')[i].id;
	deudores[campo]=document.getElementsByName('deudores')[i].value;  
i++;  
}

//datos={carpeta: JSON.stringify(carpeta), deudores:JSON.stringify(deudores), domicilios:JSON.stringify(domicilios), productos:JSON.stringify(productos), excel : JSON.stringify(exporte[workbook.Props.SheetNames[0]])};


excel=exporte[workbook.Props.SheetNames[0]];
datos['banco']=$("#banco").children(":selected").attr("id");
			ajax_comparar(datos);
			
			$(".descargas").css("display","block");
});

var removeByAttr = function(arr, attr, value){
    var i = arr.length;
    while(i--){
       if( arr[i] 
           && arr[i].hasOwnProperty(attr) 
           && (arguments.length > 2 && arr[i][attr] === value ) ){ 

           arr.splice(i,1);

       }
    }
    return arr;
}
var reses;
function ajax_comparar (datos){
			$("#satisfaction").html("Consultando...");
			$.ajax({
					url:'php/comparar.php',
					type:'post',
					data:datos,
					success: function (res){res=JSON.parse(res);reses=res;
											lookup = {};
											for (var i = 0, len = res.length; i < len; i++) {
   											lookup[res[i].documento] = res[i];
											}
											for (var i in excel){
												if(lookup[excel[i].documento]){
													coincidentes.push(excel[i]);
													$("#coincidentes").html(coincidentes.length);
													removeByAttr(res, 'documento', excel[i].documento);
												}else{
														no_coincidentes.push(excel[i]);
														$("#no_coincidentes").html(no_coincidentes.length);
												}
												}
											not_found=res;
											$("#not_found").html(not_found.length);	
											$("#satisfaction").html(i+'/'+excel.length);
											}			
			
			});
}
</script>
<script>
var carpeta={}, deudores={}, domicilios={}, productos={}, names, excel, coincidentes=[], no_coincidentes=[], not_found=[];


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


$("#d_coincidentes").click(function(){
json_tabla('t_coincidentes', coincidentes);
export_table_to_excel('t_coincidentes', 'Coincidentes');
});
$("#d_no_coincidentes").click(function(){
json_tabla('t_no_coincidentes', no_coincidentes);
export_table_to_excel('t_no_coincidentes', 'No_coincidentes');
});
$("#d_not_found").click(function(){
json_tabla('t_not_found',not_found);
export_table_to_excel('t_not_found', 'No_se_encuentran_en_el_archivo');
});
</script>
</html>
