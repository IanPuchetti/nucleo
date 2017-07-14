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
	<link rel="icon" href="../../../icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="../../../.css/bootstrap.min.css"/>
	<link href="../../../.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="../../../.js/jquery.min.js"></script>
	<script type="text/javascript" src="../../../.js/bootstrap.js"></script>
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
<div>
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#deudores').css('display','block');">Deudor</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#domicilios').css('display','block');">Domicilios</a></li>
        <li role="telefonos"><a onclick="$('.ocultar').css('display','none');$('#telefonos').css('display','block');">Telefonos</a></li>
      </ul>


	<div id="deudores" class="ocultar">
            <div class="row">
			<div class="col-md-6">
	<div class="form-group">
                <label for="documento">Documento</label>
                <input type="number" class="form-control" id="documento" placeholder="Documento...">	
	</div>
	<div class="form-group">
                <label for="tipo_documento">Tipo de documento</label>
                <input type="text" class="form-control" id="tipo_documento" placeholder="Tipo de documento...">	
	</div>
	<div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido...">	
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email...">	
   	</div>
	<div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" class="form-control" id="empresa" placeholder="Empresa...">	
    </div>
		</div>
		</div>
	</div>
	<div id="domicilios" class="ocultar" style="display:none;">
	            <div class="row">
			<div class="col-md-6">
<div class="form-group">
                <label for="direccion_laboral1">Dirección Laboral 1</label>
                <input type="text" class="form-control" id="direccion_laboral" placeholder="Dirección laboral 1...">	
	</div>
	<div class="form-group">
                <label for="direccion_laboral2">Dirección Laboral 2</label>
                <input type="text" class="form-control" id="direccion_laboral2" placeholder="Dirección laboral 1...">	
	</div><hr>
	<div class="form-group">
                <label for="direccion_particular1">Dirección Particular 1</label>
                <input type="text" class="form-control" id="direccion_particular" placeholder="Dirección particular 1...">	
	</div>
	<div class="form-group">
                <label for="direccion_particular2">Dirección Particular 2</label>
                <input type="text" class="form-control" id="direccion_particular2" placeholder="Dirección particular 2...">	
	</div>
	<div class="form-group">
                <label for="direccion_particular3">Dirección Particular 3</label>
                <input type="text" class="form-control" id="direccion_particular3" placeholder="Dirección particular 2...">	
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
                <label for="provincia">Provincia</label>
                <input type="text" class="form-control" id="provincia" placeholder="Provincia...">	
   	</div>
	<div class="form-group">
                <label for="localidad">Localidad</label>
                <input type="text" class="form-control" id="localidad" placeholder="Localidad...">	
    </div>
    	<div class="form-group">
                <label for="codigo_postal">Código postal</label>
                <input type="number" class="form-control" id="codigo_postal" placeholder="Código postal...">	
    </div>
    
		</div>
		</div>
	</div>
	<script>
	function deudor_domicilios (){
									$.ajax({
									url:'php/deudor-domicilios.php',
									type:'post',
									data: {documento: $_GET['documento']},
									success: function (res){
															res = JSON.parse(res);
															$("#documento").val($_GET['documento']);
															$("#tipo_documento").val(res[0].tipo_documento);
															$("#apellido").val(res[0].apellido);
															$("#email").val(res[0].email);
															$("#empresa").val(res[0].empresa);
															$("#direccion_laboral").val(res[0].direccion_laboral);
															$("#direccion_laboral2").val(res[0].direccion_laboral2);
															$("#direccion_particular").val(res[0].direccion_particular);
															$("#direccion_particular2").val(res[0].direccion_particular2);
															$("#direccion_particular3").val(res[0].direccion_particular3);
															$("#provincia").val(res[0].provincia);
															$("#localidad").val(res[0].localidad);
															$("#codigo_postal").val(res[0].codigo_postal);
															}
						});
	}
	</script>
	<div id="telefonos" class="ocultar" style="display:none;">
<div id="tels"></div>
<div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Nuevo telefono</h3>
            </div>
            <div class="panel-body" style="text-align:center;">
              <input type="text" id="nuevo_numero" class="form-control" placeholder="Numero nuevo...">
              <input type="text" id="nuevo_comentario" class="form-control" placeholder="Comentario..."><br>
              <button class="btn btn-warning" id="agregar_telefono">Agregar</button>
              <script>
              $("#agregar_telefono").click (function (){
              var datos={ documento: $_GET['documento'],
              			  numero: $("#nuevo_numero").val(),
              			  comentario: $("#nuevo_comentario").val()
              			  };
              $.ajax({
              url: 'php/agregar-telefono.php',
              type:'post',
              data: datos,
              success: function (res){
              alert(res);
              telefonos();
              } 
              });
              
              });
              </script>
            </div>
</div>


</div>
<script>
					function telefonos(){	
						$("#tels").html('');
						$.ajax({
									url:'php/telefonos.php',
									type:'post',
									data: {documento: $_GET['documento']},
									success: function (res){res = JSON.parse(res);
															for (var i in res){
															var e=parseInt(i)+1;
															$("#tels").append('<div class="form-group"><label for="telefono'+res[i].numero+'">Telefono'+e+'</label><input type="text" class="form-control telefono" id="telefono'+res[i].numero+'"><input type="text" class="form-control comentario" id="comentario'+res[i].numero+'" placeholder="Comentario..."><br><button class="btn btn-danger" id="eliminartel'+res[i].numero+'" onclick="eliminar_telefono(this)">Eliminar</button></div><hr>');
															$("#telefono"+res[i].numero).val(res[i].numero);
															$("#comentario"+res[i].numero).val(res[i].comentario);
															}
									}
						});
}
</script>
	
	</div>
	
</div>
<br>
	    <div style="text-align:center"> 
            <button class="btn btn-primary" id="modificar">Modificar</button>
			<script>
			$("#modificar").click(function (){
			modificar();
			modificar_telefono();
			});
			</script>
</div>
       </div>

    </div>
  </body>
<script>var response;

function modificar (){

var datos=   	{		documento: $("#documento").val(),
						tipo_documento: $("#tipo_documento").val(),
						apellido: $("#apellido").val(),
						email: $("#email").val(),
						empresa: $("#empresa").val(),		
						direccion_laboral: $("#direccion_laboral").val(),
						direccion_particular: $("#direccion_particular").val(),
						direccion_laboral2: $("#direccion_laboral2").val(),
						direccion_particular2: $("#direccion_particular2").val(),
						direccion_particular3: $("#direccion_particular3").val(),
						provincia: $("#provincia").val(),
						localidad: $("#localidad").val(),
						codigo_postal: $("#codigo_postal").val()
						};
			$.ajax({
					url:'php/modificar.php',
					type:'post',
					data:datos,
					success: function (res){//res=JSON.parse(res);
											alert(res);
											}		
			});

}

function modificar_telefono (){

var datos=[];
var j = 0;
while (j < document.getElementsByClassName("telefono").length){
			datos[j]={numero : document.getElementsByClassName("telefono")[j].id.replace("telefono", ""),
					  reemplazo : document.getElementsByClassName("telefono")[j].value,
					  comentario : document.getElementsByClassName("comentario")[j].value
			};
			j=j+1;
			}
			$.ajax({
					url:'php/modificar-telefono.php',
					type:'post',
					data:{data : JSON.stringify(datos)},
					success: function (res){
								alert(res);
											}		
			});

}


function eliminar_telefono (elemento){
			var number = $(elemento).attr("id").replace("eliminartel", "");
			$.ajax({
					url:'php/eliminar-telefono.php',
					type:'post',
					data:{numero :number},
					success: function (res){
								alert(res);
								telefonos();
											}		
			});

}

$(function(){
telefonos();
deudor_domicilios();
});

function abrirVentana(url) {
    window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=400");
}

</script>
</html>
