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
 <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

body{
}

.noselect{
  -webkit-touch-callout: none; 
    -webkit-user-select: none; 
     -khtml-user-select: none; 
       -moz-user-select: none; 
        -ms-user-select: none; 
            user-select: none;
}
.header{
  width:100%;
  height:40px;
  background:white;
  padding-top:12px;
  font-size:12px;
  border-bottom:1px solid #ddd;
  /*-webkit-box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  -moz-box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);
  box-shadow: 0px 3px 14px -7px rgba(138,138,138,1);*/
}

.boton, .logout, .logout a{
  padding:5px 10px 5px 10px;
  cursor:pointer;
  text-decoration: none;
  color:#666;
}

.boton:hover, .boton span:hover, .logout a:hover{
  color:#333;
}

.dropdown-menu{
  margin-top:6px;
  border-radius:0px;
  font-size:11px;
}

.no-top{
    border-top:0px;
}


@font-face {
    font-family: Product-Sans;
    src: url('/fonts/Product Sans Regular.ttf');
}

@font-face {
    font-family: Product-Sans-Bold;
    src: url('/fonts/Product Sans Bold.ttf');
}

@font-face {
    font-family: Benton-Sans-Light;
    src: url('/fonts/Benton-Sans-Light.ttf');
}

*{
  font-family: Product-Sans;
  color:#666;
}

.drag{
  -webkit-app-region:drag;
}

.bar{
  width:100%;
  height:15px;
  position:fixed;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: 0px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
}

.trgl{
  color:#aaa;
}


.boton-menu, .boton-menu a{
  font-size:15px;
  padding:10px;
  text-align:center;
  color:white;
  cursor:pointer;
}

.boton-menu:hover, .boton-menu a:hover{
  color:#ddd;
}

.butn{
  border-radius:5px;border:1px solid #ddd;padding:5px 8px 5px 8px;cursor:pointer;background: none;color:#666;
}
.butn:hover, .butn:hover > ul{
  border-color:#95e53d;
}

.circle {
  border-radius: 50%;
  width: 50px;
  height: 50px; 
  text-align: center;
  font-size:35px;
  background:white;
}

.circle span{
    margin-top:-5px;
    margin-left:-10px;
    position:absolute;
    background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: Product-Sans-Bold;
}

.color-gr{
  background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.back-gr{
  background: -webkit-linear-gradient(#07963d, #89bd25);
  color:white;
}

body{
  border:1px solid #ccc;
  overflow-x:hidden;overflow-y:auto;
}

#reload:hover{
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}

#reload{
  width:22px;margin-top:4px;-webkit-transition: -webkit-transform .4s ease-in-out;transition:transform .4s ease-in-out;cursor:pointer;
}

.block{
  width:100%;
  height:40px;
  position:fixed;
  top:0px;
  left:0px;
}


.side{
  z-index:0;background:white;position:fixed;top:40px;left:150px;width:850px; height:90%;padding:10px;font-size:17px;overflow-y:auto;overflow-x:hidden;
}

.caja{
  padding:20px;
  border-radius:15px;
  border:1px solid #ddd;
  width:310px;
}

.dias{
  padding:3px;margin:1px;border-radius:5px;border:1px solid #ddd;cursor:pointer;display:inline-block;width:30px;text-align: center;
}

.dias:hover{
  background:#eee;
}

select{
  background:none;
  width:200px !important;
}

.boton a{
  text-decoration: none;
  color:#777;
}

.buscador{
    margin-top:0px;
    padding-top:3px;
}


input{
  border:0px;
  font-size:12px;
}

input:focus{
    outline: none;
}



.busqueda{
  height: 305px;
  overflow-y:scroll;
  overflow-x:hidden;
  border-bottom:1px solid #ddd;
}


.left{
  width:10%;position:absolute;top:83px;border-top:1px solid #eee;padding-top:5px;
}

.button{
  cursor:pointer;
  border:1px solid #ddd;border-radius:5px;
  padding:2px;
}
.button:hover>#change{
  background:#eafada;
}

input{
	background:none;
}

.down{
  position:absolute;
  top:285px;
  border-top:1px #ddd solid;
  width:100%;
  padding:5px;
}

.tooltip-inner {
  background-color: #0b3 !important;
  /*!important is not necessary if you place custom.css at the end of your css calls. For the purpose of this demo, it seems to be required in SO snippet*/
  color: #fff;
}

.tooltip.top .tooltip-arrow {
  border-top-color: #0b3;
}

.tooltip.right .tooltip-arrow {
  border-right-color: #0b3;
}

.tooltip.bottom .tooltip-arrow {
  border-bottom-color: #0b3;
}

.tooltip.left .tooltip-arrow {
  border-left-color: #0b3;
}

select{
  background: none;
  border:0px;
  width:175px !important;
}
select:hover, select:focus, select:active, select:checked{
  background: white !important;
}

.side-menu{
	position:fixed;left:0px;width:100px;top:41px;z-index:2;height:100%;border-right:1px solid #ddd;text-align:center;background:#fff;
}

.side-menu div{
	padding:10px;
}

.side-menu div:hover{
	background:#fafafa;
	    cursor:pointer;

}

.side-menu div a{
	text-decoration: none;
  background: -webkit-linear-gradient(#07963d, #89bd25);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

#registrar{
  position:fixed;
  bottom:5px;
  left:15px;
  z-index:2;
}

.selector{
  padding:5px;border-radius:5px;border:1px solid #ddd;text-align: center;
}

.selector a{
  padding:5px 15px 5px 15px;
  text-decoration:none;
  cursor:pointer;
  font-size:12px;
  color:#666;
}

.selector:hover{
  border-color:#abdf47;
}

.selector a:hover{
  color:#abdf47;
}

.ocultar{
  width:350px;
}

</style>
<script>
function json_tabla (id_tabla, objeto){
  var headers = Object.keys(objeto[0]);
  $("#"+id_tabla).html('');
  $("#"+id_tabla).append("<tr id='thead_"+id_tabla+"'></tr>");
  for (var i in headers){
              $("#thead_"+id_tabla).append("<td>"+headers[i]+"</td>");
  }
  for (var i in objeto){
               $("#"+id_tabla).append("<tr id='tr_"+id_tabla+i+"'></tr>");
              for (var e in headers){
                $("#tr_"+id_tabla+i).append("<td>"+objeto[i][headers[e]]+"</td>");
  }
}
}
</script>
  </head>

  <body oncontextmenu="return false;" class="noselect">
    <div class="bar drag">
    </div>
<div class="header">
  <div style="position:absolute;width:1000px;">
  <span class="dropdown boton">
    <a href="/">Inicio</a>
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Campañas <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/gerencia/campanias/ver">Ver</a></li>
      <li><a href="/gerencia/campanias/generar/">Generar</a></li>
      <li><a href="/gerencia/campanias/grupos/">Grupos</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
    <span class="dropdown-toggle" data-toggle="dropdown">Panel <span class="trgl">&#x25BE;</span></span>
    <ul class="dropdown-menu no-top">
      <li><a href="/gerencia/panel/gestiones">Gestiones</a></li>
    </ul>
  </span>
  <span class="dropdown boton">
            <span data-toggle="dropdown">Administración de Cartera <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/carga/comparacion" class="ventana">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1" href="/gerencia/carga/masiva" class="ventana">Masiva</a></li>
                  <li><a tabindex="-1" href="/gerencia/carga/manual" class="ventana">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Modificación masiva</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1" href="/gerencia/modificacion/productos" class="ventana">Productos</a></li>
                  <li><a tabindex="-1" href="/gerencia/modificacion/deudores" class="ventana">Deudores</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu ">
                  <li><a tabindex="-1"href="/gerencia/carga/enriquecer" class="ventana">Telefonos / Mails</a></li>
                  <li><a href="/gerencia/carga/reportes" class="ventana">Datos Enriquecidos</a></li>
                </ul>
              </li>
              <li><a href="/gerencia/baja/" class="ventana">Cambio de estado</a></li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Gestión de cobranzas <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/gestion-de-cobranzas/manual" class="ventana">Manual</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/campania" class="ventana">Campaña</a></li>
              <li><a href="/gerencia/gestion-de-cobranzas/consultas" class="ventana">Consultas</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/gerencia/carga/gestiones-automaticas" class="ventana">Gestiones automáticas</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Exportar <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/exportar/casos" class="ventana">Casos</a></li>
              <li><a href="/gerencia/exportar/telefonos" class="ventana">Telefonos</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Para enviar</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/exportar/sms" class="ventana">SMS</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/mails" class="ventana">Mails</a></li>
                  <li><a tabindex="-1" href="/gerencia/exportar/ivr" class="ventana">IVR</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Informes</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/exportar/propuestas" class="ventana">Propuestas</a></li>
                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton">
            <span data-toggle="dropdown">Administración <span class="trgl">&#x25BE;</span></span>
        <ul class="dropdown-menu multi-level no-top" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/gerencia/administracion/responsables" class="ventana">Responsables</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">ABMS</a>
                <ul class="dropdown-menu " style="margin-left:-318px;">
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/usuarios" class="ventana">Operadores</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/bancos" class="ventana">Bancos</a></li>
                  <li><a tabindex="-1" href="/gerencia/administracion/abms/liquidadores" class="ventana">Liquidadores</a></li>

                </ul>
              </li>
            </ul>
    </span>
    <span class="dropdown boton logout">
    <a href="/.php/logout.php">Salir</a>
  </span>
</div>
</div>
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
</html>
