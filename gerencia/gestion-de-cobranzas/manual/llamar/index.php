<?php
session_start();
$operador= $_SESSION['id'];
$usuario = $_SESSION['user'];
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: ../");
}
$date = getdate();
echo "<script> var usuario = '$usuario' , operador = '$operador'</script>";
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
	<script type="text/javascript" src="/.js/socket.js"></script>
	<script>
	var date = new Date(), hora_comienzo = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
	var socket = io.connect('http://'+document.URL.split("/")[2]+':3000');
		var horas = 0, minutos = 0, segundos = 0, colorete;
		function avanzar (){
		if(segundos == 59){
			segundos=0;
			if(minutos == 59){
				minutos=0;
				horas=horas+1;
			}else{
				minutos=minutos+1;
			}
		}else{
			segundos=segundos+1;
		}
		$("#horas").html(horas);
		$("#minutos").html(minutos);
		$("#segundos").html(segundos);
		
		
		if(minutos>5){
		$("#reloj").css("background-color", "#800000");
		colorete = '#800000';
		$("#reloj").css("color", "white");
		}else{
		if($("#tipo_gestion").val()=='ENTRANTE'){
		colorete = '#339933';
		}else{
		if($("#tipo_gestion").val()=='SALIENTE'){
		colorete='#0066cc';
		}
		}
		}
		
		socket.emit('tiempo', {usuario:usuario, apellido: $("#apellido").html(), documento: $_GET['documento'], telefono: $("#telefono").val(),  tiempo: horas+':'+minutos+':'+segundos , tipo_gestion : $("#tipo_gestion").val(), id : $_GET['caso'], color: colorete });
		window.setTimeout(avanzar, 1000);
		}
		var aaaa;
		window.onload = function () {avanzar(); 
		$.ajax({
		url:'php/telefonos.php',
		type:'post',
		data: {documento: $_GET['documento']},
		success: function (res){
									res=JSON.parse(res);
									aaaa=res;
									for(var i in res){
									$("#apellido").html(res[i].apellido);
									$("#telefono").append('<option>'+res[i].numero+'</option>');
									}
		}
});};
	</script>
<style>
.navbar-static-top{
margin-top:-40px;
}
</style>
<script>
var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});
</script>

  </head>

   <body>

 <div class="container">
  		<h1 class="lead">Llamada a</h1>
		<div id="apellido" class="lead"></div>
		<select id="tipo_gestion" class="btn btn-danger"></select>
		<script>
		$.ajax({
				url:'php/tipo_gestion.php',
				type:'post',
				success: function (res){	res=JSON.parse(res);
											for (var i in res){
												$("#tipo_gestion").append('<option id="'+res[i].id+'">'+res[i].tipo+'</option>');
											}
				}
		});
		</script>
		<select id="telefono" class="btn btn-info"></select><br><br>
  		Atendió: <input type="checkbox" id="atendio" ><br><br>
  		<input type="text" class="form-control" id="comentario" placeholder="Comentario..."><br><br>
  		<label>Próxima acción</label>
  		<select id="proxima_accion" class="form-control" onchange="proximaccion++;"><option>-</option></select>
  		<br>
  		
  		<script>
                $.ajax({
		url:'php/proximas-acciones.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#proxima_accion").html('<option>-</option>');
								for (var i in res){
								$("#proxima_accion").append("<option id='"+res[i].id+"'>"+res[i].accion+"</option>");
								}
		}
		});
        </script>
        <label>Calificar teléfono</label>
        <select id="calificar_telefono" class="form-control" onchange="calificartelefono++;"><option>-</option></select>
        <script>
                $.ajax({
		url:'php/calificacion-telefonos.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								$("#calificar_telefono").html('<option>-</option>');
								for (var i in res){
								$("#calificar_telefono").append("<option id='"+res[i].id+"'>"+res[i].titulo+"</option>");
								}
		}
		});
                </script><br>
        <label for="agenda">Agenda</label>
        <input type="date" id="agenda" class=" form-control"></input><br><br>
        <button class="btn btn-success form-control" id="propuesta">Propuesta</button><br><br>
        <div class="input-group" style="margin:5px;max-width:500px;">
    			<select class="form-control" id="liquidacion-banco">
        <option id="cencosud">CENCOSUD</option>
        <option id="hsbc">HSBC</option>
        <option id="icbc">ICBC</option>
        <option id="patagonia">PATAGONIA</option>
        <option id="santander-rio">SANTANDER RIO</option>
        </select>
			<span class="input-group-btn">
				<button class="btn btn-primary" id="liquidar">Liquidación</button>
			</span>
		<script>
		$("#liquidar").click(function(){
			var banco= $("#liquidacion-banco").children(":selected").attr("id");
			abrirVentana('liquidacion-'+$_GET['caso'], '/general/liquidador/'+banco+'/?numero_operacion='+$_GET['caso']);
		});
		</script>
		</div>
        
  		<div style="text-align:center;"><button class="btn btn-info" id="registrar">Registrar</button></div>
  		
    </div>
    <label class="label label-primary" style="position:fixed;top:0px;left:0px;width:100%;" id="reloj">
    
    <span id="horas"></span>:
<span id="minutos"></span>:
<span id="segundos"></span>
    </div>
  </body>
<script>
var proximaccion=0, calificartelefono=0;

$("#bajar").click(function (){
	$.ajax({
		url: 'php/bajar-numero.php',
		type:'post',
		data: {numero : $("#telefono").val()},
		success: function (res){
		alert(res);	
}
});
});
$("#registrar").click(function (){  
if(proximaccion!=0 && $("#proxima_accion").val()!="-" && calificartelefono!=0 && $("#calificar_telefono").val()!="-"){
if(document.getElementById('atendio').checked){
									var datos={
												documento: $_GET['documento'],
												telefono: $("#telefono").val(),
												atendio: 1,
												comentario: $("#comentario").val(),
												proxima_accion: $("#proxima_accion").children(":selected").attr("id"),
												tiempo: horas+':'+minutos+':'+segundos,
												operador: operador,
												id_caso : $_GET['caso'],
												tipo_gestion: $("#tipo_gestion").children(":selected").attr("id"),
												hora:hora_comienzo

									}
									}else{
									var datos={
												documento: $_GET['documento'],
												telefono: $("#telefono").val(),
												atendio: 0,
												comentario: $("#comentario").val(),
												proxima_accion: $("#proxima_accion").children(":selected").attr("id"),
												tiempo: horas+':'+minutos+':'+segundos,
												operador: operador,
												id_caso : $_GET['caso'],
												tipo_gestion: $("#tipo_gestion").children(":selected").attr("id"),
												hora: hora_comienzo
									}
									}
									$.ajax({
											url:'php/registrar.php',
											type:'post',
											data:datos,
											success: function (res){
																	alert(res);
											}
									});
									if($_GET['camp']!=undefined){
									$.ajax({
											url:'php/registrar_camp.php',
											type:'post',
											data:{id_camp:$_GET['camp'],
												  id_caso:$_GET['caso']},
											success: function (res){
																	alert(res);
											}
									});
									}
									
}else{
alert("La proxima acción y la calificación del telefono es obligatoria.");
}
});

function abrirVentana(nombre, url ) {
    window.open(url, nombre, "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=800");
}

$("#propuesta").click(function (){

		abrirVentana('nueva_propuesta'+$_GET['documento'], '/general/gestion-telefonica/manual/propuesta/?documento='+$_GET['documento']+'&apellido='+$("#apellido").html());		
		
});
</script>
</html>
