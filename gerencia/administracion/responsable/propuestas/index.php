<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: ../");
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
	<script type="text/javascript" src="/.js/script.js"></script>
	<script src="/.js/xlsx.js" type="text/javascript"></script>
	<script src="/.js/FileSaver.js" type="text/javascript"></script>
	<script src="/.js/Export2Excel.js" type="text/javascript"></script>
	<script src="/.js/jsontable.js" type="text/javascript"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}
table{
font-size:10px;
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
  		<h1 class="lead">Propuestas de <span id="apellido"></span></h1>
  		<div class="alert alert-success" role="alert" style="max-width:400px;display:none;" id="ocultar"> Descargar excel<hr>
  		<input type="text" id="nombre_excel" placeholder="Nombre del excel..." class="btn" style="text-align:left;"><button class="btn btn-success" id="descargar_excel">Descargar</button></div>
		<table class="table" id="tabla">
			
		</table>
    </div>
  </body>
<script>var response;
var datos={
				documento: $_GET["documento"],
				banco: $_GET["banco"]
	};
	$.ajax({
	url:'php/buscar.php',
	type:'post',
	data:datos,
	success: function (res){res=JSON.parse(res);
							$("#apellido").html(res[0].apellido);
							json_tabla('tabla', res);
							$("#ocultar").css("display", "block");
							}
		   });


$("#descargar_excel").click(function(){
if( $("#nombre_excel").val() == ""){alert("Debe ponerle un nombre al archivo que descargará.");}else{
export_table_to_excel('tabla', $("#nombre_excel").val());
}
});
	
</script>
</html>
