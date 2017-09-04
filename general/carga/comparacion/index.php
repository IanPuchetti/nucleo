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
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/.js/jszip.min.js"></script>
  <script type="text/javascript" src="/.js/icg-json-to-xlsx.js"></script>
	<script src="/.js/xlsx.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/.js/lodash.min.js"></script>
	<script type="text/javascript" src="/.js/FileSaver.js"></script>
	<script src="/.js/Export2Excel.js" type="text/javascript"></script>
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

.butn{
  border-radius:5px;border:1px solid #ddd;padding:5px 8px 5px 8px;cursor:pointer;background: none;color:#666;
}
.butn:hover, .butn:hover > ul{
  border-color:#95e53d;
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

select{
  background: none;
  border:0px;
  width:100px;
}
select:hover, select:focus, select:active, select:checked{
  background: white !important;
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

  <body oncontextmenu="return false;">
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
</div>
<div style="width:300px;position:absolute;left:15px;">
	<div style="padding:15px;">
  		<h2>Comparación de cartera</h2>
  		<p>Ingrese el archivo <span class="color-gr"> .xlsx </span>para obtener los campos <button onclick="$('#archivo').click();$('#comparar').css('display','inline-block');$('#barra').css('display','block');" id="boton" class="butn" role="button">Subir</button>
<input type="file" id="archivo" style="display:none;">
      
      <button id="comparar" style="display:none;" class="butn">Comparar</button><br>
      </p>
  </div>
  <div style="padding:5px;">
  <span  style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" ng-click="ver='deudor'">
  <span data-toggle="tooltip" title="Documento" data-placement="bottom" ><img src="/.img/id-card.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" data-toggle="tooltip" title="Documento" data-placement="bottom">
  <select class="lista  btn-default" id="documento" name="deudores"><option></option></select>
  </span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" data-toggle="tooltip" title="Numero de operacion" data-placement="bottom"><img src="/.img/wallet.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" data-toggle="tooltip" title="Numero de operacion" data-placement="bottom">
  <select class="lista " id="numero_operacion" name="deudores"><option></option></select>
  </span>
</span>
</div>
<div style="padding:5px;">
<span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button" ng-click="ver='deudor'">
  <span style="padding:2px;margin-right:-2px;" data-toggle="tooltip" title="Banco" data-placement="bottom"><img src="/.img/bank.png" style="width:15px;height:13px;margin-left:2px;margin-top:-3px;"></span>
  <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;">
  <select class="btn-default"  data-toggle="tooltip" title="Banco" data-placement="bottom" id="banco" style="width:227px;"></select>
  </span>
</span>
</div>
	
    
<div>
    <p class="alert alert-success">Una vez cargado el archivo XLSX escoja el campo correspondiente al documento del deudor y el banco.</p>
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
<div style="width:300px;position:absolute;left:350px;top:30px;border:1px solid #ced;border-radius:5px;padding:15px 15px 25px 15px;">
  <div style="text-align:center;">RESULTADOS</div>

	<div style="text-align:center;margin-top:15px;" >
     <label id="satisfaction" class="label label-success butn"></label></div>
     <div style="margin-top:15px;">
     <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button">
        <span   data-toggle="tooltip" title="Coincidentes" data-placement="bottom">Coincidentes</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="coincidente">&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  class="descargas" style="display:none;" >
          <span id="d_coincidente"><img src="/.img/download.png" style="width:15px;height:15px;"></span>
        </span>
     </span>
      </div>
      <div style="margin-top:15px;">
     <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button">
        <span   data-toggle="tooltip" title="Para revisar" data-placement="bottom">No coincide el estado</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="no_coincide_estado">&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  class="descargas" style="display:none;" >
          <span id="d_no_coincide_estado"><img src="/.img/download.png" style="width:15px;height:15px;"></span>
        </span>
     </span>
      </div>
   <div style="margin-top:15px;">
   <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button">
        <span   data-toggle="tooltip" title="Productos nuevos de deudores" data-placement="bottom">Productos nuevos</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="producto_nuevo">&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  class="descargas" style="display:none;" >
          <span id="d_producto_nuevo"><img src="/.img/download.png" style="width:15px;height:15px;"></span>
        </span>
   </span>
 </div>
 <div style="margin-top:15px;">
   <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;" class="button">
        <span   data-toggle="tooltip" title="Para agregar" data-placement="bottom">Casos nuevos</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="agregar">&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  class="descargas" style="display:none;" >
          <span id="d_agregar"><img src="/.img/download.png" style="width:15px;height:15px;"></span>
        </span>
   </span>
 </div>
 <div style="margin-top:15px;">
   <span style="border-radius:5px;margin:2px;border:1px solid #ddd;padding:2px;width:200px;" class="button">
        <span   data-toggle="tooltip" title="Para dar de baja" data-placement="bottom">Para dar de baja</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;" id="baja">&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span style="border-left:1px solid #ddd;padding:2px;margin-right:-2px;"  class="descargas" style="display:none;" >
        <span id="d_baja"><img src="/.img/download.png" style="width:15px;height:15px;"></span>
        </span>
   </span>
 </div>
 </div>
 </body>
<script>

var datos={}, lookup;
$("#comparar").click(function(){
  if($("#banco").val()=="" && $("#documento").val()=="" && $("#numero_operacion").val()==""){
    alert("Debe completar todos los campos.");
  }else{
resultados={};
var i=0;
while(i<document.getElementsByName('deudores').length){
	var campo=document.getElementsByName('deudores')[i].id;
	deudores[campo]=document.getElementsByName('deudores')[i].value;  
i++;  
}
//datos={carpeta: JSON.stringify(carpeta), deudores:JSON.stringify(deudores), domicilios:JSON.stringify(domicilios), productos:JSON.stringify(productos), excel : JSON.stringify(exporte[workbook.Props.SheetNames[0]])};
excel=exporte[workbook.Props.SheetNames[0]];
datos['banco']=$("#banco").children(":selected").attr("id");
datos['documento']=deudores['documento'];
datos['numero_operacion']=deudores['numero_operacion'];
$(".descargas").css("display","inline-block");
comparar();
}
});

var vu=0,documentos=[] , dar_de_baja, resultados={};
function comparar (){
    if(vu<excel.length){
    documentos.push(excel[vu][datos['documento']]);
    var d = {documento:excel[vu][datos['documento']],
                   banco:datos['banco'],
                   numero_operacion: transform_number(excel[vu][datos['numero_operacion']])
                  };
    ajax_comparar(d);
    }else{
      vu=0;
      ajax_baja();
    }
}

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
          success: function (res){
                      res=res.replace(/\r?\n/g, "");
                      if(resultados[res]){
                      resultados[res].push(excel[vu]);
                      }else{
                        resultados[res]=[];
                        resultados[res].push(excel[vu]);
                      }
                      $("#satisfaction").html((vu+1)+'/'+excel.length);
                      vu=vu+1;
                      setTimeout(function(){comparar(vu);});
                      }
      });
}

function ajax_baja (){
      $("#satisfaction").html("Consultando...");
      $.ajax({
          url:'php/baja.php',
          type:'post',
          data:{banco: datos['banco']},
          success: function (res){
                      
                      res=JSON.parse(res);
                      console.log(res);
                      resultados['baja']=[];
                      var esta=false;
                      for(var i in res){
                        for(var j in documentos){
                          if(documentos[j]==res[i]['documento']){
                           esta=true;
                           break; 
                          }else{
                            esta=false;
                          }
                        }
                        if(esta==false){
                            resultados['baja'].push(res[i]);
                        }
                      }
                       $("#satisfaction").html(excel.length+'/'+excel.length);
                       if(resultados['coincidente']){$("#coincidente").html(resultados['coincidente'].length);}else{$("#coincidente").html("0")}
                       if(resultados['no_coincide_estado']){$("#no_coincide_estado").html(resultados['no_coincide_estado'].length);}else{$("#no_coincide_estado").html("0")}
                       if(resultados['producto_nuevo']){$("#producto_nuevo").html(resultados['producto_nuevo'].length);}else{$("#producto_nuevo").html("0")}
                       if(resultados['agregar']){$("#agregar").html(resultados['agregar'].length);}else{$("#agregar").html("0")}
                       if(resultados['baja']){$("#baja").html(resultados['baja'].length);}else{$("#baja").html("0")}

                      }
      });
}

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
	for (var i in Object.keys(mostrar.sheet1[0])){
		$(".lista").append("<option>"+Object.keys(mostrar.sheet1[0])[i]+"</option>");
		}
  }
    reader.readAsBinaryString(f);
  }
  $("#archivo").val("");
  setTimeout(function(){asignar()});
}

document.getElementById('archivo').addEventListener('change', handleFile, false);

function asignar(){
  $("#documento").val("DOCUMENTO");
  $("#numero_operacion").val("OPERACION");  
}

$("#d_coincidente").click(function(){
exportar(resultados.coincidente, 'coincidentes.xlsx');
});
$("#d_no_coincide_estado").click(function(){
exportar(resultados.no_coincide_estado, 'no_coincide_estado.xlsx');
});
$("#d_producto_nuevo").click(function(){
exportar(resultados.producto_nuevo, 'productos_nuevos.xlsx');
});
$("#d_agregar").click(function(){
exportar(resultados.agregar, 'agregar.xlsx');
});

$("#d_baja").click(function(){
exportar(resultados.baja, 'baja.xlsx');
});

function transform_number (str){
    
    if(str != undefined){
    
    str = str.replace(/[^0-9]+/g, "");
    return parseFloat(str);
    }else{
    return 0;
    }
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
document.addEventListener('dragover',function(event){
    event.preventDefault();
    return false;
  },false);

  document.addEventListener('drop',function(event){
    event.preventDefault();
    return false;
  },false);

const remote = require('electron').remote;
var resize = remote.require('./main').resize;
resize(700,400);
</script>
</html>
