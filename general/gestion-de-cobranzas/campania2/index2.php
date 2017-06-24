<?php
session_start();
if(isset($_SESSION['user'])){

}
else{
header("Location: /");
}

echo "<script>var id_usuario = ".$_SESSION["id"].";var operador = ".$_SESSION["id"].";var usuario = '".$_SESSION["user"]."';</script>"
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
  <link rel="stylesheet" href="css/styles.css"/>
	<link href="/.css/signin.css" rel="stylesheet"/>
  <script type="text/javascript" src="/.js/jquery.min.js"></script>
  <script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/.js/FileSaver.min.js"></script>
  <script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
  <script type="text/javascript" src="/.js/angular-filter.min.js"></script>
  <script type="text/javascript" src="/.js/socket.io.js"></script>
  <script type="text/javascript" src="/.js/ngsocket.io.js"></script>
  <script type="text/javascript" src="/.js/tooltip-viewport.js"></script>
  <script src="js/app.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}


</style>
  </head>

  <body>
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
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
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
                  <li><a href="/general/carga/reportes">Datos Enriquecidos</a></li>
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
    <div ng-app="myApp">
	<div class="text-center izquierda" ng-controller="campanias">
    <div class="borde-abajo">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a ng-click="deudor()">Deudor</a></li>
        <li role="presentation"><a ng-click="productos()">Productos</a></li>
        <li role="presentation"><a ng-click="gestion()">Gestión</a></li>

      </ul>
  </div>
      <img src="/.img/loading.gif" ng-hide="campanias">
      <div id="accordion1" class="panel-group">
      
      <div  class="panel panel-default" style="margin-top:-1px;">
        <div class="panel-heading titulo" style="background:white;" data-toggle="collapse" data-parent="#accordion1" href="#collapsecampania" style="cursor:pointer;">
          <div class="panel-title" style="text-align:left;font-size:14px;">
            Tus campañas
          </div>
        </div>
        <div id="collapsecampania" class="panel-collapse collapse">
          <div class="panel-body">
            <div id="accordion" class="panel-group">
            <div  class="panel panel-default" ng-repeat="campania in campanias" style="margin-top:-1px;">
        <div class="panel-heading titulo" style="background:white;" data-toggle="collapse" data-parent="#accordion" href="#collapse{{campania.id_campania}}" style="cursor:pointer;"  ng-click="data.opcion='campania'">
          <div class="panel-title" style="text-align:left;font-size:14px;">
            {{campania.nombre}}
          </div>
        </div>
        <div id="collapse{{campania.id_campania}}" class="panel-collapse collapse">
          <div class="panel-body" ng-click="data.seleccionar(campania.documento,campania.numero_operacion,campania.id_campania);data.id_campania=campania.id_campania;data.numero_operacion=campania.numero_operacion;">
            <table style="font-size:10px;">
              <tr id="campania{{campania.id_campania}}">
                <td style="width:25%;">{{campania.apellido}}</td>
                <td style="width:25%;">{{campania.documento}}</td>
                <td style="width:25%;">{{campania.estado}}</td>
                <td style="width:25%;">{{campania.banco}}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
          </div>
        </div>
      </div>
      <div  class="panel panel-default" style="margin-top:-1px;">
        <div class="panel-heading titulo" style="background:white;" data-toggle="collapse" data-parent="#accordion1" href="#collapseagenda" style="cursor:pointer;" ng-click="data.opcion='agenda'">
          <div class="panel-title" style="text-align:left;font-size:14px;">
            Tu agenda
          </div>
        </div>
        <div id="collapseagenda" class="panel-collapse collapse">
          <div class="panel-body">
            <div id="accordion" class="panel-group">
           <table style="font-size:10px;">
              <tr ng-repeat="agenda in agendas" ng-click="data.seleccionar(agenda.documento, 0, agenda.id)" style="border:1px #ddd solid;cursor:pointer;">
                <td style="width:20%;padding:15px;">{{agenda.apellido}}</td>
                <td style="width:20%;padding:15px;">{{agenda.documento}}</td>
                <td style="width:20%;padding:15px;">{{agenda.estado}}</td>
                <td style="width:20%;padding:15px;">{{agenda.banco}}</td>
                <td style="width:20%;padding:15px;">{{agenda.fecha | date: 'dd/MM/yyyy'}}</td>
              </tr>
            </table>    </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="text-center derecha">

</div>
<div ng-controller="gestion" class="gestion derecha">
    <div class="tabla">
    <div style="width:90%;margin:auto;">
    <div>
    <label class="btn encabezado" style="width:100%;color:white;background:{{color}};">{{gestion.horas}}:{{gestion.minutos}}:{{gestion.segundos}}</label>
    </div>
    <div class="margen-top">
    <label class="btn btn-izquierda boton-s" style="background:{{color}};border-radius:5px 0px 0px 0px;">Deudor</label><label class="btn btn-derecha input-s" style="border:0px;">&nbsp;{{data.deudor.apellido}}</label>
    </div>
    <div>
      <label class="btn btn-izquierda boton-s" style="background:{{color}};border-radius:0px 0px 0px 5px;margin-top:-5px;">Banco</label><label class="btn btn-derecha input-s" style="border:0px;">&nbsp;{{data.gestion.banco}}</label>
    </div>
    <div ng-show="!comenzar_gestion">
        <label class="btn btn-primary btn-down" ng-click="comenzar_gestion=1;hora();gestion= {horas:0,minutos:0,segundos:0};avanzar();" ng-show="data.gestion.banco">Comenzar gestión</label>
    </div>
    <div ng-if="comenzar_gestion" class="gestion" ng-init="gestion.sub_estado = data.productos[0].sub_estado;">
        <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}};">Tipo de gestión</label><select class="btn btn-right input-s"  ng-model="gestion.tipo_gestion" ng-options="tipo as tipo.tipo for tipo in data.tipo_gestion" ng-init="gestion.tipo_gestion=data.tipo_gestion[0]"></select>
      </div>
        <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Teléfono</label><select class="btn btn-center" style="width:35%;text-align:left;" id="telefonos" ng-model="gestion.telefono" ng-options="telefono as telefono.numero for telefono in data.telefonos" ng-change="gestion.calificacion=gestion.telefono.calificacion"><option></option></select><input type="text" class="acopiar" style="position:fixed;left:-500px;" ng-model="gestion.telefono.numero=gestion.telefono.numero"><label class="btn btn-right copiar" style="width:20%" >Copiar</label>
        </div>
        <div ng-hide="gestion.telefono.numero">
        <label class="btn btn-left" style="width:45%;">Nuevo</label><input class="btn btn-center" style="width:35%;text-align:left;" ng-model="data.telefono_nuevo.numero" placeholder="Nuevo numero..."><label class="btn btn-right" style="width:20%" ng-click="data.agregar_telefono()">Agregar</label>
        </div>
        <div class="margen-top">
        <label class="btn encabezado" style="width:100%;color:white;background:{{color}};border-radius:5px 5px 0px 0px;font-size:14px;">Comentario</label><textarea class="form-control" rows="3" placeholder="Comentario..." ng-model="gestion.comentario" style="border-radius:0px 0px 5px 5px;max-width:100%;"></textarea>
        </div>
        <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Sub estado</label><select type="text" ng-model="gestion.sub_estado" ng-options="sub_estado.id as sub_estado.sub_estado for sub_estado in data.sub_estados" class="btn btn-right input-s"></select>
        </div>
      <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Calificar teléfono</label><select class="btn btn-right input-s" ng-model="gestion.calificacion" ng-options="calificacion as calificacion.titulo for calificacion in data.calificacion_telefonos" ng-show="gestion.calificacion.id!=gestion.telefono.calificacion"></select><select class="btn btn-right input-s" ng-model="gestion.calificacion" ng-options="calificacion as calificacion.titulo for calificacion in data.calificacion_telefonos" ng-hide="gestion.calificacion.id!=gestion.telefono.calificacion" disabled>
        </select>
      </div>
      <div style="font-size:14px;" class="alert alert-danger" role="alert" ng-show="(!gestion.calificacion || gestion.calificacion==0)">
          La calificacion del telefono es obligatoria. {{banco}}
      </div>
      <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Agenda</label><input type="date" class="btn btn-right input-date-s" ng-model="gestion.agenda"><br>
      </div> 
      <div style="font-size:14px;" class="alert alert-danger" role="alert" ng-show="(gestion.sub_estado.sub_estado=='NEGOCIACION' || gestion.sub_estado.sub_estado=='PROMETE PAGAR' || gestion.sub_estado.sub_estado=='INFORMO PAGO') && !gestion.agenda">
          <strong>¡Atención!</strong> la agenda es obligatoria.
      </div>
      <div class="margen-top">
        <label class="btn btn-down btn-primary" ng-click="liquidar()" style="background:{{color}};border:0px;">Liquidación</button>
      </div>
    <br>
    <label class="btn btn-default" ng-hide="(!gestion.sub_estado || gestion.sub_estado.sub_estado=='NEGOCIACION' || gestion.sub_estado.sub_estado=='PROMETE PAGAR' || gestion.sub_estado.sub_estado=='INFORMO PAGO') && !gestion.agenda" style="width:100%;" ng-click="comenzar_gestion=0;registrar();color='#337ab7';">Registrar</label>
    </div>
    <br>
    <div  ng-show="data.gestion.banco">
      <label class="btn btn-success" style="border-radius:0px 0px 0px 0px;width:100%;" ng-click="mail()" ng-show="data.deudor.email">Enviar Mail</label><label class="btn btn-success" style="border-radius:0px 0px 0px 0px;width:100%;" ng-hide="data.deudor.email" disabled>Enviar Mail</label>
      <div class="alert alert-danger" ng-hide="data.deudor.email">El deudor no tiene email registrado.</div>
    </div>
    <div ng-show="data.gestion.banco">
      <label class="btn btn-primary" style="border-radius:0px 0px 0px 0px;width:50%;" ng-show="enviar.telefono" ng-click="sms()">Enviar SMS</label><label ng-hide="enviar.telefono" class="btn btn-primary" style="border-radius:0px 0px 0px 0px;width:50%;" disabled>Enviar SMS</label>
      <label class="btn btn-warning" style="border-radius:0px 0px 0px 0px;width:50%;margin-left:-6px;" ng-show="enviar.telefono" ng-click="ivr()">Enviar IVR</label> <label class="btn btn-warning" style="border-radius:0px 0px 0px 0px;width:50%;margin-left:-6px;" ng-hide="enviar.telefono" disabled>Enviar IVR</label>      
    </div>
    <div ng-show="data.gestion.banco">
      <select class="btn btn-default" style="border-radius:0px 0px 0px 5px;width:50%;" ng-model="enviar.telefono" ng-options="telefono as telefono.numero for telefono in data.telefonos" ng-change="enviar.calificacion=enviar.telefono.calificacion"></select> 
      <select class="btn btn-default" ng-model="enviar.calificacion" ng-options="calificacion.id as calificacion.titulo for calificacion in data.calificacion_telefonos" style="border-radius:0px 0px 5px 0px;width:50%;margin-left:-6px;" disabled></select>      
    </div>

  </div>
  </div>
    </div>
  <div ng-controller="productos" class="productos derecha">
    <table class="table table-condensed" ng-repeat="banco in data.productos | groupBy: 'banco'">
      <tr class="table-head"><td colspan="3">{{banco[0].dbanco}} <a href="#" ng-click="gestion();data.gestion.banco = banco[0].dbanco; data.gestion.cbanco = banco[0].banco">Gestionar</a> - <a href="#" ng-click="data.descargar_carpeta(banco[0].banco);">Descargar carpeta</a>- <a href="#" ng-click="data.ver_propuesta(banco[0].banco);">Propuesta</a></span>
    </div>
      <tr ng-repeat="producto in banco" class="table-body producto" ng-click="seleccionar(producto.numero_operacion)" id="{{producto.numero_operacion}}">
        <td>{{producto.producto}}</td>
        <td>${{producto.deuda}}</td>
        <td>{{producto.fecha_deuda | date: "dd/MM/yyyy"}}</td>
      </tr>
    </table>
  </div>
    <div ng-controller="producto" class="derecha product">
      <div class="borde-abajo"> 
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"><a ng-click="product='Carpeta'">Carpeta</a></li>
          <li role="presentation"><a ng-click="product='Producto'">Producto</a></li>
        </ul>
      </div>
    <div ng-show="product=='Carpeta'" class="tabla">
    <div>
        <label class="btn btn-left boton-s">Caratula</label><input class="btn btn-right input-s" ng-model="data.producto.caratula=data.producto.caratula">
    </div>
    <div>
        <label class="btn btn-left boton-s">Comentario</label><input class="btn btn-right input-s" ng-model="data.producto.comentario=data.producto.comentario">
    </div>
    <div>
        <label class="btn btn-left boton-s">Sucursal</label><input class="btn btn-right input-s" ng-model="data.producto.sucursal=data.producto.sucursal">
    </div>
    <div>
        <label class="btn btn-left boton-s">Dias adic</label><input class="btn btn-right input-s" ng-model="data.producto.dias_adic=data.producto.dias_adic">
    </div>
    <div>
        <label class="btn btn-left boton-s">Legajo</label><input class="btn btn-right input-s" ng-model="data.producto.legajo=data.producto.legajo">
    </div>
    <div>
        <label class="btn btn-left boton-s">Número de gestion</label><input class="btn btn-right input-s" ng-model="data.producto.numero_gestion=data.producto.numero_gestion">
    </div>
    <div>
        <label class="btn btn-left boton-s">Número de lote</label><input class="btn btn-right input-s" ng-model="data.producto.numero_lote=data.producto.numero_lote">
    </div>
    </div>
    <div ng-show="product=='Producto'" class="tabla">
      
    <div>
        <label class="btn btn-left boton-s">Producto</label><input class="btn btn-right input-s" ng-model="data.producto.producto=data.producto.producto">
    </div>
    <div>
        <label class="btn btn-left boton-s">Nombre de producto</label><input class="btn btn-right input-s" ng-model="data.producto.nombre_producto=data.producto.nombre_producto">
    </div>
      <div>
        <label class="btn btn-left boton-c">Deuda</label><label class="btn btn-center symbol">$</label><input class="btn btn-right input-c" ng-model="data.producto.deuda=ata.producto.deuda">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha Deuda</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_deuda=data.producto.fecha_deuda">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha Mora</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_mora=data.producto.fecha_mora">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha ultimo cobro</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_ult_cobro=data.producto.fecha_ult_cobro">
    </div>
      <div>
        <label class="btn btn-left boton-s">Pase legales</label><input class="btn btn-right input-s" ng-model="data.producto.pase_legales=data.producto.pase_legales">
    </div>
      <div>
        <label class="btn btn-left boton-s">Estado</label><select class="btn btn-right input-s" ng-model="data.producto.estado=data.producto.estado" ng-options="estado.id as estado.estado for estado in data.estados"></select>
    </div>
      <div>
        <label class="btn btn-left boton-s">Sub Estado</label><select class="btn btn-right input-s" ng-model="data.producto.sub_estado=data.producto.sub_estado" ng-options="sub_estado.id as sub_estado.sub_estado for sub_estado in data.sub_estados"></select>
    </div>
      <div>
        <label class="btn btn-left boton-s">Banco</label><select class="btn btn-right input-s" ng-model="data.producto.banco=data.producto.banco" ng-options="banco.cbanco as banco.dbanco for banco in data.bancos"></select>
    </div>
    </div>
  </div>
  <div ng-controller="deudor" class="deudor derecha">
    <div class="borde-abajo"> 
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a ng-click="deudor='Deudor'">Deudor</a></li>
        <li role="presentation"><a ng-click="deudor='Domicilios'">Domicilios</a></li>
        <li role="presentation"><a ng-click="deudor='Telefonos'">Telefonos</a></li>
        <li role="presentation"><a ng-click="ver_gestion()" class="accion">Gestion</a></li>
        <li role="presentation" ng-show="data.deudor.link"><a target="_blank" href="{{data.deudor.link}}" class="accion">Reporte</a></li>
      </ul>
    </div>
    <div ng-show="deudor=='Deudor'">
      <div>
        <label class="btn btn-left boton-s">Documento</label><input class="btn btn-right input-s" ng-model="data.deudor.documento=data.deudor.documento">
    </div>
      <div>
        <label class="btn btn-left boton-s">Tipo documento</label><input class="btn btn-right input-s" ng-model="data.deudor.tipo_documento=data.deudor.tipo_documento">
    </div>
      <div>
        <label class="btn btn-left boton-s">Apellido</label><input class="btn btn-right input-s" ng-model="data.deudor.apellido=data.deudor.apellido">
    </div>
    <div>
        <label class="btn btn-left boton-s">Email</label><input class="btn btn-right input-s" ng-model="data.deudor.email=data.deudor.email">
    </div>
    <div>
        <label class="btn btn-left boton-s">Empresa</label><input class="btn btn-right input-s" ng-model="data.deudor.empresa=data.deudor.empresa">
    </div>
    </div>
    <div ng-show="deudor=='Domicilios'" class="tabla">
    <div>
        <label class="btn btn-left boton-s">Direccion laboral 1</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_laboral=data.deudor.direccion_laboral">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion laboral 2</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_laboral2=data.deudor.direccion_laboral2">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 1</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular=data.deudor.direccion_particular">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 2</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular2=data.deudor.direccion_particular2">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 3</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular1=data.deudor.direccion_particular1">
    </div>
      <div>
        <label class="btn btn-left boton-s">Provincia</label><input class="btn btn-right input-s" ng-model="data.deudor.provincia=data.deudor.provincia">
    </div>
      <div>
        <label class="btn btn-left boton-s">Localidad</label><input class="btn btn-right input-s" ng-model="data.deudor.localidad=data.deudor.localidad">
    </div>
    <div>
        <label class="btn btn-left boton-s">Codigo Postal</label><input class="btn btn-right input-s" ng-model="data.deudor.codigo_postal=data.deudor.codigo_postal">
    </div>
    </div>
    <div ng-show="deudor=='Telefonos'" class="tabla">
      <div ng-repeat="(n,telefono) in data.telefonos" class="grupo" style="margin-top:20px;">
        <div class="encabezado">Telefono {{n+1}}</div>
        <div class="margen-top">
          <label class="btn btn-center boton-s">Numero</label><input class="btn btn-center input-date-s" ng-model="telefono.numero=telefono.numero">
        </div>
        <div class="margen-top">
          <label class="btn btn-center boton-s">Comentario</label><input class="btn btn-left input-date-s" ng-model="data.telefonos[n].comentario">

        </div>
      <div class="margen-top">
        <label class="btn btn-primary btn-down" ng-click="modificar_telefono(n)">Modificar</label>
      </div>
      </div>

      <div class="grupo" style="margin-top:15px;">
        <div class="encabezado">Agregar telefono</div>
        <div class="margen-top">
          <label class="btn btn-left boton-s">Numero</label><input type="text" ng-model="data.telefono_nuevo.numero" placeholder="Nuevo numero..." class="btn btn-right input-s">
        </div>
        <div class="margen-top">
          <label class="btn btn-left boton-s">Comentario</label><input type="text" ng-model="data.telefono_nuevo.comentario" placeholder="Comentario..."  class="btn btn-right input-s">
        </div>
        <div class="margen-top">
        <label class="btn btn-primary btn-down" ng-click="agregar_telefono()">Agregar</label>
        </div>
      </div>
    </div>
  </div>
    </div>
    <script src="/.js/copy.js"></script>
  </body>
</html>
