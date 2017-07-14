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
	<link rel="icon" href="../../icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="../../.css/bootstrap.min.css"/>
	<link href="../../.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="../../.js/jquery.min.js"></script>
	<script type="text/javascript" src="../../.js/bootstrap.js"></script>
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
        <li class="active"><a href=".">Usuarios</a></li>
        <li ><a href="../bancos">Bancos</a></li>
              
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id="logout"><a href="#"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
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
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Puesto</th>
                <th></th>
                <th></th>
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
			url:'php/traer-usuarios.php',
			type:'post',
			success:function (res){
								    res=JSON.parse(res);
								    for (var i in res)
								    	{
								    	if(res[i].puesto=='adm'){
								    		$("#cargados").append('<tr><td><input type="text" id="usuario-'+res[i].id+'" value="'+res[i].user+'" class="form-control"></td><td><input type="password" id="password-'+res[i].id+'" value="'+res[i].pass+'" class="form-control"></td><td><select class="btn btn-default" id="puesto-'+res[i].id+'"><option selected>Administración</option><option>Gerencia</option><option>Supervision</option><option>General</option></select></td><td><button class="btn btn-success" id="modif-'+res[i].id+'" onclick="modificar(this)">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminar(this)" id="elim-'+res[i].id+'">Eliminar</button></td></tr>');
								    		}
								    	else{
								    		if(res[i].puesto=='ger'){
								    			$("#cargados").append('<tr><td><input type="text" id="usuario-'+res[i].id+'" value="'+res[i].user+'" class="form-control"></td><td><input type="password" id="password-'+res[i].id+'" value="'+res[i].pass+'" class="form-control"></td><td><select class="btn btn-default" id="puesto-'+res[i].id+'"><option>Administración</option><option selected>Gerencia</option><option>Supervision</option><option>General</option></select></td><td><button class="btn btn-success" id="modif-'+res[i].id+'" onclick="modificar(this)">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminar(this)" id="elim-'+res[i].id+'">Eliminar</button></td></tr>');
								    		}else{
								    		if(res[i].puesto=='sup'){
								    			$("#cargados").append('<tr><td><input type="text" id="usuario-'+res[i].id+'" value="'+res[i].user+'" class="form-control"></td><td><input type="password" id="password-'+res[i].id+'" value="'+res[i].pass+'" class="form-control"></td><td><select class="btn btn-default" id="puesto-'+res[i].id+'"><option>Administración</option><option>Gerencia</option><option selected>Supervision</option><option>General</option></select></td><td><button class="btn btn-success" id="modif-'+res[i].id+'" onclick="modificar(this)">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminar(this)" id="elim-'+res[i].id+'">Eliminar</button></td></tr>');
								    		}else{
								    			$("#cargados").append('<tr><td><input type="text" id="usuario-'+res[i].id+'" value="'+res[i].user+'" class="form-control"></td><td><input type="password" id="password-'+res[i].id+'" value="'+res[i].pass+'" class="form-control"></td><td><select class="btn btn-default" id="puesto-'+res[i].id+'"><option>Administración</option><option>Gerencia</option><option>Supervision</option><option selected>General</option></select></td><td><button class="btn btn-success" id="modif-'+res[i].id+'" onclick="modificar(this)">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminar(this)" id="elim-'+res[i].id+'">Eliminar</button></td></tr>');
								    		}
								    		}
								    		}
								    	}	
								    	}		  
			});
			}
			
			traerusuarios();
			
			function modificar (element){
					var modifid = $(element).attr("id").replace("modif-","");
	    			
	    			if($("#puesto-"+modifid).val()=="Administración"){
	    			var datos={ id: modifid,
	    						user:$("#usuario-"+modifid).val(),
	    						pass:$("#password-"+modifid).val(),
	    						puesto:'adm'
	    					  };
	    			}else{
	    				if($("#puesto-"+modifid).val()=="Gerencia"){
	    				var datos={ id: modifid,
	    							user:$("#usuario-"+modifid).val(),
	    							pass:$("#password-"+modifid).val(),
	    							puesto:'ger'
	    						  };
	    				}else{
	    				if($("#puesto-"+modifid).val()=="Supervision"){
	    				var datos={ id: modifid,
	    							user:$("#usuario-"+modifid).val(),
	    							pass:$("#password-"+modifid).val(),
	    							puesto:'sup'
	    						  };
	    				}else{
	    					var datos={
	    							id: modifid,
	    							user:$("#usuario-"+modifid).val(),
	    							pass:$("#password-"+modifid).val(),
	    							puesto:'gen'
	    						  };
	    				}
	    				}
	    			}
	    			
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
                <label for="usuario_nuevo">Usuario</label>
                <input type="text" class="form-control" id="usuario_nuevo" placeholder="Usuario...">
                <label for="password_nuevo">Contraseña</label>
                <input type="password" class="form-control" id="password_nuevo" placeholder="Contraseña...">
                <label for="puesto_nuevo">Puesto</label><br>
                <select class="btn btn-default" id="puesto_nuevo">
                	<option>Administración</option>
                	<option>Gerencia</option>
                	<option>Supervision</option>                	
                	<option>General</option>                	
                </select>
   				</div><br>
   				<div style="text-align:center;">
	    		<button class="btn btn-danger" id="boton-nuevo">Registrar</button>
	    		<script>
	    			$("#boton-nuevo").click(function(){
	    			if($("#puesto_nuevo").val()=="Administración"){
	    			var datos={
	    						user:$("#usuario_nuevo").val(),
	    						pass:$("#password_nuevo").val(),
	    						puesto:'adm'
	    					  };
	    			}else{
	    				if($("#puesto_nuevo").val()=="Gerencia"){
	    			var datos={
	    						user:$("#usuario_nuevo").val(),
	    						pass:$("#password_nuevo").val(),
	    						puesto:'ger'
	    					  };
	    			}else{
	    			if($("#puesto_nuevo").val()=="Supervision"){
	    			var datos={
	    						user:$("#usuario_nuevo").val(),
	    						pass:$("#password_nuevo").val(),
	    						puesto:'sup'
	    					  };
	    			}else{
	    					var datos={
	    							user:$("#usuario_nuevo").val(),
	    							pass:$("#password_nuevo").val(),
	    							puesto:'gen'
	    						  };
	    				}
	    				}
	    			}
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



<script>
$("#logout").click(function (){
$.ajax({
	url:'../../.php/logout.php',
	type:'post',
	success:function(res){
if(res=='ok'){
$(location).attr('href', '../../');
}
}
});
});
</script>

</html>
