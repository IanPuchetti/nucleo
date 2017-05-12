<?php
session_start();
$operador= $_SESSION['id'];
$usuario = $_SESSION['user'];
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: ../");
}
$date = getdate();
?>
<!DOCTYPE html>
<html lang="es">

  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="css/tooltip-view.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/.css/signin.css"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/.js/FileSaver.min.js"></script>
	<script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script type="text/javascript" src="/.js/ng-infinite-scroll.js"></script>
  <script type="text/javascript" src="/.js/angular-filter.min.js"></script>
  <script type="text/javascript" src="/.js/socket.io.js"></script>
  <script type="text/javascript" src="/.js/ngsocket.io.js"></script>
	<script type="text/javascript" src="/.js/tooltip-viewport.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}

table tr td{
  text-align: left;
  margin:5px;
}

input, .btn, .input-group-addon, .form-control{
  border-radius:0px;
}

.fila{
  cursor:pointer;border-bottom:1px solid #aaa;padding-bottom:2px;
}
.fila:hover{
  background:#888;
}

.filita{
  cursor:pointer;border-bottom:1px solid #aaa;padding-bottom:2px;background:#555;
}
.filita:hover{
  background:#888;
}

</style>
	<script src="js/app.js"></script>
  <?php echo "<script> var usuario = '$usuario' , operador = '$operador'</script>"; ?>
  </head>

<body ng-app="myApp">
<nav class="navbar  navbar-static-top navbar-default">
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
        <li class="active"><a href="/inicio">Inicio</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Cobranzas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/general/gestion-de-cobranzas/manual">Manual</a></li>
                <li><a href="/general/gestion-de-cobranzas/campania">Campaña</a></li>   
                <li><a href="/general/gestion-de-cobranzas/consultas">Consultas</a></li>              
              </ul>
        </li>
        <li class="dropdown">
            <a role="button" data-toggle="dropdown" href="#">
                Administración de Cartera <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-spanledby="dropdownMenu">
              <li><a href="/general/carga/comparacion">Comparación</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Carga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="/general/carga/masiva">Masiva</a></li>
                  <li><a tabindex="-1" href="/general/carga/manual">Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Enriquecimiento</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1"href="/general/carga/enriquecer">Telefonos / Mails</a></li>
                  <li><a href="/general/carga/reportes">data.datos Enriquecidos</a></li>
                </ul>
              </li>
            </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exportar<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/general/exportar/casos">Casos</a></li> 
                <li><a href="/general/exportar/telefonos">Telefonos</a></li> 
              </ul>
              </li>      
        <li id="logout"><a href="/.php/logout.php">Salir</a></li>
      
    </div>
  </div>
</nav>
<div style="width:50%;height:300px;border-top:0px;margin-top:-20px;">
  <div class="navbar-header pull-left" id="myNavbar" style="width:100%;"  ng-controller="filtro" ng-show="data.gestionando==0">
    <span class=" input-group" style="width:100%;">
      <span class="btn input-group-addon" style="border-radius:0px;color:white;background:#4574a9;border-color:#4574a9;height:24px;font-size:11px;" ng-click="buscar.rapido();">Buscar</span>
      <input type="text" ng-model="rapido.apellido" placeholder="Apellido y nombre..." ng-keypress="enter($event.keyCode)" class="form-control" style="border-color:#aaa;height:25px;font-size:10px;border-right:0px;width:33.3%;">
      
      <input type="text" class="form-control" style="border-color:#aaa;height:25px;font-size:10px;border-right:0px;width:33.3%" placeholder="Numero de documento..." ng-model="rapido.documento" ng-keypress="enter($event.keyCode)">
      <input type="text" placeholder="Numero de telefono..." class="form-control" style="border-color:#aaa;height:25px;font-size:10px;width:33.3%;" ng-model="rapido.telefono" ng-keypress="enter($event.keyCode)">
  </span><span class=" input-group" style="width:100%;">
      <span class="btn input-group-addon" style="border-radius:0px;height:24px;font-size:11px;">Banco</span>
      <select class="form-control" placeholder="Nombre del archivo" style="border-radius:0px;border-color:#aaa;height:25px;font-size:10px;" ng-model="rapido.banco" ng-options="banco.cbanco as banco.dbanco for banco in data.bancos"><option></option></select>
      <span class="btn input-group-addon" style="border-radius:0px;color:black;background:#fff;border-color:#aaa;height:24px;font-size:11px;" ng-click="rapido={}">Limpiar</span>
      <!--<span class="copy input-group-addon" data-clipboard-action="copy" data-clipboard-target="#tocopy">Copy</span><input id="tocopy" type="text" style="position:fixed;top:-300px;" ng-model="rapido.telefono">-->
    </span>  
</div>
<div style="width:100%;float:left;" ng-controller="busqueda" ng-show="data.gestionando==0">
<div style="height:250px;overflow-y:auto;margin-top:0px;" class="tablon" >
<table ng-init="limite=20;orden='documento';" style="width:100%;">
  <thead>
      <tr style="border-bottom:1px solid #ddd;width:100%;background:white;font-size:10px;">
        <td ng-click="ordenar('apellido')" id="apellido" ng-init="orden='apellido';limite=20;" style="cursor:pointer;padding-left:20px;padding-top:5px;">APELLIDO Y NOMBRE</td>
        <td ng-click="ordenar('documento')" id="documento" style="cursor:pointer;padding-left:20px;padding-top:5px;">DOCUMENTO</td>
        <td ng-click="ordenar('estado')" id="estado" style="cursor:pointer;padding-left:20px;padding-top:5px;">ESTADO</td>
      </tr>
    </thead>
    <tbody class="tablon" ng-if="data.volver==0" style="font-size:10px;background:#666;color:#fff;">
      <tr ng-if="i<limite" ng-repeat="(i, deudor) in ::data.listado | orderBy: orden " ng-click="data.seleccionar(deudor.documento)" id="{{deudor.documento}}" class="fila">
        <td style="padding-left:20px;">{{deudor.apellido}}</td>
        <td style="padding-left:20px;">{{deudor.documento}}</td>
        <td style="padding-left:20px;">{{deudor.estado}}</td>
      </tr>
      <tr infinite-scroll="bajar()" infinite-scroll-container='".tablon"' infinite-scroll-distance="1" infinite-scroll-disabled="!data.listado || limite>=data.listado.length"></tr>
    </tbody>
</table>
</div>
<div class="input-group " style="margin-bottom:-40px;"><span class="input-group-addon">Cantidad de resultados</span><span class="form-control" style="font-size:10px;">{{data.listado.length}}</span></div>
</div>
</div>
<div style="width:50%;float:right;margin-top:-302px;background:#eee;margin-bottom:-40px;heigth:500px;" id="derecha">
<div  ng-controller="deudor" >
  <div ng-show="data.datos">
    <span class="btn btn-default" style="font-size:10px;padding:2px 20px 2px 20px;border-top:none;" ng-click="data.datos='deudor'">Deudor</span><span  ng-click="data.datos='domicilios'" class="btn btn-default" style="font-size:10px;padding:2px 20px 2px 20px;border-top:none;">Domicilios</span><span class="btn btn-default" style="font-size:10px;padding:2px 20px 2px 20px;border-top:none;" ng-click="data.datos='telefonos'">Telefonos</span><span style="font-size:10px;padding:2px 20px 2px 20px;border-top:none;color:#4574a9;" class="btn btn-default" ng-click="data.datos='productos'">Productos</span><span  style="font-size:10px;padding:2px 20px 2px 20px;border-top:none;" class="btn btn-default" ng-show="data.deudor.link"><a target="_blank" href="{{data.deudor.link}}" class="accion">Reporte</a></span>
  </div>
  <div ng-show="data.datos=='deudor'" style="padding:10px;">
  <div class="input-group"><span class="input-group-addon">Apellido y nombre</span><input class="form-control" ng-model="data.deudor.apellido=data.deudor.apellido"></div>
  <div class="input-group"><span class="input-group-addon">Documento</span><input class="form-control" ng-model="data.deudor.documento=data.deudor.documento"></div>
  <div class="input-group"><span class="input-group-addon">Tipo documento</span><input class="form-control" ng-model="data.deudor.tipo_documento=data.deudor.tipo_documento"></div>
  <div class="input-group"><span class="input-group-addon">Email</span><input class="form-control" ng-model="data.deudor.email=data.deudor.email"></div>
  <div class="input-group"><span class="input-group-addon">Empresa</span><input class="form-control" ng-model="data.deudor.empresa=data.deudor.empresa"></div>
  <div class="input-group"><span class="input-group-addon">Responsable</span><input class="form-control" ng-model="data.deudor.responsable=data.deudor.responsable"></div>
  </div>
  <div  ng-show="data.datos=='domicilios'"  style="padding:10px;">
  <div class="input-group"><span class="input-group-addon">Direccion particular 1</span><input class="form-control" ng-model="data.deudor.direccion_particular=data.deudor.direccion_particular"></div>
  <div class="input-group"><span class="input-group-addon">Direccion particular 2</span><input class="form-control" ng-model="data.deudor.direccion_particular2=data.deudor.direccion_particular2"></div>
  <div class="input-group"><span class="input-group-addon">Direccion particular 3</span><input class="form-control" ng-model="data.deudor.direccion_particular3=data.deudor.direccion_particular3"></div>
  <div class="input-group"><span class="input-group-addon">Direccion laboral 1</span><input class="form-control" ng-model="data.deudor.direccion_laboral1=data.deudor.direccion_laboral1"></div>
  <div class="input-group"><span class="input-group-addon">Direccion laboral 2</span><input class="form-control" ng-model="data.deudor.direccion_laboral2=data.deudor.direccion_laboral2"></div>
  <div class="input-group"><span class="input-group-addon">Provincia</span><input class="form-control" ng-model="data.deudor.provincia=data.deudor.provincia"></div>
  <div class="input-group"><span class="input-group-addon">Localidad</span><input class="form-control" ng-model="data.deudor.localidad=data.deudor.localidad"></div>
  <div class="input-group"><span class="input-group-addon">Codigo postal</span><input class="form-control" ng-model="data.deudor.codigo_postal=data.deudor.codigo_postal"></div>
  </div>
  <div ng-show="data.datos=='telefonos'"  style="padding:10px;">
      <div class="input-group" style="margin-bottom:5px;padding:10px;">
        <input type="text" ng-model="data.telefono_nuevo.numero" style="width:50%;font-size:10px;" placeholder="Nuevo numero..." class="form-control">
        <input type="text" ng-model="data.telefono_nuevo.comentario" placeholder="Comentario..." style="width:50%;font-size:10px;" class="form-control">
        <span class="input-group-addon btn" style="background:#6f9841;color:white;"  ng-click="data.agregar_telefono()" ng-hide="data.telefono_nuevo.numero.length < 5">Agregar telefono</span><span class="input-group-addon btn" style="background:#6f9841;color:white;"  ng-click="data.agregar_telefono()" ng-show="data.telefono_nuevo.numero.length < 5" disabled>Agregar telefono</span>
        </div>
      <div ng-repeat="(n,telefono) in data.telefonos" class="input-group">
        <span class="input-group-addon" style="background:#666;color:white;">Telefono {{n+1}}</span><input class="form-control" ng-model="telefono.numero=telefono.numero">
        <span class="input-group-addon">Comentario</span><input class="form-control" ng-model="data.telefonos[n].comentario">
        <span class="input-group-addon btn btn-default" style="background:white;" ng-click="modificar_telefono(n)">Modificar</span>
      </div>
  </div>
</div>
  <div ng-controller="productos" ng-show="data.datos=='productos' || data.datos=='producto'" style="height:142.5px;overflow-y:auto;">
    <table ng-repeat="banco in data.productos | groupBy: 'banco'" style="width:100%">
      <tr style="background:white;font-size:10px;height:15px;width:100%;"><td colspan="3" style="padding:5px">{{banco[0].dbanco}} <span style="float:right"><span ng-click="gestion();data.gestion.banco = banco[0].dbanco; data.gestion.cbanco = banco[0].banco" class="btn btn-default" style="font-size:10px;padding:2px 10px 2px 10px;margin:0px;background:#4574a9;color:white;border-color:#4574a9;">Gestionar</span><span ng-click="data.descargar_carpeta(banco[0].banco);" class="btn btn-default" style="font-size:10px;padding:2px 10px 2px 10px;margin:0px;">Descargar carpeta</span><span class="btn btn-default" ng-click="data.ver_propuesta(banco[0].banco);" style="font-size:10px;padding:2px 10px 2px 10px;margin:0px;">Propuesta</span></span></span>
      <tr ng-repeat="producto in banco" class="table-body producto" ng-click="seleccionar(producto.numero_operacion);data.datos='producto'" id="{{producto.numero_operacion}}" style="font-size:10px;padding:5px;cursor:pointer;">
        <td style="padding:5px;">{{producto.producto}}</td>
        <td ng-if="producto.dolar==0" style="padding:5px;">${{producto.deuda}}</td><td  style="padding:5px;" ng-if="producto.dolar==1">US${{producto.deuda}}</td>
        <td style="padding:5px;">{{producto.fecha_deuda | date: "dd/MM/yyyy"}}</td>
      </tr>
    </table>
  </div>
  <div ng-controller="producto" ng-show="data.datos=='producto'" style="border-top:1px solid #ddd;">
    <div style="padding:5px;margin:10px;max-height:142.5px;overflow-y:auto;">
      <div class="input-group"><span class="input-group-addon">Numero Operacion</span><input class="form-control" ng-model="data.producto.numero_operacion=data.producto.numero_operacion"></div>      
      <div class="input-group"><span class="input-group-addon">Caratula</span><input class="form-control" ng-model="data.producto.caratula=data.producto.caratula"></div>
      <div class="input-group"><span class="input-group-addon">Sucursal</span><input class="form-control" ng-model="data.producto.sucursal=data.producto.sucursal"></div>
      <div class="input-group"><span class="input-group-addon">Legajo</span><input class="form-control" ng-model="data.producto.legajo=data.producto.legajo"></div>
      <div class="input-group"><span class="input-group-addon">Numero gestión</span><input class="form-control" ng-model="data.producto.numero_gestion=data.producto.numero_gestion"></div>
      <div class="input-group"><span class="input-group-addon">Producto</span><input class="form-control" ng-model="data.producto.producto=data.producto.producto"></div>
      <div class="input-group"><span class="input-group-addon">Deuda</span><span class="input-group-addon" ng-show="data.producto.dolar==1">US$</span><span class="input-group-addon" ng-show="data.producto.dolar!=1">$</span><input class="form-control" ng-model="data.producto.deuda=data.producto.deuda"></div>
    <div class="input-group"><span class="input-group-addon">Fecha ingreso</span><span class="form-control"> {{data.producto.fecha_deuda | date:"dd/MM/yyyy"}}</span></div>
      <div class="input-group"><span class="input-group-addon">Fecha mora</span><span class="form-control"> {{data.producto.fecha_mora | date:"dd/MM/yyyy"}}</span></div>
      <div class="input-group"><span class="input-group-addon">Fecha ult. cobro</span><span class="form-control"> {{data.producto.fecha_ult_cobro == '0000-00-00' ? '-' : (data.producto.fecha_ult_cobro | date: 'dd/MM/yyyy')}}</span></div>
      <div class="input-group"><span class="input-group-addon">Estado</span><select class="form-control" ng-model="data.producto.estado=data.producto.estado" ng-options="estado.id as estado.estado for estado in data.estados" style="font-size:10px"></select></div>
    <div class="input-group"><span class="input-group-addon">Sub estado</span><select class="form-control" ng-model="data.producto.sub_estado=data.producto.sub_estado" ng-options="sub_estado.id as sub_estado.sub_estado for sub_estado in data.sub_estados" style="font-size:10px"></select></div>
      <div class="input-group"><span class="input-group-addon">Banco</span><select class="form-control" ng-model="data.producto.banco=data.producto.banco" ng-options="banco.cbanco as banco.dbanco for banco in data.bancos" style="font-size:10px"></select></div>
      <div class="input-group"><span class="input-group-addon">Agenda</span><span class="form-control"> {{data.producto.agenda | date:"dd/MM/yyyy"}}</span></div>
    </div>
  </div>
  </div>
</div>
<div ng-controller="gestion" style="width:100%;height:300px;margin-top:10px;font-size:10px;margin-bottom:-100px;padding-top:15px;">

    <table style="width:100%;position:absolute;">
        <tr style="background:white;">
          <td  style="width:10%;padding:5px;">TELEFONO</td>
          <td  style="width:70%;padding:5px;">DESCRIPCION</td>
          <td  style="width:10%;padding:5px;">FECHA</td>
          <td  style="width:10%;padding:5px;">OPERADOR</td>
        </tr>
    </table>
    <div style="width:100%;height:200px;overflow-y:auto;margin-top:25px;border-bottom:1px solid #ccc">
    <table style="width:100%;"> 
        <tr ng-repeat="gestion in data.gestiones" class="filita" style="color:white;">
          <td style="width:10%;padding:5px;border-right:1px solid #aaa;">{{gestion.telefono}}</td>
          <td style="width:70%;padding:5px;border-right:1px solid #aaa;">{{gestion.comentario}}</td>
          <td style="width:10%;padding:5px;border-right:1px solid #aaa;">{{gestion.fecha | date: "dd/MM/yyyy"}}</td>
          <td style="width:10%;padding:5px;border-right:1px solid #aaa;">{{gestion.operador}}</td>
      </tr>
    </table>
  </div>
  
</div>




<div style="width:50%;float:right;background:#eee;margin-top:-510px;height:325px;overflow-y:auto;" id="gestion" ng-controller="gestion" ng-show="data.gestionando==1;">
  <div class="input-group">
    <span class="input-group-addon" style="color:white;background:{{color}};">{{gestion.horas}}:{{gestion.minutos}}:{{gestion.segundos}}</span>
  </div>
  
    <div ng-show="!comenzar_gestion">
        <span class="btn btn-primary form-control" style="font-size:10px;" ng-click="comenzar_gestion=1;hora();gestion= {horas:0,minutos:0,segundos:0};avanzar();" ng-show="data.gestion.banco">Comenzar gestión</span>
    </div>
    <div ng-if="comenzar_gestion" class="gestion" ng-init="gestion.sub_estado = data.productos[0].sub_estado;">
        <div class="input-group">
        <span class="input-group-addon" style="background:{{color}};color:white;">Tipo de gestión</span><select class="form-control"  ng-model="gestion.tipo_gestion" ng-options="tipo as tipo.tipo for tipo in data.tipo_gestion" ng-init="gestion.tipo_gestion=data.tipo_gestion[0]" style="font-size:10px;"></select>
        </div>
        <div class="input-group">
        <span class="input-group-addon" style="background:{{color}};color:white;">Teléfono</span><select class="form-control" id="telefonos" style="font-size:10px;" ng-model="gestion.telefono" ng-options="telefono as telefono.numero for telefono in data.telefonos" ng-change="recorrer();copiar_telefono=gestion.telefono.numero" ng-init="gestion.calificacion.id=0"><option></option></select><span class="copy input-group-addon" data-clipboard-action="copy" data-clipboard-target="#tocopy">Copiar</span><input id="tocopy" type="text" style="position:fixed;top:-300px;" ng-model="copiar_telefono">
        </div>
        <div ng-hide="gestion.telefono.numero"  class="input-group">
        <span class="input-group-addon">Nuevo</span><input class="form-control" ng-model="data.telefono_nuevo.numero" placeholder="Nuevo numero..."><span class="input-group-addon" ng-click="data.agregar_telefono()" ng-hide="data.telefono_nuevo.numero.length < 5 && !data.telefono_nuevo.numero.length">Agregar</span>
        </div>
        <div class="input-group" ng-show="gestion.telefono.numero">
        <span  class="input-group-addon" style="background:{{color}};color:white;">Calificar teléfono</span><select class="form-control" ng-model="gestion.calificacion" ng-options="calificacion as calificacion.titulo for calificacion in data.calificacion_telefonos" ng-show="gestion.calificacion.id!=gestion.telefono.calificacion"  style="font-size:10px;"><option></option></select><select class="form-control" ng-model="gestion.calificacion" ng-options="calificacion as calificacion.titulo for calificacion in data.calificacion_telefonos" ng-hide="gestion.calificacion.id!=gestion.telefono.calificacion"  style="font-size:10px;" disabled ></select>
        </div>
        <textarea class="form-control" rows="3" placeholder="Descripción..." ng-model="gestion.comentario" style="max-width:100%;font-size:10px;"></textarea>
      <div style="font-size:10px;margin-bottom:0px;" class="alert alert-danger" role="alert" ng-show="(!gestion.calificacion || gestion.calificacion==0)">
          La calificacion del telefono es obligatoria. {{banco}}
      </div>
      <div class="input-group">
      </div> 
      <div style="font-size:14px;" class="alert alert-danger" role="alert" ng-show="(gestion.sub_estado.sub_estado=='NEGOCIACION' || gestion.sub_estado.sub_estado=='PROMETE PAGAR' || gestion.sub_estado.sub_estado=='INFORMO PAGO') && !gestion.agenda">
          <strong>¡Atención!</strong> la agenda es obligatoria.
      </div>
      <div class="margen-top">
        <span class="btn btn-primary form-control" ng-click="liquidar()" style="background:{{color}};border:0px;font-size:10px;">Liquidación</span>
      </div>
    <span ng-show="gestion.calificacion || gestion.tipo_gestion.tipo == 'COMENTARIO'" class="btn btn-default form-control"  style="width:100%;font-size:10px;" ng-click="comenzar_gestion=0;registrar();color='#337ab7';">Registrar</span>
    </div>
    <br>
    <div class="input-group" style="width:100%" ng-show="comenzar_gestion!=1">
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;border:1px solid #eea236;color:white;background:#eea236">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Enviar SMS &#x25B4;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;padding:20px;padding-top:75.5px">
          <li>
            <div style="margin-top:-60.5px;">
            <span class="btn input-group-addon" style="background:#eea236;color:white;" ng-click="sms()"  ng-show="enviar.telefono">Enviar SMS</span>
            <span class="btn input-group-addon" style="background:#eea236;color:white;" ng-click="sms()"  ng-show="!enviar.telefono" disabled>Enviar SMS</span>
      <select class="form-control" style="font-size:10px;" ng-model="enviar.telefono" ng-options="telefono as telefono.numero for telefono in data.telefonos" ng-change="enviar.calificacion=enviar.telefono.calificacion"></select> 
      <select class="form-control" ng-model="enviar.calificacion" ng-options="calificacion.id as calificacion.titulo for calificacion in data.calificacion_telefonos" style="font-size:10px;" disabled></select>      
                </div>
          </li>
        </ul>
      </span>
      <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;border:1px solid #4574a9;color:white;background:#4574a9">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">Enviar IVR &#x25B4;</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;padding:20px;padding-top:75.5px">
          <li>
            <div style="margin-top:-60.5px;">
            <span class="btn input-group-addon" style="background:#4574a9;color:white;" ng-click="ivr()"  ng-show="enviar.telefono">Enviar IVR</span><span class="btn input-group-addon" style="background:#4574a9;color:white;" ng-click="ivr()" ng-show="!enviar.telefono" disabled>Enviar IVR</span>
 <select class="form-control" style="font-size:10px;" ng-model="enviar.telefono" ng-options="telefono as telefono.numero for telefono in data.telefonos" ng-change="enviar.calificacion=enviar.telefono.calificacion"></select> 
      <select class="form-control" ng-model="enviar.calificacion" ng-options="calificacion.id as calificacion.titulo for calificacion in data.calificacion_telefonos" style="font-size:10px;" disabled></select>      
                  </div>
          </li>
        </ul>
      </span>
      <span class="btn input-group-addon" style="background:#6a9e60;color:white;font-size:11px;border-color:#6a9e60;" ng-click="mail()" ng-show="data.deudor.email">Enviar Mail</span><span class="btn input-group-addon" style="color:white;background:#6a9e60;border-radius:0px 0px 0px 0px;font-size:11px;border-color:#6a9e60;" ng-hide="data.deudor.email" disabled>Enviar Mail</span>
    </div>
    <span class="input-group-addon dropdown" style="border-radius:0px;height:24px;font-size:11px;border:1px solid #d43f3a;color:white;background:#d43f3a;" ng-show="comenzar_gestion!=1">
        <span class="dropdown-toggle" data-toggle="dropdown" style="font-size:11px;width:100%;height:100%;">ABANDONAR CASO</span>
        <ul class="dropdown-menu dropdown-menu-right dont-go" style="border-radius:0px;padding:20px;padding-top:25.5px">
          <li>
            <div class="input-group">
              <span class="input-group-addon" style="background:#d43f3a;color:white;">Agenda</span><input type="date" class="form-control" ng-model="gestion.agenda"><br>
            </div>
            <div class="input-group">
              <span  class="input-group-addon" style="background:#d43f3a;color:white;">Sub estado</span><select type="text" ng-model="gestion.sub_estado" ng-options="sub_estado.id as sub_estado.sub_estado for sub_estado in data.sub_estados" class="form-control" style="font-size:10px;"></select>
            </div>
            <span class="btn btn-danger form-control" style="font-size:10px;" ng-click="abandonar();data.gestionando=0;" ng-show="(gestion.agenda && gestion.sub_estado) || (gestion.sub_estado!= 2 && gestion.sub_estado!=3 && gestion.sub_estado!=8 && gestion.sub_estado)">ABANDONAR</span>
          </li>
        </ul>
      </span>
    <div ng-hide="(!gestion.sub_estado || gestion.sub_estado.sub_estado=='NEGOCIACION' || gestion.sub_estado.sub_estado=='PROMETE PAGAR' || gestion.sub_estado.sub_estado=='INFORMO PAGO') && !gestion.agenda">
      
    </div>
  </div>
</div>

<script src="/.js/clipboard.min.js"></script>
<script>
$('.dont-go').on({
    "click":function(e){
      e.stopPropagation();
    }
});
</script>
</body>
</html>