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
  		<h2>Enriquecimiento de telefonos</h2>
  		<p>Ingrese el archivo .xlsx para obtener los campos <button onclick="$('#archivo').click();$('#cargar-div').css('display','block');" id="boton" class="btn btn-danger btn-lg" role="button">Subir</button>
<input type="file" id="archivo" style="display:none;">
    </div></p>
	</div>
    
<div class="col-md-6">
	Una vez subido el xlsx, escoja los campos del archivo que corresponda a los siguientes datos: <br><br>
	<table id="deudores" class="ocultar"></table>
	
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
var datos={};
$("#cargar").click(function(){
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


//datos={carpeta: JSON.stringify(carpeta), deudores:JSON.stringify(deudores), domicilios:JSON.stringify(domicilios), productos:JSON.stringify(productos), excel : JSON.stringify(exporte[workbook.Props.SheetNames[0]])};


excel=exporte[workbook.Props.SheetNames[0]];
for(var i in excel){

datos['deudor']=JSON.stringify({			
						documento: excel[i][deudores.documento],
						});
			datos['domicilios']=JSON.stringify({			
						telefono1: sacar011(excel[i][domicilios.telefono1].replace(/[^0-9.]/g, "")),
						telefono2: sacar011(excel[i][domicilios.telefono2].replace(/[^0-9.]/g, "")),
						telefono3: sacar011(excel[i][domicilios.telefono3].replace(/[^0-9.]/g, "")),
            telefono4: sacar011(excel[i][domicilios.telefono4].replace(/[^0-9.]/g, "")),
            telefono5: sacar011(excel[i][domicilios.telefono5].replace(/[^0-9.]/g, "")),
            telefono6: sacar011(excel[i][domicilios.telefono6].replace(/[^0-9.]/g, "")),
            telefono7: sacar011(excel[i][domicilios.telefono7].replace(/[^0-9.]/g, "")),
            telefono8: sacar011(excel[i][domicilios.telefono8].replace(/[^0-9.]/g, ""))
          });
			datos['proceso']=i;
			datos['email']=excel[i][domicilios.email];
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


	$("#deudores").append('<tr><td>documento</td><td><select class="lista  btn-default" id="documento" name="deudores"><option>nulo</option></select></td></tr>');
	

	$("#deudores").append('<tr><td>telefono1</td><td><select class="lista  btn-default" id="telefono1" name="domicilios"><option>nulo</option></select></td></tr>');
	
	$("#deudores").append('<tr><td>telefono2</td><td><select class="lista  btn-default" id="telefono2" name="domicilios"><option>nulo</option></select></td></tr>');
		
	$("#deudores").append('<tr><td>telefono3</td><td><select class="lista  btn-default" id="telefono3" name="domicilios"><option>nulo</option></select></td></tr>'); 

  $("#deudores").append('<tr><td>telefono4</td><td><select class="lista  btn-default" id="telefono4" name="domicilios"><option>nulo</option></select></td></tr>');  

  $("#deudores").append('<tr><td>telefono5</td><td><select class="lista  btn-default" id="telefono5" name="domicilios"><option>nulo</option></select></td></tr>');  

  $("#deudores").append('<tr><td>telefono6</td><td><select class="lista  btn-default" id="telefono6" name="domicilios"><option>nulo</option></select></td></tr>');  

  $("#deudores").append('<tr><td>telefono7</td><td><select class="lista  btn-default" id="telefono7" name="domicilios"><option>nulo</option></select></td></tr>');  

  $("#deudores").append('<tr><td>telefono8</td><td><select class="lista  btn-default" id="telefono8" name="domicilios"><option>nulo</option></select></td></tr>');  


	$("#deudores").append('<tr><td>email</td><td><select class="lista  btn-default" id="email" name="domicilios"><option>nulo</option></select></td></tr>');	
	


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
  $("#archivo").val("");
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
  if(string[0]=='0' && string[1] == '1' && string[2] == '1'){
    string=string.slice(3);
  }
  return string;
}


document.getElementById('archivo').addEventListener('change', handleFile, false);

</script>
</html>
