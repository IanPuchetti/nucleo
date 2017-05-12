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
<div class="lead" id="documento"></div>
<div>
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#carpeta').css('display','block');">Carpeta</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#productos').css('display','block');">Producto</a></li>
      </ul>


	<div id="carpeta" class="ocultar">
            <div class="row">
			<div class="col-md-6">
	<div class="form-group">
                <label for="caratula">Caratula</label>
                <input type="text" class="form-control" id="caratula" placeholder="Caratula...">	
	</div>
	<div class="form-group">
                <label for="comentario">Comentario</label>
                <input type="text" class="form-control" id="comentario" placeholder="Comentario...">	
	</div>
	<div class="form-group">
                <label for="sucursal">Sucursal</label>
                <input type="text" class="form-control" id="sucursal" placeholder="Sucursal...">	
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
                <label for="dias_adic">Dias adic</label>
                <input type="number" class="form-control" id="dias_adic" placeholder="Dias adic...">	
   	</div>
	<div class="form-group">
                <label for="legajo">Legajo</label>
                <input type="text" class="form-control" id="legajo" placeholder="Legajo...">	
	    </div>
		<div class="form-group">
                <label for="numero_gestion">Numero gestion</label>
                <input type="number" class="form-control" id="numero_gestion" placeholder="Numero gestion...">	
	    </div>
		<div class="form-group">
                <label for="numero_lote">Numero lote</label>
                <input type="number" class="form-control" id="numero_lote" placeholder="Numero lote...">	
	    </div>
		</div>
		</div>
	</div>
	<div id="productos" class="ocultar" style="display:none;">
	            <div class="row">
			<div class="col-md-6">
	<div class="form-group">
                <label for="numero_operacion">Numero de operación</label>
                <input type="text" class="form-control" id="numero_operacion" placeholder="Numero de operación...">	
                <script>
                $("#numero_operacion").val($_GET['id'])
                </script>
	</div>
			
<div class="form-group">
                <label for="producto">Producto</label>
                <input type="text" class="form-control" id="producto" placeholder="Producto...">	
	</div>
	<div class="form-group">
                <label for="deuda">Deuda</label>
                <input type="text" class="form-control" id="deuda" placeholder="Deuda...">	
	</div><hr>
	<div class="form-group">
                <label for="fecha_deuda">Fecha deuda</label>
                <input type="date" class="form-control" id="fecha_deuda" placeholder="Fecha deuda...">	
	</div>
	<div class="form-group">
                <label for="fecha_mora">Fecha mora</label>
                <input type="date" class="form-control" id="fecha_mora" placeholder="Fecha mora...">	
	</div>
	<div class="form-group">
                <label for="pase_legales">Pase legales</label>
                <input type="text" class="form-control" id="pase_legales" placeholder="Pase legales...">	
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
                <label for="estado">Estado</label>
                <select type="text" id="estado" class="form-control"></select>
  		<script>
                $.ajax({
		url:'php/estados.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								for (var i in res){
								$("#estado").append("<option id='estado"+res[i].id+"'>"+res[i].estado+"</option>");
								}
								}
						});
        </script>
   	</div>
   	
   	<div class="form-group">
                <label for="sub_estado">Sub estado</label>
                <select type="text" id="sub_estado" class="form-control"></select>
  		<script>
                $.ajax({
		url:'php/sub_estados.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								for (var i in res){
								$("#sub_estado").append("<option id='sub_estado"+res[i].id+"'>"+res[i].sub_estado+"</option>");
								}
								}
						});
        </script>
   	</div>
	<div class="form-group">
                <label for="banco">Banco</label>
                <select type="text" id="banco" class="form-control"></select>
  		
  		<script>
                $.ajax({
		url:'php/bancos.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								for (var i in res){
								$("#banco").append("<option id='banco"+res[i].cbanco+"'>"+res[i].dbanco+"</option>");
								}
		}
});
                </script>
    </div>
    	<div class="form-group">
                <label for="nombre_producto">Nombre producto</label>
                <input type="text" class="form-control" id="nombre_producto" placeholder="Nombre producto...">	
    </div>
	<div class="form-group">
                <label for="proxima_accion">Próxima Acción</label>
                <select type="text" id="proxima_accion" class="form-control"></select>
  		  		<script>
                $.ajax({
		url:'php/proximas-acciones.php',
		type:'post',
		success: function (res){res=JSON.parse(res);
								for (var i in res){
								$("#proxima_accion").append("<option id='proxima_accion"+res[i].id+"'>"+res[i].accion+"</option>");
								}
		}
		});
                </script>	
    </div>
    
		</div>
		</div>
	</div>
	<script>var eee;
	function deudor_domicilios (){
									$.ajax({
									url:'php/carpeta-producto.php',
									type:'post',
									data: {id: $_GET['id']},
									success: function (res){
									res = JSON.parse(res);eee=res;
									$("#documento").html($_GET['documento']);
									$("#caratula").val(res[0].caratula);
									$("#comentario").val(res[0].comentario);
									$("#sucursal").val(res[0].sucursal);
									$("#dias_adic").val(res[0].dias_adic);
									$("#legajo").val(res[0].legajo);
									$("#numero_gestion").val(res[0].numero_gestion);
									$("#numero_lote").val(res[0].numero_lote);
									$("#producto").val(res[0].producto);
									$("#deuda").val(res[0].deuda);
									$("#fecha_deuda").val(res[0].fecha_deuda);
									$("#fecha_mora").val(res[0].fecha_mora);
									$("#pase_legales").val(res[0].pase_legales);
									$("#estado"+res[0].estado).attr('selected','true');
									$("#sub_estado"+res[0].sub_estado).attr('selected','true');
									$("#banco"+res[0].banco).attr('selected','true');
									$("#nombre_producto").val(res[0].nombre_producto);
									$("#proxima_accion"+res[0].proxima_accion).attr('selected','true');
									}});
	}
	</script>
	<div id="telefonos" class="ocultar" style="display:none;">
<div id="tels"></div>
<div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Nuevo telefono</h3>
            </div>
            <div class="panel-body" style="text-align:center;">
              <input type="number" id="nuevo_numero" class="form-control" placeholder="Numero nuevo...">
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
	</div>
	
</div>
<br>
	    <div style="text-align:center"> 
            <button class="btn btn-primary" id="modificar">Modificar</button>
			<script>
			$("#modificar").click(function (){
			modificar();
			});
			</script>
</div>
       </div>

    </div>
  </body>
<script>var response, id_caso;

function modificar (){

var datos=   	{		id: $_GET['id'],
						caratula: $("#caratula").val(),
						comentario: $("#comentario").val(),
						sucursal: $("#sucursal").val(),
						dias_adic: $("#dias_adic").val(),		
						legajo: $("#dias_adic").val(),
						numero_gestion: $("#numero_gestion").val(),
						numero_lote: $("#numero_lote").val(),
						producto: $("#producto").val(),
						deuda: $("#deuda").val(),
						fecha_deuda: $("#fecha_deuda").val(),
						fecha_mora: $("#fecha_mora").val(),
						pase_legales: $("#pase_legales").val(),
						estado: $("#estado").children(":selected").attr("id").replace("estado",""),
						sub_estado: $("#sub_estado").children(":selected").attr("id").replace("sub_estado",""),
						banco: $("#banco").children(":selected").attr("id").replace("banco",""),
						nombre_producto: $("#nombre_producto").val(),
						proxima_accion: $("#proxima_accion").children(":selected").attr("id").replace("proxima_accion","")
						
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



$(function(){
deudor_domicilios();
});

function abrirVentana(url) {
    window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=600, height=400");
}


</script>
</html>
