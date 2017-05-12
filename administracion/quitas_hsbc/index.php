<?php
session_start();
if(isset($_SESSION['user'])){

}
else{
header("Location: /");
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

a{
cursor:pointer;
color:#b00;
}

a:hover{
color:#700;
}
table{
width:100%;
}
</style>


  </head>

  <body>
  <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Nucleo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
        <li><a href="../">Inicio</a></li>
        <li ><a href="../usuarios">Usuarios</a></li>
        <li class="active"><a href=".">Bancos</a></li>
              
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/.php/logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
          <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#actuales').css('display','block');">Actuales</a></li>
        <li role="presentation"><a onclick="$('.ocultar').css('display','none');$('#nuevo').css('display','block');">Nuevo</a></li>

      </ul>
			<div class="ocultar" id="actuales">
			<table class="table table-condensed">
            <thead>
              <tr>
                <th>Banco</th>
                <th>Abrev</th>
                <th>Tasa</th>
                <th>Hono</th>
                <th>Gastos</th>
                <th>Tasa_FR</th>
              </tr>
            </thead>
            <tbody id="cargados">
              
            </tbody>
          </table>
			</div>
			<script>
			function traerusuarios() {
			$("#cargados").html('');
			$.ajax({
			url:'php/traer-bancos.php',
			type:'post',
			success:function (res){
								    res=JSON.parse(res);
								    for (var i in res)
								    	{
								    	$("#cargados").append('<tr><td><input type="text" id="banco-'+res[i].cbanco+'" value="'+res[i].dbanco+'" class="form-control"></td><td><input type="text" style="width:70px;" id="abrev-'+res[i].cbanco+'" value="'+res[i].abrev+'" class="form-control"></td><td><input type="number" id="tasa-'+res[i].cbanco+'" style="width:100px;" class="form-control" value="'+res[i].tasa+'"></td><td><input type="number" id="honorarios-'+res[i].cbanco+'" value="'+res[i].honorarios+'" class="form-control" style="width:100px;"></td><td><input style="width:100px;" type="number" id="gastos-'+res[i].cbanco+'" value="'+res[i].gastos+'" class="form-control"></td><td><input style="width:100px;" type="number" id="tasa_frances-'+res[i].cbanco+'" value="'+res[i].tasa_frances+'" class="form-control"></td><td><button class="btn btn-success" id="modif-'+res[i].cbanco+'" onclick="modificar(this)">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminar(this)" id="elim-'+res[i].cbanco+'">Eliminar</button></td></tr>');
								    	}	
								    	}		  
			});
			}
			
			traerusuarios();
			
			function modificar (element){
					var modifid = $(element).attr("id").replace("modif-","");
	    			
	    			var datos={ id: modifid,
	    						dbanco:$("#banco-"+modifid).val(),
	    						abrev:$("#abrev-"+modifid).val(),
	    						tasa:$("#tasa-"+modifid).val(),
	    						honorarios:$("#honorarios-"+modifid).val(),
	    						gastos:$("#gastos-"+modifid).val(),
	    						tasa_frances:$("#tasa_frances-"+modifid).val()
	    					  };
	    			
	    			$.ajax({
	    			url:'php/modificar.php',
	    			type:'post',
	    			data:datos,
	    			success: function (res){
	    					alert(res);
	    					traerusuarios();
	    			}
	    			});
	    			}
	    			
			
			
			function eliminar(element){	
				var datos_elim={
								id: $(element).attr("id").replace("elim-","")
							   };
				$.ajax({
					url:'php/eliminar.php',
					type:'post',
					data:datos_elim,
					success: function (res){
												alert(res);
												traerusuarios();
					}
				});
			}
			
			</script>
			
	    	<div id="nuevo" class="ocultar" style="display:none;">
	    	<div class="panel panel-danger">
	<div class="panel-heading"><h3 class="panel-title">Nuevo</h3></div>
	<div class="panel-body">
	<div class="form-group">
                <label>Numero de Gestion</label>
                <input type="text" class="form-control" id="n_gestion_nuevo" placeholder="Banco...">
                <label>Cuotas</label>
                <input type="text" class="form-control" id="cuotas_nuevo" placeholder="Abreviación...">
                <label>Tasa</label>
                <input type="number" class="form-control" id="tasa_nuevo" placeholder="Tasa...">
                <label>Anticipo</label>
                <input type="number" class="form-control" id="anticipo_nuevo" placeholder="Honorarios...">
                <label>Descuento</label>
                <input type="number" class="form-control" id="descuento_nuevo" placeholder="Gastos...">
                <label>Maximo</label>
                <input type="number" class="form-control" id="maximo_nuevo" placeholder="Tasa del sistema frances...">
   				</div><br>
   				<div style="text-align:center;">
	    		<button class="btn btn-danger" id="boton-nuevo">Registrar</button>
	    		<script>
	    			$("#boton-nuevo").click(function(){
	    			
	    			var datos={
	    						n_gestion:$("#n_gestion_nuevo").val(),
	    						cuotas:$("#cuotas_nuevo").val(),
	    						tasa:$("#tasa_nuevo").val(),
	    						anticipo:$("#anticipo_nuevo").val(),
	    						descuento:$("#descuento_nuevo").val(),
	    						maximo:$("#maximo_nuevo").val()
	    					  };
	    			
	    			$.ajax({
	    			url:'php/nuevo.php',
	    			type:'post',
	    			data:datos,
	    			success: function (res){
	    					alert(res);
	    					traerusuarios();
	    			}
	    			})
	    			});
	    		</script>
	    		</div>
	    		
			</div>

	    	    
	    	</div>
	    	</div>
    </div>
  </body>
</html>
