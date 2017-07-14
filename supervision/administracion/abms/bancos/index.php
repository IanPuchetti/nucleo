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
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/inicio">Inicio</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campañas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/campanias/ver">Ver</a></li>
                <li><a href="/gerencia/campanias/generar">Generar</a></li>
                <li><a href="/gerencia/campanias/grupos">Grupos</a></li>              
              </ul></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/gerencia/panel/gestiones">Gestiones</a></li>
                <li><a href="/gerencia/panel/estadisticas">Estadisticas</a></li>          
              </ul>
        </li>      
        
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/gerencia/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación Masiva</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/modificacion/productos">Productos</a></li>
                  <li><a tabindex="-1" href="/gerencia/modificacion/deudores">Deudores</a></li>
                </ul>
              </li>
              <li><a class="ventana" href="/gerencia/baja/">Cambio de Estado</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/gerencia/carga/enriquecer">Telefonos / Emails</a></li>
                  <li><a href="/gerencia/carga/reportes">Datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Gestión de Cobranzas<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/gestion-de-cobranzas/manual">Manual</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/campania">Campaña</a></li>
              <li><a href="#">Automática</a></li>  
              <li><a href="/gerencia/gestion-de-cobranzas/consultas">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Cargar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/carga/gestiones-automaticas">Gestiones Automáticas</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Exporte<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/exportar/casos">Casos</a></li>
              <li><a href="/gerencia/exportar/telefonos">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/exportar/sms">SMS</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails">Mails</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails">IVR</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Informes</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/exportar/propuestas">Propuestas</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/cuotas_cero">Cuotas Cero</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/administracion/responsables">Responsables</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">ABMS</a>
                <ul class="dropdown-menu pull-left">
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/usuarios">Operadores</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/bancos">Bancos</a></li>
                  <!--<li><a tabindex="-1" href="/gerencia/administracion/abms/estados">Estados</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/sub-estados">Sub Estados</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/calificaciones">Calificaciones</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/motivos">Motivos</a></li>-->
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/liquidadores">Liquidadores</a></li>
                </ul>
              </li>
        </ul>
        </li>
      <ul class="nav navbar-nav navbar-right">
        <li id="logout"><a href="/.php/logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
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
                <label for="banco_nuevo">Banco</label>
                <input type="text" class="form-control" id="banco_nuevo" placeholder="Banco...">
                <label for="abrev_nuevo">Abreviación</label>
                <input type="text" class="form-control" id="abrev_nuevo" placeholder="Abreviación...">
                <label for="tasa_nuevo">Tasa</label>
                <input type="number" class="form-control" id="tasa_nuevo" placeholder="Tasa...">
                <label for="honorarios_nuevo">Honorarios</label>
                <input type="number" class="form-control" id="honorarios_nuevo" placeholder="Honorarios...">
                <label for="gastos_nuevo">Gastos</label>
                <input type="number" class="form-control" id="gastos_nuevo" placeholder="Gastos...">
                <label for="tasa_frances_nuevo">Tasa del sistema frances</label>
                <input type="number" class="form-control" id="tasa_frances_nuevo" placeholder="Tasa del sistema frances...">
   				</div><br>
   				<div style="text-align:center;">
	    		<button class="btn btn-danger" id="boton-nuevo">Registrar</button>
	    		<script>
	    			$("#boton-nuevo").click(function(){
	    			
	    			var datos={
	    						dbanco:$("#banco_nuevo").val(),
	    						abrev:$("#abrev_nuevo").val(),
	    						tasa:$("#tasa_nuevo").val(),
	    						honorarios:$("#honorarios_nuevo").val(),
	    						gastos:$("#gastos_nuevo").val(),
	    						tasa_frances:$("#tasa_frances_nuevo").val()
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
