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
	<link rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="/.css/signin.css"/>
	<script type="text/javascript" src="/.js/jquery.min.js"></script>
	<script type="text/javascript" src="/.js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/.js/FileSaver.min.js"></script>
	<script type="text/javascript" src="/.js/angular.1.5.min.js"></script>
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
</style>
	<script src="js/app.js"></script>
  <?php echo "<script> var usuario = '$usuario' , operador = '$operador'</script>"; ?>
  </head>

<body ng-app="myApp">
	<div ng-controller="busqueda" class="izquierda input-group">
        <span class="input-group-addon"><a ng-click="deudor()">Deudor</a></span>
        <span class="input-group-addon"><a ng-click="productos()">Productos</a></span>
      </ul>
	</div>
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
    <div ng-show="comenzar_gestion" class="gestion">
		    <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}};">Tipo de gestión</label><select class="btn btn-right input-s"  ng-model="gestion.tipo_gestion" ng-options="tipo as tipo.tipo for tipo in data.tipo_gestion" id="tipo_gestion"></select>
      </div>
        <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Teléfono</label><select class="btn btn-right input-s" id="telefonos" ng-model="gestion.telefono" ng-options="telefono as telefono.numero for telefono in data.telefonos" ng-change="gestion.calificacion=gestion.telefono.calificacion"></select>
        </div>
        <div class="margen-top">
        <label class="btn btn-left boton-s"  style="background:{{color}}">Comentario</label><input type="text" class="btn btn-right input-s" placeholder="Comentario..." ng-model="gestion.comentario"><br>
        </div>
        <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Sub estado</label><select type="text" ng-model="gestion.sub_estado" ng-options="sub_estado as sub_estado.sub_estado for sub_estado in data.sub_estados" class="btn btn-right input-s"></select>
        </div>
        
      <div class="margen-top">
        <label class="btn btn-left boton-s" style="background:{{color}}">Calificar teléfono</label><select class="btn btn-right input-s" ng-model="gestion.calificacion" ng-options="calificacion.id as calificacion.titulo for calificacion in data.calificacion_telefonos" ng-show="gestion.telefono.calificacion==0"></select><select class="btn btn-right input-s" ng-model="gestion.calificacion" ng-options="calificacion.id as calificacion.titulo for calificacion in data.calificacion_telefonos" ng-show="gestion.telefono.calificacion!=0" disabled>
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
    <label class="btn btn-default" ng-hide="(gestion.sub_estado.sub_estado=='NEGOCIACION' || gestion.sub_estado.sub_estado=='PROMETE PAGAR' || gestion.sub_estado.sub_estado=='INFORMO PAGO') && !gestion.agenda" style="width:100%;" ng-click="comenzar_gestion=0;registrar();color='#337ab7';">Registrar</label>
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
      <tr class="table-head"><td colspan="3">{{banco[0].dbanco}} <a href="#" ng-click="data.gestion.banco = banco[0].dbanco; data.gestion.cbanco = banco[0].banco;liquidar()">Liquidar</a> - <a href="#" ng-click="data.descargar_carpeta(banco[0].banco);">Descargar carpeta</a>- <a href="#" ng-click="data.ver_propuesta(banco[0].banco);">Propuesta</a></span>
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
          <li role="presentation"><a ng-click="modificar()" class="accion">Modificar</a></li>
        </ul>
      </div>
    <div ng-show="product=='Carpeta'" class="tabla">
    <div>
        <label class="btn btn-left boton-s">Caratula</label><input class="btn btn-right input-s" ng-model="data.producto.caratula">
    </div>
    <div>
        <label class="btn btn-left boton-s">Comentario</label><input class="btn btn-right input-s" ng-model="data.producto.comentario">
    </div>
    <div>
        <label class="btn btn-left boton-s">Sucursal</label><input class="btn btn-right input-s" ng-model="data.producto.sucursal">
    </div>
    <div>
        <label class="btn btn-left boton-s">Dias adic</label><input class="btn btn-right input-s" ng-model="data.producto.dias_adic">
    </div>
    <div>
        <label class="btn btn-left boton-s">Legajo</label><input class="btn btn-right input-s" ng-model="data.producto.legajo">
    </div>
    <div>
        <label class="btn btn-left boton-s">Número de gestion</label><input class="btn btn-right input-s" ng-model="data.producto.numero_gestion">
    </div>
    <div>
        <label class="btn btn-left boton-s">Número de lote</label><input class="btn btn-right input-s" ng-model="data.producto.numero_lote">
    </div>
    </div>
    <div ng-show="product=='Producto'" class="tabla">
      
    <div>
        <label class="btn btn-left boton-s">Producto</label><input class="btn btn-right input-s" ng-model="data.producto.producto">
    </div>
    <div>
        <label class="btn btn-left boton-s">Nombre de producto</label><input class="btn btn-right input-s" ng-model="data.producto.nombre_producto">
    </div>
      <div>
        <label class="btn btn-left boton-c">Deuda</label><label class="btn btn-center symbol">$</label><input class="btn btn-right input-c" ng-model="data.producto.deuda">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha Deuda</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_deuda">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha Mora</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_mora">
    </div>
      <div>
        <label class="btn btn-left boton-s">Fecha ultimo cobro</label><input type="date" class="btn btn-right input-s" ng-model="data.producto.fecha_ult_cobro">
    </div>
      <div>
        <label class="btn btn-left boton-s">Pase legales</label><input class="btn btn-right input-s" ng-model="data.producto.pase_legales">
    </div>
      <div>
        <label class="btn btn-left boton-s">Estado</label><select class="btn btn-right input-s" ng-model="data.producto.estado" ng-options="estado.id as estado.estado for estado in data.estados"></select>
    </div>
      <div>
        <label class="btn btn-left boton-s">Sub Estado</label><select class="btn btn-right input-s" ng-model="data.producto.sub_estado" ng-options="sub_estado.id as sub_estado.sub_estado for sub_estado in data.sub_estados"></select>
    </div>
      <div>
        <label class="btn btn-left boton-s">Banco</label><select class="btn btn-right input-s" ng-model="data.producto.banco" ng-options="banco.cbanco as banco.dbanco for banco in data.bancos"></select>
    </div>
    </div>
  </div>
	<div ng-controller="deudor" class="deudor derecha">
		<div class="borde-abajo"> 
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a ng-click="deudor='Deudor'">Deudor</a></li>
        <li role="presentation"><a ng-click="deudor='Domicilios'">Domicilios</a></li>
        <li role="presentation"><a ng-click="deudor='Telefonos'">Telefonos</a></li>
        <li role="presentation"><a ng-click="modificar()" class="accion">Modificar</a></li>
        <li role="presentation"><a ng-click="ver_gestion()" class="accion">Gestion</a></li>
        <li role="presentation" ng-show="data.deudor.link"><a target="_blank" href="{{data.deudor.link}}" class="accion">Reporte</a></li>
      </ul>
		</div>
		<div ng-show="deudor=='Deudor'">
      <div>
        <label class="btn btn-left boton-s">Documento</label><input class="btn btn-right input-s" ng-model="data.deudor.documento">
    </div>
      <div>
        <label class="btn btn-left boton-s">Tipo documento</label><input class="btn btn-right input-s" ng-model="data.deudor.tipo_documento">
    </div>
      <div>
        <label class="btn btn-left boton-s">Apellido</label><input class="btn btn-right input-s" ng-model="data.deudor.apellido">
    </div>
    <div>
        <label class="btn btn-left boton-s">Email</label><input class="btn btn-right input-s" ng-model="data.deudor.email">
    </div>
    <div>
        <label class="btn btn-left boton-s">Empresa</label><input class="btn btn-right input-s" ng-model="data.deudor.empresa">
    </div>
    </div>
		<div ng-show="deudor=='Domicilios'" class="tabla">
    <div>
        <label class="btn btn-left boton-s">Direccion laboral 1</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_laboral">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion laboral 2</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_laboral2">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 1</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 2</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular2">
    </div>
    <div>
        <label class="btn btn-left boton-s">Direccion particular 3</label><input class="btn btn-right input-s" ng-model="data.deudor.direccion_particular1">
    </div>
      <div>
        <label class="btn btn-left boton-s">Provincia</label><input class="btn btn-right input-s" ng-model="data.deudor.provincia">
    </div>
      <div>
        <label class="btn btn-left boton-s">Localidad</label><input class="btn btn-right input-s" ng-model="data.deudor.localidad">
    </div>
    <div>
        <label class="btn btn-left boton-s">Codigo Postal</label><input class="btn btn-right input-s" ng-model="data.deudor.codigo_postal">
    </div>
    </div>
		<div ng-show="deudor=='Telefonos'" class="tabla">
      <div class="grupo" style="margin-top:15px;">
        <div class="encabezado">Agregar telefono</div>
        <div class="margen-top">
          <label class="btn btn-left boton-s">Numero</label><input type="number" ng-model="data.telefono_nuevo.numero" placeholder="Nuevo numero..." class="btn btn-right input-s">
        </div>
        <div class="margen-top">
          <label class="btn btn-left boton-s">Comentario</label><input type="text" ng-model="data.telefono_nuevo.comentario" placeholder="Comentario..."  class="btn btn-right input-s">
        </div>
        <div class="margen-top">
          <label class="btn btn-primary btn-down" ng-click="agregar_telefono()">Agregar</label>
        </div>
      </div>
      <div ng-repeat="(n,telefono) in data.telefonos" class="grupo" style="margin-top:20px;">
        <div class="encabezado">Telefono {{n+1}}</div>
        <div class="margen-top">
          <label class="btn btn-center boton-s">Numero</label><input class="btn btn-center input-date-s" ng-model="telefono.numero">
        </div>
        <div class="margen-top">
          <label class="btn btn-center boton-s">Comentario</label><input class="btn btn-left input-date-s" ng-model="data.telefonos[n].comentario">

        </div>
      <div class="margen-top">
        <label class="btn btn-primary btn-down" ng-click="modificar_telefono(n)">Modificar</label>
      </div>
      </div>
    </div>
	</div>
</body>
</html>