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
  <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
	<link rel="stylesheet" href="/.css/bootstrap.min.css"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jsontable.js"></script>
	<script src="js/xlsx.js" type="text/javascript"></script>
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
  border:0px;
  width:150px;
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

table{
  font-size:14px;
  width:100%;
  float:right;
  cursor:pointer;
  margin-bottom: 1px;
}

td{
  border:1px solid #aaa;
  padding:0px 4px 0px 4px;
}

.busqueda{
  height: 305px;
  overflow-y:scroll;
  overflow-x:hidden;
  border-bottom:1px solid #ddd;
}

tbody tr td{
  font-size:12px;
}

thead tr td{
  background:#efd;
}

tbody tr:hover{
  background:#eafada !important;
}

.left{
  width:10%;position:absolute;top:83px;border-top:1px solid #eee;padding-top:5px;
}

.button{
  cursor:pointer;
}
.button:hover>#change{
  background:#fafefa;
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
  border-color:#95e53d;
}

/* What you need: */
table td {
    height:18px;
    overflow: hidden;
    display: inline-block;
    white-space: nowrap;
    border-left-color:white;
  }
table tbody td{
    border-top:0px;
}

table.with-ellipsis td {   
    text-overflow:ellipsis;
  }
  
</style>
  </head>

  <body oncontextmenu="return false;" ng-app="exporte" ng-controller="filtro" class="noselect">
    <div class="bar drag">
    </div>
<div class="header" style="">
  <div style="position:absolute;width:600px;">
  <span class="dropdown boton">
   <a href="/" disable>Inicio</a>
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Gestión de cobranzas <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/general/gestion-de-cobranzas/manual/">Manual</a></li>
      <li><a href="/general/gestion-de-cobranzas/campania/">Campaña</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
            <span data-toggle="dropdown">Administración de Cartera <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/general/carga/comparacion" class="ventana">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/general/carga/masiva" class="ventana">Masiva</a></li>
                  <li><a tabindex="-1" href="/general/carga/manual" class="ventana">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/general/carga/enriquecer" class="ventana">Telefonos / Mails</a></li>
                  <li><a href="/general/carga/reportes" class="ventana">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton logout">
    <a href="/.php/logout.php">Salir</a>
  </span>
</div>
	<div style="position:absolute;left:0px;padding:10px 20px 10px 20px;top:50px;width:400px;font-size:16px;">
  		<h2>Enriquecimiento</h2>
  		<div>Ingrese el archivo .xlsx para obtener los campos <button onclick="$('#archivo').click();$('#cargar-div').css('display','block');" id="boton" class="butn" role="button">Subir</button>
<input type="file" id="archivo" style="display:none;">
    </div>
<div style="display:none;"id="cargar-div">
      Una vez subido el archivo, escoja los campos del archivo que corresponda a los siguientes datos. <br><br> Luego, al elegir los campos correspondientes, haga click en <span class="butn" id="cargar" onclick="$('#barra').css('display','block')">Cargar</button>
     </div>
      <div class="progress"  id="barra" style="display:none;">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="progreso"><span class="sr-only">80%</span></div>
     </div>
     <div class="satisfaction lead" style="text-align:center;"></div>
	</div>
  <div style="position:absolute;left:400px;top:70px;">
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Documento" data-placement="bottom">
          <span><img src="/.img/id-card.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="documento" name="deudores"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Telefono 1" data-placement="bottom">
          <span><img src="/.img/phone.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="telefono1" name="domicilios"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Telefono 2" data-placement="bottom">
          <span><img src="/.img/phone.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista " id="telefono2" name="domicilios"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Telefono 3" data-placement="bottom">
          <span><img src="/.img/phone.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="telefono3" name="domicilios"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Telefono 4" data-placement="bottom">
          <span><img src="/.img/phone.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="telefono4" name="domicilios"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Telefono 5" data-placement="bottom">
          <span><img src="/.img/phone.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="telefono5" name="domicilios"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Telefono 6" data-placement="bottom">
          <span><img src="/.img/phone.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="telefono6" name="domicilios"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Telefono 7" data-placement="bottom">
          <span><img src="/.img/phone.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="telefono7" name="domicilios"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Telefono 8" data-placement="bottom">
          <span><img src="/.img/phone.png" style="width:12px;height:12px;margin-left:2px;"></span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="telefono8" name="domicilios"><option> </option></select></span>
        </span>
      </div>
      <div style="margin-top:10px;">
        <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" data-toggle="tooltip" title="Correo electronico" data-placement="bottom">
          <span class="color-gr" style="font-size:13px;padding-left:3px;">@</span>
          <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="change"><select class="lista" id="email" name="domicilios"><option> </option></select></span>
        </span>
      </div>
  </div>
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

$(document).on('click', '.dont-go', function (e) {
  e.stopPropagation();
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

const remote = require('electron').remote;
var resize = remote.require('./main').resize;
resize(650,400);

</script>
</html>
