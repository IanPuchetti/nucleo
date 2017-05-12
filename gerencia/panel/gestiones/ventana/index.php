<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../administracion/");
}else{
if($_SESSION['puesto']=='ger'){

}else{
if($_SESSION['puesto']=='sup'){
header("Location: ../supervision/");
}else{
if($_SESSION['puesto']=='gen'){
header("Location: ../gerencia/");
}else{
}
}
}
}
}
else{
header("Location: /");
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../js/jquery.min.js"></script>
<script src="/.js/bootstrap.min.js"></script>
<script src="../js/socket.js"></script>
<link rel="stylesheet" href="/.css/bootstrap.min.css"/>
<script>
        var socket = io.connect('http://'+document.URL.split("/")[2]+':3000');
		socket.on('panel', function (data){
		if($("#"+data.usuario).length){
		$("#"+data.usuario).html('<td>'+data.usuario+'</td><td><b>'+data.tiempo+'</b></td><td>'+data.documento+'</td><td>'+data.apellido+'</td><td>'+data.telefono.numero+'</td><td>'+data.tipo_gestion.tipo+'</td><td><label class="btn btn-default" style="font-size:8px;background:none;color:white;border:white solid 1px;" onclick=abrirVentana("llamadas'+data.documento+'","/general/gestion-de-cobranzas/manual/llamadas/?caso='+data.id+'&documento='+data.documento+'")>Gestiones</label></td>');
		$("#"+data.usuario).css({'background' : data.color , 'color' : 'white'});
		}else{
		var html= '<tr id="'+data.usuario+'" class="btn-default" role="alert"><td>'+data.usuario+'</td><td><b>'+data.tiempo+'</b></td><td>'+data.documento+'</td><td>'+data.apellido+'</td><td>'+data.telefono.numero+'</td><td>'+data.tipo_gestion.tipo+'</td><td><label class="btn btn-default" style="font-size:8px;background:none;color:white;border:white solid 1px;" onclick=abrirVentana("llamadas'+data.documento+'","/general/gestion-de-cobranzas/manual/llamadas/?caso='+data.id+'&documento='+data.documento+'")>Gestiones</label></td></tr>';
		$("#usuarios").append(html);
		$("#"+data.usuario).css({'background' : data.color , 'color' : 'white'});
		}
		});
</script>
</head>
<body style="background:#eee;">
	<div class="container">
		<h3>Panel de control</h3><p class="lead">En este panel se mostrarán las gestiones que se están realizando en tiempo real.</p>
		<table class="table table-condensed" style="font-size:12px;">
		<thead>
		<th>Usuario</th>
		<th>Tiempo</th>
		<th>Documento</th>
		<th>Deudor</th>
		<th>Telefono</th>
		<th>Tipo</th>
		</thead>
		<tbody id="usuarios">
		</tbody>
		</table>
		
	</div>
	<script>
	function abrirVentana(nombre, url) {
    window.open(url, nombre, "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=1000, height=400");
}
	</script>
</body>
</html>
