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

.tabla-head{

}
.tabla-body{
	background:white;
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

window.resizeTo(1000, 100);
</script>

  </head>

  <body>
  
		<table class="table" id="tabla" style="width:100%;position:fixed;top:0px;left:0px;">
			
		</table>
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
								dateTransform(res, 'Fecha de propuesta');
								dateTransform(res, 'Fecha de pago');
							$("#apellido").html(res[0].apellido);
							json_tabla('tabla', res);
							$("#ocultar").css("display", "block");
							}
		   });

function dateTransform(a,b){if(a===Array){a=a.split('-');a=a[2]+'/'+a[1]+'/'+a[0];}else{if(a[0][b]){for(var i in a){a[i][b]=a[i][b].split('-');a[i][b]=a[i][b][2]+'/'+a[i][b][1]+'/'+a[i][b][0];}}}return a;}

$("#descargar_excel").click(function(){
if( $("#nombre_excel").val() == ""){alert("Debe ponerle un nombre al archivo que descargará.");}else{
export_table_to_excel('tabla', $("#nombre_excel").val());
}
});
	
</script>
</html>
