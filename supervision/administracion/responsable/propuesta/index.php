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
echo "<script>var operador= '".$_SESSION['id']."'</script>";
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
  		<h1 class="lead">Propuesta de <span id="apellido"></span></h1>
		<label for="fecha_propuesta">Fecha propuesta</label>
		<input type="date" id="fecha_propuesta" class="form-control">
		<label for="monto_total">Monto total</label>
		<input type="number" id="monto_total" class="form-control">
		<label for="monto_primer_pago">Monto primer pago</label>
		<input type="number" id="monto_primer_pago" class="form-control">
		<label for="banco">Banco</label>
  		<select type="text" id="banco" class="form-control"></select>
  		
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
        <label for="fecha_pago">Fecha pago</label>
		<input type="date" id="fecha_pago" class="form-control">
		<label for="asignacion">Asignacion</label>
		<input type="number" id="asignacion" class="form-control">
		<br>
		<button class="btn btn-primary form-control" id="registrar">Registrar</button>
    </div>
    <script>
    $("#apellido").html($_GET['apellido']);
    
    $("#registrar").click(function (){
    		
    		var datos= {	documento: $_GET['documento'],
    						fecha_propuesta : $("#fecha_propuesta").val(),
    						monto_total: $("#monto_total").val(),
    						monto_primer_pago: $("#monto_primer_pago").val(),
    						banco: $("#banco").children(":selected").attr("id"),
    						fecha_pago: $("#fecha_pago").val(),
    						asignacion: $("#asignacion").val(),
    						operador: operador
    		};
    		$.ajax({
    					url:'php/registrar.php',
    					data:datos,
    					type:'post',
    					success: function (res){
    								alert(res);
    								window.close();
    					}
    		});
    				
    });
    </script>
  </body>

</html>
